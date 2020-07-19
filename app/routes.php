<?php

use CoffeeCode\Router\Router;

$router = new Router("http://localhost:8000");

$router->namespace("app\Controllers");

$router->group(null);
$router->get("/home", "PainelController:home");
$router->get("/painel", "PainelController:painel");
// Route::controller('/home', 'app\Controllers\PainelController');
// Route::controller('/painel', 'app\Controllers\PainelController');

$router->dispatch();