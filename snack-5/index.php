<?php 
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos nam fuga labore mollitia tempore sint velit sequi doloribus, qui omnis, corrupti delectus, ratione cumque! Quibusdam illo accusantium ratione enim eos quo ducimus necessitatibus omnis ex soluta ad dolorem culpa, placeat voluptatibus facilis voluptatum neque magnam nihil dignissimos quos repudiandae recusandae nam modi? Aliquam ipsum cum nulla, sapiente officia id laboriosam molestias tenetur asperiores omnis eveniet vel libero error voluptatum atque soluta ea nobis accusamus tempora? Placeat autem nihil molestias non ex perferendis accusamus asperiores inventore, iste fugiat culpa officia voluptates vitae quibusdam eaque totam explicabo repellendus aspernatur dicta? Totam velit rem eveniet nam eaque fugiat aut cum facilis? Corrupti, sunt dignissimos quae beatae porro sequi libero eos? Neque eligendi expedita corporis quasi dolorem magnam deleniti eveniet quo. Harum velit totam explicabo odit vitae ducimus et doloribus soluta, animi, dolore laborum, inventore quaerat esse labore ullam nesciunt aperiam! Officiis illum voluptate dolores labore ipsum autem quidem perferendis ab, accusantium recusandae nobis, sequi necessitatibus quam, amet aliquam eligendi? Possimus quos corrupti facere ducimus deleniti fugit tempore sunt laudantium inventore, repellat harum qui. Quas earum nobis quos inventore tempora laboriosam. Possimus dolores, dicta maiores eum libero dignissimos saepe vero optio? At, animi distinctio.";

$paragraphSplit = explode('.', $paragraph);
var_dump($paragraphSplit);

// echo "<h1>Paragrafo originale:</h1> <h2>{$paragraph}</h2> <hr>";

// echo "<h1>Paragrafi singoli:</h1>";
// for($i = 0; $i < count($paragraphSplit); $i++) {
//   echo "<h3>{$paragraphSplit[$i]}</h3>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack5</title>
</head>
<body>
  <h1>Paragrafo originale:</h1>
  <p><?php echo $paragraph ?></p>
  <ul>
  <?php foreach($paragraphSplit as $singleParagraph) {
      if (!empty($singleParagraph)) {
        echo "<li> $singleParagraph.</li>";
      }
  } ?>
  </ul>
</body>
</html>