<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\SiteController@index');
$router->get('/posts/:id', 'App\Controllers\SiteController@show');

$router->run(); 
