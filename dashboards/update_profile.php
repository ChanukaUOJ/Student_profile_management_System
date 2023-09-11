<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");

$staff_student_id = $_SESSION['regno'];
$query = "SELECT staff_student_id FROM student_profile WHERE staff_student_id = '$staff_student_id'";
$result_p = mysqli_query($con,$query);
$rowCount = mysqli_num_rows($result_p);
if($rowCount == 0){


if(isset($_POST['Update_profile']) && isset($_FILES['fileToUpload'])){

	$staff_student_id = $_SESSION['regno'];
	$biodata =  ucfirst($_POST['bio']);
	$linkedIn_link = strtolower($_POST['socialmedia_1']);
	$github_link = strtolower($_POST['socialmedia_2']);
	$hackerrank = strtolower($_POST['hackerrank']);
	$experience_1 = ucfirst($_POST['experience_1']);
	$experience_2 = ucfirst($_POST['experience_2']);
	$education_qulification_1 = ucfirst($_POST['education_1']);
	$education_qulification_2 = ucfirst($_POST['education_2']);
	$skill_1 = ucfirst($_POST['skill_1']);
	$skill_2 = ucfirst($_POST['skill_2']);
	$skill_3 = ucfirst($_POST['skill_3']);
	$skill_4 = ucfirst($_POST['skill_4']);
	$language_1 = ucfirst($_POST['language_1']);
	$language_2 = ucfirst($_POST['language_2']);
	$volunteering1 = ucfirst($_POST['volunteering_1']);
	$volunteering2 = ucfirst($_POST['volunteering_2']);
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
				$img_upload_path ='../profile/'.$new_img_name;
				move_uploaded_file($tmp_name,$img_upload_path);//move_uploaded_file(filename,destination)
				$query = "INSERT INTO student_profile(staff_student_id, staff_student_profile_image_path, biodata,linkedIn_link,hacker_rank,github_link, experience_1, experience_2, education_qulification_1, education_qulification_2, skill_1, skill_2, skill_3, skill_4, language_1, language_2, volunteering1,volunteering2) VALUES
				('$staff_student_id','$new_img_name','$biodata','$linkedIn_link','$hackerrank','$github_link','$experience_1','$experience_2','$education_qulification_1','$education_qulification_2',
				'$skill_1','$skill_2','$skill_3','$skill_4','$language_1','$language_2','$volunteering1','$volunteering1')";
				mysqli_query($con,$query);
				
				?>
				<script>
					alert("Congratulations! Your profile has been successfully updated with the new information you provided. Your changes are now reflected across our platform. If you have any further updates or questions, please don't hesitate to make the necessary adjustments or reach out to our support team. Thank you for keeping your profile current.");
					window.location.href = "dcs_forum.php";
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
}else{
?>

<script>
alert("Your profile has already been updated. If you wish to make further changes, please utilize the profile editing feature. This will allow you to modify your information as needed.");
window.location.href = "dcs_forum.php";
</script>

<?php
}
?>