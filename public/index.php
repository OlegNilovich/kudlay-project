<?php // Фронт контроллер

require dirname(__DIR__) . '/config/config.php';
require_once CORE . '/funcs.php';
require CORE . '/classes/Db.php';

$db_config = require CONFIG . '/db.php';

$db = Db::getInstance()->getConnection($db_config);

require_once CORE . '/router.php';

// Hello