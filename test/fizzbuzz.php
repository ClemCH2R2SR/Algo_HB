<?php

$N=0;

for($i=0; $i<100; $i ++){
    $N=$N+1;
    if ($N % 3 == 0) {
        echo("fizz");
    }
    if($N % 5 == 0){
        echo("buzz");
    }
    if($N % 3 != 0 && $N % 5 != 0){
        echo("$N");
    }
    echo(",");
}

?>