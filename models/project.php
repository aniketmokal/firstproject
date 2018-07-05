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

		function get_hotels()
		{
			//select ho_id,ho_name,ho_photo,us_name,us_mobile,us_email from pro_users,pro_hotel  where us_id=ho_userid order by ho_name asc
			return helpers::select(
				"ho_id,ho_name,ho_photo,us_name,us_mobile,us_email",
				"pro_users,pro_hotel",
				"us_id=ho_userid order by ho_name asc"
			);
		}

		function get_room_branchwise($id){
			return helpers::select(
				"ro_id,ro_no,ro_price",
				"pro_hotel_room",
				"ro_brid='$id'"
			);
		}	

		
	}

	$obj = new project();

?>