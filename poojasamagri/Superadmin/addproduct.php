
<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>
<?php if(isset($_POST['savebtn']))
{
   if(!empty($_FILES['file']['name']))
   {
    $image =  uploadFile($_FILES,'uploads/product-image');
    $_POST['product_image'] = $image;
   }
   else
   {
      $_POST['product_image'] ='images/icon/avatar-06.jpg';
   }
    if(createProduct($conn,$_POST))
    {
       showSuccessMsg('Product added Successfully !!!');
       redirection('manageproduct.php');
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
                                    <div class="card-header" style="text-align: center; font-style: bold;">
                                        <strong>Add Product</strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                      <label >Product name</label>
                                      <input type="text"  name="product_name" class="form-control" id="product_name" placeholder="Enter Product name">
                                  </div>
                                   <div class="form-group">
                                    <label>Product For</label>
                                      <select class="form-control" name="product_for" id="product_for"  value="">
                                        <option value=""></option>
                                        <option value="lakhbatti">Lakhbatti</option>
                                        <option value="hawan">Hawan</option>
                                        <option value="satyanarayanpuja">SatyaNarayanPuja</option>
                                        <option value="birthdaypuja">BirthdayPuja</option>
                                        <option value="pitrikarya">Pitrikarya</option>
                                        <option value="rudri">Rudri</option>
                                        <option value="laxmipuja">LaxmiPuja</option>
                                        <option value="durgapuja">DurgaPuja</option>
                                        <option value="aarati">Aarati</option>
                                        <option value="saptaha">Saptaha</option>
                                        <option value="swayambunathpuja">SwayambunathPuja</option>
                                        <option value="chhath">Chhath</option>
                                        <option value="santipuja">SantiPuja</option>
                                    </select>
                                </div>
                                  
                                   <div class="form-group">
                                    <label>Product Category</label>
                                      <select class="form-control" name="product_category" id="product_category"  value="">
                                        <option value=""></option>
                                        <option value="agarbatti">Agarbatti&Dhoop</option>
                                        <option value="batti">Diyo&Batti</option>
                                        <option value="clothes">Clothes And Shoes</option>
                                        <option value="untensils">Untensils</option>
                                        <option value="pujasamagri">Pujasamagri</option>
                                        <option value="jwelery">Jwelery</option>
                                        <option value="statue">God Statue</option>
                                        <option value="oils">Oils</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                  <div class="form-group">
                                      <label > Please Choose Product color</label><br>
                                      
                                     <input type="color" name="product_color" value="product_color">
                                  </div>

                                      <div class="form-group">
                                      <label >Product price(Rs.)</label>
                                <input type="number"  name="product_price" class="form-control" id="product_price" placeholder="Enter Product price">
                                  </div>

                                      <div class="form-group">
                                      <label >Product quality</label>
                                      <input type="text"  name="product_quality" class="form-control" id="product_quality" placeholder="Enter Product quality">
                                  </div>

                                        <div class="form-group">
                                      <label >Product description</label>
                                      <input type="text"  name="product_description" class="form-control" id="product_description" placeholder="Enter Product description">
                                  </div>

                                        <div class="form-group">
                                      <label >Product quantity</label>
                                      <input type="text"  name="product_quantity" class="form-control" id="product_quantity" placeholder="Enter Product quantity">
                                  </div>

                                        <div class="form-group">
                                      <label >Product image</label>
                                        <input type="file"class="form-control" name="file"  multiple="multiple" />
                                  </div>

                                 <div class="form-group">
                                      <label for="exampleInputPassword1">status</label>
                                      <select class="form-control" name="product_status" id="product_status">
                                        <option value=""></option>
                                        <option value="expired">Expired</option>
                                        <option value="un_expired">Unexpired</option>
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

    
   
    
    $('#addForm').submit(function(){
        if(!validateText($('#product_name').val(),'product_name')
            ||!validateText($('#product_status').val(),'product_status')
            ||!validateText($('#product_category').val(),'product_category')
            ||!validateText($('#product_for').val(),'product_for')
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
<!-- end document-->
