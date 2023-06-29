<?php

$array = [1,2,3,4,5,6,7,8,9];
$element = ("INSERTION");
$index = 4;

function insertion($array, $index, $element){

    $tabSize = count($array);
    $newArray = [];

    for($i = 0; $i < $index; $i++){
        $newArray[$i] = $array[$i];
    }
    $newArray[$index] = $element;

    for($i = $index+1; $i <= $tabSize; $i++){
    $newArray[$i] = $array[$i - 1];
    }

    return $newArray;
}


var_dump($array);
$newArray = insertion($array, $index, $element);
var_dump($newArray);

?>