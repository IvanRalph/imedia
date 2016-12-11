<?php
	include("config.php");
	
	foreach ($_POST as $key => $value) {
	    if(empty($value)){
	    	$value = "";
	    }else{
	    	$columnValue = array($value);
	    }
	}

	$category = $_POST['category'];

	if($category == "camera"){
		insertItem($columnValue, 'camera', '', $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['c-type'], $_POST['poe'], $_POST['specs'], $_POST['lens'], $_POST['price'], '', '', '', '', '', '', '');
	}


	function insertItem($columnValue, $category, $image, $brand, $model, $type, $cType, $poe, $specs, $lens, $price, $ports, $vcategory, $frequency, $speed, $bands, $capability, $channels){
		include("config.php");
		$sql = "SELECT column_name FROM " . $category ." WHERE column_name != 'id'";
		$result = mysqli_query($conn, $sql);
		if(!$result){
			die("Error: " . mysqli_error($conn));
		}
		while( $row = mysqli_fetch_assoc($result)){
    		$columnArray = array($row);
		}
		$implodeArray = implode(',', $columnArray[0]);
		$implodeValue = implode(',', $columnValue[0]);
		$sql2 = "INSERT INTO ". $category ."(". $implodeArray .") VALUES(". $implodeValue .")";
		$result2 = mysqli_query($conn, $sql2);
		if(!$result2){
			die("Error: " . mysqli_error($conn));
		}
	}

	echo "success";
?>