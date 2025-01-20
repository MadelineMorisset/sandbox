<?php
// Créer un formulaire qui récupère les valeurs 
// d’une ligne de votre base de données 
// (passer l’identifiant en paramètre) 
// et pouvoir modifier ce contenu

require_once('db_connect.php');

// $nom=$_GET['nom'];
// $prenom=$_GET['prenom'];
// $date_naissance=$_GET['dateNaissance'];

// $request=("UPDATE tests.famille_table 
//            SET date_naissance='$date_naissance'
//            WHERE prenom='$prenom'
//            AND nom='$nom'");

$date_naissance=$_GET['dateNaissance'];
$id_membre=$_GET['id_membre'];

$request=("UPDATE tests.famille_table 
           SET date_naissance='$date_naissance'
           WHERE id='$id_membre'");

$execution=$db->exec($request);

if ($execution) {
    echo "Modification réussie";
} else {
    echo "Modification échouée";
}
?>