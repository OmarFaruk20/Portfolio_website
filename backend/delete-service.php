<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `services` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		header("location:view-service.php");
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>