<?php
$MIN = 1;
$MAX = 100;

$input = 0;

$try = readline ("Rentrer nombre d'essais Max : ");
$guess = random_int($MIN, $MAX);
$cpt = $try;
$FinalTry;

do{
    $input = readline("Deviner nombre entre $MIN et $MAX : ");
    $cpt --;
    if($input < $guess){
        echo("plus grand \n");
    }if($input > $guess){
        echo("plus petit \n");
    }

    echo("Miss, Try Again, left $cpt try \n");

}while( $cpt > 0 && $input != $guess );


if($input == $guess){
    $FinalTry = $try - $cpt;
    echo("Congratulation, you shoot the $guess in $FinalTry try !");
}else{
    echo("YOU LOSE DUMB MAN");
}

?>