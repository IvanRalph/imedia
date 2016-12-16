<?php
	include "config.php";

	$target_dir = "../images/".$_POST['category']."/";
	$target_file = $target_dir . $_POST['image'];
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	
?>