<?php

use Aura\Router\RouteCollection as RouteC;

$router->attach('API', '/v1', function (RouteC $api) {
    $api->attach('Raffle', '/raffles', function (RouteC $r) {
        $r->addValues(['controller' => 'Raffle']);

        $r->addPost('Create', '');
        $r->addDelete('Delete', '/{id}');
        $r->addGet('Get', '/{id}');
        $r->addPut('Update', '/{id}');
    });
});
