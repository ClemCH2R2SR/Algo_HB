<?php

$n1 = 0;
$n2 = 0;
$n = 1;

$input = readline("Entrer le nombre  de n de fibo :");

for ($i=0; $i<$input; $i++){

    $n1 = $n2;
    $n2 = $n;
    $n = $n1+$n2;

    echo("$n1 + $n2 = $n \n");
}

?>