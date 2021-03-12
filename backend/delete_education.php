<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `education` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		echo "<font color='green'>Data Deleted!</font>";
		header("location:view-education.php");
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>