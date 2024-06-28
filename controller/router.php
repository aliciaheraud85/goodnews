<?php 
 
 //1. APPEL DE LA CONNEXION, CONTROLLER, MODEL

    require_once(__DIR__ . '/../config/connexion.php');
    require_once(__DIR__ . '/../controller/PostController.php');
    require_once(__DIR__ . '/../model/PostModel.php');

//2. CREER UNE INSTANCE DU MODEL PERMETTANT LA CONNEXION A LA BASE DE DONNEES

    $postModel = new PostModel($connexion);

//3. CREER UNE INSTANCE DU CONTROLLER

    $postController = new PostController($postModel, $connexion);

//4. GESTION DES ROUTES

 $action = $_GET['action'] ?? 'index';

    switch($action){
        case 'index' :
            $postController->index();
        break;
        case 'show' :
            if(isset($_GET['id']) && is_numeric(($_GET['id']))){
                $postController->show($_GET['id']);
            }else{
                echo "ID invalide.";
            }
        break;
        case 'rubrik' :
            if(isset($_GET['rubrik'])){
                $postController->rubrik($_GET['rubrik']);
            }else{
                echo "Rubrique non trouvée.";
            }
        default :
        echo "Page non trouvée";
        break;
    }
 ?>