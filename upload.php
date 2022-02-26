<?php 

if (isset($_POST['submit']) && isset($_FILES['student_image'])) {
	include "database.php";

	$s_name = $_POST['student_name'];
	$img_name = $_FILES['student_image']['name'];
	$tmp_name = $_FILES['student_image']['tmp_name'];
	$error = $_FILES['student_image']['error'];

	if ($error === 0) {
			$extension = pathinfo($img_name, PATHINFO_EXTENSION);
			$lowercase = strtolower($extension);

			$extension_type = array("jpg", "jpeg", "png", "jfif","gif"); 

			if (in_array($lowercase, $extension_type)) {
				$new_img_name = $s_name.'.'.$lowercase;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO images(image_name) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: show_photo.php");
			}else {
				$em = "Error! Upload Photo only.";
		        header("Location: index.php?error=$em");
			}
	}else {
		$em = "Error! Select a Photo First.";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}