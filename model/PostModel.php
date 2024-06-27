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

        public function getLatestPost(){
            $query = "SELECT * FROM post ORDER BY id DESC LIMIT 9";
            $stmt = $this->connexion->prepare($query);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        
    }
?>
