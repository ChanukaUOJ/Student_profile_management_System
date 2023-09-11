<?php
session_start();

include("connection.php");
if(isset($_POST['send']) or isset($_GET['send'])){
	
	if(isset($_GET['send'])){
			$_SESSION['staff_student_id'] = $_GET['staff_student_id'];
	}else{
			$_SESSION['staff_student_id'] = $_POST['Registration_Number'];
	}
	
	$_SESSION['reset_session'] = "reset" ;
	$staff_student_id = $_SESSION['staff_student_id'];
	$query = "SELECT email,first_name FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
	$result = mysqli_query($con,$query);
	$num_of_row = mysqli_num_rows($result);
	
	if($num_of_row == 1){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		$_SESSION['first_name'] = $row['first_name'];
		include("phpmailer.php");
	}else{
		?>
	<script>
		var staff_student_id = '<?php echo $staff_student_id; ?>';
		alert("We truly appreciate your interest and sympathy. However, as of now, "+staff_student_id+" might not meet the eligibility criteria. Please feel free to get in touch with our support team for more information and assistance. Your understanding means a lot to us. ");
		window.location.href = "index.php";
	</script>
	<?php
	}
}
?>