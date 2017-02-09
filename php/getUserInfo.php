<?php

    include("config.php");

    session_start();

    $myusername = mysqli_real_escape_string($conn,$_GET['newUsername']);
    $sql = "SELECT username FROM users WHERE BINARY username = '$myusername'";
    $result = $conn->query($sql);
    $count = $result->num_rows;
    if($count !== 0){
        echo "#Username : ".$myusername." is already taken";
    }
?>
