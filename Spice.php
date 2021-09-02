<?php
require_once 'Product.php';

class Spice extends Product {
    
    public $grams;
    public $country_origin;
    public $spicy_lvl = 0;
    public $type;

    function __construct($_name, $_priceKg, $_type, $_country_origin, $_grams = 50) {
        parent::__construct($_name);
        $this->grams = $_grams;
        $this->price = $this->getPrice($_priceKg);
        $this->category = "Spice";
        $this->type = $_type;
        $this->country_origin = $_country_origin;
    }

}