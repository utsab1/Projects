<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Product</h3>
                                <?php if(isset($_SESSION['showmsg'])): echo $_SESSION['showmsg']; unset($_SESSION['showmsg']); endif ; ?>
                                
                                <div class="table-responsive table-responsive-data2">
                                  <a class="btn btn-primary" href="addproduct.php">Add Product<i class="icon_plus_alt2"></i></a>
                                      
                                      
                                    <table class="table table-data2">
                                        
                                            <tr>
                                                 <th>S.NO.</th>
                                                 <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Product Category</th>
                                                <th>Product For</th>
                                                <th>Product Color</th>
                                                <th>Product Price</th>
                                                <th>Product Quality</th>
                                                <th>Description</th>
                                                <th>Product Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               </tr>
                                               <tbody>
                          <?php $adminUsers = getAllProduct($conn);
                              /*
                              echo'<prev>';
                              print_r($adminUsers); 
                              echo'</pre>';*/
                              if($adminUsers):
                              foreach($adminUsers as $key => $product):
                              
                              ?>
                              <tr>
                               <td><?php echo ++$key;?></td>
                               <td><?php if(!empty($product['product_image'])): ?>          
                              <div class="image img-cir img-120">
                                  <img src="<?php echo $product['product_image']; ?>" height="50x">
                              </div>
                              <?php endif; ?>
                            </td>
                                <td><?php echo $product['product_name'];?></td>
                                <td><?php echo $product['product_category'];?></td>
                                <td><?php echo $product['product_for'];?></td>
                                 <td><?php echo $product['product_color'];?></td>
                                  <td><?php echo $product['product_price'];?></td>
                                   <td><?php echo $product['product_quality'];?></td>
                                    <td><?php echo $product['product_description'];?></td>
                                     <td><?php echo $product['product_quantity'];?></td>
                                     <td><?php if($product['product_status']=='un_expired'):?>
                                     <span class="badge badge-success">Unexpired</span>
                                     <?php else: ?>
                                      <span  class="badge badge-danger">Expired</span> 
                                     <?php endif; ?> 
                                  </td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="editproduct.php?ref=<?php echo $product['product_id'];?> ">Edit<i class="icon_plus_alt2"></i></a>
                                      

                                      <a class="btn btn-danger " href="deleteproduct.php?ref=<?php echo $product['product_id']; ?>">Delete<i class="icon-edit bigger-120"></i>
                             </a>
                                  </div>
                                  </td>
                              </tr>
                            <?php endforeach;?>

                            <?php else : ?>
                              <tr>
                                <td colspan="4"> No Product Found</td>
                              </tr>
                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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

      $('.confirm').click(function(event){
          event.preventDefault();
           var res = confirm('Are sure to delete?');
          
           if(res)
           {
            window.location.href= $(this).data("url")
           }
      });
     
    </script>


</body>
<?php include 'layouts/footer.php'; ?>
</html>
<!-- end document-->
