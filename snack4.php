<?php
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    $c=0;
    $rands=array();
    while($c<15){
        $temp=rand(1,100);
        if(!in_array($temp, $rands)){
            $c++;
            $rands[]=$temp;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>
    <h1>Numbers:</h1>
    <?php 
        foreach ($rands as &$value) {
            echo $value . "  ";
        }
    ?>
</body>
</html>