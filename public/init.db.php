<?php

// if you're planning to use the php-models class, you can put code below to the init.php file so this gets intiated globally
// connect the Model to the database
try {
	\Models\Model::connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_PORT);
} catch (Exception $ex) {
	include_once '_database.php';
	exit;
}

\Models\Model::$db->on_error(function($msg) {
	plog($msg);
});

// configure models
\Models\User::register('company');
\Models\User::register('users');
\Models\AccessToken::register('access_tokens');
\Models\Session::register('sessions');
\Models\APIRequest::register('api_requests');