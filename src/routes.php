<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');