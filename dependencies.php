<?php
defined('APP') OR exit('No direct script access allowed');

$container = $app->getContainer();

$container['router'] = function() use($app) {
	return new \Ergy\Slim\Annotations\Router($app, 
		APP . '/' . APP_DIRECTORY . '/' . CONTROLLER_DIRECTORY,
		APP . '/' . CACHE_DIRECTORY . '/' . ROUTER_CACHE_DIRECTORY
	);
};

$container['_db'] = function() use($config)
{
	$pdoConnection = new \PDO('mysql:dbname='.$config['db']['db'].';host='.$config['db']['host'].';charset='.$config['db']['charset'], $config['db']['username'], $config['db']['password']);
	$dbConnection = new PDODb($pdoConnection);
	return $dbConnection;
};

$container['_memcache'] = function() use($config)
{
	if(class_exists('Memcache'))
	{
		$memcache = new Memcache();
		$memcache->connect($config['memcache']['host'], $config['memcache']['port']) or die ("Could not connect");
		return $memcache;
	}
};

$container['_twig'] = function($container) use($config)
{
	$view = new \Slim\Views\Twig($config['twig']['templates'], $config['twig'][$config['env']]);
	
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
	$view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
	$view->addExtension(new \App\Twig\TwigFilters($container));
	$view->addExtension(new \App\Twig\TwigFunctions($container));
	return $view;
};

$container['_webcore'] = function($container) use($config)
{
	return new \Lib\WebCore($container, $config);
};