<?php
function createGuru($conn,$data)
{
	$stmtInsert = $conn->prepare("INSERT INTO guru (`guru_name`, `guru_type`, `guru_description`,
     `guru_contact`, `guru_address`, `guru_status`, `guru_image`)
     VALUES (:guru_name, :guru_type, :guru_description, :guru_contact, :guru_address, :guru_status, :guru_image)");
	$stmtInsert->bindParam(':guru_name', $data['guru_name']);
	$stmtInsert->bindParam(':guru_type', $data['guru_type']);
	$stmtInsert->bindParam(':guru_description', $data['guru_description']);
	$stmtInsert->bindParam(':guru_contact', $data['guru_contact']);
	$stmtInsert->bindParam(':guru_address',$data['guru_address']);
	$stmtInsert->bindParam(':guru_status', $data['guru_status']);
	$stmtInsert->bindParam(':guru_image',$data['guru_image']);
	if($stmtInsert->execute())
		return true;


	return false;


}


function getAllGuru($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM guru");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}

function getAllGuruById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM guru WHERE guru_id=:guru_id");
	$stmtSelect->bindParam(':guru_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}
function updateGuru($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE guru SET guru_name=:guru_name, guru_type=:guru_type, guru_description=:guru_description,
    guru_contact=:guru_contact, guru_status=:guru_status, guru_image=:guru_image, guru_address=:guru_address WHERE guru_id=:guru_id');
	$stmtUpdate->bindParam(':guru_name', $data['guru_name']);
	$stmtUpdate->bindParam(':guru_type', $data['guru_type']);
	$stmtUpdate->bindParam(':guru_description', $data['guru_description']);
	$stmtUpdate->bindParam(':guru_contact', $data['guru_contact']);
	$stmtUpdate->bindParam(':guru_status', $data['guru_status']);
	$stmtUpdate->bindParam(':guru_image', $data['guru_image']);
	$stmtInsert->bindParam(':guru_address',$data['guru_address']);
    $stmtUpdate->bindParam(':guru_id', $data['guru_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteGuru($conn,$id)
{
 $stmtDelete = $conn->prepare("DELETE FROM guru WHERE guru_id=:guru_id");
 $stmtDelete ->bindparam(':guru_id',$id);
 if($stmtDelete->execute())
 	return true;

 return false;
}