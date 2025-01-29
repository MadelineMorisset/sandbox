<?php

// Exercice caisse :
// Le client a rendu plus d'argent que le montant à payer.
// On cherche à savoir combien lui rendre, 
// et avec combien de type de monnaie (billet-s de 50/20/10/5€, pièce-s de 2€ ou 1€).

$caisse = [
  "50" => 10,
  "20" => 5,
  "10" => 2,
  "5" => 8,
  "2" => 4,
  "1" => 20,
];

$apayer = 51;
print("Montant à payer : ".$apayer."€<br>");
$adonner = 55;
print("Montant à donné par le client : ".$adonner."€<br>");

if ($apayer < $adonner) {
  $reste = $adonner - $apayer;
  print("Montant restant à donné au client : ".$reste."€<br>");
} else {
  $reste = $apayer - $adonner;
  print("Montant restant à donné par client : ".$reste."€<br>");
}

foreach ($caisse as $key => $value_key) {
  if ($key > $reste) {
    print("---------------------------------------<br>");
    print("Nous ne pouvons donner ".$key."€ au client; ce montant est plus élevé que le reste à donner de ".$reste."€.<br>");
    print_r($caisse);
    print("<br><br>");
  } else {
    if ($reste / $key > 0) {
      $modulo_reste = $reste / $key;
      
      while ($modulo_reste > 0) {
        $reste -= $key;
        $modulo_reste--;

        print("---------------------------------------<br>");
        print("Il reste ".$value_key." éléments de ".$key."€.<br>");
        print("Nous avons donné ".$key."€ au client; il reste ".$reste."€ à donner au client.<br>");

        $value_key--;
        
        print("Il reste ".$value_key." éléments de ".$key."€.<br>");

        $caisse[$key]--;
        
        print_r($caisse);
        print("<br><br>");
      }
    }
  }
}
  