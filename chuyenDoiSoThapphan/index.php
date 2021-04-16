<?php
include_once 'Stack.php';

function convertToBinary($number){
    $stack = new Stack(10);
    while($number != 0){
        $mod = $number%2;
        $stack->add($mod);
        $number = floor($number/2);

    }
//    echo '<pre>';
//    print_r($stack);
    while(!$stack->isEmpty()){
        echo $stack->getElement();
    }
}

convertToBinary(66);
