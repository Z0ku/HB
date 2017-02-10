<?php
  $owner = "";
  if(isset($_GET['user'])){
    $owner = $_GET['user'];
  }
  session_start();
?>
<div class='row'>
  <div class='col-md-12 header text-left'>
    <h1 class='title'><?php echo $owner?>'s Collections</h1>
  </div>
  <div class='col-md-12'>
    <div class='row'>
      <?php
      if($_SESSION['login_user'] == $owner){
        ?>
          <div class='col-md-3 cCont addColl'>
            <img src='img/collectionPics/default.png'>
            <a href='#' class='cLink text-center'>Add Collection</a>
          </div>
        <?php
      }
         ?>
    </div>
</div>
