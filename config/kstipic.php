<?php
defined('APP') OR exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config['base_url'] = 'http://local.project.lan';

$config['db'] = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'db' => '',
	'port' => 3306,
	'prefix' => '',
	'charset' => 'utf8'
);
