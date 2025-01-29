Revue exercice "Caisse" :

Je veux récupérer le modulo du reste à rendre au client,
afin de savoir combien de fois je peux utiliser un billet
ou une pièce de tel ou tel montant.

si $reste %= $key > 0, alors injecter ce chiffre
dans une variable $modulo_reste pour réaliser
le calcul suivant :
tant que $modulo_reste > 0 alors faire
$reste -= $key
puis
$modulo_reste--
