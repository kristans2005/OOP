<?php


class Dog {
    private $age;
    public $color = "white";

    public function __construct($age, $color){
        $this->age = $age;
        $this->color = $color;
    }

    public function __destruct() {
        echo $this->color . "dog is dead \n";
    }
    

}

class Cat {
    public $color;
    public $age;
}