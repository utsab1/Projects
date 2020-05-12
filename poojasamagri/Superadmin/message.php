<?php include 'layouts/header.php';
 include 'layouts/sidebar.php';

//  if(isset($_POST['savebtn']))
//   {
//   //  $image =  uploadFile($_FILES,'uploads/user-image');
//   // $_POST['user_image'] = $image;
//   if(!empty($_FILES['file']['name']))
//    {
//     $image =  uploadFile($_FILES,'uploads/admin-image');
//     $_POST['admin_image'] = $image;
//    }
//    else
//    {
//       $_POST['admin_image'] ='images/icon/avatar-06.jpg';
//    }
//     if(createAdminUser($conn,$_POST))
//     {
//        showSuccessMsg('User Created Successfully !!!');
//        redirect('manageadminuser.php');
//     }
// }
?>
      

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Send Message To user </strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                      <label >Mobile Number</label>
                                      <input type="text"  name="adm_fname" class="form-control" >
                                  </div>
                                   <div class="form-group">
                                    <label >Country Code</label>
                                      <select class="form-control" name="code" >
                                        <option value="">Select Here..</option>
                                        <option value="977">Nepal - +977</option>
                                        <option value="91">India - +91</option>
                                        <option value="1">USA - +1</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                      <label >Enter Message</label>
                                      <textarea name="message"></textarea>
                                  </div>
                                </div>
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                               
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</script>
    
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
    
    $('#addForm').savebtn(function(){
        
        var number = /[0-9 -()+]+$/;
        
       var adm_password = $('#adm_password').val();
       var adm_confirm_password = $('#adm_confirm_password').val();
       console.log(adm_password,adm_confirm_password)
        if(!validateText($('#adm_fname').val(),'adm_fname')
            ||!validateText($('#adm_lname').val(),'adm_lname')
            ||!validateEmail($('#adm_email').val(),'adm_email')
            ||!validatePhone($('#adm_contact').val(),'adm_contact')
            ||!validateText($('#adm_password').val(),'adm_password')
            ||!checkPassword(adm_password,adm_confirm_password,'adm_password','adm_confirm_password')
            ||!validateText($('#adm_role').val(),'adm_role')
            ||!validateText($('#adm_status').val(),'adm_status')
            )
        {
            return false;
        }
        else
        {
            $('#addForm').submit();
        }

       
    });

    

</body>
<?php include 'layouts/footer.php';?>
</html>
<!-- end document-->

</body>

</html>
<!-- end document-->