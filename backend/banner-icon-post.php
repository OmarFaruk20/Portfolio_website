<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$social_icon = $_POST['social_icon'];
		$social_url = $_POST['social_url'];
		
		$ins = "INSERT INTO `banner_icon`(`social_url`, `social_icon`) VALUES ('$social_url', '$social_icon')";
		
		$qry = mysqli_query($con, $ins);

		if ($qry) {
			header("location:banner-icon.php");
		}else{
			echo "No";
		}
		
	}

?>