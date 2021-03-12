<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `contact_info` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		header("location:view-contact-info.php");
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>