<?php

function createOrder ($conn,$data)
{
	$data['order_status'] ='Pending';  
	$data['ordered_by']= $_SESSION['user']['id'];
	$data['order_date'] = date('Y-m=d H:i:s');
	//print_r($data);
	$stmtInsert= $conn->prepare("INSERT INTO ordertable (`order_date`,
	`product_id`, `order_status`, `ordered_by`, `order_remark`, `order_reviewed_date`, `order_address`)
     VALUES (:order_date, :product_id, :order_status, :ordered_by, :order_remark, :order_reviewed_date, :order_address)");
	$stmtInsert->bindParam(':order_date', $data['order_date']);
	$stmtInsert->bindParam(':order_address',$data['order_address']);
	$stmtInsert->bindParam(':product_id',$data['product_id']);
	$stmtInsert->bindParam(':order_remark', $data['order_remark']);
	$stmtInsert->bindParam(':order_status', $data['order_status']);
	$stmtInsert->bindParam(':ordered_by', $data['ordered_by']);
	$stmtInsert->bindParam(':order_reviewed_date', $data['order_reviewed_date']);
	if($stmtInsert->execute())
		return true;


	return false;


}

function getAllOrder($conn)
{
    $stmtSelect = $conn->prepare("SELECT * FROM ordertable INNER JOIN tbl_userlogin ON ordertable.ordered_by=tbl_userlogin.user_id INNER JOIN producttable ON ordertable.product_id=producttable.product_id");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function getAllOrderById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM ordertable WHERE order_id=:order_id");
	$stmtSelect->bindParam(':order_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function getOwnOrder($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM ordertable WHERE ordered_by=:ordered_by");
	$stmtSelect->bindParam(':ordered_by', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}
function updateOrder($conn,$data)
{
	$data['order_reviewed_date'] = date('Y-m=d H:i:s');
	print_r($data);
	$stmtUpdate = $conn->prepare('UPDATE ordertable SET order_status=:order_status, order_remark=:order_remark, =:, order_reviewed_date=:order_reviewed_date, order_address=:order_address WHERE order_id=:order_id');
	$stmtUpdate->bindParam(':order_status', $data['order_status']);
	$stmtUpdate->bindParam(':order_remark', $data['order_remark']);
 	$stmtUpdate->bindParam(':order_reviewed_date', $data['order_reviewed_date']);
 	$stmtUpdate->bindParam(':order_address', $data['order_address']);
	$stmtUpdate->bindParam(':order_id', $data['order_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function approveOrder($conn,$data)
{
	$data['order_reviewed_date'] = date('Y-m=d H:i:s');
	$data['order_status'] ='approved';

	$stmtUpdate = $conn->prepare('UPDATE ordertable SET order_status=:order_status, product_id=:product_id, order_remark=:order_remark, =:, order_reviewed_date=:order_reviewed_date, order_address=:order_address WHERE order_id=:order_id');
	$stmtUpdate->bindParam(':order_status', $data['order_status']);
	$stmtUpdate->bindParam(':product_id',$data['product_id']);
	$stmtUpdate->bindParam(':order_remark', $data['order_remark']);
 	$stmtUpdate->bindParam(':order_reviewed_date', $data['order_reviewed_date']);
 	$stmtUpdate->bindParam(':order_address', $data['order_address']);
	$stmtUpdate->bindParam(':order_id', $data['order_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}
function denyOrder($conn,$data)
{
	$data['order_reviewed_date'] = date('Y-m=d H:i:s');
	$data['order_status'] ='rejected';

	$stmtUpdate = $conn->prepare('UPDATE ordertable SET order_status=:order_status, order_remark=:order_remark, =:, order_reviewed_date=:order_reviewed_date, order_address=:order_address WHERE order_id=:order_id');
	$stmtUpdate->bindParam(':order_status', $data['order_status']);
	$stmtUpdate->bindParam(':order_remark', $data['order_remark']);
	$stmtUpdate->bindParam(':order_reviewed_date', $data['order_reviewed_date']);
	$stmtUpdate->bindParam(':order_address', $data['order_address']);
	$stmtUpdate->bindParam(':order_id', $data['order_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

