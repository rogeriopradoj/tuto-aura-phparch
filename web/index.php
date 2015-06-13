<?php
require __DIR__ . '/../vendor/autoload.php';

$router = (new \Aura\Router\RouterFactory)->newInstance();
require __DIR__ . '/../bootstrap/routes.php';

$route = $router->match(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
    $_SERVER
);

if (!$route) {
    print("No route!");
} else {
    print_r($route->params);
}
