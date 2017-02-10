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
    <?php
          require('php/comp/links.php');

    ?>
 </head>

 <body>
   <?php require('php/comp/nav.php'); ?>
   <div class='container-fluid page'>
      <div class='row'>
        <?php require('php/comp/side-nav.php');?>
        <div class='col-md-2 buffer'></div>
        <div class='col-md-10'>
          <div class='container'>
            <?php require('php/pages/viewCollection.php'); ?>
          </div>
        </div>
      </div>
   </div>
 </body>

</html>
