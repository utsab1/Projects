<?php
include 'layouts/header.php';
$adm_id = $_GET['ref'];

if(deleteAdminUser($conn,$adm_id))
{

   showSuccessMsg('User Deleted Successfully !!!');
      redirection('manageadminuser.php');
}
?>