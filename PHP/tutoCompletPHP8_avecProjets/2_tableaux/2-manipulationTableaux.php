<?php
// http://localhost/sandbox/PHP/tutoCompletPHP8_avecProjets/2_tableaux/2-manipulationTableaux.php


// array_push($array,$element): Ajoute un ou plusieurs éléments à la fin d’un tableau
$client = ["Madeline", "Ricateau", 32];
array_push($client, "Chasseneuil-du-Poitou");
echo "La cliente se nomme $client[0] $client[1], elle a $client[2] ans et elle habite à $client[3].<br/>-------------------------------<br/>";

// array_unshift($array, $element) : lorsque vous utilisez la fonction array_unshift($array, $element1, $element2, ...), 
// soyez conscient que les nouveaux éléments seront ajoutés au début du tableau, et les indices numériques existants seront réindexés
array_unshift($client, true);
echo "La cliente se nomme $client[0] $client[1], elle a $client[2] ans et elle habite à $client[3].<br/>";
echo "La cliente se nomme $client[1] $client[2], elle a $client[3] ans et elle habite à $client[0].<br/>-------------------------------<br/>";

// array_pop($array) : cette fonction retire et renvoie le dernier élément d’un tableau
$client = ["Madeline", "Ricateau", 32];
array_pop($client);
echo "La cliente se nomme $client[0] $client[1], et elle a $client[2] ans.<br/>-------------------------------<br/>";

// array_shift : cette fonction retire le premier élément du tableau
$client = ["Madeline", "Ricateau", 32];
array_shift($client);
echo "La cliente se nomme $client[0] $client[1], et elle a $client[2] ans.<br/>";