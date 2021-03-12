<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$sub_title = $_POST['sub_title'];
		$title = $_POST['title'];
		$paragraph = $_POST['paragraph'];
		

		

		$Insert = "INSERT INTO `banner_content`(`sub_title`, `title`, `paragraph`) VALUES ('$sub_title', '$title', '$paragraph')"; 

		$qry = mysqli_query($con, $Insert);

		if ($qry) {
			header("location:banner-left.php");
		}else{
			echo "No";
		}
		
	}

?>