<?php 
	require'../db.php';
	require'session.php';

	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$title = $_POST['title'];
		$summary = $_POST['summary'];
		$icon = $_POST['icon'];
		

		$id = $_POST['id'];

		$update = "UPDATE `services` SET `title`='$title',`summary`='$summary',`icon`='$icon' WHERE id = '$id'";

		

		$qry = mysqli_query($con, $update);

		if ($qry) {
			header("location:view-service.php");
		}else{
			echo "What's worng!";
		}
	}
?>