<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Admin User</h3>
                                 <?php if(isset($_SESSION['showmsg'])): echo $_SESSION['showmsg']; unset($_SESSION['showmsg']); endif ; ?>
                                <div class="table-responsive table-responsive-data2">
                                  <a class="btn btn-primary" href="addadminuser.php">Add Admin<i class="icon_plus_alt2"></i></a>
                                    <table class="table table-data2">
                                        
                                            <tr>
                                                 <th>S.NO.</th>
                                                 <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Role</th>
                                                <th>status</th>
                                                <th>Action</th>
                                               </tr>
                                               <tbody>
                            <?php $adminUsers = getAllAdminUsers($conn);
                              /*
                              echo'<prev>';
                              print_r($adminUsers); 
                              echo'</pre>';*/
                              if($adminUsers):
                              foreach($adminUsers as $key => $user):
                              
                              ?>
                                           
                                                
                                <tr>
                               <td><?php echo ++$key;?></td> 
                               <td><?php if(!empty($user['admin_image'])): ?>
                                  <div class="image img-cir img-120">
                                  <img src="<?php echo $user['admin_image']; ?>" height="60x">
                              </div>
                                     <?php endif; ?>
                            </td>
                               <td><?php echo $user['adm_fname']." ".$user['adm_lname'];  ?></td>
                                <td><?php echo $user['adm_email'];?></td>
                                <td><?php echo $user['adm_contact'];?></td>
                                 <td>
                                  <?php echo ucwords($user['adm_role']);?></td>
                                  <td>
                                    <?php if($user['adm_status']=='active'):?>
                                    <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                      <span class="badge  badge-danger">Inactive</span>
                                    <?php endif; ?> 
                                  </td>
                                  <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="editadminuser.php?ref=<?php echo $user['adm_id'];?>">Edit<i class="icon_plus_alt2"></i></a>
                             <a class="btn btn-danger confirm" href="deleteadminuser.php?ref=<?php echo $user['adm_id'];?>">Delete<i class="icon-edit bigger-120"></i>
                             </a>

                                  </div>
                                                </td>
                                           </tr>
                                           <?php endforeach;?> 
                                           <?php else : ?>
                              <tr>
                                <td colspan="7"> No Data Found</td>
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

  
     
    </script>

</body>
<?php include 'layouts/footer.php';?>
</html>
<!-- end document-->
