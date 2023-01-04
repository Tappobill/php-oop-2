<?php

include_once __DIR__ . '/category.php';

class Product
{
    public $name;
    public $price;
    public $image;
    public $is_available;    
    public $category;


    public function __construct(String $name, Float $price, String $image, Bool $is_available, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->is_available = $is_available;
        $this->image = $image;
        $this->category = $category;
    }
}
?>