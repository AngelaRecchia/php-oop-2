<?php

class CreditCard {
    public $expiry;
    public $number;

    function __construct($_number, $_expiry){
        if (strlen($_number) != 16) {
            throw new Exception("This is not a valid credit card");
        } else {
            $this->number = $_number;
        }
        
        var_dump(DateTime::CreateFromFormat('Y-m', $_expiry));
        if (DateTime::CreateFromFormat('Y-m', $_expiry) > date('Y-m')){
            throw new Exception("The credit card is expired");
        } else {
            $this->expiry = DateTime::CreateFromFormat('Y-m', $_expiry);
        }

    }
}