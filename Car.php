<?php

class Car {

    public $brand;
    private $mileage = 0;

    public function __construct($brand, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage . "\n";
    }

    public function increaseMileage($amount){
        return $this->mileage = $amount;
    }

}           