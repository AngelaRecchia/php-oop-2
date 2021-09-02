<?php
class Product {
    public $name;
    public $price;
    public $category;
    public $img;
    public $in_basket = false;
    public $available = true;

    function __construct($_name) {
        $this->name = $_name;
    }

    public function addToBasket() {
        $this->in_basket = true;
    }
}