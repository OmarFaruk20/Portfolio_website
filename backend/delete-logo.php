<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `add_logo` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		header("location:view-logo.php");
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>