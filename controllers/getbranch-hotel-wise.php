<?php
	require_once '../models/project.php';
	// print_r($_POST);
	$id = $_POST['xyz'];
	// echo $id;
	$ans = $obj->get_branch_hotelwise($id);

	// print_r($ans);

	if(is_array($ans)){
	echo "<option value=''>Please Select Branch</option>";
      foreach($ans as $val){
          $id = $val['br_id'];
          echo "<option value='$id'>";
          echo $val['br_name'];
          echo "</option>";
      }
    }
?>	