<?php
require_once "../Controller/ProductController.php";

$routes = [
    '/products' => ['controller' => 'ProductController', 'action' => 'getProducts'],
    '/add-product' => ['controller' => 'ProductController', 'action' => 'addProduct'],
    '/update-product' => ['controller' => 'ProductController', 'action' => 'updateProduct'],
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