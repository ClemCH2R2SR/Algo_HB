<?php

$number1 = readline("Entrer le nombre 1 :");
$number2 = readline("Entrer le nombre 2 :");
$number3 = readline("Entrer le nombre 3 :");


if (($number1 < $number2)&&($number1 < $number3)){
    echo ("$number1 est le nombre le plus petit des 3");
}elseif(($number2 < $number1)&&($number2 < $number3)){
    echo ("$number2 est le nombre le plus petit des 3");
}elseif(($number3 < $number1)&&($number3 < $number2)){
    echo ("$number3 est le nombre le plus petit des 3");
};

?>