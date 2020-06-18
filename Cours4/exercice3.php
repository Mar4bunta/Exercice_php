<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercice 3</title>
    </head>
    <body>
        <?php

            $string = "rANDOM PHRASE";

            echo $string," écrit tel quel.<br>";

            echo strtoupper(substr($string, 0, 1)).strtolower(substr($string, 1)), " avec seulement la première lettre en majuscule.";

        ?>
    </body>
</html>