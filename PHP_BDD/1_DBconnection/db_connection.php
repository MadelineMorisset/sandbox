<?PHP 
// Exercices Connexion : 
// Essayer de vous connecter à une de vos bases de données. 
// Essayer de rater votre connexion en ajoutant ou supprimant une lettre pour vérifier si la connexion est ok 

// Ou sinon décommenter la ligne 10 avec l'echo, pour être vraiment sûr
try {
    $db = new PDO("mysql:host=localhost;dbname=mydiscbox", 
                  "root", 
                  "V3nDta!",
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // echo "<p style='color: green;'>Connexion à la base réussie !</p>"; 
} catch (Exception $e) {
    die("Echec de la connexion à la base.<br/>Erreur: " . $e->getMessage());
}
?>