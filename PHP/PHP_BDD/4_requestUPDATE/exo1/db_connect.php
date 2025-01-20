<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=tests", 
                  "root", 
                  "V3nDta!",
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // echo "<p style='color: green;'>Connexion à la base réussie !</p>"; 
} catch (Exception $e) {
    die("<p style='color: red;'>Erreur: " . $e->getMessage())."</p>";
}
?>