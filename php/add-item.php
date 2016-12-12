<?php
	include("config.php");
	

	$category = $_POST['category'];

	if($category == "camera"){
		$column = implode(",", $_POST);
		insertItem($column, 'camera', '', $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['c-type'], $_POST['poe'], $_POST['specs'], $_POST['lens'], $_POST['price'], '', '', '', '', '', '', '');
		
	}

	function insertItem($columnValue, $category, $image, $brand, $model, $type, $cType, $poe, $specs, $lens, $price, $ports, $vcategory, $frequency, $speed, $bands, $capability, $channels){
		include("config.php");
		$sql = "SELECT * FROM " . $category;
		$result = mysqli_query($conn, $sql);
		if(!$result){
			die("Error: " . mysqli_error($conn));
		}
		$columnArray = array();
		while( $row = mysqli_fetch_assoc($result)){
    		$columnArray = array($row);
		}
		$implodeArray = implode(',', $columnArray);
		$sql2 = "INSERT INTO ". $category ."(". $implodeArray .") VALUES(". $columnValue .")";
		$result2 = mysqli_query($conn, $sql2);
		if(!$result2){
			die("Error: " . mysqli_error($conn));
		}
	}
?>