<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php

            define("jours",[
                "Lu"=>"Lundi", 
                "Ma"=>"Mardi", 
                "Me"=>"Mercredi", 
                "Je"=>"Jeudi", 
                "Ve"=>"Vendredi", 
                "Sa"=>"Samedi", 
                "Di"=>"Dimanche",
                ]);

            foreach (jours as $key => $value){

                echo "$key $value <br>";

            }
        ?>
    </body>
</html>      