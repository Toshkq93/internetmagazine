<?php

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/core');
define("CONF", ROOT . '/config');
define("CACHE", ROOT . '/tmp/cache');
define("LAYOUT", 'layout');


$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = rtrim($app_path, '/');
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');
require_once ROOT . '/vendor/autoload.php';