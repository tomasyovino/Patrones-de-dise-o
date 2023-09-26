<?php
include_once '../Services/ProductService.php';

class ProductController
{
    private $productService = new ProductService();

    public function addProduct($title, $category, $price, $desc, $stock)
    {
        $this->productService->addProduct($title, $category, $price, $desc, $stock);
    }

    public function getProducts()
    {
        return $this->productService->getProducts();
    }
}