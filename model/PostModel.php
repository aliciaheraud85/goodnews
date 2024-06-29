<?php 

    //1. APPEL DE LA CONNEXION ET DE L'AUTOLOADER

    require_once(__DIR__ . '/../config/autoload.php');
    require_once(__DIR__ . '/../config/connexion.php');

    //2. DECLARATION DE MA CLASSE

    class PostModel {

        private $connexion;

        //2.1 constructeur
        public function __construct($connexion){
            $this->connexion = $connexion;
        }
        //2.2 Methodes vue "postView.php"
        public function getNewPost($limit = 9){
            $query = "SELECT * FROM post ORDER BY id DESC LIMIT :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getRubrikActu($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 1
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getRubrikPolitik($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 2
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getRubrikEco($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 3
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getRubrikSport($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 4
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getRubrikTech($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 5
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getRubrikCultur($limit = 3, $offset = 1){
            $query = "SELECT * FROM post 
            WHERE id_rubrik = 6
            ORDER BY id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        //2.3 Methode vue "readOne.php"
        public function getOnePost($id){
            $query = "SELECT * FROM post WHERE id= :id";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //2.4 Methode vue "postRubrikView.php"
        public function getRubrikPost($rubrikName, $limit = 1){
            $query = "SELECT post.*, rubrik_name
            FROM post 
            JOIN rubrik 
            ON post.id_rubrik = rubrik.id 
            WHERE rubrik_name = :rubrik
            ORDER BY post.id DESC LIMIT :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':rubrik', $rubrikName, PDO::PARAM_STR);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getPostByRubrik($rubrikName, $offset = 1, $limit = 2){
            $query = "SELECT post.*, rubrik_name
            FROM post 
            JOIN rubrik 
            ON post.id_rubrik = rubrik.id 
            WHERE rubrik_name = :rubrik
            ORDER BY post.id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':rubrik', $rubrikName, PDO::PARAM_STR);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getLatestPostRubrik($rubrikName, $offset = 3, $limit = 3){
            $query = "SELECT post.*, rubrik_name
            FROM post 
            JOIN rubrik 
            ON post.id_rubrik = rubrik.id 
            WHERE rubrik_name = :rubrik
            ORDER BY post.id DESC LIMIT :offset, :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':rubrik', $rubrikName, PDO::PARAM_STR);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
