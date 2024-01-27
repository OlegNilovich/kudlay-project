<?php // Фронт контроллер

use myfrm\Db;
use myfrm\Router;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require_once CORE . '/funcs.php';

// require CORE . '/classes/Db.php';

$db_config = require CONFIG . '/db.php';
$db = Db::getInstance()->getConnection($db_config);

$router = new Router();
require CONFIG . '/routes.php';
$router->match();

// require_once CORE . '/router.php';
