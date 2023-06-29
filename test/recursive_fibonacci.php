<?php


function fibonacci(int $n){
    if($n == 0){
        return 0;
    }if($n == 1){
        return 1;
    }
        return (fibonacci($n-1)+fibonacci($n-2));
}

echo(fibonacci(1)) . PHP_EOL;
echo(fibonacci(2)) . PHP_EOL;
echo(fibonacci(3)) . PHP_EOL;
echo(fibonacci(4)) . PHP_EOL;
echo(fibonacci(5)) . PHP_EOL;
echo(fibonacci(6)) . PHP_EOL;
echo(fibonacci(7)) . PHP_EOL;
echo(fibonacci(8)) . PHP_EOL;
echo(fibonacci(9)) . PHP_EOL;
echo(fibonacci(10)) . PHP_EOL;
echo(fibonacci(11)) . PHP_EOL;
echo(fibonacci(12)) . PHP_EOL;
echo(fibonacci(13)) . PHP_EOL;
echo(fibonacci(14)) . PHP_EOL;
echo(fibonacci(15)) . PHP_EOL;
?>