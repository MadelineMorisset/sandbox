<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajouter dans la famille</title>
</head>

<body>
    <!-- Créer un formulaire (vierge) qui permet de modifier le contenu 
     d’un enregistrement de votre BD (avec id “en dur”, exemple 50). 
     -->
    <?php require_once('db_connect.php');?>

    <h1>Modifier la date de naissance d'une personne de la famille</h1>
    <!-- <form action="./modifierPersonne.php" method="GET">
        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="prenom" placeholder="Prenom" />
        <input type="date" name="dateNaissance" placeholder="Date de naissance" />
        <button type="submit">Ajouter</button>
    </form> -->
    <form action="./modifierPersonne.php" method="GET">
        <input type="date" name="dateNaissance" placeholder="Date de naissance" />
        <button type="submit">Ajouter</button>
        <input type="hidden" name="id_membre" placeholder="ID" value="5">
    </form>
</body>

</html>