<?php

	require'../db.php';
	
	$id = $_GET['id'];


	$delete = "DELETE FROM `testimonial` WHERE id = '$id'";

	$query = mysqli_query($con, $delete);

	if ($query) {
		header("location:view-testimonial.php");
	}else{
		echo "<font color='red'>Data not Deleted!</font>";
	}


?>