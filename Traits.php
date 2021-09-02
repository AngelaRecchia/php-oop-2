<?php 
trait Price {
    public function getPrice($_priceKg) {
        return round($_priceKg * ($this->grams / 1000) / 0.05) * 0.05;
    }
}
