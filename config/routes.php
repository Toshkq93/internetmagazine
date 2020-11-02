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

$router->get('contacts', 'ContactController@index');

$router->get('', 'MainController@index');

$router->post('login', 'UserController@login');
//$router->get('signup', 'UserController@signup');
$router->get('registr', 'UserController@signup');
$router->post('register', 'UserController@register');
$router->get('logout', 'UserController@logout');

$router->get('product/:slug', 'ProductController@index');

$router->get('currency','CurrencyController@change');

$router->get('cart/add', 'CartController@add');
$router->get('cart/show', 'CartController@show');
$router->get('cart/delete', 'CartController@delete');
$router->get('cart/clear', 'CartController@clear');
$router->get('/cart','CartController@index');

$router->post('order/save', 'OrderController@save');

$router->get('search', 'SearchController@index');

$router->get('/category/:slug', 'CategoryController@index');

$router->error(function () {
    include WWW . '/error/404.html';
});

$router->group('admin', function ($r) {
    if (!empty($_SESSION['user']['is_admin']) && preg_match('#/admin/?.*#', $_SERVER['REQUEST_URI'])) {
        \core\View::$layout = 'admin';

        $r->get('', 'admin\MainController@index');

        $r->get('orders', 'admin\OrderController@index');
        $r->get('order/delete', 'admin\OrderController@delete');
        $r->get('order/view', 'admin\OrderController@view');
    }
});

$router->run();
