<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $date=date("l-F-Y");
            $heure=date("H:i");
            $matin=date("12:00");
            $soir=date("19:00");
            $nuit=date("05:00");

            echo $heure;
        

            if($heure <= $matin && $heure >=$nuit){

                echo "Hello PHP, nous sommes " ,$date, ", bon matin.";

            }else if($heure >= $matin && $heure <= $soir){

                echo "Hello PHP, nous sommes " ,$date, ", bon après-midi.";

            }else{

                echo "Hello PHP, nous sommes " ,$date, ", bonne nuit.";

            }


        ?>

    </body>
</html>