<?php
// 1°
$nom = $_GET['nom'];
// 2°
$prenom = $_GET['prenom'];
// 3°
$ville = $_GET['ville'];
// 4°
$annee = $_GET['annee'];
$age = date("Y") - $annee;

echo "1° => Bonjour " .$nom;
echo "<br/>2° => Bonjour " .$nom . " " . $prenom;
echo "<br/>3° => Bonjour " .$nom . " " . $prenom . ", vous habitez " . $ville;
echo "<br/>4° => Bonjour " .$nom . " " . $prenom . ", vous habitez " . $ville . ". Vous avez " . $age . " ans.";