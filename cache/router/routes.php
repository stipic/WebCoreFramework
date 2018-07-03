<?php
/**
 * Slim annotations router routes cache file, self generated on 2018-07-03T23:53:54+02:00
 */

$this->map(['GET','POST'], '/t/{template_name}', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\DevController', 'previewAction', $args); })->setName('previewAction');
$this->map(['GET','POST'], '/dev/sitemap', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\DevController', 'sitemapAction', $args); })->setName('sitemapAction');
$this->map(['GET','POST'], '/', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\HomeController', 'indexAction', $args); })->setName('indexAction');
$this->map(['GET','POST'], '/login', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\AuthController', 'loginAction', $args); })->setName('loginAction');
$this->map(['GET','POST'], '/register', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\AuthController', 'registerAction', $args); })->setName('registerAction');
$this->map(['GET','POST'], '/reset-password', function($request, $response, $args) { return $this->triggerControllerAction('App\Controllers\AuthController', 'resetPasswordAction', $args); })->setName('resetPasswordAction');
