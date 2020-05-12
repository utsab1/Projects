  <?php include 'layouts/header.php';
  include 'layouts/sidebar.php'
  $adm_id = $_GET['ref'];

if(isset($_POST['savebtn']))
{
  if(!empty($_FILES['file']['name']))
   {
    unlink($adminInfo['admin_image']);
    $image =  uploadFile($_FILES,'uploads/admin-image');
    $_POST['admin_image'] = $image;
}

   if(updateAdminUser($conn,$_POST))
   {
   showSuccessMsg('User Updated Successfully !!!');
      redirect('manageadminuser.php');
}

}

?>
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Admin User</strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                      <label >First name</label>
                                      <input type="text"  name="adm_fname" value="<?php echo $userInfo['adm_fname'];?>" class="form-control" id="adm_fname" placeholder="Enter first name">
                                  </div>
                                  <div class="form-group">
                                      <label >Last name</label>
                                      <input type="text" name="adm_lname" value="<?php echo $userInfo['adm_lname'];?>"class="form-control" id="adm_lname" placeholder="Enter Last name">
                                  </div>
                                  
                                  <div class="form-group">
                                      <label >Email address</label>
                                      <input type="email" name="adm_email" value="<?php echo $userInfo['adm_email'];?>" class="form-control" id="adm_email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label >Contact</label>
                                      <input type="text" name="adm_contact" value="<?php echo $userInfo['adm_contact'];?>" class="form-control" id="adm_contact" placeholder="Enter contact">
                                  </div>
                                  <?php if(!empty($userInfo['admin_image'])): ?>
                                  <div class="form-group">
                                      <label >Existing Image</label>
                                     <img src="<?php echo $userInfo['admin_image']; ?>" height="200px">
                                  </div>
                                   <?php endif; ?>
                                   <div class="form-group">
                                      <label >Image</label>
                                      <input type="file"class="form-control" name="file">
                                  </div>  
                                   
                                   <div class="form-group">
                                      <label >Role</label>
                                      <select class="form-control" name="adm_role" id="adm_role">
                                     
                                        <option <?php if($userInfo['adm_role']=='admin') echo 'selected="selected"';   ?> value="adm">admin</option>
                                        <option <?php if($userInfo['adm_role']=='Superadmin') echo 'selected="selected"';?>value="Superadm">Superadmin</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                      <label >status</label>
                                        <select class="form-control" name="adm_status" id="adm_status">
                                       
                                        <option  <?php if($userInfo['adm_status']=='active') echo 'selected="selected"';?> value="active">Active</option>
                                        <option  <?php if($userInfo['adm_status']=='in_active') echo 'selected="selected"';?> value="in_active">Inactive</option>
                                    </select>
                                </div>
                                  
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <input type="hidden" name="adm_id" value="<?php echo $userInfo['adm_id']; ?>">
                                    </div>
                                </div>
                               
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Hamro Gunaso. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
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

    
    $('#addForm').submit(function(){
        
        var number = /[0-9 -()+]+$/;

        if(!validateText($('#adm_fname').val(),'adm_fname')
            ||!validateText($('#adm_lname').val(),'adm_lname')
            ||!validateEmail($('#adm_email').val(),'adm_email')
            ||!validatePhone($('#adm_contact').val(),'adm_contact')
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

    </script>
     </body>
     <?php include 'layouts/footer.php'; ?>
</html>