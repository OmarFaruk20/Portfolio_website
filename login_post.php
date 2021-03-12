<?php 
  session_start();
  require'db.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkuser = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($con, $checkuser);
    $assoc = mysqli_fetch_assoc($query);


    if ($assoc['email'] == $email) {
    	if(password_verify($password, $assoc['password'])){

    		$_SESSION['email'] = $assoc['email'];
            $_SESSION['name'] = $assoc['name'];
            $_SESSION['user_role'] = $assoc['user_role'];

    		header("location:backend/dashboard.php");

    	}else{
    		echo "Not Matched";
    		header("location:login.php");
    	}
    }else{
    	echo "Query Error!";
    }

    
  }
?> 
