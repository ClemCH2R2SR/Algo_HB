<?php

$n = readline("Entrer les n clés/valeurs du tableau à retourner : ");
$sum = 0;
$average = 0;
$max = 0;

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

function maxtab($array){
    $maxtab = $array[0];
    $size = count($array);
    for($i=1; $i<$size; $i++){
        if($array[$i] > $maxtab){
            $maxtab = $array[$i];
        }
    }
    return $maxtab;
}





$array = fillArray($n);
$sum = sum($array);
$average = average($array, $sum);
$max = maxtab($array);

var_dump($array) . PHP_EOL;
echo("la somme des chiffres du tableaux est $sum") . PHP_EOL;
echo("la moyenne des chiffres du tableaux est $average") . PHP_EOL;
echo("la valeur max du tableau est $max");

?>