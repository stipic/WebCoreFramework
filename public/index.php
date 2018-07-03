<?php
/**
 *
 * =============[ PROJECTO Specialized Framework ]=============
 *
 *	██╗    ██╗███████╗██████╗  ██████╗ ██████╗ ██████╗ ███████╗
 *	██║    ██║██╔════╝██╔══██╗██╔════╝██╔═══██╗██╔══██╗██╔════╝
 *	██║ █╗ ██║█████╗  ██████╔╝██║     ██║   ██║██████╔╝█████╗  
 *	██║███╗██║██╔══╝  ██╔══██╗██║     ██║   ██║██╔══██╗██╔══╝  
 *	╚███╔███╔╝███████╗██████╔╝╚██████╗╚██████╔╝██║  ██║███████╗
 *	 ╚══╝╚══╝ ╚══════╝╚═════╝  ╚═════╝ ╚═════╝ ╚═╝  ╚═╝╚══════╝
 *
 *	==============[ Symfony 4 Customized By K.S ]==============
 * 
 */

if(!defined('PHP_MAJOR_VERSION') || PHP_MAJOR_VERSION < 7) {
	// TODO baci exception koji otvara maintaince stranicu s error code-om
	die('!@#$%& PHP 7+');
	exit;
}

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

define('APP', dirname(__DIR__));
require APP . DIRECTORY_SEPARATOR . 'constants.php';
require APP . DIRECTORY_SEPARATOR . 'settings.php';
require APP . DIRECTORY_SEPARATOR . COMPOSER_DIRECTORY . DIRECTORY_SEPARATOR . 'autoload.php';

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$whoami = gethostname();
foreach($config['env_hostnames'] as $env => $computers) 
{
	if(in_array($whoami, $computers)) 
	{
		$config['env'] = $env;
		$personal_config_path = APP . DIRECTORY_SEPARATOR . PERSONAL_CONFIG_DIRECTORY . DIRECTORY_SEPARATOR . $whoami . '.php';
		include $personal_config_path;
		break;
	}
}

if(!isset($config['env'])) 
{
	// TODO baci exception koji otvara maintaince stranicu s error code-om
	die('Nema podešeni environment, baci na maintance page');
	exit;
}

$app = new \Slim\App(array("settings" => $config));
require APP . DIRECTORY_SEPARATOR . 'dependencies.php';

$app->run();