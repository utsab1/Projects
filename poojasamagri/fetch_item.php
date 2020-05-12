<?php

//fetch.php
include 'app/call.php';

$query = "SELECT * FROM producttable";

$statement = getAllProduct($conn);
	$output = '';
	foreach($statement as $row)
	{
		$output .= '
		<div class="col-md-3" style="margin-top:12px;">  
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:2px; height:350px;" align="center;  height: 62%;">
            	<img src="superadmin/'. $row["product_image"].'" class="img-responsive" /><br />
            	<h4 class="text-info" style="text-align: center;">'.$row["product_name"].'</h4>
            	<h4 class="text-danger" style="text-align: center;">Rs. '.$row["product_price"] .'</h4>
            	<input type="text" name="quantity" id="quantity' . $row["product_id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["product_id"].'" value="'.$row["product_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["product_id"].'" value="'.$row["product_price"].'" />
                  <input type="hidden" name="hidden_color" id="color'.$row["product_color"].'" value="'.$row["product_color"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["product_id"].'" style="margin-top:5px;" class="btn btn-primary form-control add_to_cart" value="Add to Cart" />
                  <a class="btn btn-primary" href="single.php?ref='.$row["product_id"].'" >View Detail<i class="icon_plus_alt2"></i></a>
            </div>
        </div>
		';
	}
	echo $output;


?>