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
                id Int  Auto_increment  NOT NULL ,
                user_name Varchar (255) NOT NULL ,
                lastname  Varchar (100) NOT NULL ,
                firstname Varchar (100) NOT NULL ,
                email Varchar (255) NOT NULL ,
                password Varchar (255) NOT NULL ,
                city Varchar (255) NOT NULL ,
                country Varchar (255) NOT NULL ,
                rgpd Int NOT NULL ,
                role Varchar (255) NOT NULL,
                CONSTRAINT users_PK PRIMARY KEY (id)
        )ENGINE=InnoDB;";
        $connexion->exec($table);
        echo "La table users a bien été créée. <br>";

        $table= "CREATE TABLE IF NOT EXISTS rubrik(
                id          Int  Auto_increment  NOT NULL ,
                rubrik_name Varchar (255) NOT NULL,
                CONSTRAINT rubrik_PK PRIMARY KEY (id)
        )ENGINE=InnoDB;";
        $connexion->exec($table);
        echo "La table rubrique a été créée avec succès. <br>";

        $table = "CREATE TABLE IF NOT EXISTS post (
             id        Int  Auto_increment  NOT NULL ,
            title     Varchar (255) NOT NULL ,
            image     Varchar (255) NOT NULL ,
            abstract  Longtext NOT NULL ,
            content   Longtext NOT NULL ,
            content2  Longtext ,
            author    Varchar (255) NOT NULL ,
            createdAt Datetime NOT NULL ,
            id_rubrik Int ,
            id_users  Int,
            CONSTRAINT post_PK PRIMARY KEY (id),
            CONSTRAINT post_rubrik_FK FOREIGN KEY (id_rubrik) REFERENCES rubrik(id),
            CONSTRAINT post_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
        )ENGINE=InnoDB";
        $connexion->exec($table);
        echo "la table post a été créée avec succès.<br>";
    }catch(PDOException $e){
        echo "Erreur :" . $e->getMessage();
    }

?>
