<?php
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      $user = $_POST['user'];
      $userPass = $_POST['userPass'];
      $inputPass = md5($_POST['inputPass']); 
     if($userPass === $inputPass){
         $_SESSION['login_user'] = $user;
     }else{
         echo "#Wrong Password";
     }
     
 }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

