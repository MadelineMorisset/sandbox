<?php
require_once ('db_connection.php');

$requete_sql = ('SELECT * FROM article');
$reponse = $db->query($requete_sql);

$affichage_donnees = $reponse->fetchAll();

foreach ($affichage_donnees as $donnee) {
    echo "<strong>Titre album :</strong> ".$donnee['title_item'].
    "<br/><strong>Nom de l'artiste ou du Groupe :</strong> ".$donnee['name_artistBand'].
    "<br/><br/>";
}
?>