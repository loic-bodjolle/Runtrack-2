
<?php

$vp_entier = '15';
$vp_flottant = '1.5';
$vp_chainesdecaracteres = 'Loïc';
$vp_booleen = 'vrai / faux';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0"> 
    <link rel="stylesheet" href="../Job03/index.css"> 
</head>
<body>


 <table>
    <tr>
       <th>type</th>
       <th>Nom</th>
       <th>valeur</th>
    </tr>

      <tr>
      <td>entier</td>
       <td>vp_entier</td>
       <td><?php echo $vp_entier ; ?> </td>
      </tr>

      <tr>
        <td>flottant</td>
        <td>$vp_flottant</td>
        <td><?php echo $vp_flottant ; ?></td>
      </tr>

      <tr>
      <td>chaines de caractères </td>
       <td>vp_chainesdecaracteres </td>
       <td><?php echo $vp_chainesdecaracteres ; ?> </td>
      </tr>

      <tr>
      <td>booléen</td>
       <td>vp_booleen</td>
       <td><?php echo $vp_booleen ; ?> </td>
      </tr>

      



    </table>



</body>
</html>