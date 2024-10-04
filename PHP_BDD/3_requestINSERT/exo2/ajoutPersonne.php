<?php
require_once('db_connect.php');

$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$statut=$_GET['statut'];
$date_naissance=$_GET['dateNaissance'];

$request=("INSERT INTO tests.famille_table(nom, prenom, statut, date_naissance) 
           VALUES('$nom', '$prenom', '$statut', '$date_naissance')");

$execution=$db->exec($request);

if ($execution) {
    echo "Ajout réussie !!";
} 

// else {
//     echo "L'ajout a échoué ...";
// }
?>