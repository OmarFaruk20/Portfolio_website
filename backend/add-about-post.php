<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		//$title = $_POST['title'];
		//$description = ltrim($_POST['description']);
		//$image = $_POST['image'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = (end($explode));
			$format = ['png', 'jpg', 'JPEG', 'GIF', 'PNG', 'TIFF', 'TIFF'];
			$Allow_format = in_array($ext, $format);

			if ($Allow_format) {
				if ($_FILES['image']['size'] < 393764) {

					$Input_data = "INSERT INTO `about_banner` (`image`) VALUES ('$image')";

					$query = mysqli_query($con, $Input_data);

					$last_id = mysqli_insert_id($con);
					
					$img = $last_id.'.'.$ext;

					$new_location = '../img/'.$img;

					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

					$update = "UPDATE about_banner SET image = '$img' WHERE id='$last_id'";

					mysqli_query($con, $update);
					echo "Image Uploaded";
					header("location:view-about-banner.php");

				}else{
					echo "not allow";
				}
			}else{
				echo "Invalid Image Format";
			}

		}
		else{

		 }
	}
	
?>