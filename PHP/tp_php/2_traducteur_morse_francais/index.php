<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta name="description"
    content="Page web dans laquelle on retrouve deux zones de traduction : Morse vers Français et Français vers Morse." />
  <title>Traducteur Morse-Français</title>
</head>

<body>
  <header>
    <h1>Traducteur Morse et Français</h1>
  </header>

  <main>
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
    ?>

    <section>
      <h2>Morse vers Français :</h2>

      <form action="" method="get">
        <p class="traduction_francais">Traduction :
          <?php
          $morseATraduire = isset($_GET["zone_texte_morse"]) ? $_GET["zone_texte_morse"] : '';
          // Placer chaque lettre (que l'on met en majuscules) du texte dans un tableau 
          // + vérification de l'existance du paramètre en GET
          $morse = isset($_GET["zone_texte_morse"]) ? $_GET["zone_texte_morse"] : ''; 
          $tableauMorseATraduire = explode(" ", $morse);

          foreach ($tableauMorseATraduire as $cleMorseATraduire => $valeurMorseATraduire) {
            foreach ($caracteres_morse_traduit as $cleFrancaisAComparer => $valeurFrancaisAComparer) {
              if ($valeurMorseATraduire === $valeurFrancaisAComparer) {
                print($cleFrancaisAComparer);
                $cleMorseATraduire++;
              } else {
                $cleFrancaisAComparer++;
              }
            }
          }
          ?>
        </p>

        <textarea name="zone_texte_morse" id="zone_texte_morse" cols="140" rows="15"
          placeholder="Écrire le texte en Morse à traduire en Français."><?php print($morseATraduire); ?></textarea>
        <input type="submit" value="Traduire" />
      </form>
    </section>

    <section>
      <h2>Français vers Morse :</h2>

      <form action="" method="get">
        <p class="traduction_morse">Traduction :
          <?php
          $francaisATraduire = isset($_GET["zone_texte_francais"]) ? $_GET["zone_texte_francais"] : '';
          
          // Placer chaque lettre (que l'on met en majuscules) du texte dans un tableau 
          // + vérification de l'existance du paramètre en GET
          $francais = str_split(strtoupper(isset($_GET["zone_texte_francais"]) ? $_GET["zone_texte_francais"] : '')); 

          foreach ($francais as $cleFrancaisATraduire => $valeurFrancaisATraduire) {
            foreach ($caracteres_morse_traduit as $cleMorseAComparer => $valeurMorseAComparer) {
              if ($valeurFrancaisATraduire === $cleMorseAComparer) {
                print($valeurMorseAComparer." ");
                $cleFrancaisATraduire++;
              } else {
                $cleMorseAComparer++;
              }
            }
          }
          ?>
        </p>

        <textarea name="zone_texte_francais" id="zone_texte_francais" cols="140" rows="15"
          placeholder="Écrire le texte en Français à traduire en Morse."><?php print($francaisATraduire); ?></textarea>
        <input type="submit" value="Traduire" />
      </form>
    </section>

  </main>
</body>

</html>