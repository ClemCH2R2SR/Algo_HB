<?php

$jour = readline("Entrer le jour du mois :");
$mois= readline("Entrer le mois :");


if($mois == 3 &&  $jour >= 21||$mois == 4 || $mois == 5||$mois == 6 && $jour < 21){
    echo ("Nous sommes au Printemps");


}elseif($mois == 6 &&  $jour >= 21||$mois == 7 || $mois == 8||$mois == 9 && $jour < 21){
    echo ("Nous sommes en Eté");


}elseif($mois == 9 &&  $jour >= 21||$mois == 10 || $mois == 11||$mois == 12 && $jour < 21){
    echo ("Nous sommes en Automne");


}elseif($mois == 9 &&  $jour >= 21||$mois == 1 || $mois == 2||$mois == 3 && $jour < 21){
    echo ("Nous sommes en Hiver");


};
?>