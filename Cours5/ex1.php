<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traitement du formulaire</title>
    </head>
    <body>
    <?php 
        
        $sexe = $_GET['genre'];

        if($sexe === "H"){

            $bio = "Voici monsieur ";

        }else{

            $bio = "Voici madame ";

        }

        $nom = array($_GET['nom'],$_GET['prenom']);

        $vin = $_GET['vins'];

        
        echo $bio, $nom, " , son vin préféré est le " ,$vin, ".";
    ?>
        
    </body>
</html>