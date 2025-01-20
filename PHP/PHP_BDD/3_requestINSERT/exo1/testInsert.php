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
// -------------
// Exercice Insert-1: 
// dans un fichier testInsert.php créer l’insertion d’une personne 
// en ayant mis les valeurs “à la main” dans des variables.
// 
// NB : Pour afficher une erreur après une requête : print_r($bdd->errorInfo()); 
// 
// Dans la requête, on utilise les ‘ pour les champs de type texte. 
// Pour éviter les concaténations, la requête est mise dans des guillemets.

// ---------- DÉBUT ----------

$nom='An Craite';
$prenom='Crach';
$statut='Oncle';
$date_naissance='1949-07-06';

$request="INSERT INTO tests.famille_table(nom, prenom, statut, date_naissance) VALUES('$nom', '$prenom', '$statut', '$date_naissance');";

$execution=$db->query($request);

// ---------- OU ----------

// $nom='An Craite';
// $prenom='Hjalmar';
// $statut='Cousin';
// $date_naissance='1985-08-11';

// $request="INSERT INTO tests.famille_table(nom, prenom, statut, date_naissance) VALUES('$nom', '$prenom', '$statut', '$date_naissance');";

// $execution=$db->exec($request);

// ---------- FIN ----------

// Exercice Insert-2 : 
// Créer une page avec un formulaire qui permettra de peupler la base de données.
?>