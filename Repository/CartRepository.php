<?php
include_once '../Model/Cart.php';

class CartRepository
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function insert($product)
    {
        return new Cart();
    }
}