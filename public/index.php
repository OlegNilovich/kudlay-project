<?php // Фронт контроллер

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require_once __DIR__ . '/bootstrap.php';
require_once CORE . '/funcs.php';

$router = new \myfrm\Router();
require CONFIG . '/routes.php';
$router->match();
