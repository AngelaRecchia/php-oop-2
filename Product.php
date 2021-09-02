<?php
class Product {
    public $name;
    public $price;
    public $category;
    public $img;
    public $in_basket = false;
    public $available = true;

    function __construct($_name, $_price) {
        $this->name = $_name;
        $this->price = $_price;
    }
}