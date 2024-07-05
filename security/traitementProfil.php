<?php

//1. APPEL A LA CONNNEXION

    require_once(__DIR__ . '/../config/connexion.php');


//2. VERIFICATION DE LA SOUMISSION DU FORMULAIRE

session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];
            $user_name = trim($_POST['user_name']);
            $lastname = strtoupper(trim($_POST['lastname'])); 
            $firstname = ucfirst(strtolower(trim($_POST['firstname']))); 
            $email = trim($_POST['email']);
            $city = ucfirst(strtolower(trim($_POST['city'])));
            $country = trim($_POST['country']);
                
                try{
                     $sql = "UPDATE users
                                SET user_name = :user_name, lastname = :lastname, firstname = :firstname, email = :email, city = :city, country = :country
                                WHERE id = :user_id
                            ";
                        $stmt = $connexion->prepare($sql);
                        $stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
                        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
                        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
                        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
                        $stmt->bindParam(':country', $country, PDO::PARAM_STR);
                        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                        $stmt->execute();
                        
                        echo "<script language='Javascript'>
                        alert('Veuillez à présent vous re connecter');
                        window.location.assign('/goodnews/elements/logout.php');
                        </script>";
                    }catch(PDOException $e){
                        echo "ERREUR" . $e->getMessage();
                    }
            }else{
                echo "Modification impossible";
            }
      
        $connexion = null;
    }
?>
    