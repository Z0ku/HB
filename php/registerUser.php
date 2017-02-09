<?php
include("config.php");
   // username and password sent from form

   $newUsername = mysqli_real_escape_string($conn,$_GET['newUsername']);
   $newEmail = mysqli_real_escape_string($conn,$_GET['newEmail']);
   $newPass = md5(mysqli_real_escape_string($conn,$_GET['newPass']));
   $newId = 2;
   $sql = "SELECT MAX(user_id) FROM users";
   $result = $conn->query($sql);

   if($result->num_rows > 0){
       $row = $result->fetch_assoc();
       $newId = $row['MAX(user_id)']+1;
   }
   $sql = "INSERT INTO users VALUES ('{$newId}','{$newUsername}','{$newPass}','{$newEmail}')";
   $conn->query($sql);



?>
