<?php

const ITALIQUE = 1;
const SOULIGNE = 2;
const  GRAS = 3;

function writeMark(string $text, int $style){

    if($style == ITALIQUE){
        echo("<em> $text </em>");

    }elseif($style ==  SOULIGNE){
        echo("<u> $text </u>");

    }elseif($style == GRAS){
        echo("<strong> $text </strong>");
    }
}


echo(writeMark("blablabla", ITALIQUE)) . PHP_EOL;
echo(writeMark("blablabla", SOULIGNE)) . PHP_EOL;
echo(writeMark("blablabla", GRAS)) . PHP_EOL;
?>