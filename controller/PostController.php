<?php

//1. APPEL DE L'AUTOLOADER

require_once(__DIR__. '/../config/autload.php');

//2.DECLARATION DE MA CLASSE

    class PostController {
        private $postModel;
        private $connexion;

        // Mise en place de mon constructeur

        public function __construct($PostModel, $connexion){
            $this -> postModel = $postModel;
            $this-> connexion = $connexion;
        }

        // Déclaration de ma méthode pr mon index
        public function index(){
            try{
                

            }catch(PDOException $e){
                echo "ERREUR" . $e->getMessage();
            }
        }
    }

?>
