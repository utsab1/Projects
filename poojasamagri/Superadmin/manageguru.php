<?php include 'layouts/header.php';?>
<?php include 'layouts/sidebar.php';?>
<div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">

<!--                        <h4 class="page-title">MANAGE guru</h4>-->
                        <ol class="breadcrumb">
                            <li>
                                <a href="dashboard.php">PoojaSamagri</a>
                            </li>
                            <li>
                                <a href="addguru.php">ADD guru</a>
                            </li>
                            <li class="active">Manage guru
                            </li>
                        </ol>
                    </div>
                    <?php if(isset($_SESSION['showmsg'])): echo $_SESSION['showmsg']; unset($_SESSION['showmsg']); endif ; ?>
                                
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            
                           

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Guru Image</th>
                                    <th>Guru Name</th>
                                    <th>Guru Address</th>
                                    <th>Guru Contact</th>
                                    <th>Guru Type</th>
                                    <th>Guru Status</th>
                                     <th>Action</th>
                                    
                                </tr>
                                </thead>
                                  <?php 

                                    $guru = getAllGuru($conn);
                                        if ($guru) {
                                            foreach ($guru as $key => $guru):

                                    ?>

                                <tbody>
                                <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $guru['guru_name']; ?></td>
                                        <td><?php if(!empty($guru['guru_image'])): ?>          
                                         <div class="image img-cir img-120">
                                  <img src="<?php echo $guru['guru_image']; ?>" height="50x">
                              </div>
                              <?php endif; ?>
                            </td>
                                    <td><?php echo $guru['guru_address']; ?></td>
                                    <td><?php echo $guru['guru_contact']; ?></td>
                                    <td><?php echo $guru['guru_type']; ?></td>
                                    <td><?php if ($guru['guru_status'] == 'available'):?>
                                        <label class="label label-success"> Available </label>
                                        <?php else:?>
                                        <label class="label label-danger"> Unavailable </label>
                                      <?php endif; ?>
                                  </td>
                                    <td> 
                                    <a href="editguru.php?ref=<?php echo $guru['guru_id']; ?>"><i class="glyphicon glyphicon-edit">Edit</i> </a>
                                    <a href="deleteguru.php?ref=<?php echo $guru['guru_id']; ?>" onclick="return confirm('Are you sure you want to delete?')"> <i class="glyphicon glyphicon-trash">Delete</i></a> 

</td>
                                </tr>
                               
                               <?php endforeach;
                                        } else {
                                            ?>
                               <tr>
                                   <td colspan="5">No Data Found</td>
                               </tr>
                           <?php
                                        } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                
                <!-- end row -->


            </div> <!-- container -->
