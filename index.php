<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 : Partie 3</title>
  </head>
  <body>
    <?php
    $number = 100;
    $number2 = mt_rand (1,100);

    while ($number >= 10) {
      echo $number * $number2 . ' ';

      $number--;
    }
    ?>
  </body>
</html>
