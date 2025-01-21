<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // 2° Mettre ce prénom en gras
  $madeline="Madeline";
  echo "Je suis le fantôme de <strong>". $madeline ."</strong>, et j’ai faim";
  ?>
  <p>Je suis le fantôme de <strong><?php echo $madeline; ?></strong>, et j’ai faim</p>
</body>

</html>