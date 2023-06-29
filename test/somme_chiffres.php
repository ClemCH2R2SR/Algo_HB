<?php




$n = readline("Entrer le nombre à décomposer : ");

$reste = 0;
$sommeRestes = 0;
$float = 0;
$resultat = 0;
$entier = $n;

do{

    $reste = $entier % 10; //donne le reste
    $sommeRestes = $sommeRestes + $reste; // stocke les restes
    $float = $reste / 10; // calcule le float à enlever de la division par 10
    $resultat = $entier / 10; //divise par 10
    $entier= $resultat - $float; // enleve le float du resultat de la division

}while($reste > 0 && $entier > 0);


echo("la somme des chiffres du nombre $n est $sommeRestes");



?>