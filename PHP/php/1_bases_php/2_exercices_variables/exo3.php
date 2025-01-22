<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // 3° Déclarer 2 variables : nombre de fantômes, nom utilisateur. 
  // Initialiser - la variable nombre de fantôme avec la valeur 4 
  // - le nom avec votre nom 
  // - Ecrire "Mon nom est : xxx. Vous avez demandé yyy fantômes". 
  
  $nombreFantomes = 4;
  $nomUtilisateur = "Madeline";
  echo "Mon nom est : ". $nomUtilisateur .". Vous avez demandé ". $nombreFantomes ." fantômes";
  ?>
  <p>Mon nom est : <?php echo $nomUtilisateur; ?>. Vous avez demandé <?php echo $nombreFantomes; ?> fantômes</p>
</body>

</html>