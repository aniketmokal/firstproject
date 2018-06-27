<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);
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
				$obj->insert(
					"pro_hotel",
					"ho_name,ho_userid",
					"'$name','$uid'"
					);
				

				
				echo "Hotel Added";
			}

	
		}
 ?>

