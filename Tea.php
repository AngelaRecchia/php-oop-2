<?php
require_once 'Product.php';

class Tea extends Product {
    
    public $grams = 75;
    public $country_origin;
    public $type;

    function __construct($_name, $_priceKg, $_type, $_country_origin) {
        parent::__construct($_name);
        $this->price = $this->getPrice($_priceKg);
        $this->category = "Tea";
        $this->type = $_type;
        $this->country_origin = $_country_origin;
    }

}