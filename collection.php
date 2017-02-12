<?php
   require('php/session.php');
   require('php/getData.php');
   $colId;
   if(isset($_GET['id'])){
     $colId = $_GET['id'];
   }
?>
<html>

 <head>
    <title>HB</title>
    <?php
          require('php/comp/links.php');
    ?>

 </head>

 <body>

   <div class='container-fluid page'>
      <div class='row'>
        <?php require('php/comp/side-nav.php');?>
        <div class='col-md-2 buffer'></div>
        <div class='col-md-10'>
          <div class='row'>
              <div class='col-md-10 col-md-offset-1 view'>
                <?php
              if(isset($colId) && exists($colId,"collections","coll_id",$conn)){
                include('php/comp/collectionView.php');
                ?>
                <?php
              }else{
                echo "<h1>Collection not found</h1>";
              }
                ?>
              </div>
          </div>
        </div>
      </div>
   </div>
 </body>

</html>
<?php require('php/comp/jslinks.php')?>
<script>
var tDesc = $("#tDesc").clone();
var tDescArea = "<textarea class='form-control' value='' id='tDesc' name='tDesc'></textarea>";
$(".addColl").on("click",function(){
  $(".addForm").slideToggle();
$("#td").change(function(){
    $("#tDesc").remove();
    switch($(this).val()){
      case "0":
        $(this).parent().append($(tDesc).clone());
        $("#tDesc").attr("type","number");
        $("#tDesc").attr("placeholder","Input Amount");break;
      case "1":
        $(this).parent().append(tDescArea);break;
      default:
        $(this).parent().append($(tDesc).clone());break;
    }
  });
});
</script>
