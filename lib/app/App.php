<?php

namespace App;
use \Common\Util;
use \Models\Model;

class App {
    private $_session = null;

    const PLATFORM_WEB = 1;
    const PLATFORM_API = 2;

    const LOGIN_ERROR_INACTIVITY = 1;

    const INACTIVITY_TIMEOUT = 0;

    public function web_logout() {
        if ($this->_session) {
            $this->_session->destroy();
            $this->_session = null;
        }

        return true;
    }

    public function authenticate_page($login_page = APP_URL.'/login') {
        $user = $this->get_authenticated_user();
        if ($user) {
            // calculate inactivity
            $time = time();
            $active_at = strtotime($this->_session->active_at);

            if (self::INACTIVITY_TIMEOUT && ($time - $active_at) >= self::INACTIVITY_TIMEOUT) {
                $this->web_logout();

                if (Util::is_ajax() || Util::is_pjax()) {
                    Util::set_status(403);
                    Util::encode_result(['message' => 'You were inactive for more than 20 minutes. Refresh the page and login again.']);
                    exit;
                } else {
                    redirect($login_page.'?r='.urlencode(SERVER_REQUEST).'&error='.self::LOGIN_ERROR_INACTIVITY);
                }

            }

            // set activity
            return $this->_session->ping();

        } else {
            if (Util::is_ajax() || Util::is_pjax()) {
                Util::set_status(403);
                exit;
            } else {
                redirect($login_page.'?r='.urlencode(SERVER_REQUEST));
            }
        }
    }

    public static function add_user($data) {
        if (!Util::verify_fields(['username', 'email'], $data, $missing)) {
            throw new \Exception('Missing fields: '.Util::implode_and($missing));
        }

        $username = get('username', $data);
        $password = get('password', $data);
        if (!$password) $password = token(6);

        $valid_username = \User::validate_username($username, $message);
        if ($valid_username) {
            $email = get('email', $data);

            $valid_email = \User::validate_email($email, $message);
            if ($valid_email) {
                $user = \User::insert([
                    'username' => $username,
                    'email' => $email,
                    'firstname' => get('firstname', $data),
                    'lastname' => get('lastname', $data)
                ]);

                if ($user) {
                    $user->set_password($password);
                    return $user;
                } else {
                    $message = 'Failed to add user';
                }
            }
        }

        throw new \Exception($message);
    }

    public function is_authenticated() {
        return $this->_session ? true : false;
    }

    public function get_session() {
        return $this->_session;
    }

    public function get_authenticated_user() {
        return $this->is_authenticated() ? $this->_session->get_user() : false;
    }

    public static function log_api($token, $data) {
        $token = \Models\AccessToken::instance('token', $token);
        if (!$token) {
            throw new \Exception('Invalid access token');
        }

        return \Models\APIRequest::insert([
            'token_id' => $token->id,
            'path' => get('path', $data, '/'),
            'latency' => get('latency', $data, 0),
            'ip' => get('ip', $data) ?: Util::get_client_ip(),
            'method' => get('method', $data),
            'status' => get('status', $data),
            'user_agent' => get('user_agent', $data),
            'body' => get('body', $data)
        ]);
    }

    /**
     * API authenticate with api key & secret key
     * @param  array       $data   api key & secret key
     * @param  string|null &$exception error string
     * @return boolean              authenticated
     */
    public static function token_auth($data) {
        if (!Util::verify_fields(['username', 'access_token'], $data)) {
            throw new \Exception('missing credentials');
        }

        $username = get('username', $data);
        $access_token = get('access_token', $data);

        $user = \Models\User::with_username($username);
        if ($user && $user->validate_access_token($access_token)) {
            return $user;
        }

        throw new \Exception('invalid access token');
    }

    /**
     * Web authenticate with username and password
     * @param  array       $data          username & password
     * @return boolean                     is authenticated
     */
    public static function web_auth($data) {
        if (!Util::verify_fields(['username', 'password'], $data)) {
            throw new \Exception('Missing username or password fields');
        }

        $username = $data['username'];
        $password = $data['password'];

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $user = \Models\User::with_email($username);
        } else {
            $user = \Models\User::with_username($username);
        }

        if ($user && $user->verify_password($password)) {
            return $user->create_web_session(self::PLATFORM_WEB, get('remember', $data) ? true : false);
        }

        return false;
    }

    /**
     * Initialize web session ($_SESSION)
     * @return boolean is authenticated
     */
    public function init_web_session() {
        $session = null;

        session_start();

        if (isset($_SESSION[AUTH_TOKEN_SESSION_NAME])) {
            $token = $_SESSION[AUTH_TOKEN_SESSION_NAME];
            $session = \Models\Session::with_token($token);
        } else if (isset($_COOKIE[AUTH_COOKIE_NAME])) {
            $cookie = $_COOKIE[AUTH_COOKIE_NAME];
            $session = \Models\Session::with_cookie($cookie);
        }

        if ($session) {
            $session->touch();
            $this->_session = $session;
        } return false;
    }

    public static function get_company() {
        $data = [
            'name' => APP_OWNER_NAME,
            'phone' => APP_OWNER_PHONE,
            'fax' => APP_OWNER_FAX,
            'email' => APP_OWNER_EMAIL,
            'address' => APP_OWNER_ADDRESS,
            'logo' => APP_OWNER_LOGO
        ];

        return $data;
    }

    public static function instance() {
        return new self();
    }

    public static function error_400($message = null) {
        self::include_error(400, $message);
    }

    public static function error_404($message = null) {
        self::include_error(404, $message);
    }

    public static function error_403($message = null) {
        self::include_error(403, $message);
    }

    public static function include_error($code, $message = '') {
        if (!Util::is_pjax() && !Util::is_ajax()) {
            include_once self::get_include($code);
        } else {
            Util::set_status($code);
            if ($message) Util::encode_result(is_string($message) ? ['message' => $message] : $message);
        }
    }

    public static function get_include($path) {
        $path = Util::in_string('.php', $path) ? $path : $path.'.php';
        return INCLUDES_PATH.'/'.$path;
    }

    public static function get_ajax_partial($path) {
        $path = Util::in_string('.php', $path) ? $path : $path.'.php';
        $path = str_replace('/', DS, $path);
        return APP_PATH.DS.'ajax'.DS.$path;
    }

    public static function get_users($filters = [], $binds = [], $get_count = false, $pagination = null) {
        $filters_str = \Models\Model::create_filter($filters, $binds);

        $query = "
            FROM users
            WHERE active = 1
                $filters_str
        ";

        if ($get_count) {
            $result = \Models\Model::$db->query_row("
                SELECT COUNT(id) AS total
                $query
            ", $binds);

            return $result ? $result->total : 0;
        }

        return \Models\User::query("
            SELECT users.*
            $query
            $pagination
        ", $binds);
    }
}