<?PHP 
try {
    $db = new PDO("mysql:host=localhost;dbname=mydiscbox", 
                  "root", 
                  "V3nDta!",
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
?>