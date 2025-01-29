<?php
$caracteres_morse_traduit = [
  "A" => ".-",
  "B" => "-...",
  "C" => "-.-.",
  "D" => "-..",
  "E" => ".",
  "F" => "..-.",
  "G" => "--.",
  "H" => "....",
  "I" => "..",
  "J" => ".---",
  "K" => "-.-",
  "L" => ".-..",
  "M" => "--",
  "N" => "-.",
  "O" => "---",
  "P" => ".--.",
  "Q" => "--.-",
  "R" => ".-.",
  "S" => "...",
  "T" => "-",
  "U" => "..-",
  "V" => "...-",
  "W" => ".--",
  "X" => "-..-",
  "Y" => "-.--",
  "Z" => "--..",
  " " => "/",
];

// Traducteur en Français
// Placer chaque lettre (que l'on met en majuscules) du texte dans un tableau + vérification de l'existance du paramètre en GET
$morse = isset($_GET["zone_texte_morse"]) ? $_GET["zone_texte_morse"] : ''; 
$tableauMorseATraduire = explode(" ", $morse);
// print_r($tableauMorseATraduire);

foreach ($tableauMorseATraduire as $cleMorseATraduire => $valeurMorseATraduire) {
  // print($valeurATraduire);
  foreach ($caracteres_morse_traduit as $cleFrancaisAComparer => $valeurFrancaisAComparer) {
    if ($valeurMorseATraduire === $valeurFrancaisAComparer) {
      $traduction_francais = $cleFrancaisAComparer;
      $cleMorseATraduire++;
    } else {
      $cleFrancaisAComparer++;
    }
  }
}

// Traducteur en Morse
// Placer chaque lettre (que l'on met en majuscules) du texte dans un tableau + vérification de l'existance du paramètre en GET
$francais = str_split(strtoupper(isset($_GET["zone_texte_francais"]) ? $_GET["zone_texte_francais"] : '')); 
// print_r($francais);

foreach ($francais as $cleFrancaisATraduire => $valeurFrancaisATraduire) {
  // print($valeurATraduire);
  foreach ($caracteres_morse_traduit as $cleMorseAComparer => $valeurMorseAComparer) {
    if ($valeurFrancaisATraduire === $cleMorseAComparer) {
      $traduction_morse = $valeurMorseAComparer." ";
      $cleFrancaisATraduire++;
    } else {
      $cleMorseAComparer++;
    }
  }
}

?>