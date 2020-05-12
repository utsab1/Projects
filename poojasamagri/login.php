<?php
session_start();
$msg='';
 include 'app/call.php';
 if(checkUserLogin())
{
redirect('dashboard.php');
}
if(isset($_POST['loginbtn']))
{

    $user_email= $_POST['user_email'];
    $user_password= md5($_POST['user_password']);

    $stmtlogin= $conn->prepare("SELECT * FROM tbl_userlogin WHERE
        user_email=:user_email AND
     user_password=:user_password AND user_status='active'");
    $stmtlogin->bindParam(':user_email',$user_email);
        $stmtlogin->bindParam(':user_password',$user_password);
            $stmtlogin->execute();
            if($stmtlogin->rowCount()>0)
             {
               
               $User = $stmtlogin->fetch();
                $_SESSION['user']['id'] = $User['user_id'];
                 redirect('dashboard.php');
            }

            else{
             $msg="Invalid UserName or Password";
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
    <title>Login</title>

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
    <div class="page-wrapper">
        <div class="page-content--bge5"style="background-image: url(images/pooja1.jpg);"  >
            <div class="container">
                <div class="login-wrap" >
                    <div class="login-content" >
                        <div class="login-logo " style=" ">
                            <a href="#">
                                <img src="images/logo3.PNG" alt="Poojasamagri">

                            </a>
                              <div class="modal_body_left modal_body_left1">
                        <p style="text-align: center; color: black; margin: 16px;">
                            Sign In now, Let's start your Pooja Shopping. Don't have an account?
                            <a href="signup.php" data-toggle="modal" data-target="#myModal2">
                                Sign Up Now</a>
                        </p>
                    </div>
                        </div>
                        <h2 style="text-align: center; color: white;">User Login</h2>
                        <div class="login-form">

                            <form action="" method="post">
                                 <h6 style="color: red; text-align: center;"><?php echo $msg;?></h6>
                                <div class="form-group">
                                    <label  style="color: white;">Email Address</label>
                                    <input class="au-input au-input--full" type="email"  name="user_email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label style="color: white;">Password</label>
                                    <input class="au-input au-input--full" type="password"  name="user_password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label  style="color: white;">
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="loginbtn">sign in</button>
                            </form>
                        </div>
                    </div>
                </div> b     
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

</body>

</html>