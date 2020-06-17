<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cours 3</title>
    </head>
    <body>
       <?php

            echo 'Exercice 1 <br>';

            $date1 = date_create('2020-06-05');
            $date2 = date_create('2020-06-10');
            $interval = date_diff($date1, $date2);

            echo $interval->format('%a jours. Il y a donc 5 jours de différence entre date1 et date2. <br>'); 

            echo 'Exercice 2 <br>';

            echo '$var sert à déclarer un variable et $$var sert à déclarer une variable dynamique. Ici, $$var prend la valeur de $var et l\'utilise comme nom d\'une autre variable.<br> ';

            echo 'Exercice 3 <br>';

            echo 'On utilise define(CONSTANTE,"valeur"); .<br>';

            echo 'Exercice 4 <br>';

            echo '$ref=&$var; $ref devient devient une référence $var <br>';

            echo 'Exercice 5 <br>';

            $var = 1;

            echo ' J\'ai déclaré la variable, puis à l\'aide d\'un echo, je vérifie si elle existe.',$var, ' On voit que 1 apparait, $var existe donc bien.<br>';

       ?>
    </body>
</html>