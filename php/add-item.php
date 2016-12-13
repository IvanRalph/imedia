<?php
	include("config.php");
	
	$cameraCol = array("image", "brand", "model", "type", "ctype", "poe", "specs", "lens", "price");
	$accessoriesCol = array("image", "brand", "model", "price");
	$cableCol = array("image", "brand", "model", "type", "price");
	$powerCol = array("image", "brand", "model", "channels", "price");
	$recorderCol = array("image", "brand", "model", "type", "poe", "specs", "ports", "price");
	$routerCol = array("image", "brand", "model", "wireless-capability", "price");
	$switchCol = array("image", "brand", "model", "ports", "price");
	$wirelessCol = array("image", "brand", "model", "frequency", "speed", "price");

	$category = $_POST['category'];

	if($category == "camera"){
		$cameraImp = implode(",", $cameraCol);
		$cameraVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['type']."'", "'".$_POST['c-type']."'", 1, "'".$_POST['specs']."'", "'".$_POST['lens']."'", $_POST['price']);
		$cameraVal = implode(",", $cameraVal);
		insertItem($cameraImp, $category, $cameraVal);
		
	}

	function insertItem($columns, $category, $cameraValArr){
		include("config.php");
		$sql2 = "INSERT INTO ". $category ."(". $columns .") VALUES(". $cameraValArr .")";
		$result2 = mysqli_query($conn, $sql2);
		if(!$result2){
			die("Error: " . mysqli_error($conn));
		}else{
			
			echo "success";
		}
	}
?>