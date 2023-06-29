<?php

$A = readline("Entrer le nombre a :");
$B = readline("Entrer le nombre b :");
$C = readline("Entrer le nombre c :");

$delta = pow($B, 2) - (4 * $A * $C);

$X0 = -$B / (2*$A);

$X1 = (-$B-sqrt($delta))/(2*$A);
$X2 =(-$B+sqrt($delta))/(2*$A);



if ($delta < 0){
    echo ("Il n'y  à pas de solution");
}elseif($delta == 0){
    echo ("La solution est X0 = $X0");
}elseif($delta > 0){
    echo ("Les solutions sont : \n X1= $X1 \n X2= $X2");
};


?>