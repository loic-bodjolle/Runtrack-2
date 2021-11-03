<?php

$x = 1;

while ($x <= 100) {
    if (! ($x % 3) && ! ($x % 5 )) {
        echo "fizzbuzz <br>";
    }

    elseif (!($x %  5 )) {
        echo "buzz<br>";
    }

    elseif (!($x % 3)) {
        echo " fizz<br>";
    }

    else {
        echo"$x<br>";
    }



    $x = $x +1 ;
}





?>