<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/2_tableaux/4-tableauMultidimentionnel.php

$client = [
    "client1" => [
        "prenom" => "Madeline",
        "nom" => "Ricateau",
        "age" => 32,
        "commandes" => [
            "cmd1" => "Écran incurvé 32 pouces",
            "cmd2" => "Coffret soundtracks Witcher 3",
            "cmd3" => "Coffret soundtracks Skyrim",
        ]
    ],
    "client2" => [
        "prenom" => "Florian",
        "nom" => "Ricateau",
        "age" => 31,
        "commandes" => [
            "cmd1" => "Baldur Gates 3",
            "cmd2" => "Final Fantasy Pixel",
        ]
    ],
];

echo "<strong>Le client N°01 se nomme :</strong> " . $client["client1"]["prenom"] . " " . $client["client1"]["nom"] . 
" et a " . $client["client1"]["age"] . " ans.<br/><strong>Voici ses commandes :</strong> " . $client["client1"]["commandes"]["cmd1"] . 
", " . $client["client1"]["commandes"]["cmd2"] . ", " . $client["client1"]["commandes"]["cmd3"] . ".";