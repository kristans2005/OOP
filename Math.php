<?php

class Math{

    static function addTwo($a, $b){
        return $a + $b;
    }
    static function facturial($a){
        $factorial = 1;
        for($i = 1 ; $i <= $a ; ++$i){
            $factorial *= $i;
        }
        return($factorial);
    }
    static function sum($array){
        return(array_sum($array));
    }
    
    static function avreg($array){
        $res = 0;
        for($i = 0 ; $i < count($array) ; $i++){
            $res += $array[$i];
        }
        return($res /= 2);
    }
    static function max($array){
        $max = 0;
        for($i = 0 ; $i < count($array) ; $i++){
            if($array[$i] > $max){
                $max = $array[$i];
            }
        }
        return($max);
    }

}