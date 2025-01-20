<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/1_variables/5-concat%c3%a9nationVatiobles.php
// Concaténer deux variables :
$civilite = "Mme";
$prenom = "Madeline";
$nom = "Ricateau";
$nomComplet = $civilite . " " . $nom . " " . $prenom;
echo "Bonjour " . $nomComplet;