<?php 

//1. APPEL DE LA CONNEXION & L'AUTOLOADER

    require_once(__DIR__ . '/config/connexion.php');
    require_once(__DIR__ . '/config/autoload.php');

//2. APPEL LE ROUTER

    require_once(__DIR__ . '/controller/router.php');
?>
