<?php

$tableauchiffres = [200, 204, 173, 98, 171, 404, 459];
var_dump($tableauchiffres) ;

$i = 0;
while ($i<6 ) {
   
    if ($i % 2 == 1){
        echo "$i est impaire <br>";
    }

    else {
        echo "$tableauchiffres[$i]est paire <br>";
    }
    $i = $i +1 ;
}


?>