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

        public function getNewPost($limit = 9){
            $query = "SELECT * FROM post ORDER BY id DESC LIMIT :limit";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getOnePost($id){
            $query = "SELECT * FROM post WHERE id= :id";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getRubrikPost($rubrikName){
            $query = "SELECT post.*, rubrik_name 
            FROM post 
            INNER JOIN rubrik 
            ON post.id_rubrik = rubrik.id 
            WHERE rubrik_name = :rubrik
            ORDER BY post.id DESC";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':rubrik', $rubrikName, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
