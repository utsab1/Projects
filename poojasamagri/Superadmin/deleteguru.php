<?php
include 'layouts/header.php';
$guru_id = $_GET['ref'];

if(deleteGuru($conn,$guru_id))
{

   showSuccessMsg('Guru Deleted Successfully !!!');
      redirection('manageguru.php');
}
?>