<?php
include_once '../Repository/ProductRepository.php';

class ProductService
{
    private $productRepository;

    public function __construct($productRepository)
    {
        $this->productRepository = ProductRepository::getInstance();
    }

    public function addProduct($title, $category, $price, $desc, $stock)
    {
        $product = $this->productRepository->create($title, $category, $price, $desc, $stock);
    }

    public function getProducts()
    {
        $products = $this->productRepository->findAll();
        return $products;
    }
}