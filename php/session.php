<?php
   include('config.php');
   session_start();
   $loginUser = "";
   if(!isset($_SESSION['login_user'])){
     header("Location: login.php");
   }else{
        $loginUser = $_SESSION['login_user'];
   }
?>
