<?php 

session_start();

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    if($_GET['id'] !== $_SESSION['unumber']){
      header("Location: login.php");
      }
    
?>