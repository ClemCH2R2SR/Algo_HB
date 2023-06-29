<?php

$rayon = readline('Please enter rayon');


$diametre = $rayon * 2;
$perimetre = $diametre * pi();
$surface = pi() * pow($rayon, 2);

echo ("le diametre est $diametre \n");
echo ("le perimetre est $perimetre \n");
echo ("la surface est $surface \n");



#var_dump($diametre);
#var_dump($perimetre);
#var_dump($surface);

?>