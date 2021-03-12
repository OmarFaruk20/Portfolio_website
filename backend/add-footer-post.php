<?php 
	require'../db.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$footer = $_POST['footer'];

		$ins = "INSERT INTO `add_footer`(`footer`) VALUES ('$footer')";

		$query = mysqli_query($con, $ins);

		if ($query) {
			echo "Inserted";
			header("location:view-footer.php");
		}else{
			echo "Not Inserted";
		}

}
?>
		
		