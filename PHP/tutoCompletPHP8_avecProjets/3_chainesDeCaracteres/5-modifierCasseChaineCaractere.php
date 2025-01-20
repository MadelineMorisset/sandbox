<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/3_chainesDeCaracteres/5-modifierCasseChaineCaractere.php

$phrase = "Bonjour les amis";
echo $phrase . "<br/>--------------------<br/>";

// Mettre en minuscules
$phrase = strtolower($phrase);
echo $phrase . "<br/>--------------------<br/>";

// Mettre en majuscules
$phrase = strtoupper($phrase);
echo $phrase . "<br/>--------------------<br/>";

// Convertir le premier caractère du premier mot d’une chaîne de caractères en majuscule, 
// tout en préservant les autres caractères dans leur casse d’origine.
$phrase = "bonjour les amis";
echo $phrase . "<br/>";
$phrase = ucfirst($phrase);
echo $phrase . "<br/>--------------------<br/>";

// Convertir le premier caractère de chaque mot d’une chaîne de caractères en majuscule, 
// tout en préservant les autres caractères dans leur casse d’origine.
$phrase = "Bonjour les amis";
echo $phrase . "<br/>";
$phrase = ucwords($phrase);
echo $phrase . "<br/>--------------------<br/>";