<?php

$str = 'I\'m sorry Dave I\'m afraid I can\'t
do that';

$i = 0;

while (isset($str[$i])){
    if ( $str[$i] == 'a' ||$str[$i]  == 'e' || $str[$i]  == 'i' ||$str[$i] == 'o' ||$str[$i]  == 'u'||$str[$i]  == 'y'||
    $str[$i] == 'A' ||$str[$i]  == 'E' || $str[$i]  == 'I' ||$str[$i] == 'O' ||$str[$i]  == 'U'||$str[$i]  == 'Y' ){
        echo $str[$i];
    }
    
    $i = $i + 1 ;
}


    

?>