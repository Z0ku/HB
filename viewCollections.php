<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   include('php/session.php');
   $owner = $_SESSION['login_user'];
   if(isset($_GET['user'])){
     $owner = $_GET['user'];
   }
?>
<html>

 <head>
    <title>HB</title>
    <?php require('php/comp/links.php');?>

 </head>

 <body>
  
   <div class='container-fluid page'>
      <div class='row'>
        <?php require('php/comp/side-nav.php');?>
        <div class='col-md-2 buffer'></div>
        <div class='col-md-10'>
          <div class='row'>
              <div class='col-md-10 col-md-offset-1 view'>
                <?php require('php/comp/collectionsView.php');?>
              </div>
          </div>
        </div>
      </div>
   </div>
 </body>

</html>
<?php require('php/comp/jslinks.php')?>
<script>
  $(".addColl").on("click",function(){
    $(".addForm").slideToggle();
  });
</script>
