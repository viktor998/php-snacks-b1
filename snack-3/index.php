<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>


<?php

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





$key =(array_keys($posts));
#var_dump(count($posts[$key[1]]));

?> <div class="container"> <?php 
for ($i=0; $i < count($posts); $i++) { ?>

    <span> <?= $key[$i] . '<br>' ?> </span>
    <?php
    for ($j=0; $j < count($posts[$key[$i]]); $j++) { ?>

        <div class="post">
        
            <div class="profile_sender">
                <img src="https://via.placeholder.com/30" alt="Placeholder">
                <div class="text">
                    <h3><?= $posts[$key[$i]][$j]['author']?></h3>
                    <?= $posts[$key[$i]][$j]['title']?>
                </div>
            </div>

            <div class="picture">
                
            </div>
            
            <h4> <?= $posts[$key[$i]][$j]['text']  ?> </h4>
        </div>
        <?php
    }
    ?>

    
    <?php
}


?>
</div>
    
</body>
</html>