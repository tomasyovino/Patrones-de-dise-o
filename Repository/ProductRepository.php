<?php
include_once './Factory/ProductFactory.php';

class ProductRepository
{
    private static $instance = null;
    private $factory;
    private function __construct()
    {
        $this->factory = new ProductFactory();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function create($type, $title, $category, $price, $desc, $stock)
    {
        $product = $this->factory->create($type, $title, $category, $price, $desc, $stock);
        return $product;
    }

    public function findAll()
    {
        $products = $this->factory->findAll();
        return $products;
    }
}