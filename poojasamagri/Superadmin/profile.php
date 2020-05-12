<?php
include 'layouts/header.php';
include 'layouts/sidebar.php';
?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                            <div class="image" >
                                                      
                              <div class="image">
                                <?php if(!empty($adminInfo['admin_image'])): ?>
                                  <div class="image img-cir img-120">
                                  <img src="<?php echo $adminInfo['admin_image']; ?>" height="330px" width="360px">
                              </div>
                                     <?php endif; ?>
                                        </div>
                    </div>
                </div>

                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"> Profile Description</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label >Email address</label>
                                               <P><?php echo $adminInfo['adm_email']; ?></P>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <p><?php echo $adminInfo['adm_fname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                               <p><?php echo $adminInfo['adm_lname']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Contact</label>
                                               <p><?php echo $adminInfo['adm_contact']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>Role</label>
                                               <p><?php echo $adminInfo['adm_role']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="btn-group">
                                      <a class="btn btn-primary" href="editprofile.php">Edit<i class="icon_plus_alt2"></i></a>
                                  </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


<?php 

include 'layouts/footer.php'

?>