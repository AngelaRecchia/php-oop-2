<?php

class User {
    protected $id;
    public $name;
    public $surname;
    public $address;
    public $points = 0;
    public $premium = false;

    function __construct($_id, $_name, $_surname, $_address) {
        $this->id = $_id;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
    }

    public function getId() {
        return $this->id;
    }
    
    public function addPoints($_points) {
        $this->points += $_points;
    }
}