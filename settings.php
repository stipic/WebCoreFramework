<?php
defined('APP') OR exit('No direct script access allowed');

$config['displayErrorDetails'] = TRUE;
$config['addContentLengthHeader'] = FALSE;
$config['activity_log'] = TRUE;
$config['determineRouteBeforeAppMiddleware'] = TRUE;
$config['project_name'] = 'Projecto';
$config['base_url'] = 'http://local.projecto.lan';
$config['email'] = array(
	'default_to' => 'kiki.stipic@gmail.com',
	'default_from' => 'web@projecto.com'
);

$config['env_hostnames'] = array(
	DEVELOPMENT_ENV => array(
		'kstipic'
	),

	STAGING_ENV => array(
	),

	PRODUCTION_ENV => array(

	)
);

$config['twig'] = array(
	'templates' => APP . DIRECTORY_SEPARATOR . APP_VIEW_DIRECTORY,
	DEVELOPMENT_ENV => array(
		'cache' => FALSE
	),
	STAGING_ENV => array(
		'cache' => FALSE
	),
	PRODUCTION_ENV => array(
		'cache' => APP . '/' . CACHE_DIRECTORY . '/' . TEMPLATE_CACHE_DIRECTORY
	)
);

$config['db'] = array(
	'host' => 'localhost',
	'username' => '',
	'password' => '',
	'db' => '',
	'port' => 3306,
	'prefix' => '',
	'charset' => 'utf8'
);

$config['memcache'] = array(
	'host' => 'localhost',
	'port' => '11211'
);