<?php
include_once '../Services/ProductService.php';
include_once '../Services/NotificatorService.php';
include_once '../Services/UserService.php';

class ProductController
{
    private $productService = new ProductService();
    private $userService = new UserService();
    private  $notificatorService = new NotificatorService();

    public function addProduct($type, $title, $category, $price, $desc, $stock)
    {
        $this->productService->addProduct($type, $title, $category, $price, $desc, $stock);
        $observers = $this->userService->findObservers();
        $message = "¡Nuevo producto!";
        $this->notificatorService->notify($observers, $message);
        
    }

    public function getProducts()
    {
        return $this->productService->getProducts();
    }
}