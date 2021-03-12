<?php 
	require'../db.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$confirm_password = $_POST['confirm_password'];
		

		if (!empty($name)) {
			if(preg_match("/^[a-zA-Z ]*$/", $name)) {
				//echo "Name is :".$name."<br>";
			}else{
				echo "Onlye Latter is Allowed";
			}
		}else{
			echo "Name is requiered";
			header("location:registration.php");
		}

		if (!empty($email)) {
			if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
				//echo "Email is :".$email."<br>";
			}
		}else{
			echo "Email is required!";
			header("location:registration.php");
		}

		if (!empty($phone)) {
			if (preg_match("/^[0-9]*$/", $phone)) {
				if(strlen($phone) >= 11){
					//echo "Your Number is:".$phone."<br>";
				}else{
					echo "Invalid Number";
				}
			}
		}else{
			echo "Phone is required!";
			header("location:add-user.php");
		}

		if (!empty($password)) {
			if (!preg_match("/^(?=.*\d)(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,12}$/", $password)) {
				//echo "Password is:".$password."<br>";
			}else{
				echo "Invalid Password";
			}
		}else{
			echo "Password is rquired!";
			header("location:add-user.php");
		}

		if (!empty($confirm_password)) {
			if ($password !== $confirm_password) {
				//echo "Confirm Password is:".$confirm_password;
			}else{
				
				echo "Password not Match!";
			}
		}else{
			echo "Confirm Password is required!";
			header("location:add-user.php");
		}


		$countmail = "SELECT count(*) as total FROM users WHERE email = '$email'";
				   

		$mail = mysqli_query($con, $countmail);

		$run = mysqli_fetch_assoc($mail);
		
		if($run['total'] > 0){

			$_SESSION['email'] = 'Email already exist';
			header('location:add-user.php');
		}
		else{
			$insert = "INSERT INTO `users`(`name`, `email`, `phone`, `password`, `confirm_password`) VALUES ('$name', '$email', '$phone', '$password', '$confirm_password')";

			$query = mysqli_query($con, $insert);

			if ($query) {
				header("location:view-user.php");
			}
			else{
				echo "<font color='red'>Not Inserted!</font>";
			}
		}

	}


?>