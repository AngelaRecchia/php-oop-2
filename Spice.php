<?php

class Spice {
    public $name;
    public $price;
    public $quantity = 50;
    public $category;
    public $country_origin;
    public $spicy_lvl;
    public $in_basket = false;
    public $available = true;
    public $img;

    function __construct($_name, $_price, $_country_origin) {
        $this->name = $_name;
        $this->price = $_price;
        $this->country_origin = $_country_origin;
    }

}