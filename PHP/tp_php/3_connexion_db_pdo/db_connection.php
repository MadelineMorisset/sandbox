<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $db_connection = new PDO("mysql:host=$servername;dbname=pays", $username, $password);
  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  // → Active les exceptions en cas d'erreur (sinon, PDO renvoie juste false sans message)
  print("Connexion réussie");
} catch(PDOException $e) {
  print("Connexion échouée : ").$e->getMessage();
}
// Le try tente d'exécuter un bloc de code
// Si une erreur survient, une exception (PDOException) est levée
// Le catch intercepte l'exception et exécute un code de secours au lieu de laisser le script s'arrêter brutalement, et affiche l'erreur récupérée ($e->getMessage())