<?PHP 
// Modifier par exemple root, en ajoutant ou supprimant une lettre pour vérifier si la connexion est ok 
// Ou sinon décommenter la ligne 10 avec l'echo
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