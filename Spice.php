<?php
require_once 'Product.php';

class Spice extends Product {
    
    public $grams = 50;
    public $country_origin;
    public $spicy_lvl;
    public $type;

    function __construct($_name, $_priceKg, $_type, $_country_origin) {
        parent::__construct($_name);
        $this->price = $this->getPrice($_priceKg);
        $this->category = "Spice";
        $this->type = $_type;
        $this->country_origin = $_country_origin;
    }

}