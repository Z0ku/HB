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
        <script src="../js/inputAnimations.js" type="text/javascript"></script>
          <script type="text/javascript">
          $(document).ready(function(){
              $("input[name*='username']").on("focusout",function(){
                  $(".hid").load("/php/getUserInfo.php");
                  console.log($(".hid").html());
                  
              });
              var ctr = 0;
              for(;1+ctr <= 12;ctr++){
                  $("#month").append("<option value=\""+(1+ctr)+"\">"+(1+ctr)+"</option>");
              }
              for(ctr = 0;1940+ctr <= 2017;ctr++){
                  $("#year").append("<option value=\""+(1940+ctr)+"\">"+(1940+ctr)+"</option>");
              }
              for(ctr = 0;1+ctr <= 31;ctr++){
                  $("#day").append("<option value=\""+(1+ctr)+"\">"+(1+ctr)+"</option>");
              }
          });
          </script>
    </head>
    <body>
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 register-form">
                   <div class="row">
                       <div class="col-md-3">
                           
                           <img src="../img/logo.png" alt=""/>
                       </div>
                       <div class="col-md-9">
                           <form class="row" action="" method="post">
                               <div class="col-md-6">
                                  <div class="row">
                                      <div class="col-md-12 form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control req" placeholder="Username">
                                      </div>
                                      <div class="col-md-12 form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                      </div> 
                                      <div class="col-md-12 form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                      </div>
                                      <div class="col-md-12 form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                      </div>
                                  </div>
                               </div>
                                <div class="col-md-6">
                                  <div class="row">
                                      <div class="col-md-12 form-group form-inline">
                                        <label>BirthDate</label>
                                        <select class="form-control" id="month">
                                            <option value="" disabled selected>MM</option>
                                        </select>
                                        <select class="form-control" id="day">
                                            <option value="" disabled selected>DD</option>
                                        </select>
                                        <select class="form-control" id="year">
                                            <option disabled selected>YY</option>
                                        </select>
                                      </div>
                                      <div class="col-md-12 form-group">
                                        <label>Location</label>
                                        <select name="country" class="form-control">
                                            <option>Country</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="City" name="city">
                                      </div>
                                      
                                      <div class="col-md-12 form-group form-inline">
                                          <label>Sex : &nbsp;</label>
                                        <div class="form-group">
                       
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1"> Male
                                            &nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2"> Female
                                          
                                        </div>
                                      </div>
                                  </div>
                                </div>
                               </form>
                            </div>
                       </div>
                   </div>
                
                </div>
            </div>
        </div>
        
    </body>
</html>
                              
                               
                               
                           
                                        
