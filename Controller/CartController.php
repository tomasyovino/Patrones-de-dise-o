<?php
require_once '../Services/CartService.php';

class CartController
{
    private $cartService = new CartService();

    public function addProductToShoppingCart($product)
    {
        $this->cartService->addProduct($product);
    }
}