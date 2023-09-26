<?php
include_once '../../Model/Product/MobilePhone.php';
include_once '../../Model/Product/Televisor.php';
include_once '../../Model/Product/Laptop.php';

class ProductFactory
{
    public static function create($type, $title, $category, $price, $desc, $stock)
    {
        switch ($type) {
            case 'mobile':
                return new MobilePhone($title, $category, $price, $desc, $stock);
            case 'televisor':
                return new Televisor($title, $category, $price, $desc, $stock);
            case 'laptop':
                return new Laptop($title, $category, $price, $desc, $stock);
            default:
                throw new InvalidArgumentException("Invalid product type: $type");
        }
    }

    public static function findAll()
    {
        $mobileProducts = []; // Database query
        $televisorProducts = []; // Database query
        $laptopProducts = []; // Database query

        $allProducts = array_merge($mobileProducts, $televisorProducts, $laptopProducts);
        return $allProducts;
    }
}