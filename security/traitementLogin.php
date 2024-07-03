<?php 

//1. APPEL A LA CONNEXION

    require_once(__DIR__ . '/../config/connexion.php');

//2. DEMARRER LA SESSION

    session_start();

//3. RECUPERER LES DONNEES DU FORMULAIRE DE CONNEXION

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    if(empty($email) || empty($password)){   //verifie que les champs du formulaire ne sont pas vides
        die('Veuillez remplir tous les champs'); 
    }

    //5. METTRE EN PLACE MON TRY CATCH

    try{
        //REQUETE SQL

        $sql="SELECT * FROM users WHERE email = :email";

        $stmt = $connexion->prepare($sql);

        $stmt->bindParam('email', $email, PDO::PARAM_STR);

        $stmt->execute();

        if($stmt->rowCount() > 0){ // si qd on compte les lignes c'est > 0 alors un user a été trouvé
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password, $user['password'])){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                $_SESSION['LOGGED_USER'] = $user['user_name'];

                header('location: /goodnews/index.php');
                exit();
            }else{
                echo "Mot de passe incorrect. ";
            }
        }else{
            echo "Aucun utilisateur trouvé";
        }
    }catch(PDOException $e){
        echo "ERREUR :" . $e->getMessage();
    }
?>