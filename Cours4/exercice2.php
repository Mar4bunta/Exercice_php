<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exerice 2</title>
    </head>
    <body>
        <?php

            echo "<ul>";

            for($i=1; $i<=20; $i++){

              $pow = gmp_pow ("2",$i); //carré

              echo "<li>" ,$i, '² = ' ,$pow, "</li>";

            }

            echo "</ul>";
        ?>
    </body>
</html>