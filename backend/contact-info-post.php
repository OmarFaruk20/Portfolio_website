<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$Ins = "INSERT INTO `contact_info` (`address`, `phone`, `email`) VALUES ('$address', '$phone', '$email')";
		
		$query = mysqli_query($con, $Ins);

		if ($query) {
			header("location:contact-info.php");
		}else{
			echo "Not Insert";
		}

		
		
	}

?>