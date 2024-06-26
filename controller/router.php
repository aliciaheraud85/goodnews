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
        default :
        echo "Page non trouvée";
        break;
    }
 ?>