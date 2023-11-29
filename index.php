
<pre>
<?php

include "Dog.php";
include "Car.php";
include "tire.php";

// $myDog = new Dog(43, "doug");
// $myDog2 = new Dog(12, "dougJR");


// $myDog->color = "black";
// echo $myDog2->color;

// $catAge = 10;

// $cat = array();
// for($i = 0 ; $i < 10 ; $i++){
//     $cat[$i] = new Cat;
//     $cat[$i]->age = $catAge;
//     $catAge += 10;
// }

// print_r($cat);



// $Car1 = new Car("auber", 23);
// $Car2 = new Car("omor", 0);
// $Car2->increaseMileage(240);

$tire = new tire("big", "monsterTruck", "prefect");

print_r($tire);

// print_r($Car1);
// print_r($Car2);
