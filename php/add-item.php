<?php
	include "config.php";

	foreach ($_POST as $key => $value) {
	    if(empty($value)){
	    	$value = "";
	    }else{
	    	$columnValue = array($value);
	    }
	}

	$category = $_POST['category'];

	if($category == "camera"){
		insertItem('camera', '', $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['c-type'], $_POST['poe'], $_POST['specs'], $_POST['lens'], $_POST['price'], '', '', '', '', '', '', '');
	}


	function insertItem($category, $image, $brand, $model, $type, $cType, $poe, $specs, $lens, $price, $ports, $vcategory, $frequency, $speed, $bands, $capability, $channels){
		$sql = "SELECT * FROM " . $category .".COLUMNS";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			die("Error: " . $mysqli_error($result));
		}
		while( $row = mysqli_fetch_assoc($result)){
    		$columnArray[] = $row;
		}
		$sql2 = "INSERT INTO(". implode(',', $columnArray) .") VALUES(". implode(',', $columnValue) .")";
		$result2 = mysqli_query($conn, $sql2);
		if(!$result2){
			die("Error: " . $mysqli_error($result2));
		}
	}
?>