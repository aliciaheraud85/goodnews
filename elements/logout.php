<?php 
session_start();
session_destroy();
header('location: /goodnews/index.php');
exit;
?>