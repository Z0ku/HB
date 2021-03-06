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
          <?php require('php/comp/links.php')?>
          <link rel='stylesheet' href="css/register.css" type="text/css"/>

    </head>
    <body>
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 register-form">
                   <div class="row">
                       <div class="col-md-12">
                            <div class="col-md-6  col-md-offset-3 text-center">
                                <h1>register</h1>
                               <div class="row">
                                   <div class="col-md-12 form-group ">
                                       <label>Username</label>
                                     <input type="text" class="form-control req newUsername" required placeholder="Username">
                                   </div>
                                   <div class="col-md-12 error text-center"></div>
                                   <div class="col-md-12 form-group">
                                     <label>Email</label>
                                     <input type="email" class="form-control newEmail" required placeholder="Email">
                                   </div>
                                   <div class="col-md-12 form-group">
                                     <label>Password</label>
                                     <input type="password" class="form-control newPass" required placeholder="Password">
                                   </div>
                                   <div class="col-md-12 form-group">
                                     <label>Confirm Password</label>
                                     <input type="password" class="form-control confirmPass" required placeholder="Confirm Password">
                                   </div>
                               </div>
                               <div class="col-md-6 col-md-offset-3 form-group text-center submitRegister ">
                                   <input type="button" class=" form-control btn disabled" value="Register" id="reg">
                               </div>
                            </div>
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
    var U = 0;
    var FC = 0;
    var thread;
    var count;
    var E = $('.error');
    thread = setInterval(function(){
        count = 0;
        $('.glyphicon-ok').each(function(){
            count++;
        });
        if(count === 4){
            FC = 1;
            $('#reg').removeClass('disabled');
            $('#reg').addClass('btn-success');

        }else{
            FC = 0;
            $('#reg').addClass('disabled');
            $('#reg').removeClass('btn-success');
        }
    },200);
    function correctInput(elem){
        $(elem).siblings("label").children().remove();
        $(elem).siblings("label").append('<span class="glyphicon glyphicon-ok"></span>');
        $(elem).siblings("label").css("color","green");
        $(elem).parent().removeClass('has-error');
        $(elem).parent().addClass('has-success');
    }
     function incorrectInput(elem){
          $(elem).siblings("label").children().remove();
          $(elem).siblings("label").append('<span class="glyphicon glyphicon-remove"></span>');
          $(elem).siblings("label").css("color","red");
          $(elem).parent().removeClass('has-success');
          $(elem).parent().addClass('has-error');
     }
     function fetchUser(){
        $.ajax({
                type: "get",
                url: "php/getUserInfo.php",
                data: {newUsername :$(".newUsername").val()},
                success: function(result){
                    checkUser(result);                        }
            });

    }
    function checkUser(result){
         if(result.charAt(0) === "#"){
                showError(result,E);
                incorrectInput($('.newUsername'));
            }else{
                correctInput($('.newUsername'));
                clearError(E);
        }
    }
    function registerUser(){
      $.ajax({
              type: "get",
              url:  "php/registerUser.php",
              data: {newUsername:$(".newUsername").val(),newEmail:$(".newEmail").val(),newPass:$(".confirmPass").val()}
      })
      window.location.href = "login.php";
    }
    $(".newUsername").on("focusout",function(){
        if($(".newUsername").val() !== ""){
            fetchUser();
        }else{
            incorrectInput(this);
        }

    });

    $(".newEmail").on("focusout",function(){
        var C =  $(".newEmail").val();
        if(C !== "" && C.indexOf('@') > -1 && C.indexOf('@')+1 <= C.length-1){
          correctInput(this);
        }else{
          incorrectInput(this);
        }
    });


    $(".confirmPass").on("focusout",function(){
        if($(this).val() !== "" && $(this).val() === $(".newPass").val()){
            correctInput($(".newPass"));
            correctInput(this);
        }else{
            incorrectInput($(".newPass"));
            incorrectInput(this);
        }
    });
    $("#reg").on("click",function(){
      if(FC === 1){
         registerUser();
      }
    });
    $(document).on("keypress",function(event){
       if(event.keyCode === 13 && FC === 1){
          registerUser();
       }
    });

    $("input").addClass("input-lg");


});
</script>
