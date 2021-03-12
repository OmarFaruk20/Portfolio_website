<?php

	require'../db.php';
	
	$id = $_GET['id'];
	
	$select = "SELECT * FROM portfolio WHERE id = '$id'";
	$qry = mysqli_query($con, $select);
	$assoc = mysqli_fetch_assoc($qry);

	if (file_exists('../images/'.$assoc['image'])) {
		unlink('../images/'.$assoc['image']);

		$delete = "DELETE FROM `portfolio` WHERE id = '$id'";

		$query = mysqli_query($con, $delete);

		if ($query) {
			
			header("location:view-Portfolio.php");
		}
		else{
			echo "<font color='red'>Data not Deleted!</font>";
		}

	}else{
		echo "no";
	}


	

	

?>