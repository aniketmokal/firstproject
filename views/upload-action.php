<?php
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	$name = sha1(date('y-M-D-H-i-s').rand(1000,9999)).$_FILES['x2']['name'];

	$tmp =  $_FILES['x2']['tmp_name'];

	$ans = move_uploaded_file($tmp , "../assets/uploads/".$name);
	var_dump($ans);
?>