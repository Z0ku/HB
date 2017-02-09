<?php

   include("config.php");
      // username and password sent from form

    $myusername = mysqli_real_escape_string($conn,$_GET['username']);

    $sql = "SELECT password FROM users WHERE BINARY username = '$myusername'";
    $result = $conn->query($sql);
    $count = $result->num_rows;

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count != 0) {
       $row = $result->fetch_assoc();
       echo $row["password"];
       header("/index.php");
    }else {
       echo "#That Username does not exist";
    }
