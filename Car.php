<?php
include_once "vehicle.php";

class Car extends Vehicle {

    static $horn = "beep beep";

    public function __construct($brand, $mileage, $horn) {
        parent::__construct($brand, $mileage); 
        $this->horn = $horn;
    }

    static function makeNoise(){
        echo "aaaaaaaaaaaaaa";
    }
    

}           