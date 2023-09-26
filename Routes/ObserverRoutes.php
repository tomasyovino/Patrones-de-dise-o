<?php
require_once "../Controller/ObserverController.php";

$routes = [
    '/add-observer' => ['controller' => 'NotificatorController', 'action' => 'addObserver'],
    '/notify' => ['controller' => 'NotificatorController', 'action' => 'notify'],
];

$requestUri = $_REQUEST('REQUEST_URI');

if (array_key_exists($requestUri, $routes)) {
    $route = $routes[$requestUri];
    $controllerName = $route['controller'];
    $actionName = $route['action'];

    $controller = new $controllerName;
    $controller->$actionName();
} else {
    http_response_code(404);
    echo "Página no encontrada";
}