<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
   
   <head>
      <title>Login Page</title>
      <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="/css/login.css" rel="stylesheet" type="text/css"/>
      <link href="/css/main.css" rel="stylesheet" type="text/css"/>
      <script src="/js/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script src="/js/inputAnimations.js" type="text/javascript"></script>
      <script src="js/jquery.md5.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              var pass;
              $("#carouselExampleSlidesOnly").carousel();
             $(".submitUser").on("click",function(){
                $.ajax({
                        type: 'post',
                        url: '/php/loginCheck.php',
                        data: "username="+ $(".username").val(),                        
                        success: function(result) {
                           if(result.charAt(0) !== '#'){
                               pass = result;
                               $("#carouselExampleSlidesOnly").carousel("next");
                           }else{
                               $(".error").html(result.replace('#', '')); 
                           }
                        }
                }); 
             });
          });
      </script>
   </head>
   
   <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 login-form">
                   <form action="php/loginCheck.php" method = "post">
                       <h1 class="text-center">login</h1>
                       <div class="form-group row">
                           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <div class="text-center user d-block">
                                          <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label">
                                              <i class="glyphicon glyphicon-user input-lg"></i>
                                              <input type = "text" autocomplete="off" required name = "username" placeholder="username or email" class="username form-control input-lg danger req"/>
                                          </div>
                                          <div class="col-md-6 col-md-offset-3">
                                              <input  type="button" value = " Next " class="form-control submitUser"/><br />
                                           </div>
                                          <div class="col-md-12 text-center">
                                               <a href="/pages/register.php">Not Registered?</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                         <div class="d-block img-fluid">

                                          <div class="form-group inner-addon left-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                                           <i class="glyphicon glyphicon-ok input-lg"></i>
                                           <input type = "password" name = "password" required placeholder="password" class="form-control input-lg form-control-danger req"/>

                                         </div>
                                          <div class="col-md-6 col-md-offset-3">
                                               <input  type="submit" value = " Submit " class="form-control input-lg submit"/><br />
                                           </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-12 error text-center"></div>
                            </div>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>    
       
   </body>
</html>