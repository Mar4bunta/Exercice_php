<?php

    $nom = $_POST['nom'];
    $genre = $_POST['genre'];

    if($genre == "H"){

        echo " Bonjour Mr ",$nom," .";

    }else{

        echo " Bonjour Mme ",$nom," .";

    }