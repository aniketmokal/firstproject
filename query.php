<?php 
	require_once "../models/project.php";

	// $obj->insert(
	// 	"users",
	// 	"name, age",
	// 	"'samar', 18"
	// );

	// $obj->delete("users","id=3");

	// $obj->update("users", "name='aniket', age=22","id=1");

	$ans = $obj->select("*","users","id>0");
	pre($ans);
 ?>