<?php

$N = readline("Entrer le nombre  :");
$R = 1;
for($i=1;$i<=$N;$i++){
    $R = $R * $i;
}

echo ("La factorielle de $N est $R");


?>
