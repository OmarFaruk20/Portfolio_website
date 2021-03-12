<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$title = $_POST['title'];
		$summary = $_POST['summary'];
		$icon = $_POST['icon'];

		$insert = "INSERT INTO `services`(`title`, `summary`, `icon`) VALUES ('$title', '$summary', '$icon')";
		
		$query = mysqli_query($con, $insert);
		header("location:add-service.php");
		
	}

?>