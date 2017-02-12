<?php
  require('php/getResultArray.php');
  $def = 'default.png';

  //$sql = "SELECT * FROM items WHERE coll_id={$colId}";
  //echo $sql;
  //$result = $conn->query($sql);
  //$items = getResultArray($result);
  $sql = "SELECT * FROM collections WHERE coll_id={$colId}";
  $result = $conn->query($sql);
  $collData = getResultArray($result);
?>
<div class='row'>
  <div class='col-md-12 header text-left'>
    <h1 class='title'><?php echo $collData[0]['collName'];?></h1>
  </div>
  <?php
  if($_SESSION['login_userId'] == $collData[0]['user_id']){
    require('php/comp/addItem.php');
  }
  ?>
  <div class='col-md-12'>
    <div class='row'>
      <?php
      if($_SESSION['login_userId'] == $collData[0]['user_id']){
        ?>

          <div class='col-md-3 cCont'>
            <a href='#' class='text-center addColl' >
              <div class='cLink text-center'>
                <img src='img/add.png'>
                <h4>Add New Item</h4>
              </div>
            </a>
          </div>
          <?php
        }
           ?>
    </div>
  </div>
