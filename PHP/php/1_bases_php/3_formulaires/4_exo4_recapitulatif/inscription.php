<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaires</title>
</head>

<body>
  <!-- 
    Refaire en repartant de zéro un formulaire et une page de traitement de ce formulaire

    1° Le formulaire contient un champs Nom, la page de traitement affiche ce nom "Bonjour xxx"

    2° Ajouter un champs prénom et afficher cette fois"Bonjour xxx yyy"

    3° Ajouter un champs ville, "Bonjour xxx yyy, vous habitez zzz"
    
    4° Ajouter un champs Année de naissance et  "Bonjour xxx yyy, vous habitez zzz. Vous avez aaa ans"
    -->

  <?php $nom; $prenom; $ville; $annee; ?>

  <form action="resultat.php" method="$_GET">
    Nom : <input type="text" name="nom">
    Prénom : <input type="text" name="prenom">
    Ville : <input type="text" name="ville">
    Année de naissance : <input type="number" name="annee">
    <input type="submit" value="Envoyer">
  </form>
</body>

</html>