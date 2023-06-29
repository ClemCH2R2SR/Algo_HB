<?php

$n = readline("Combien d'étage doit faire l'arbre ?");
$tree = 1;

do{
    for($i = $n; $i != 0; $i--){
        echo(" ");
    }
    for($i = 1; $i < 2*$tree; $i++){
        echo("*");
    }
    for($i = $n; $i != 0; $i--){
        echo(" ");
    }

    $n--;
    $tree++;
    echo("\n");


}while($n > 0)

?>