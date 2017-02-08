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
$i->alias('App\Template\Renderer', 'App\Template\TwigRenderer');

$i->define('App\Page\FilePageReader', [
	':pageFolder' => __DIR__ . '/../pages',
	]);
$i->alias('App\Page\PageReader', 'App\Page\FilePageReader');
$i->share('App\Page\FilePageReader');

$i->delegate('Twig_Environment', function () use ($i) {
	$loader = new Twig_Loader_Filesystem(dirname(__DIR__). '/templates');
	$twig = new Twig_Environment($loader);
	return $twig;
});


return $i;

