<?php

$n = readline("Entrer les n clés/valeurs du tableau à retourner : ");
$sum = 0;

function fillArray (int $n){

    $array = [];

    for($i = 1; $i <= $n; $i++){
        $array[] = $i;
    }
    return $array;
}


function sum($array){
    $sumValue = 0;
    foreach( $array as $value){
        $sumValue = $sumValue + $value;
    }
    return $sumValue;
}





$array = fillArray($n);
$sum = sum($array);

echo ("la somme des valeurs du tableau est $sum");

?>