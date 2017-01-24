<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   
   include("php/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = md5($_POST['password']); 
      $sql = "SELECT password FROM users WHERE username = '$myusername'";
      $result = $conn->query($sql);
      $count = $result->num_rows;
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count != 0) {
         $row = $result->fetch_assoc();
         if($row["password"] == $mypassword){
            $_SESSION['login_user'] = $myusername;
            header("location: /index.php");
         }else{
            $error = "Wrong Password";          
         }
         
      }else {
          
         $error = "Your Login Name and/or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="/css/login.css" rel="stylesheet" type="text/css"/>
      <link href="/css/main.css" rel="stylesheet" type="text/css"/>
      <script src="/js/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              $("input").on("focus",function(){
                 $(this).animate({
                    'opacity': '1' 
                 },80); 
              });
              $("input").on("focusout",function(){
                 $(this).animate({
                    'opacity': '0.6' 
                 },80); 
                 var T = $.trim($(this).val());
                 if(T === ""){
                    $(this).parent().addClass("has-error");
                 }else{
                    $(this).parent().removeClass("has-error");
                 }
              });
              
              $(".submit").hover(function(){
                  $(this).animate({
                    'opacity': '1' 
                 },50);
              },function(){
                  $(this).animate({
                    'opacity': '0.6' 
                 },50);
              });
          });
      </script>
   </head>
   
   <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-6 col-md-offset-3 login-form">
                   <form action="" method = "post">
                       <h1 class="text-center">login</h1>
                       <div class="form-group row">
                           <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label">
                              <i class="glyphicon glyphicon-user input-lg"></i>
                              <input type = "text" autocomplete="off" required name = "username" placeholder="username or email" class="form-control input-lg danger"/><br /><br />
                           </div>
                           <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                               <i class="glyphicon glyphicon-ok input-lg"></i>
                               <input type = "password" name = "password" required placeholder="password" class="form-control input-lg form-control-danger"/><br/><br />
                           </div>
                           
                           <div class="col-md-6 col-md-offset-3">
                               <input  type="submit" value = " Submit " class="form-control input-lg submit"/><br />
                           </div>
                           <div class="col-md-12 text-center">
                               <a href="/pages/register.php">Not Registered?</a>
                           </div>
                           <div class=" error col-md-12 text-center"><?php echo $error?></div>
                       </div>
                   </form>
               </div>
           </div>
       </div>    
       
   </body>
</html>