<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $sql = "select username from users where username = '$user_check' ";
   $ses_sql = $conn->query($sql);
      
   
   $row = $ses_sql->fetch_assoc();
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: /login.html");
   }
?>