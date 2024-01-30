<?php

$title = 'My Blog :: Home';

$db = \myfrm\App::get(\myfrm\Db::class);

// Пользуемся сервис-контейнером
$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->findAll();

// Пользуемся функцией хеплером db()
$recent_posts = db()->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/index.tpl.php';
