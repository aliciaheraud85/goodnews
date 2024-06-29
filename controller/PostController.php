<?php

//1. APPEL DE L'AUTOLOADER

require_once(__DIR__. '/../config/autoload.php');

//2.DECLARATION DE MA CLASSE

    class PostController {
        private $postModel;
        private $connexion;

        // Mise en place de mon constructeur

        public function __construct($postModel, $connexion){
            $this -> postModel = $postModel;
            $this-> connexion = $connexion;
        }

        // Déclaration de ma méthode pr mon index
        public function index(){
            try{
                $newPost = $this->postModel->getNewPost(9);
                $rubrikActu = $this->postModel->getRubrikActu(4);
                include(__DIR__ . '/../views/postView.php');
            }catch(PDOException $e){
                echo "ERREUR" . $e->getMessage();
            }
        }

        public function show($id){
            try{
                $onePost = $this->postModel->getOnePost($id);
                if ($onePost){
                    include(__DIR__ . '/../views/readOne.php');
                }else{
                    echo "Post non trouvée";
                }
            }catch(PDOException $e){
                echo "Erreur:" . $e->getMessage();
            }
        }

        public function rubrik($rubrikName){
            try{
                $rubrikPost = $this->postModel->getRubrikPost($rubrikName);
                $postByRubrik = $this->postModel->getPostByRubrik($rubrikName);
                $latestPostRubrik = $this->postModel->getLatestPostRubrik($rubrikName);
                if($rubrikPost){
                    include(__DIR__ . '/../views/postRubrikView.php');
                }else{
                    echo "Posts non trouvés.";
                }
            }catch(PDOException $e){
                echo "ERREUR" . $e->getMessage();
            }
        }
    }
?>
