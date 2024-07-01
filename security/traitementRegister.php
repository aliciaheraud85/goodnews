<?php

//1. APPEL A LA CONNEXION

    require_once(__DIR__ . '/../config/connexion.php');

//2. VERIFICATION DE LA SOUMISSION DU FORMULAIRE

    if($_SERVER["REQUEST_METHOD"] == "POST"){ //s'assure de quelle methode nous avons utilisé dans le formulaire (GET OU POST)

        $rgpd = isset($_POST['rgpd']) ? 1 : 0; //verifie que la case rgpd est bien coché

        //2.1 ON RECUPERE LES DONNEES DU FORMULAIRE
        $user_name = trim($_POST['user_name']);
        $lastname = strtoupper(trim($_POST['lastname'])); //strtoupper = tout en MAJ
        $firstname = ucfirst(strtolower(trim($_POST['firstname']))); // ucfirst = 1erelettre en MAJ / strtolower = autre lettres en MIN / trim = nettoie pr éviter tt caractère indésirable (protège requêtr SQL)
        $email = trim($_POST['email']);
        
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //Hacher le mot de passe

        $city = ucfirst(strtolower(trim($_POST['city'])));
        $country = trim($_POST['country']);

        $role = 'user'; //on définit le rôle par défaut

        //2.2 REQUETE SQL

        try{
            $sql = "INSERT INTO users(user_name, lastname, firstname, email, password, city, country, rgpd, role)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $connexion->prepare($sql);

            $stmt->execute([$user_name, $lastname, $firstname, $email, $password, $city, $country, $rgpd, $role]);

            echo "Inscription réussie";
        }catch(PDOException $e){
            echo "ERREUR" . $e->getMessage();
        }

        $connexion = null;
    }

?>
