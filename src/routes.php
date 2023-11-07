<?php

use Ductong\BaseMvc\Controllers\UserController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');