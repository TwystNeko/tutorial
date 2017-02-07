<?php declare(strict_types = 1);

$i = new \Auryn\Injector;

$i->alias('Http\Request', 'Http\HttpRequest');
$i->share('Http\HttpRequest');
$i->define('Http\HttpRequest',[
	':get' => $_GET,
	':post' => $_POST,
	':cookies' => $_COOKIE,
	':files' => $_FILES,
	':server' => $_SERVER,
	]);

$i->alias('Http\Response','Http\HttpResponse');
$i->share('Http\HttpResponse');

return $i;

