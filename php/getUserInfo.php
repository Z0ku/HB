<?php

 include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $myusername = mysqli_real_escape_string($conn,$_POST['newUsername']);
      $sql = "SELECT username FROM users WHERE BINARY username = '$myusername'";
      $result = $conn->query($sql);
      $count = $result->num_rows;
      if(count !== 0){
          echo "#".$myusername." is already taken";
      }
   } 