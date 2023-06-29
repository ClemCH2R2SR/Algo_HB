<?php

$n = readline("Entrer les n clés/valeurs du tableau à retourner");

function fillArray (int $n){

    $array = [];

    for($i = 1; $i <= $n; $i++){
        $array[] = $i;
    }
    return $array;
}

$show = fillArray($n);

var_dump ($show);


?>