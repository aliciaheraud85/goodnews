<?php 

//1. APPEL LA CONNEXION

require_once("connexion.php");

//2. FAIRE LE TRY CATCH POUR CREER MA BASE DE DONNEES ET MES TABLES

    try{

        $sql="CREATE DATABASE IF NOT EXISTS goodnews";
        $connexion->exec($sql);
        
        echo "Votre base de données a été créée avec succès";

        $connexion->exec("USE goodnews");

        $table= "CREATE TABLE IF NOT EXISTS users(
                id INT AUTO_INCREMENT PRIMARY KEY ,
                user_name Varchar (255) NOT NULL ,
                lastname  Varchar (100) NOT NULL ,
                firstname Varchar (100) NOT NULL ,
                email Varchar (255) NOT NULL ,
                password Varchar (255) NOT NULL ,
                city Varchar (255) NOT NULL ,
                country Varchar (255) NOT NULL ,
                rgpd Int NOT NULL ,
                role Varchar (255) NOT NULL
        )";
        $connexion->exec($table);
        echo "La table users a bien été créée. <br>";

        $table= "CREATE TABLE IF NOT EXISTS rubrik(
                id INT AUTO_INCREMENT PRIMARY KEY,
                rubrik_name Varchar (255) NOT NULL
        )";
        $connexion->exec($table);
        echo "La table rubrique a été créée avec succès. <br>";

        $table = "CREATE TABLE IF NOT EXISTS post (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title     Varchar (255) NOT NULL ,
            image     Varchar (255) NOT NULL ,
            abstract  Longtext NOT NULL ,
            content   Longtext NOT NULL ,
            content2  Longtext ,
            author    Varchar (255) NOT NULL ,
            createdAt Datetime NOT NULL 
        )";
        $connexion->exec($table);
        echo "la table post a été créée avec succès.<br>";
    }catch(PDOException $e){
        echo "Erreur :" . $e->getMessage();
    }

?>
