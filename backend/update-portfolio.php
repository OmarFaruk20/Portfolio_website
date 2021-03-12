<?php 
	require'../db.php';
	require_once'session.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$id = $_POST['id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		//$image = $_POST['image'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = (end($explode));
			$format = ['png', 'jpg', 'JPEG', 'GIF', 'PNG', 'TIFF', 'TIFF'];
			$Allow_format = in_array($ext, $format);

			if ($Allow_format) {
				if ($_FILES['image']['size'] < 393764) {

					$sel = "SELECT * FROM portfolio WHERE id = '$id'";
					$qry = mysqli_query($con, $sel);
					$as = mysqli_fetch_assoc($qry);

					if (file_exists('../images/'.$as['image'])) {
						unlink('../images/'.$as['image']);	
					}
					
					$img = $id.'.'.$ext;

					$new_location = '../images/'.$img;

					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

					$update = "UPDATE portfolio SET title = '$title', description = '$description', image = '$img' WHERE id = '$id'";

					mysqli_query($con, $update);
					echo "Image Uploaded";
					header("location:view-Portfolio.php");

				}else{
					echo "not allow";
				}
			}else{
				echo "Invalid Image Format";
			}

		}else{
			echo "Not Update";
		}
		
	}

?>