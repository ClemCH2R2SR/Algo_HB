<?php

$N = readline("Entrer le nombre  :");
$R = 1;
$i = 1;

while($i <= $N){
    $R = $R * $i;
    $i = $i + 1;
}

echo ("La factorielle de $N est $R");

?>
