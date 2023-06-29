<?php

function factor(int $f){
    if ($f == 1){
        return 1;
    } else {
        return $f * factor($f - 1);
    }
}

echo(factor(1)) .PHP_EOL;
echo(factor(2)) .PHP_EOL;
echo(factor(3)) .PHP_EOL;
echo(factor(4)) .PHP_EOL;
echo(factor(5)) .PHP_EOL;
echo(factor(6)) .PHP_EOL;
echo(factor(7)) .PHP_EOL;
echo(factor(8)) .PHP_EOL;
echo(factor(9)) .PHP_EOL;
echo(factor(10)) .PHP_EOL;
echo(factor(11)) .PHP_EOL;
?>