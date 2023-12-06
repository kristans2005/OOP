<pre>
<?php

include_once "vehicle.php";

class Train extends Vehicle {

    public $track;

    
    function __construct($brand, $track, $mileage)
    {
        parent::__construct($brand, $mileage);
        $this->track = $track;
    }

    static function makeNoise(){
        echo "aaaaaaaaaaaaaa";
    }
    

    

}