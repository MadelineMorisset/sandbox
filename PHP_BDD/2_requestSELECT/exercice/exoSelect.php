<?PHP 
try {
    $db = new PDO("mysql:host=localhost;dbname=tests", 
                  "root", 
                  "V3nDta!",
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // echo "<p style='color: green;'>Connexion à la base réussie !</p>"; 
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
// --------------
// Exercice Select :
// Afficher les noms et prénoms de chaque élément de la BD tests
// - créer la Base de Données
// - insérer la table et les données avec phpMyAdmin
// - créer un fichier exoSelect.php
// - se connecter à votre BD, afficher ligne par ligne, les noms et prénoms de chaque élément de la BD 

$requete_sql = "SELECT * FROM famille_table";
$reponse = $db->query($requete_sql);

$affichage_donnees = $reponse->fetchAll();

foreach ($affichage_donnees as $donnee) {
    echo "<strong>Nom :</strong> ".$donnee['nom'].
         "<br/><strong>Prénom :</strong> ".$donnee['prenom'].
         "<br/><strong>Statut :</strong> ".$donnee['statut'].
         "<br/><br/>";
}
?>