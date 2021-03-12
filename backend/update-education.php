<?php 
	require'../db.php';
	require'session.php';

	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$year = $_POST['year'];
		$degree = $_POST['degree'];
		$parcent = $_POST['parcent'];
		

		$id = $_POST['id'];

		$update = "UPDATE `education` SET `year`='$year',`degree`='$degree',`parcent`='$parcent' WHERE id = '$id'";

		

		$query = mysqli_query($con, $update);

		if ($query) {
			header("location:view-education.php");
		}else{
			echo "What's worng!";
		}
	}
?>