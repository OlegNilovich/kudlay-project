<?php // Старый маршрутизатор

require_once CONFIG . '/routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if (array_key_exists($uri, $routes)) {

    $controllerPath = CONTROLLERS . "/{$routes[$uri]}";

    if (file_exists($controllerPath)) {
        require $controllerPath;
    } else {
        abort();
    }
} else {
    abort();
}
