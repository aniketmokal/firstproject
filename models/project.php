<?php
	require_once ('helpers.php');

	final class project extends helpers{
		function get_user_details($email){
			// echo $email;
			return helpers::select(
				"us_id,us_name,us_mobile,us_status,us_type",
				"pro_users",
				"us_email='$email'"
			);
		}

		function get_hotel_userwise($userid){
			return helpers::select(
				"ho_id,ho_name",
				"pro_hotel",
				"ho_userid='$userid'"
			);
		}

		function get_branch_hotelwise($id){
			return helpers::select(
				"br_id,br_name",
				"pro_hotel_branch",
				"br_hotel_id='$id'"
			);
		}
	}

	$obj = new project();

?>