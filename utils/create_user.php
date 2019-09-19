<?php

chdir(__DIR__);
require_once '../public/init.php';
require_once '../public/init.db.php';

$config = [
	'username,u:',
	'password,p:',
	'email,e::',
	'firstname,f::',
	'lastname,l::'
];

$options = \Common\Util::get_options($config, $exception);
if ($options) {
	$user = \App\App::add_user($options);
	if ($user) plog('OK #'.$user->id);
	else plog('FAIL');

} else {
	plog($exception);
}


?>