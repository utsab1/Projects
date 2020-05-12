<?php
$userInfo= getAllUserById($conn,$_SESSION['user']['id']);
?>
<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

 <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    <img src="images/logo3.PNG" style="width: 120px;height: 120px;">
                </a>
            </div>
               <div class="logo" style="text-align: center;">
                                    <?php if($userInfo['user_status']=='active'):?>
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
                   <li>
                    <a href="orderstatus.php">
                        <i class="fa fa-shopping-basket"></i>
                        <p>Track Order list</p>
                    </a>
                </li>
               
                <li>
                    <a href="userlist.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Users List</p>
                    </a>
                </li>
             
            </ul>
        </div>
    </div>