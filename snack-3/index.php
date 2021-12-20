<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Alberto Ciufici',
            'text' => 'Testo post 6'
        ]
    ],
];
//var_dump($posts);

for ($i = 0; $i < count($posts); $i++){
  echo "<h2>{$posts['10/01/2019'][$i]['title']}</h2> 
        <p><em>{$posts['10/01/2019'][$i]['author']}</em></p> 
        <h3>{$posts['10/01/2019'][$i]['text']}</h3>";
  echo "<h2>{$posts['10/02/2019'][$i]['title']}</h2> 
        <p><em>{$posts['10/02/2019'][$i]['author']}</em></p> 
        <h3>{$posts['10/02/2019'][$i]['text']}</h3>";
  echo "<h2>{$posts['15/05/2019'][$i]['title']}</h2> 
        <p><em>{$posts['15/05/2019'][$i]['author']}</em></p> 
        <h3>{$posts['15/05/2019'][$i]['text']}</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack3</title>
</head>
<body>
  
</body>
</html>