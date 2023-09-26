<?php
include_once '../Repository/CartRepository.php';

class CartService
{
    private $cartRepository;

    public function __construct($cartRepository)
    {
        $this->cartRepository = CartRepository::getInstance();
    }

    public function addProduct($product)
    {
        $product = $this->cartRepository->insert($product);
    }
}