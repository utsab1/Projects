<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>
<?php if(isset($_POST['savebtn']))
{
   if(!empty($_FILES['file']['name']))
   {
    $image =  uploadFile($_FILES,'uploads/guru-image');
    $_POST['guru_image'] = $image;
   }
   else
   {
      $_POST['guru_image'] ='images/icon/avatar-06.jpg';
   }
    if(createguru($conn,$_POST))
    {
       showSuccessMsg('Guru added Successfully !!!');
       redirection('manageguru.php');
    }
}
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
                                        <strong>Add Guru</strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                      <label >Guru Full name</label>
                                      <input type="text"  name="guru_name" class="form-control" id="guru_name" placeholder="Enter guru name">
                                  </div>
                                  <div class="form-group">
                                      <label >Address</label>
                                      <input type="text"  name="guru_address" class="form-control" id="guru_address" placeholder="Enter address">
                                  </div>

                                  <div class="form-group">
                                      <label >Contact</label>
                                      <input type="text"  name="guru_contact" class="form-control" id="guru_contact" placeholder="Enter contact">
                                  </div>
                                  <div class="form-group">
                                      <label >Guru Type</label>
                                      <input type="text"  name="guru_type" class="form-control" id="guru_type" placeholder="Enter type">
                                  </div>
                                  <div class="form-group">
                                      <label >About Guru</label>
                                      <input type="text"  name="guru_description" class="form-control" id="guru_description" placeholder="Enter description">
                                  </div>

                                  <div class="form-group">
                                      <label >Image</label>
                                      <input type="file"class="form-control" name="file">
                                  </div>
                                  
                                 <div class="form-group">
                                      <label >status</label>
                                      <select class="form-control" name="guru_status" id="guru_status">
                                        <option value=""></option>
                                        <option value="available">Available</option>
                                        <option value="unavailable">Unavailable</option>
                                    </select>
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
    $('#addForm').savebtn(function(){
        
        if(!validateText($('#guru_name').val(),'guru_name')
            ||!validateText($('#guru_address').val(),'guru_address')
            ||!validateText($('#guru_description').val(),'guru_description')
            ||!validatePhone($('#guru_contact').val(),'guru_contact')
            ||!validateText($('#guru_type').val(),'guru_type')
            ||!validateText($('#guru_role').val(),'guru_role')
            ||!validateText($('#guru_status').val(),'guru_status')
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