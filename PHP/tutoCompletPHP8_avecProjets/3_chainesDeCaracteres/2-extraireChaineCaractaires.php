<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/3_chainesDeCaracteres/2-extraireChaineCaractaires.php

// La syntaxe générale de `substr()` est la suivante :
// `substr(string $chaine, int $debut, ?int $longueur = null): string`
// - `$chaine`: La chaîne de caractères d’origine.
// - `$debut`: La position de départ dans la chaîne. Si cette valeur est négative, elle compte à partir de la fin de la chaîne.
// - `$longueur` (optionnel) : La longueur de la sous-chaîne à extraire. Si cette valeur est omise, la sous-chaîne s’étend jusqu’à la fin de la chaîne.

$phrase = "Bienvenue à Riverfall !";
echo $phrase . "<br/>";
$sub = substr($phrase, 0, 10);
echo $sub;