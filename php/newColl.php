<?php
   include('session.php');

   $newCollName = mysqli_real_escape_string($conn,$_GET['newColl']);
   $newDesc = mysqli_real_escape_string($conn,$_GET['newDesc']);
   $newCollId = 0;
   $sql = "SELECT MAX(coll_id) FROM collections";
   $result = $conn->query($sql);

   if($result->num_rows > 0){
       $row = $result->fetch_assoc();
       $newCollId = $row['MAX(coll_id)']+1;
   }

   $sql = "INSERT INTO collections VALUES ('{$newCollId}','{$_SESSION['login_userId']}','{$newCollName}','{$newDesc}')";
echo $sql;
   $conn->query($sql);
   header('Location ../viewCollections.php');
?>
