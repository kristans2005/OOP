<?php


abstract class Vehicle {

public $brand;
    protected $mileage;

    function __construct($brand, $mileage)
    {
        $this->brand = $brand;
        $this->mileage - $mileage;
    }

    function mileageAmount($amount){
        return $this->mileage += $amount;
    }

    function __destruct()
    {
        return $this->brand . " is dead at mileage " . $this->mileage;
    }

    abstract static function makeNoise();

}
