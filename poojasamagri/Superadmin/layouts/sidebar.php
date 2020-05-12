<?php
$adminInfo= getAllAdminUserById($conn,$_SESSION['admin']['id']);
?>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

 <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    <img src="images/logo.PNG" style="width: 120px;height: 120px;">
                </a>
            </div>
               <div class="logo" style="text-align: center;">
                                    <?php if($adminInfo['adm_status']=='active'):?>
                                    <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                      <span class="badge  badge-danger">Inactive</span>
                                    <?php endif; ?>
                                    </div> 
            <ul class="nav">
              <li>
                
                                      </li>
                <li class="active">
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
               <li cass="active" style="padding: 27px;">
                   <i class="ti-user" ></i>
                   <p class=" active" data-toggle="dropdown" >Orders</p>
                   <ul class="dropdown-menu dropdown-menu-right">
                      <li ><a href="orderlist.php">Order List</a></li>
                      <li><a href="manageadminuser.php">Statistics</a></li>
                      <li><a href="message.php">Message</a></li>
                    </ul>
                         </li>
                        
               <li cass="active" style="padding: 27px;">
                   <i class="ti-user" ></i>
                   <p class=" active" data-toggle="dropdown" >Admin</p>
                   <ul class="dropdown-menu dropdown-menu-right">
                      <li ><a href="addadminuser.php">Add Admin User</a></li>
                      <li><a href="manageadminuser.php">Manage Admin User</a></li>
                    </ul>
                         </li>
                         <li cass="active" style="padding: 27px;">
                   <i class="ti-gift" ></i>
                   <p class=" active" data-toggle="dropdown" >Product</p>
                   <ul class="dropdown-menu dropdown-menu-right">
                      <li ><a href="addproduct.php">Add Product</a></li>
                      <li><a href="manageproduct.php">Manage product</a></li>
                    </ul>
                         </li>
                          <li cass="active" style="padding: 27px;">
                   <i class="ti-user" ></i>
                   <p class=" active" data-toggle="dropdown" >Add guru</p>
                   <ul class="dropdown-menu dropdown-menu-right">
                      <li ><a href="addguru.php">Add Guru</a></li>
                      <li><a href="manageguru.php">Manage Guru</a></li>
                    </ul>
                         </li>
                   <li>
                    <a href="#">
                        <i class="ti"></i>
                        <p>Order list</p>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="manageuser.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                </li>
             
            </ul>
        </div>
    </div>


