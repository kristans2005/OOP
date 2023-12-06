
<pre>
<?php

include "Dog.php";
include "Car.php";
include "tire.php";
include "train.php";

// $myDog = new Dog("reksis", 43, "white");
// $myDog2 = new Dog("dougJR", 12, "black");

// print_r($myDog);

// $myDog->color = "black";


// $catAge = 10;

// $cat = array();
// for($i = 0 ; $i < 10 ; $i++){
//     $cat[$i] = new Cat;
//     $cat[$i]->age = $catAge;
//     $catAge += 10;
// }

// print_r($cat);



// $Car1 = new Car("auber", 23, 0);
// $Car2 = new Car("omor", 0, 0);

// // $tire = new tire("big", "monsterTruck", "prefect");

// // print_r($tire);

// // $train1 = new Train("python", "small", 21);


// print_r($Car1);
// print_r($Car2);


include "Math.php";

$result1 = Math::facturial(5);
$result2 = Math::sum([1, 1, 1, 2]);
$result3 = Math::avreg([3, 1, 1, 2]);
$result4 = Math::max([3, 1, 20, 2]);


print_r($result4);


