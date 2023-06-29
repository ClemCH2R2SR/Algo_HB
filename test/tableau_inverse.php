<?php


$n = readline("Entrer les n valeurs du tableau à retourner : ");

function fillArray (int $n){

    $array = [];

    for($i = 1; $i <= $n; $i++){
        $array[] = $i;
    }
    return $array;
}

function reverseArray($array){
    $reverse = [];
    $n = count($array);
    $index = $n;
    for($i=$n; $i > 0; $i--){
        $index--;
        $reverse[$index] = $array[$i-1];
    }
    return $reverse;
}


$array = fillArray($n);
var_dump($array);

$reverseArray = reverseArray($array);
var_dump($reverseArray);


?>