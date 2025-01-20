<?php
// Modifier la date de naissance de Pavetta Fiona Riannon dans un fichier update.php
require_once('db_connect.php');

$request=("UPDATE tests.famille_table SET date_naissance='1964-07-20' WHERE prenom='Pavetta' AND nom='Fiona Riannon'");

$execution=$db->exec($request);

if ($execution) {
    echo "Modification réussie";
} else {
    echo "Modification échouée";
}
?>