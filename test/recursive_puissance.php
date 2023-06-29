<?php

function puissance(int $x, int $n){
    if($n == 0){
        return 1;
    }else{
        return $x * puissance($x, $n-1);
    }
}

echo puissance(5,0) . PHP_EOL;
echo puissance(5,1) . PHP_EOL;
echo puissance(5,2) . PHP_EOL;
echo puissance(5,3) . PHP_EOL;
echo puissance(5,4) . PHP_EOL;
echo puissance(5,5) . PHP_EOL;
echo puissance(5,6) . PHP_EOL;
echo puissance(5,7) . PHP_EOL;


?>