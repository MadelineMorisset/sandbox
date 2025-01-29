<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $db_connection = new PDO("mysql:host=$servername;dbname=exercices", $username, $password);
  $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  print("Connexion réussie");
} catch(PDOException $e) {
  print("Connexion échouée");
}