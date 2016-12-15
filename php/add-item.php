<?php
	include("config.php");
	
	$cameraCol = array("image", "brand", "model", "type", "ctype", "poe", "specs", "lens", "price");
	$accessoriesCol = array("image", "brand", "model", "price");
	$cableCol = array("image", "brand", "model", "type", "price");
	$powerCol = array("image", "brand", "model", "channels", "price");
	$recorderCol = array("image", "brand", "model", "type", "poe", "specs", "ports", "price");
	$routerCol = array("image", "brand", "model", "wirelessCapability", "price");
	$switchCol = array("image", "brand", "model", "ports", "price");
	$wirelessCol = array("image", "brand", "model", "frequency", "speed", "price");

	$category = $_POST['category'];
	switch($category){
		case "camera":
			$cameraImp = implode(",", $cameraCol);
			$cameraVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['type']."'", "'".$_POST['c-type']."'", 1, "'".$_POST['specs']."'", "'".$_POST['lens']."'", $_POST['price']);
			$cameraVal = implode(",", $cameraVal);
			insertItem($cameraImp, $category, $cameraVal);
			break;
		case "recorder":
			$recorderImp = implode(",", $recorderCol);
			$recorderVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['type']."'", 1, "'".$_POST['specs']."'", "'".$_POST['ports']."'", $_POST['price']);
			$recorderVal = implode(",", $recorderVal);
			insertItem($recorderImp, $category, $recorderVal);
			break;
		case "accessories":
			$accessoriesImp = implode(",", $accessoriesCol);
			$accessoriesVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", $_POST['price']);
			$accessoriesVal = implode(",", $accessoriesVal);
			insertItem($accessoriesImp, $category, $accessoriesVal);
			break;
		case "cable":
			$cableImp = implode(",", $cableCol);
			$cableVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['type']."'", $_POST['price']);
			$cableVal = implode(",", $cableVal);
			insertItem($cableImp, $category, $cableVal);
			break;
		case "switch":
			$switchImp = implode(",", $switchCol);
			$switchVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['ports']."'", $_POST['price']);
			$switchVal = implode(",", $switchVal);
			insertItem($switchImp, $category, $switchVal);
			break;
		case "wireless":
			$wirelessImp = implode(",", $wirelessCol);
			$wirelessVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['frequency']."'", "'".$_POST['speed']."'", $_POST['price']);
			$wirelessVal = implode(",", $wirelessVal);
			insertItem($wirelessImp, $category, $wirelessVal);
			break;
		case "router":
			$routerImp = implode(",", $routerCol);
			$routerVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['wireless-capability']."'", $_POST['price']);
			$routerVal = implode(",", $routerVal);
			insertItem($routerImp, $category, $routerVal);
			break;
		case "power":
			$powerImp = implode(",", $powerCol);
			$powerVal = array("'".$_POST['image']."'", "'".$_POST['brand']."'", "'".$_POST['model']."'", "'".$_POST['channels']."'", $_POST['price']);
			$powerVal = implode(",", $powerVal);
			insertItem($powerImp, $category, $powerVal);
			break;
		default:
			echo "Category doesn't exist";
			break;
	}

	function insertItem($columns, $category, $valArr){
		include("config.php");
		$sql2 = "INSERT INTO ". $category ."(". $columns .") VALUES(". $valArr .")";
		$result2 = mysqli_query($conn, $sql2);
		if(!$result2){
			die("Error: " . mysqli_error($conn));
		}else{
			echo $category;
		}
	}
?>