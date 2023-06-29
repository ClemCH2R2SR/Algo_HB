<?php

function burstNumber(int $n,){
if($n < 10){
    return $n;
}
$dernierChiffre = $n % 10;
return $dernierChiffre + burstNumber(($n - $dernierChiffre)/10);
}

echo(burstNumber(134646)) .PHP_EOL;
echo(burstNumber(68768435)) .PHP_EOL;
echo(burstNumber(8974654515)) .PHP_EOL;
echo(burstNumber(31976)) .PHP_EOL;
echo(burstNumber(164)) .PHP_EOL;

?>