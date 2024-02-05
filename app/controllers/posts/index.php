<?php

$title = 'My Blog :: Home';

/** @var \myfrm\Db $db */

$db = \myfrm\App::get(\myfrm\Db::class);

$per_page = 3;
$total = $db->query("SELECT COUNT(*) FROM posts")->getColumn();
$pages_count = ceil($total / $per_page);
$curent_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($curent_page < 1) {
	$curent_page = 1;
}
if ($curent_page > $pages_count) {
	$curent_page = $pages_count;
}
$start = ($curent_page - 1) * $per_page;

// Пользуемся сервис-контейнером
$posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $start, $per_page")->findAll();

// Пользуемся функцией хеплером db()
$recent_posts = db()->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/index.tpl.php';
