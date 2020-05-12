<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage User</h3>
                                <div class="table-responsive table-responsive-data2">
                                      
                                    <table class="table table-data2">
                                       
                                            <tr>
                                                <th>S.No</th>
                                                <th>Image</th>
                                                <th>FullName</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Gender</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        
                                        <tbody>
                           <?php $Users = getAllUsers($conn);
                              /*
                              echo'<prev>';
                              print_r($userUsers); 
                              echo'</pre>';*/
                              if($Users):
                              foreach($Users as $key => $user):
                              
                              ?>
                              <tr>
                               <td><?php echo ++$key;?></td> 
                                <td><?php if(!empty($user['user_image'])): ?>
                                  <div class="image img-cir img-120">
                                  <img src="../frontend/<?php echo $user['user_image']; ?>" height="60x">
                              </div>
                                     <?php endif; ?>
                            </td>
                               <td><?php echo $user['user_fname']." ".$user['user_lname'];  ?></td>
                                <td><?php echo $user['user_email'];?></td>
                                <td><?php echo $user['user_contact'];?></td>
                                <td><?php echo ucwords($user['user_gender']);?></td>

                                  <td>  <?php if($user['user_status']=='active'):?>
                                    <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                      <span  class="badge badge-danger">Inactive</span> 
                                    <?php endif; ?> 
                                  </td>
                                 <td>
                                  <div class="btn-group">
                                      
                                       <a href="#" data-url="deleteuser.php?ref=<?php echo $user['user_id'];?>" class="btn btn-xs btn-danger confirm" >Delete
                                <i class="icon-edit bigger-120"></i>
                             </a>

                                  </div>
                                  </td>
                              </tr>
                            <?php endforeach;?>
                                 
                                 <?php else : ?>
                              <tr>
                                <td colspan="7"> No Users Found</td>
                              </tr>
                            <?php endif; ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
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
<?php include 'layouts/footer.php';?>
</html>
<!-- end document-->
