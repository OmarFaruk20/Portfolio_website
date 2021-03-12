<?php 
	require'../db.php';
	require'session.php';

	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		// $password = $_POST['password'];
		// $confirm_password = $_POST['confirm_password'];

		$id = $_POST['id'];


		$update = "UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id='$id'";

		$qry = mysqli_query($db, $update);

		if ($qry) {
			header("location:view_user.php");
		}else{
			echo "What's worng!";
		}
	}
?>