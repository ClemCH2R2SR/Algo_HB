<?php

function somme_chiffres(int $n){

    $reste = 0;
    $sommeRestes = 0;
    $float = 0;
    $resultat = 0;
    $entier = $n;

    do{
    $reste = $entier % 10;
    $sommeRestes = $sommeRestes + $reste;
    $float = $reste / 10;
    $resultat = $entier /10;
    $entier = $resultat - $float;

    }while($reste > 0 && $entier > 0);
    return $sommeRestes;
}


//CORRECTION


// function somme_chiffres_loop(int $n)
// {
//   $somme = 0;

//   while ($n > 0) {
//     $dernierChiffre = $n % 10; // 126, dernier chiffre : 6
//     $somme = $somme + $dernierChiffre; // Accumulation dans la somme

//     $n = ($n - $dernierChiffre) / 10; // 12
//   }

//   return $somme;
// }


echo(somme_chiffres(4565)) . PHP_EOL;
echo(somme_chiffres(65483)) . PHP_EOL;
echo(somme_chiffres(656)) . PHP_EOL;
echo(somme_chiffres(987351321648)) . PHP_EOL;
?>