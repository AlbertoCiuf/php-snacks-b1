<?php 

$randomArray = [];
$min = 1;
$max = 15;

for ($i = 0; $i < 15; $i++) {
  $randNum = rand($min, $max);
  if (!in_array($randNum, $randomArray)) {
    $randomArray[] = $randNum;
  } else {
    $i--;
  }
}
var_dump($randomArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack4</title>
</head>
<body>
  
</body>
</html>