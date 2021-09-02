<?php
require_once 'Product.php';

class Spice extends Product {
    public $quantity = 50;
    public $country_origin;
    public $spicy_lvl;

    function __construct($_name, $_price, $_country_origin) {
        parent::__construct($_name, $_price);
        $this->category = "Spice";
        $this->country_origin = $_country_origin;
    }

}