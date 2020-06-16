<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 3.1</title>
    </head>
    <body>

        <h1>Titre Principal</h1>

        <?php

          $x = ' ';     
          echo 'La valeur de $x globale est :',  $x, '<br>';     
          echo 'La valeur de $x locale est : ', $x = 5, '<br>';     
          $y = 1;     
          echo '$y contient la valeur: ', $y = 1, '<br>';     
          echo '$y contient la valeur: ', $y = 1, '<br>'; 
          function(){
              $z = ' ';
            };     
          echo 'La variable locale $z contient : '; 
          echo '<p>Un paragraphe</p>'; 

        ?>

    </body>
</html>