<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);
	// print_r($_SESSION);

	// exit;
	if(empty($_REQUEST['hotelid'])){
		echo "Please Select Hotel Name";
	}
	else if (preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/", $_REQUEST['branch_name']) == false){
		echo "Invalid Branch Name";
	}

	
	else{
		// echo "ok";
		$name = $_REQUEST['branch_name'];
		$hotelid = $_REQUEST['hotelid'];

		

		$result = $obj->select(
			"count(*) as cnt",
			"pro_hotel_branch",
			"br_name='$name' and br_hotel_id='$hotelid'"
			);
	
			// pre($result);
			// exit;
			if($result[0]['cnt'] > 0){
				echo "Branch Name Exist In Hotel";
			}
			else{
				$obj->insert(
					"pro_hotel_branch",
					"br_name,br_hotel_id",
					"'$name','$hotelid'"
					);
				

				
				echo "Branch Added";
			}

	
		}
 ?>

