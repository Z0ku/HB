<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   include('php/session.php');
?>
<html>

   <head>
      <title>HB</title>
      <?php require('php/comp/links.php');
            require('php/comp/nav.php');
      ?>
   </head>

   <body>
      <h1>Welcome <?php echo $loginUser; ?></h1>
      <h2><a href = "php/logout.php">Sign Out</a></h2>
   </body>

</html>
