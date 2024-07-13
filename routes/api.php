<?php

use App\Controllers\ApiController;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function(RouteCollector $r) {
    $r->addRoute('GET', '/api/start', [ApiController::class, 'start']);
});
