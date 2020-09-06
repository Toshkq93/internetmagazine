<?php

use Buki\Router;

$router = new Router([
    'paths' => [
        'controllers' => '../app/Controllers',
    ],
    'namespaces' => [
        'controllers' => 'app\Controllers',
    ]
]);

$router->get('', 'MainController@index');

$router->post('/login', 'UserController@login');

$router->error(function () {
    include WWW . '/error/404.html';
});

if (!empty($_SESSION['user']['is_admin']) && preg_match('#/admin/?.*#', $_SERVER['REQUEST_URI'])) {

}


$router->run();
