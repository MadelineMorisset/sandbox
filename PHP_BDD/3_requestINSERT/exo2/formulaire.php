<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajouter dans la famille</title>
</head>

<body>
    <!-- Exercice Insert-2 : 
     Créer une page avec un formulaire qui permettra de peupler la base de données. 
     -->
    <?php require_once('db_connect.php');?>

    <h1>Ajouter une personne dans la famille</h1>
    <form action="./ajoutPersonne.php" method="GET">
        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="prenom" placeholder="Prenom" />
        <input type="text" name="statut" placeholder="Statut" />
        <input type="date" name="dateNaissance" placeholder="Date de naissance" />
        <button type="submit">Ajouter</button>
    </form>
</body>

</html>