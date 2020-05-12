
<?php
function createAdminUser($conn,$data)
{
	
	$data['adm_password'] = md5($data['adm_password']);
	$stmtInsert = $conn->prepare("INSERT INTO tbl_adminlogin (`adm_fname`, `adm_lname`, `adm_email`,
     `adm_contact`, `adm_password`, `adm_role`, `adm_status`, `admin_image`)
     VALUES (:adm_fname, :adm_lname, :adm_email, :adm_contact, :adm_password, :adm_role, :adm_status, :admin_image)");
	$stmtInsert->bindParam(':adm_fname', $data['adm_fname']);
	$stmtInsert->bindParam(':adm_lname', $data['adm_lname']);
	$stmtInsert->bindParam(':adm_email', $data['adm_email']);
	$stmtInsert->bindParam(':adm_contact', $data['adm_contact']);
	$stmtInsert->bindParam(':adm_password',$data['adm_password']);
	$stmtInsert->bindParam(':adm_role', $data['adm_role']);
	$stmtInsert->bindParam(':adm_status', $data['adm_status']);
	$stmtInsert->bindParam(':admin_image',$data['admin_image']);
	if($stmtInsert->execute())
		return true;


	return false;


}


function getAllAdminUsers($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_adminlogin");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}

function getAllAdminUserById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_adminlogin WHERE adm_id=:adm_id");
	$stmtSelect->bindParam(':adm_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}
function updateAdminUser($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE tbl_adminlogin SET adm_fname=:adm_fname, adm_lname=:adm_lname, adm_email=:adm_email,
    adm_contact=:adm_contact, adm_role=:adm_role, adm_status=:adm_status, admin_image=:admin_image WHERE adm_id=:adm_id');
	$stmtUpdate->bindParam(':adm_fname', $data['adm_fname']);
	$stmtUpdate->bindParam(':adm_lname', $data['adm_lname']);
	$stmtUpdate->bindParam(':adm_email', $data['adm_email']);
	$stmtUpdate->bindParam(':adm_contact', $data['adm_contact']);
	$stmtUpdate->bindParam(':adm_role', $data['adm_role']);
	$stmtUpdate->bindParam(':adm_status', $data['adm_status']);
	$stmtUpdate->bindParam(':admin_image', $data['admin_image']);
    $stmtUpdate->bindParam(':adm_id', $data['adm_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteAdminUser($conn,$id)
{
 $stmtDelete = $conn->prepare("DELETE FROM tbl_adminlogin WHERE adm_id=:adm_id");
 $stmtDelete ->bindparam(':adm_id',$id);
 if($stmtDelete->execute())
 	return true;

 return false;
}




function createUser($conn,$data)
{
	$data['user_password'] = md5($data['user_password']);
	$stmtInsert = $conn->prepare("INSERT INTO tbl_userlogin (`user_fname`, `user_lname`, `user_email`,
     `user_contact`, `user_address`, `user_gender`, `user_password`, `user_image`, `user_status`)
     VALUES (:user_fname, :user_lname, :user_email, :user_contact, :user_address, :user_gender, :user_password, :user_image, :user_status)");
	$data['user_status'] = 'active';
	$stmtInsert->bindParam(':user_fname', $data['user_fname']);
	$stmtInsert->bindParam(':user_lname', $data['user_lname']);
	$stmtInsert->bindParam(':user_email', $data['user_email']);
	$stmtInsert->bindParam(':user_contact', $data['user_contact']);
	$stmtInsert->bindParam(':user_address', $data['user_address']);
	$stmtInsert->bindParam(':user_gender', $data['user_gender']);
	$stmtInsert->bindParam(':user_password',$data['user_password']);
	$stmtInsert->bindParam(':user_image',$data['user_image']);
	$stmtInsert->bindParam(':user_status', $data['user_status']);
	if($stmtInsert->execute())
		return true;


	return false;

}

function getAllUsers($conn)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_userlogin");
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetchAll();

	return false;
}

function getAllUserById($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_userlogin WHERE user_id=:user_id");
	$stmtSelect->bindParam(':user_id', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function updateUser($conn,$data)
{
	$stmtUpdate = $conn->prepare('UPDATE tbl_userlogin SET user_fname=:user_fname, user_lname=:user_lname, user_email=:user_email,
    user_contact=:user_contact, user_address=:user_address, user_gender=:user_gender, user_image=:user_image, user_status=:user_status WHERE user_id=:user_id');
	$stmtUpdate->bindParam(':user_fname', $data['user_fname']);
	$stmtUpdate->bindParam(':user_lname', $data['user_lname']);
	$stmtUpdate->bindParam(':user_email', $data['user_email']);
	$stmtUpdate->bindParam(':user_contact', $data['user_contact']);
	$stmtUpdate->bindParam(':user_address', $data['user_address']);
	$stmtUpdate->bindParam(':user_gender', $data['user_gender']);
	$stmtUpdate->bindParam(':user_image', $data['user_image']);
	$stmtUpdate->bindParam(':user_status', $data['user_status']);
    $stmtUpdate->bindParam(':user_id', $data['user_id']);
	if($stmtUpdate->execute())
		return true;


	return false;
}

function deleteUser($conn,$id)
{
	$stmtDelete = $conn->prepare("DELETE FROM tbl_userlogin WHERE user_id=:user_id");
	$stmtDelete->bindParam(':user_id',$id);
	if($stmtDelete->execute())
		return true;

	return false;
}
function countUser($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_userlogin");
	$stmtSelect->execute();
	   if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function countAllComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countPendingComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='pending'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countApprovedComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='approved'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countRejectedComplain($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='rejected'");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();
}

function countDepartment($conn)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_Department");
	$stmtSelect->execute();
	   if($stmtSelect->rowCount()>0)
		return $stmtSelect->fetch();

	return false;
}

function countcomplainbydept($conn,$dept_id){

	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE dept_id=$dept_id");
	$stmtSelect->execute();
	    return $stmtSelect->rowCount();                            
}

function getComplainPercentageByDepartment($conn,$dept_id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain");
	$stmtSelect->execute();
	$totalComplain = $stmtSelect->rowCount();


	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE dept_id=:dept_id");
	$stmtSelect->bindParam(':dept_id',$dept_id);
	$stmtSelect->execute();
	$departmentTotal =  $stmtSelect->rowCount();   


	return $precentage = ($departmentTotal/$totalComplain)*100;
}

function countOwnComplain($conn,$id)
{
	$stmtSelect = $conn->prepare("SELECT * FROM tbl_complain WHERE comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnApprovedComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='approved' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnPendingComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='pending' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}

function countOwnRejectedComplain($conn,$id)
{
	$stmtSelect=$conn->prepare("SELECT * FROM tbl_complain WHERE comp_status='rejected' AND comp_added_by=:comp_added_by");
	$stmtSelect->bindParam(':comp_added_by', $id);
	$stmtSelect->execute();
	    if($stmtSelect->rowCount()>0)
		return $stmtSelect->rowCount();

	return 0;
}