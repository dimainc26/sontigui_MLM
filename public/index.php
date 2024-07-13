<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$apiDispatcher = require __DIR__ . '/../routes/api.php';

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uri = rawurldecode(parse_url($uri, PHP_URL_PATH));

$apiRouteInfo = $apiDispatcher->dispatch($httpMethod, $uri);

switch ($apiRouteInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo json_encode(['error' => '404 Not Found']);
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $apiRouteInfo[1];
        http_response_code(405);
        echo json_encode(['error' => '405 Method Not Allowed']);
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $apiRouteInfo[1];
        $vars = $apiRouteInfo[2];
        [$class, $method] = $handler;
        $controller = new $class;
        echo call_user_func_array([$controller, $method], $vars);
        break;
}
