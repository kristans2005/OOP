<?php


class Dog {
    public $name;
    private $age;
    public $color;

    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function birthDay() {
        return $this->age += 1;
    }

    static function woof() {
        echo "woof";
    }

    public function __destruct() {
        echo $this->color . "dog is dead \n";
    }

}

class Cat {
    public $color;
    public $age;
}