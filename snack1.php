<?php
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */
    $array=[
        [
            "HomeT" => "The Kings",
            "AwayT" => "Iconic",
            "HomeP" => "53",
            "AwayP" => "36",
        ],
        [
            "HomeT" => "Bulletproof",
            "AwayT" => "Lightning Legends",
            "HomeP" => "105",
            "AwayP" => "99",
        ],
        [
            "HomeT" => "Ninja Bros",
            "AwayT" => "Dominatrix",
            "HomeP" => "85",
            "AwayP" => "70",
        ],
        [
            "HomeT" => "Unstoppable Force",
            "AwayT" => "The Squad",
            "HomeP" => "95",
            "AwayP" => "52",
        ],
        [
            "HomeT" => "Big Shots",
            "AwayT" => "The Elite Team",
            "HomeP" => "98",
            "AwayP" => "99",
        ],
    ];
    
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
    <pre>
        <?php 
        // var_dump($array); 
        for($i=0;$i<4;$i++){
            echo $array[$i]["HomeT"] . "-" . $array[$i]["AwayT"] . "/" . $array[$i]["HomeP"] . "-" . $array[$i]["AwayP"] . "<br>";
        }
        ?>
    </pre>
</body>
</html>