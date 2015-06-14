<?php
require __DIR__ . '/../vendor/autoload.php';

$router = (new \Aura\Router\RouterFactory)->newInstance();
require __DIR__ . '/../bootstrap/routes.php';

function cleanURL($request_uri)
{
    $path = rtrim(parse_url($request_uri, PHP_URL_PATH), '/');
    if (strpos($path, '.') === false) {
        return $path;
    }
    return substr($path, 0, strrpos($path, '.'));
}

$route = $router->match(
    cleanURL($_SERVER['REQUEST_URI']),
    $_SERVER
);

if (!$route) {
    print("No route!");
} else {
    print_r($route->params);
}
