<?php
include("connection.php");
session_start();
if((isset($_POST['submit']) || isset($_POST['update'])) && isset($_FILES['fileToUpload'])){
	$staff_student_id = $_SESSION['regno'];
	$title = ucfirst($_POST['title']);
	$description = ucfirst($_POST['description']);
	$date = date("Y-m-d");
	$imageName = $_FILES['fileToUpload']['name'];
	$size = $_FILES['fileToUpload']['size'];
	$tmp_name = $_FILES['fileToUpload']['tmp_name'];
	$error = $_FILES['fileToUpload']['error'];
	if($error == 0){
		if($size <= 2091008){
			$imageExtension = pathinfo($imageName,PATHINFO_EXTENSION);//this method return extension of the image EX:jpg,png,txt
			$imageExtensionToLowerCase = strtolower($imageExtension);//image extension tern into lowercase
			$allowedExtension = array("jpg","jpeg","png");
			//Check wether element there or not
			if(in_array($imageExtension,$allowedExtension)){
				$new_img_name = uniqid("IMG-",true).'.'.$imageExtensionToLowerCase;
				$img_upload_path ='uploads/'.$new_img_name;
				move_uploaded_file($tmp_name,$img_upload_path);//move_uploaded_file(filename,destination)
			
			
				if(isset($_POST['update'])){
					$postId = $_POST['postId'];
					$query = "UPDATE  post SET post_image_path='$new_img_name', post_title='$title',post_description='$description',post_date='$date' WHERE post_id = '$postId'";
				}else{
					$query = "INSERT INTO post(staff_student_id, post_image_path, post_title, post_description, post_date) VALUES ('$staff_student_id','$new_img_name','$title','$description','$date')";
				}
				
				mysqli_query($con,$query);

				?>
				<script>
					alert("Your post has been successfully shared with the world! Get ready for the interaction and engagement that's about to come your way. Keep the conversation going and enjoy the moment!");
					window.location.href = "dashboards/dcs_forum.php";
				</script>
				<?php
			}else{
				echo '<script>alert("file format not supported");
					window.location.href = "dcs_forum.php";
			</script>';
			}
	}else{
		echo '<script>
			alert("file too large..!");
			window.location.href = "dcs_forum.php";
		</script>';
	}
	}else{
		echo '<script>
			alert("Upload error..!");
			window.location.href = "dcs_forum.php";
		</script>';
	}
	
}else{
	echo '<script>
			alert("Ooop..Something went wrong..!");
			window.location.href = "index.php";
		</script>';
}
?>