<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/2_tableaux/5-compterElementsTableau.php

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

$compter=count($client["client1"]["commandes"]);
echo $client["client1"]["prenom"] . " " . $client["client1"]["nom"] . " a " 
. $client["client1"]["age"] . " ans, et a fait " . $compter . " commandes.";