<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaires</title>
</head>

<body>
  <!-- 
    Créer une page inscription.php contenant un formulaire avec un champs Prénom. 
    La validation redirigera vers une nouvelle page resultat.php et affichera le contenu dans la page. 
    
    “Bonjour, prenom
    Merci de votre inscription” 
    -->

  <?php $prenom ?>
  <form action="resultat.php" method="$_GET">
    Prénom : <input type="text" name="prenom">
    <input type="submit" value="Envoyer">
  </form>
</body>

</html>