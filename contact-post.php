<?php 
	require'db.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$insert = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

		$query = mysqli_query($con, $insert);

		header("location:index.php#contact");
	}

?>