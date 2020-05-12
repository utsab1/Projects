<?php
  include 'app/call.php';
  if(isset($_POST['savebtn']))
  {
  //  $image =  uploadFile($_FILES,'uploads/user-image');
  // $_POST['user_image'] = $image;
 if(!empty($_FILES['file']['name']))
   {
    $image =  uploadFile($_FILES,'uploads/user-image');
    $_POST['user_image'] = $image;
   }
   else
   {
      $_POST['user_image'] ='images/icon/default.jpg';
   }
 
    if(createUser($conn,$_POST))
    {
       showSuccessMsg('User Created Successfully !!!');
       redirection('login.php');
    }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
  </head>

  <body class="animsition">
    <div class="page-wrapper" >
        <div class="page-content--bge5" >
            <div class="container" style="background-image: url('images/logindiyo.jpg');">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo3.PNG" alt="pooja" width="100px" height="100px">
                            </a>
                          </div>
                            <center><h2>SignUp Form</h2></center>

                            
      <form class="login-form" id="loginForm" method="post" enctype="multipart/form-data">
            <div class="input-group">
             <div class="form-group" style="margin-right: 22px;">
           
                                      <label >First name</label>
                                      <input type="text"  name="user_fname" class="form-control" id="user_fname" placeholder="Enter first name">
                                  </div>
                                  <div class="form-group">
                                      <label >Last name</label>
                                      <input type="text"  name="user_lname" class="form-control" id="user_lname" placeholder="Enter Last name">
                                  </div>
                                  <div class="form-group" style="margin-right: 22px;">
                                      <label >Address</label>
                                      <input type="address" name="user_address"class="form-control" id="user_address" placeholder="Enter address">
                                  </div>
                                  <div class="form-group">
                                      <label >Email address</label>
                                      <input type="email" name="user_email"class="form-control" id="user_email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label >Contact</label>
                                      <input type="text"  name="user_contact" class="form-control" id="user_contact" placeholder="Enter contact">
                                  </div>
                                  <div class="form-group">
                                    <label >Gender
                                     <input type="radio" name="user_gender" value="male" id="user_gender"> Male <input type="radio" name="user_gender" value="female" id="user_gender"> Female <input type="radio" name="user_gender" value="other" id="user_gender"> Other
                                   </label>
                                  </div>
                                  </div>
                                  <div class="form-group">
                                      <label >Password</label>
                                      <input type="password"  name="user_password" class="form-control" id="user_password" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                      <label >Confirm Password</label>
                                      <input type="password"class="form-control" id="user_confirm_password" placeholder="Confirm Password">
                                  </div>
                                   <div class="form-group">
                                      <label >Image</label>
                                      <input type="file"class="form-control" name="file" id="user_image">
                                  </div>

                                <div class="login-checkbox">
                                    <label> <i class="icon_check_alt2"></i><p></p>
                                        <input type="checkbox" onchange="checkTerms()" id="agree" name="agree" > I have read and Agree the <b data-toggle="modal" data-target="#largeModal" >terms and condition</b>
                                    </label>
                                    <span id="checboxerror" style="color: transparent;"></span>
                                </div>

                                <!-- <p><input type="checkbox" required name="terms">I have read and accept<p data-toggle="modal" data-target="#largeModal" ><i class="icon_check_alt2"></i>terms and condition</p></p> -->
            <button id="signupbtn" type="submit" name="savebtn" class="btn btn-info btn-lg btn-block" type="button">Signup</button>
        </div>

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="largeModalLabel">Terms and Conditions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
            <div class="modal-body">
              <ol class="list-group" type="disc">
                <li class="list-group-item">All the student must be under the rules & regulation enlisted in the students handbook of kist college.</li>
                <li class="list-group-item">No complaints which are against the rules of college would be approved.</li>
                <li class="list-group-item">No Users are allowed to use vulgar word while complaining.</li>
              </ol>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
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
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="">
      $(document).ready(function(){
           $('#signupbtn').prop('disabled', true);
      });
      function checkTerms(){
        if($('#agree').is(':checked')){
         $('#signupbtn').prop('disabled', false);

        }
        else{
           $('#signupbtn').prop('disabled', true);
          
        }
      }
    </script>
     <script type="text/javascript">


     
    function validateText(text,id)
    {
        var textPattern = /^[a-zA-Z0-9!-”$%&’()*\+,\/;\[\\\]\/\s^_.`{|}~]+$/;
            if (!textPattern.test(text)) {
            $("#"+id).css({"border": "1px solid red"});
            $('#'+id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;
            }
            else
            {
                return true;
            }
    }

    function validateEmail(email,id)
    {
        var emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

         if (!emailPattern.test(email)) {
            $("#"+id).css({"border": "1px solid red"});
            $('#'+id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;
            }
            else
            {
                return true;
            }

    }

    function validatePhone(phone,id)
    {
         var phonePattern = /^(?:\+\d{2})?\d{10}(?:,(?:\+\d{2})?\d{10})*$/;
         if (!phonePattern.test(phone)) {
            $("#"+id).css({"border": "1px solid red"});
            $('#'+id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;
            }
            else
            {
                return true;
            }
    }

    function checkPassword(password,confirm_password,id,confirm_id)
    {
        if(password!=confirm_password)
        {
            $("#"+id).css({"border": "1px solid red"});
            $("#"+confirm_id).css({"border": "1px solid red"});
            $('#'+confirm_id).focus();
            setTimeout(function () {
                $('#'+id).css({"border": "1px solid #ddd"});
                $('#'+confirm_id).css({"border": "1px solid #ddd"});
            }, 5000);

            return false;  
        }
        else
        {
            return true;
        }
    }


    
    $('#loginForm').submit(function(){
        
        var number = /[0-9 -()+]+$/;
        var checked = $("#agree").prop("checked") ? true : false;
        
       var user_password = $('#user_password').val();
       var user_confirm_password = $('#user_confirm_password').val();
       console.log(user_password,user_confirm_password)
        if(!validateText($('#user_fname').val(),'user_fname')
            ||!validateText($('#user_lname').val(),'user_lname')
            ||!validateEmail($('#user_email').val(),'user_email')
            ||!validatePhone($('#user_contact').val(),'user_contact')
            ||!validateText($('#user_password').val(),'user_password')
            ||!checkPassword(user_password,user_confirm_password,'user_password','user_confirm_password')
            ||!validateText($('#user_role').val(),'user_role')
            ||!validateText($('#user_status').val(),'user_status')
            
            )
        {
            if(!checked)
            {

              document.getElementById('checboxerror').innerHTML =alert('Please agree term and condition.') ;
            }
           
            return false;
        }
        else
        {
            $('#loginForm').submit();
        }

       
    });

    

    </script>

  </body>

  </html>
  <!-- end document-->