<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'Ecf2023GarageKarineP');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'user_vparrot');
define('DB_PWD', '8LHCh4f7yY4s7w');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\SiteController@index');
$router->get('/voiture/:id', 'App\Controllers\SiteController@show');

$router->get('/admin/cars', 'App\Controllers\Admin\CarController@index');
$router->post('/admin/cars/delete/:id', 'App\Controllers\Admin\CarController@destroy');
$router->get('/admin/cars/edit/:id','App\Controllers\Admin\CarController@edit');
$router->post('/admin/cars/edit/:id','App\Controllers\Admin\CarController@update');

try {
    $router->run(); 
}catch(NotFoundException $e) {
    return $e->error404();
}