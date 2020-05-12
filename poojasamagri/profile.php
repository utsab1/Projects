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
                                <?php if(!empty($userInfo['user_image'])): ?>
                                  <div class="image img-cir img-120">
                                  <img src="<?php echo $userInfo['user_image']; ?>" height="330px" width="360px">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >Email address</label>
                                               <P><?php echo $userInfo['user_email']; ?></P>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >Sex</label>
                                               <P><?php echo $userInfo['user_gender']; ?></P>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <p><?php echo $userInfo['user_fname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                               <p><?php echo $userInfo['user_lname']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Contact</label>
                                               <p><?php echo $userInfo['user_contact']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>Address</label>
                                               <p><?php echo $userInfo['user_address']; ?></p>
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
<?php include 'layouts/frontend_footer.php'; ?>