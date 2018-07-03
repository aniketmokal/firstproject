<?php 
	require_once "../models/project.php";
	// pre($_REQUEST);
	// pre($_FILES);
	// print_r($_SESSION);

	// exit;
	if (preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/", $_REQUEST['hotel_name']) == false){
		echo "Invalid Hotel Name";
	}

	
	else{
		// echo "ok";
		$name = $_REQUEST['hotel_name'];
		$uid = $_SESSION['userid'];

		

		$result = $obj->select(
			"count(*) as cnt",
			"pro_hotel",
			"ho_name='$name'"
			);
	
			// pre($result);
			// exit;
			if($result[0]['cnt'] > 0){
				echo "Hotel Name Exist";
			}
			else{

				$name = rand(1000,9999).$_FILES['hotel_photo']['name'];
				$tmp = $_FILES['hotel_photo']['tmp_name'];	
				$path = "../assets/uploads/".$name;

				move_uploaded_file($tmp, $path);
				
				$obj->insert(
					"pro_hotel",
					"ho_name,ho_userid,ho_photo",
					"'$name','$uid','$path'"
					);
				

				
				echo "Hotel Added";
			}

	
		}
 ?>

