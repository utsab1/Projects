<?php
function createProduct($conn,$data)
{
	$stmtInsert = $conn->prepare("INSERT INTO producttable (`product_name`, `product_category`,  `product_for`, `product_color`, `product_price`, `product_quality`, `product_description`, `product_quantity`, `product_image`, `product_discount`, `product_status`, `product_code`)
     VALUES (:product_name,:product_category,:product_for,:product_color,:product_price,:product_quality,:product_description,:product_quantity,:product_image,:product_discount,:product_status,:product_code)");
	$stmtInsert->bindParam(':product_name', $data['product_name']);
	$stmtInsert->bindParam(':product_category', $data['product_category']);
	$stmtInsert->bindParam(':product_for', $data['product_for']);
	$stmtInsert->bindParam(':product_color', $data['product_color']);
	$stmtInsert->bindParam(':product_price', $data['product_price']);
	$stmtInsert->bindParam(':product_quality', $data['product_quality']);
	$stmtInsert->bindParam(':product_description', $data['product_description']);
	$stmtInsert->bindParam(':product_quantity', $data['product_quantity']);
	$stmtInsert->bindParam(':product_image', $data['product_image']);
	$stmtInsert->bindParam(':product_discount', $data['product_discount']);
	$stmtInsert->bindParam(':product_status', $data['product_status']);
	$stmtInsert->bindParam(':product_code', $data['product_code']);
	if($stmtInsert->execute())
		return true;

	return false;


}
function getAllProduct($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM producttable");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function getAllProductById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM producttable WHERE product_id=:product_id");
	$stmtSelect->bindParam(':product_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}
function updateProduct($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE producttable SET product_name=:product_name, product_category=:product_category, product_for=:product_for product_color=:product_color, product_price=:product_price, product_quality=:product_quality, product_description=:product_description, product_quantity=:product_quantity, product_image=:product_image, product_discount=:product_discount, product_status=:product_status, product_code=:product_code,  WHERE product_id=:product_id');
	$stmtUpdate->bindParam(':product_name', $data['product_name']);
	$stmtInsert->bindParam(':product_category', $data['product_category']);
	$stmtInsert->bindParam(':product_for', $data['product_for']);
	$stmtInsert->bindParam(':product_color', $data['product_color']);
	$stmtInsert->bindParam(':product_price', $data['product_price']);
	$stmtInsert->bindParam(':product_quality', $data['product_quality']);
	$stmtInsert->bindParam(':product_description', $data['product_description']);
	$stmtInsert->bindParam(':product_quantity', $data['product_quantity']);
	$stmtInsert->bindParam(':product_image', $data['product_image']);
	$stmtInsert->bindParam(':product_discount', $data['product_discount']);
	$stmtUpdate->bindParam(':product_status', $data['product_status']);
    $stmtUpdate->bindParam(':product_id', $data['product_id']);
    $stmtUpdate->bindParam(':product_code', $data['product_code']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteProduct($conn,$id)
{
	$stmtDelete = $conn->prepare("DELETE FROM producttable WHERE product_id=:product_id");
	$stmtDelete->bindParam(':product_id',$id);
	if($stmtDelete->execute())
		return true;

	return false;
}
