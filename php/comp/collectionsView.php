<?php
  require('php/getResultArray.php');
  $def = 'default.png';

  $sql = "SELECT * FROM collections WHERE user_id={$ownerId}";
  $result = $conn->query($sql);
  $cols = getResultArray($result);

?>
<div class='row'>
  <div class='col-md-12 header text-left'>
    <h1 class='title'><?php echo $owner?>'s Collections</h1>
  </div>
  <?php
  if($_SESSION['login_user'] == $owner){
    require('php/comp/addColl.php');
  }
  ?>
  <div class='col-md-12'>
    <div class='row'>
      <?php
      if($_SESSION['login_user'] == $owner){
        ?>
          <div class='col-md-3 cCont'>
            <a href='#' class='text-center addColl' >
              <div class='cLink text-center'>
                <img src='img/add.png'>
                <h4>Add New Collection</h4>
              </div>
            </a>
          </div>
        <?php
      }
         ?>
      <?php
        if($cols !== FALSE){
          foreach($cols as $col){
            $link = "collection.php?id=".$col['coll_id'];
              ?>
              <div class='col-md-12 cCont'>
                <a href='<?php echo $link; ?>' class='text-center row'>
                  <div class='col-md-4 colPicCont text-center'>
                    <img src='img/collectionPics/default.png'>
                  </div>
                  <div class='col-md-8 text-left'>
                    <h3><?php echo $col['collName'];?></h3>
                    <p><?php echo $col['collDesc'];?></p>
                  </div>
                </a>
              </div>
              <?php
          }
        }
      ?>
    </div>
</div>
