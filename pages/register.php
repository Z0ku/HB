<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/innerIcon.css" rel="stylesheet" type="text/css"/>
        <link href="/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="../css/register.css" rel="stylesheet" type="text/css"/>
        <script src="/js/jquery-3.1.1.min.js" type="text/javascript"></script>
          <script type="text/javascript">
          $(document).ready(function(){
              $("input[name*='username']").on("focusout",function(){
                  $(".hid").load("/php/getUserInfo.php");
                  console.log($(".hid").html());
                  
              });
          });
          </script>
    </head>
    <body>
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 register-form">
                   <form action="" method="post">
                       <h1 class="text-center">register</h1>
                       <div class="form-group row">
                           <div class="form-group inner-addon right-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                              <input type = "text" autocomplete="off" required name = "username" placeholder="username" class="form-control input-lg danger"/><br /><br />
                           </div>
                           <div class="form-group inner-addon right-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                               <input type = "text" name = "email" required placeholder="email" class="form-control input-lg form-control-danger"/><br/><br />
                           </div>
                           <div class="form-group inner-addon right-addon col-md-8 col-md-offset-2 col-form-label has-danger">
                               <input type = "password" name = "password" required placeholder="password" class="form-control input-lg form-control-danger"/><br/><br />
                           </div>
                           <div class="hid" style="display:none"></div>
                           <button class="test"></button>
                   </form>
                </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
                              
                               
                               
                           
