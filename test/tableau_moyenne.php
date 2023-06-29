<?php

$n = readline("Entrer les n clés/valeurs du tableau à retourner : ");
$sum = 0;
$average = 0;

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

function average($array, $sum){
    foreach($array as $number){
        $number++;
    }
    $resultat= $number/$sum;
    return $resultat;
}





$array = fillArray($n);
$sum = sum($array);
$average = average($array, $sum);

var_dump($array) . PHP_EOL;
echo("la somme des chiffres dutableaux est $sum") . PHP_EOL;
echo("la moyenne des chiffres du tableaux est $average") . PHP_EOL;

?>