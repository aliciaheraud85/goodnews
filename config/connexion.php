<?php 

//1. APPEL DE CONFIG POUR LES VARIABLES MEMBRES

    require_once("config.php");

//2. FAIRE LE TRY CATCH

    try{
        $connexion = new PDO("mysql:localhost=$host;goodnews=$dbname;utf8mb4=$charset", $user, $password);
        //echo "Connexion à la base de donnée réussie.";
    }catch(PDOException $e){
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

?>


