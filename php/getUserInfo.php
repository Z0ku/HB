<?php

    include("config.php");
    require("getData.php");
    session_start();

    $myusername = mysqli_real_escape_string($conn,$_GET['newUsername']);

    if(exists($myusername,"users","username",$conn) !== FALSE){
        echo "#Username : ".$myusername." is already taken";
    }
?>
