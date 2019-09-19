# Authentication

SmartAdmin for PHP comes with a built-in **Authentication** routine that you can use out of the box. The workflow follows standard security guidelines for authenticating secured pages.

To play around with this feature, head over to the [Login](php_auth_example.php) page.

## Login

There are two ways you can authenticate the user, it's via `password` or `access_token`.

### With password

```php
// username and password usually from $_POST
$auth = ['username' => $username, 'password' => $password];

$authenticated = \App\App::web_auth($auth);
if ($authenticated) {
	// redirect to the secured page
	redirect(APP_URL.'/dashboard.php');
} else {
	throw Exception('Invalid username or password');
}
```

If `web_auth` is successful, you most probably want to `redirect` the user to a secured page. From there, you can verify the user if already authenticated.

### With Access Token

If you want to authenticate the user by `access_token`, used in the [REST API](php_api_docs.php#authentication) for example, you need to use the `\App\App::token_auth` method instead.
```php
$user = \App\App::token_auth([
    'username' => USERNAME,
    'access_token' => ACCESS_TOKEN
]);
```

## Secured pages

When someone opens a secure page, you'll have to check if the user is authenticated. Use can do this by requiring `init.auth.php` in the page. This will initiate `$_SESSION` and fill in the `$_user` global variable -- the current logged-in user.

Note that this requires `init.db.php` as well, see [Database Installation](php_db_intro.php#installation) guide.

```php
require_once 'init.php';

// require the db and auth
require_once 'init.db.php';
require_once 'init.auth.php';

// authenticate the page
$app->authenticate_page();
```

The `authenticate_page` method will check if the user is [authenticated](#login). If the page is opened via a browser, it will redirect automatically to the login page if not authenticated. If the request is via `ajax`, it will set the HTTP Status to `403 Forbidden`.