<?php

var_dump($_GET);

$i = 0 ;

foreach ( $_GET as $value ){
    if ( $value != ''){
        $i = $i + 1 ;
    }
   
}

echo $i ;
    





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name= "nom">
        <input type="text" name= "prenom">
        <input type="submit" value="valider">



    </form>
    
</body>
</html>