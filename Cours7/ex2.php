<?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $code = $_POST['code'];
    $genre = $_POST['genre'];
    $pays = $_POST['pays'];
    $gouts = $_POST['gouts'];
    $descr = $_POST['descr'];
    $photo = $_POST['photo'];

    if(isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0){

        if($_FILES['photo']['size'] <= 1000000){

            $infosfichier = pathinfo($_FILES['photo']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

            if(in_array($extension_upload, $extensions_autorisees)){

                move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . basename($_FILES['photo']['name']));

                echo "L'envoi a bien été effectué !";

            }

        }

    }

echo "Nom : ",$nom,
"<br>Pénom : ",$prenom,
"<br>Email : ",$email,
"<br>Code : ",$code,
"<br>Genre : ",$genre,
"<br>Pays : ",$pays,
"<br>Goûts : ",$gouts,
"<br>Déscription : ",$descr;


   

    