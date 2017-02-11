<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

   <head>
      <title>Login Page</title>
      <?php require('php/comp/links.php')?>
      <link href="css/loginStyle.css" rel="stylesheet" type="text/css"/>

   </head>

   <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-6 col-md-offset-3 login-form">

                       <h1 class="text-center">login</h1>
                       <div class="form-group row">
                        <div id="myCarousel" class="carousel slide" data-interval="500">

                        <div class="carousel-inner" role="listbox">
                              <div class="item active">
                               <div class="text-center user d-block">
                                  <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label">
                                      <i class="glyphicon glyphicon-user input-lg"></i>
                                      <input type = "text" autocomplete="off" required name = "username" placeholder="username" class="username form-control input-lg danger req"/>
                                  </div>
                                  <div class="col-md-6 col-md-offset-3">
                                      <input  type="button" value = " Next " class="form-control submitUser"/><br />
                                   </div>
                                  <div class="col-md-12 text-center">
                                       <a href="register.php">Not Registered?</a>
                                  </div>
                                </div>
                              </div>

                              <div class="item">
                                    <div class="d-block img-fluid">
                                      <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                                       <i class="glyphicon glyphicon-ok input-lg"></i>
                                       <input type = "password" name = "password" required placeholder="password" class="pass form-control input-lg form-control-danger req"/>
                                    </div>
                                    <div class="col-md-6 col-md-offset-3">
                                        <input  type="button" value = " Sign In " class="form-control input-lg submit"/><br />
                                    </div>
                                    </div>
                              </div>
                        </div>

                               <div class="col-md-12 error text-center"></div>


                           </div>
                       </div>
               </div>
           </div>
       </div>

   </body>
</html>
<?php require('php/comp/jslinks.php')?>
<script type="text/javascript">
    $(document).ready(function(){
        var pass = "";
        var user = "";
        var confirm = 0;
        var S = 0;
        var E = $(".error");
        $("#myCarousel").carousel('pause');

       function checkUser(){
          $.ajax({
                  type: 'get',
                  url: 'php/loginCheck.php',
                  data: {username: $(".username").val()},
                  success: function(result) {
                     if(result.charAt(0) !== '#'){
                         pass = result;
                         clearError(E);
                         user = $(".username").val();
                         $("#myCarousel").carousel('next');

                     }else{
                         showError(result,E);
                     }
                  }
          });
       }
      function set(){
           S = 1;
       }
       function confirmUser(){
          $.ajax({
                  type: 'get',
                  url: 'php/confirmUser.php',
                  data: {user: user,userPass:pass,inputPass:$(".pass").val()},
                  success: function(result) {
                      if(result.charAt(0) === '#'){
                          showError(result,E);
                      }else{
                  //      showError(result,E);
                          window.location.href = "index.php";
                      }
                  }
              });

       }

       $(document).on("keypress",function(event){
           if(event.keyCode === 13 && pass===""){

               checkUser();
           }else if(event.keyCode === 13){
               confirmUser();
           }
       });
       $(".submitUser").on("click",function(){
              checkUser();
       });
      $(".submit").on("click",function(){
              confirmUser();
       });
    });
</script>
