<?php // Пагинация тест

$per_page = 10;
$data = range(1, 101); // Массив цифр, которые мы будем распределять по страницам
$total = count($data);
$pages_count = ceil($total / $per_page);
$curent_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($curent_page < 1) {
	$curent_page = 1;
	// abort(404);
}

if ($curent_page > $pages_count) {
	$curent_page = $pages_count;
	// abort(404);
}

// С какого поста начинать выборку
$start = ($curent_page - 1) * $per_page;

var_dump(array_slice($data, $start, $per_page));

for ($i = 1; $i <= $pages_count; $i++) {
	echo "<a href='?page={$i}'>{$i}</a> ";
}
