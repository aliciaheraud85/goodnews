<?php

//1. APPEL A LA CONNNEXION

    require_once(__DIR__ . '/../config/connexion.php');


//2. VERIFICATION DE LA SOUMISSION DU FORMULAIRE

session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $password2 = $_POST['password2'];
                if($_POST['password'] == $_POST['password2']){
                    try{
                        $sql = "UPDATE users
                                    SET password = :password
                                    WHERE id = :user_id
                                ";
                            $stmt = $connexion->prepare($sql);
                            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                            $stmt->execute();
                            
                            echo "<script language='Javascript'>
                            alert('Mot de passe réinitialisé avec succès. Veuillez à présent vous reconnecter');
                            window.location.assign('/goodnews/elements/logout.php');
                            </script>";
                        }catch(PDOException $e){
                            echo "ERREUR" . $e->getMessage();
                        }
                }else{
                    echo "<script language='Javascript'>
                    alert('Les mots de passe ne sont pas identiques. Veuillez réessayer.');
                    window.location.assign('/goodnews/elements/modifPassword.php');
                    </script>";
                }
            }else{
                echo "Modification impossible";
            }
      
        $connexion = null;
    }
?>
    