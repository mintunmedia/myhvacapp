<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';

$_title = 'Login - SmartAdmin v4.0.3';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
';

// Here's a comment!

// default demo user
$user = \Models\User::instance(1);
$demo_password = 'smartadmin2019';

const LOGIN_LOCK_TIMEOUT = 60; // 1m

if ($app->is_authenticated()) {
    redirect(APP_URL.'/php_auth_page.php?src=login');
}

$username = $user->username ?? null;
$exception = null;
$r = get('r');

if (is_post()) {
    try {
        \App\Content::verify_post();

        if (isset($_SESSION['login_lock_timeout']) && time() < $_SESSION['login_lock_timeout']) {
            $remaining_time = ($_SESSION['login_lock_timeout'] - time()) / 60;
            throw new Exception('Please try again after '.round($remaining_time).' minutes.');
        }

        $result = \App\App::web_auth($_POST);
        if ($result) {
            unset($_SESSION['login_attempts']);
            unset($_SESSION['login_lock_timeout']);

            // redirect to a secured page
            redirect($r ?: APP_URL.'/php_auth_page.php');
        } else {
            $exception = 'Invalid username or password';
            if (empty($_SESSION['login_attempts'])) {
                $_SESSION['login_attempts'] = 0;
            }
            $_SESSION['login_attempts']++;

            if ($_SESSION['login_attempts'] >= 5) {
                $_SESSION['login_lock_timeout'] = time() + LOGIN_LOCK_TIMEOUT;
            }
        }
    } catch (Exception $ex) {
        $exception = $ex->getMessage();
    }

    $username = get('username', $_POST);
}

?>
<!DOCTYPE html>
<!--
Template Name:: SmartAdmin PHP 7 Responsive WebApp - Template built with Bootstrap 4 and PHP 7
Version: 4.0.3
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body>
        <div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">SmartAdmin for PHP</span>
                                </a>
                            </div>
                            <a href="<?= APP_URL ?>/php_auth_docs.php" class="btn-link text-white ml-auto">
                                Documentation
                            </a>
                        </div>
                    </div>
                    <div class="flex-1" style="background: url(<?= ASSETS_URL ?>/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <?php if ($user) : ?>
                                <?= $_ui->print_primary('
							<p>The default demo password for <strong>'.$user->username.'</strong> is:<br><span class="text-danger">'.$demo_password.'</span></p>
							<p>Run the command below to change passwords:</p>
							<pre class="m-0"><code class="bg-primary text-white d-block">php '.ROOT_PATH.'/utils/set_password.php --username=<em class="text-warning">'.$username.'</em> --password=<em class="text-warning">NEW_PASSWORD</em></code></pre>') ?>
                            <?php else : ?>
                                <?= $_ui->print_primary('The default user is not found in your database. Follow the <a href="'.APP_URL.'/info_app_docs.php#database">Database installation</a> guide to get started.') ?>
                            <?php endif ?>
                            <div class="row">
                                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                                        The simplest UI toolkit for developers &amp; programmers
                                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                            Presenting you with the next level of innovative UX design and engineering. The most modular toolkit available with over 600+ layout permutations. Experience the simplicity of SmartAdmin, everywhere you go!
                                        </small>
                                    </h2>
                                    <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                                    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                            Find us on social media
                                        </div>
                                        <div class="d-flex flex-row opacity-70">
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-google-plus-square"></i>
                                            </a>
                                            <a href="#" class="mr-2 fs-xxl text-white">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                        Secure login
                                    </h1>
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <form id="js-login" novalidate="" action="<?= APP_URL ?>/php_auth_login.php<?= $r ? '?r='.urlencode($r) : '' ?>" method="post">
                                            <?= App\Content::print_post_token(APP_URL.'/php_auth_login.php'.($r ? '?r='.urlencode($r) : '')) ?>
                                            <?= $exception ? $_ui->print_danger($exception) : null ?>
                                            <div class="form-group">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="your id or email" value="<?= $username ?>" required>
                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                <div class="help-block">Your unique username to app</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password" value="" required>
                                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                <div class="help-block">Your password</div>
                                            </div>
                                            <div class="form-group text-left">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                                    <label class="custom-control-label" for="remember"> Remember me</label>
                                                </div>
                                            </div>
                                            <button id="js-login-btn" type="submit" class="btn btn-primary btn-block btn-lg">Secure login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2019 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-white opacity-40 fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>
    </body>
</html>
