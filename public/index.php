<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'i07wudo6armrb5ho');
define('DB_HOST', 'lcpbq9az4jklobvq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER', 'pe4whqzwvi48pquh');
define('DB_PWD', 'ueeivfa45e4o6u4b');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\SiteController@index');
$router->get('/voiture/:id', 'App\Controllers\SiteController@show');

$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');

$router->get('/admin/cars', 'App\Controllers\Admin\CarController@index');
$router->get('/admin/cars/create', 'App\Controllers\Admin\CarController@create');
$router->post('/admin/cars/create', 'App\Controllers\Admin\CarController@createCar');
$router->post('/admin/cars/delete/:id', 'App\Controllers\Admin\CarController@destroy');
$router->get('/admin/cars/edit/:id','App\Controllers\Admin\CarController@edit');
$router->post('/admin/cars/edit/:id','App\Controllers\Admin\CarController@update');

try {
    $router->run(); 
}catch(NotFoundException $e) {
    return $e->error404();
}