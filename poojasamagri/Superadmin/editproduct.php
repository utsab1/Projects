  <?php include 'layouts/header.php';
  include 'layouts/sidebar.php'
  $product_id = $_GET['ref'];

if(isset($_POST['savebtn']))
{
  if(!empty($_FILES['file']['name']))
   {
    unlink($productInfo['product_image']);
    $image =  uploadFile($_FILES,'uploads/product-image');
    $_POST['product_image'] = $image;
}

   if(updateProduct($conn,$_POST))
   {
   showSuccessMsg('Product Updated Successfully !!!');
      redirect('manageproduct.php');
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
                                        <strong>Edit product </strong>
                                    </div>
                                    <div class="card-body card-block">
                                       <form role="form" id="addForm" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                      <label >Product name</label>
                                      <input type="text"  name="product_name" value="<?php echo $productInfo['product_name'];?>" class="form-control" id="product_name" placeholder="Enter Product name">
                                  </div>
                                   <div class="form-group">
                                    <label>Product Category</label>
                                     <input type="text"  name="product_category"  value="<?php echo $productInfo['product_category'];?>" class="form-control" id="product_category" placeholder="Enter Product category">
                                            </div>
                                  <div class="form-group">
                                      <label > Please Choose Product color</label><br>
                                      
                                     <input type="color" name="product_color"  value="<?php echo $productInfo['product_color'];?>">
                                  </div>

                                      <div class="form-group">
                                      <label >Product price(Rs.)</label>
                                <input type="number"  name="product_price"  value="<?php echo $productInfo['product_price'];?>" class="form-control" id="product_price" placeholder="Enter Product price">
                                  </div>

                                      <div class="form-group">
                                      <label >Product quality</label>
                                      <input type="text"  name="product_quality" class="form-control" id="product_quality"  value="<?php echo $productInfo['product_quality'];?>" placeholder="Enter Product quality">
                                  </div>

                                        <div class="form-group">
                                      <label >Product description</label>
                                      <input type="text"  name="product_description" class="form-control"   value="<?php echo $productInfo['product_description'];?>" id="product_description" placeholder="Enter Product description">
                                  </div>

                                        <div class="form-group">
                                      <label >Product quantity</label>
                                      <input type="text"  name="product_quantity"  value="<?php echo $productInfo['product_quantity'];?>" class="form-control" id="product_quantity" placeholder="Enter Product quantity">
                                  </div>

                                  <div class="form-group">
                                      <label >Existing Image</label>
                                     <img src="<?php echo $productInfo['product_image']; ?>" height="200px">
                                  </div>
                                   <?php endif; ?>
                                   <div class="form-group">
                                      <label >Image</label>
                                      <input type="file"class="form-control" name="file">
                                  </div>  
                                   
                                 <div class="form-group">
                                      <label >status</label>
                                        <select class="form-control" name="product_status" id="product_status">
                                       
                                        <option  <?php if($productInfo['product_status']=='unexpired') echo 'selected="selected"';?> value="unexpired">Unexpired</option>
                                        <option  <?php if($productInfo['product_status']=='expired') echo 'selected="selected"';?> value="expired">Expired</option>
                                    </select>
                                </div>
                                  
                                    <div class="card-footer">
                                        <button type="submit" name="savebtn" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <input type="hidden" name="product_id" value="<?php echo $productInfo['product_id']; ?>">
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
