<?php
require_once "../Controller/UserController.php";

$routes = [
    '/register' => ['controller' => 'UserController', 'action' => 'register'],
    '/logIn' => ['controller' => 'UserController', 'action' => 'logIn'],
    '/add-observer' => ['controller' => 'UserController', 'action' => 'addObserver'],
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