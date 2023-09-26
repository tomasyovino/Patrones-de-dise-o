<?php
class Product
{
    private $title;
    private $category;
    private $price;
    private $desc;
    private $stock;

    public function __construct($title, $category, $price, $desc, $stock)
    {
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->desc = $desc;
        $this->stock = $stock;
    }
}