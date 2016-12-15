<?php

	include 'config.php';
	$currentTab = $_POST['tab'];
	$count = count($_POST['checkbox']);
	for($i=0; $i < $count; $i++){
			$del_id = $_POST['checkbox'][$i];
			$sql = "DELETE FROM " .$currentTab. " WHERE id = '$del_id'";
			$result = mysqli_query($conn, $sql);
		}
	if($result){
		echo $result;
	} else {
		echo "error";
	}


?>