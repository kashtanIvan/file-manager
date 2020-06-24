<?php
include_once('helpers.php');
include_once('autoload.php');

$routes = [
    '/' => 'MainController/index',
    '/test' => 'MainController/test'
    ];

RouterLite::addRoute($routes);


RouterLite::dispatch();
