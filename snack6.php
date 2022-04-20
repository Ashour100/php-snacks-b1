<?php

// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Snack 6</title>
</head>
<body>
    <?php
        for($i=0;$i<count($db['teachers']);$i++){
            echo '<button type="button" class="btn btn-secondary">' . $db['teachers'][$i]['name'] . " " . $db['teachers'][$i]['lastname'] . "</button><br>";
        }
        for($i=0;$i<count($db['pm']);$i++){
            echo '<button type="button" class="btn btn-success">' . $db['pm'][$i]['name'] . " " . $db['pm'][$i]['lastname'] . "</button><br>";
        }
    ?>
</body>
</html>