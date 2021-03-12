<?php 
require'../db.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){


		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = (end($explode));
			$format = ['png', 'jpg', 'JPEG', 'GIF', 'PNG', 'TIFF', 'TIFF'];
			$Allow_format = in_array($ext, $format);

			if ($Allow_format) {
				if ($_FILES['image']['size'] < 393764) {

					$Input_data = "INSERT INTO `brand` (`image`) VALUES ('$image')";

					$query = mysqli_query($con, $Input_data);

					$last_id = mysqli_insert_id($con);
					
					$img = $last_id.'.'.$ext;

					$new_location = '../img/brand/'.$img;

					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

					$update = "UPDATE brand SET image = '$img' WHERE id='$last_id'";

					mysqli_query($con, $update);
					echo "Image Uploaded";
					header("location:view-brand.php");

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