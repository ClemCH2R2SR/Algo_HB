<?php


$string = readline("Rentrer le mot à retourner : ");

function reverseString($string){
    $tabLength = strlen($string);
    $newString = "";
    $index = 0;

    for($i = $tabLength-1; $i >= 0; $i--){

        $newString[$index] =$string[$i];
        $index++;
    }

    return $newString;
}


$newString = reverseString($string);

echo ("$newString");




?>