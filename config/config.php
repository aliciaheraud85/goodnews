<?php

//1. DECLARATION DES VARIABLES MEMBRES

    $host = "localhost";
    $dbname = "goodnews";
    $charset = "utf8mb4";
    $user = "root";
    $password = "";
    

//2. AJOUTER DES OPTIONS

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,                //lève les exceptions en cas d'erreur
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,           //récupère les resultats dans un tableau associatif
            PDO::ATTR_EMULATE_PREPARES => false,                        //désactive l'émulation des requêtes préparés
        ];

?>