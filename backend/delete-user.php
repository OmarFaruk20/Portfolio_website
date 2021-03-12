<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `users` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		echo "<font color='green'>Data Deleted!</font>";
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>