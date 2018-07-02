<?php
	require_once '../models/project.php';
	// print_r($_POST);
	if(empty($_POST['branchid'])){
		echo "Please Select Branch";
	}
	else if(empty($_POST['room_name'])){
		echo "Please Enter Room Name";
	}
	else if(empty($_POST['room_price']) || !is_numeric($_POST['room_price'])){
		echo "Please Enter Room Price";
	}
	else{
		$no = $_POST['room_name'];
		$price = $_POST['room_price'];
		$brid = $_POST['branchid'];
		// echo "ok";

		
		$obj->insert(
			"pro_hotel_room",
			"ro_no,ro_price,ro_brid",
			"'$no','$price','$brid'"
		);
		echo "Room Added";
	}