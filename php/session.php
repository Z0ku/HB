<?php
   include('config.php');
   session_start();
   $loginUser = "";
   if(!isset($_SESSION['login_user'])){
      
      header("location: /login.html");
   }else{
        $loginUser = $_SESSION['login_user'];
   }
?>