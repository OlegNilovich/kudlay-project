<?php // Маршрутизатор

require_once CONFIG . '/routes.php';

$requestPath = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if (array_key_exists($requestPath, $routes)) {
    
    $controllerPath = CONTROLLERS . "/{$routes[$requestPath]}";

    if (file_exists($controllerPath)) {
        require $controllerPath;
    } else {
        abort();
    }
} else {
    abort();
}

