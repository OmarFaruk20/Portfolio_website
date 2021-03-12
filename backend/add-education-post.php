<?php 
	require'../db.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$year = $_POST['year'];
		$degree = $_POST['degree'];
		$parcent = $_POST['parcent'];

		$insert = "INSERT INTO `education`(`year`, `degree`, `parcent`) VALUES ('$year', '$degree', '$parcent')";

		$query = mysqli_query($con, $insert);

		if ($query) {
			echo "Inserted";
			header("location:view-education.php");
		}else{
			echo "Not Inserted";
		}

}
?>
		
		