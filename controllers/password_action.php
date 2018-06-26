<?php
require_once '../models/project.php';

// pre($_POST);

	if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['cpass'])){
		echo "Invalid Current Password";
	}

	else if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['npass'])){
		echo "Invalid New Password";
	}

	else if($_REQUEST['npass']!=$_REQUEST['cnpass']){
		echo "Confirm New pass mismatch with New password";
	}
	else if($_REQUEST['cpass']==$_REQUEST['cnpass']){
		echo "New pass should be diff from current password";
	}
	else{
		$curpass = sha1($_REQUEST['cpass']);
		// echo $curpass;

		// pre($_SESSION);
		$userid = $_SESSION['userid'];
		// echo $userid;
		$result = $obj->select(
			"us_password",
			"pro_users",
			"us_id='$userid'"
		);

		// pre($result);

		if($curpass != $result[0]['us_password']){
			echo "Current password mismatch";
		}
		else{
			// echo "ok";
			$newpass = sha1($_REQUEST['npass']);
			// echo $newpass;
			$obj->update(
				"pro_users",
				"us_password='$newpass'",
				"us_id='$userid'"
			);
			echo "success";
		}
	}
?>	