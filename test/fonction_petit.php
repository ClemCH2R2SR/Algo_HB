<?php

function highlightSmallest(int $number1, int $number2, int $number3): int {
    if (($number1 < $number2)&&($number1 < $number3)){
        return $number1;
    }elseif(($number2 < $number1)&&($number2 < $number3)){
        return $number2;
    }elseif(($number3 < $number1)&&($number3 < $number2)){
        return $number3;
    };

    return highlightSmallest($number1, $number2, $number3);
}
 echo ("le nombre le plus petit est ");
 echo highlightSmallest(15, 19, 3);

?>