<?php
    //Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
</head>
<body>
    <pre>
        <?php
            $postValues=array_values($posts);
            $postKeys=array_keys($posts);
            for($i=0;$i<count($postKeys);$i++){
                echo "<h4>". "post on data:" . $postKeys[$i] . "</h4>";
                for($PIndex=0 ; $PIndex<count($postValues[$i]) ; $PIndex++){
                    echo "<h5>" . "Title: " . $postValues[$i][$PIndex]['title'] . "</h4>";
                    echo "<p>" . "Author: " . $postValues[$i][$PIndex]['author'] . "</p>";
                    echo "<p>" . "Text: " . $postValues[$i][$PIndex]['text'] . "</p>";
                }
            }
        ?>
    </pre>
</body>
</html>