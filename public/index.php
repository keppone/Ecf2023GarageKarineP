<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

echo "hello world";
