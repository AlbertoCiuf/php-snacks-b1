<?php
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
    <link rel="stylesheet" href="style.css">
  <title>Snack6</title>
</head>
<body>
  <div class="teachers">
    <ul>
      <?php 
        for ($i = 0; $i < count($db); $i++) {
          echo 
            "<li>
              {$db['teachers'][$i]['name']}
              {$db['teachers'][$i]['lastname']}
            </li>";
        }
      ?>
    </ul>
  </div>
  <div class="pms">
    <ul>
      <?php 
        for ($i = 0; $i < count($db); $i++) {
          echo 
            "<li>
              {$db['pm'][$i]['name']}
              {$db['pm'][$i]['lastname']}
            </li>";
        }
      ?>
    </ul>
  </div>
</body>
</html>