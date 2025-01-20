<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/3_chainesDeCaracteres/3-remplacerPartieChaineCaracteres.php

$phrase = "Bienvenue à Riverfall !";
echo $phrase . "<br/>";
$nouvellePhrase = str_replace("!", "et bonne visite !", $phrase);
echo $nouvellePhrase;