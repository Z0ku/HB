<?php
  session_start();
  $user = $_GET['user'];
  $userPass = $_GET['userPass'];
  $inputPass = md5($_GET['inputPass']);
  if($userPass === $inputPass){
     $_SESSION['login_user'] = $user;
     echo "success";
  }else{
     echo "#Wrong Password";
  }

?>
