<?php

$N = 0;
$guess = rand(1, 100);

while($N != $guess){
    $N = readline("Deviner le nombre entre 1 et 100 : ");
    if($N < $guess){
        echo("nombre plus grand \n");
    }elseif($N > $guess){
        echo("nombre plus petit \n");
    }
}

echo("Congratulation, you shoot the $guess");

?>