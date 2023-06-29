<?php
$MIN = 1;

$level = readline("Entrer un niveau de difficulté de 1 à 5 : ");

	$MAX = (10*pow(10,$level-1));
	$try = 10 +(1*$level);

$input = 0;

$extreme = readline("Rentrer 0 pour passer et 1 pour activer le niveau de difficulté en extreme : ");
$guess = random_int($MIN, $MAX);
$cpt = $try;
$FinalTry;

if($extreme == 1){
    $try = - 3;
}else{
    $try*1;
}

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


if($input == $guess && $extreme == 1){
    $FinalTry = -1 *(-$cpt);
    echo("Congratulation, you shoot the $guess in $FinalTry try ! in level of difficulty $level in Extreme Mode");
}elseif($input == $guess && $extreme == 0){
        $FinalTry = -1 *(-$cpt);
        echo("Congratulation, you shoot the $guess in $FinalTry try ! in level of difficulty $level  in Normal Mode");
}else{
    echo("YOU LOSE DUMB MAN");
}

?>