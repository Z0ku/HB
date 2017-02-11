<?php
  include 'config.php';
  session_start();
  $user = $_GET['user'];
  $userPass = $_GET['userPass'];
  $inputPass = md5($_GET['inputPass']);
  if($userPass === $inputPass){
     $_SESSION['login_user'] = $user;
     $sql = "SELECT user_id FROM users WHERE username='{$_SESSION['login_user']}'";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
     $_SESSION['login_userId'] = $row['user_id'];
     echo $_SESSION['login_userId'];
     echo "success";
  }else{
     echo "#Wrong Password";
  }

?>
