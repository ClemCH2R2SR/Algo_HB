<?php

function closestInt(float $val, bool $superiorIfMiddle): int{

    $res = 0;

    while ($res < $val){
        $res++;
    }

    $diff = $res - $val;
    $decimalPart = 1 - $diff;

    if($decimalPart === 0.5 && $superiorIfMiddle === true){
        return $res;
    }elseif($decimalPart === 0.5 && $superiorIfMiddle === false){
        return $res - 1;
    }

    if ($decimalPart >= 0.5){
        return $res;
    }else{
        return $res - 1;
    }
}

echo closestInt(47.6, true) . PHP_EOL;
echo closestInt(4.7, true) . PHP_EOL;
echo closestInt(12.3, true) . PHP_EOL;
echo closestInt(7.5, true) . PHP_EOL;
echo closestInt(56.5, false) . PHP_EOL;


?>