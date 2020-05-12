<?php
 include 'layouts/header.php';
$product_id = $_GET['ref'];

if(deleteProduct($conn,$product_id))
{

   showSuccessMsg('Product Deleted Successfully !!!');
      redirection('manageproduct.php');
}
?>