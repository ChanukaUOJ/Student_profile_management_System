<?php
session_start();
include("connection.php");
if(isset($_POST['login'])){
	$staff_student_id = strtoupper($_POST['regno']);
	$password = $_POST['password'];
	$query = "SELECT password FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
	$result = mysqli_query($con,$query);
	$numOfrow = mysqli_num_rows($result);
	if($numOfrow == 1){
		$row = mysqli_fetch_assoc($result);
		
		if(password_verify($password,$row['password'])){
			$_SESSION['regno'] = $staff_student_id;
			header("Location: dashboards/dcs_forum.php");
		}else{
			?>
			<script>
			alert("The password you entered is incorrect. Please double-check your password and try again.If you continue to have issues, click on the FORGOT PASSWORD link to reset your password.For any further assistance, please contact our support team at supportdcscommunity@gmail.com.Thank you.");
			window.location.href = "index.php";
			</script>
			<?php
		}
		
	}else{
		?>
	<script>
		var staff_student_id = '<?php echo $staff_student_id; ?>';
		alert("We truly appreciate your interest and sympathy. However, as of now, "+staff_student_id+" might not meet the eligibility criteria. Please feel free to get in touch with our support team for more information and assistance. Your understanding means a lot to us. ");
		window.location.href = "index.php";
	</script>
	<?php
	}
	
}else{
	?>
	<script>
		alert("Your session has expired. For security reasons, please log in again to continue accessing our services. We're here to ensure your privacy and protection.");
	</script>
	<?php
}
?><?php
session_start();
include("connection.php");
if(isset($_POST['login'])){
	$staff_student_id = strtoupper($_POST['regno']);
	$password = $_POST['password'];
	$query = "SELECT password FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
	$result = mysqli_query($con,$query);
	$numOfrow = mysqli_num_rows($result);
	if($numOfrow == 1){
		$row = mysqli_fetch_assoc($result);
		
		if(password_verify($password,$row['password'])){
			$_SESSION['regno'] = $staff_student_id;
			header("Location: dashboards/dcs_forum.php");
		}else{
			?>
			<script>
			alert("The password you entered is incorrect. Please double-check your password and try again.If you continue to have issues, click on the FORGOT PASSWORD link to reset your password.For any further assistance, please contact our support team at supportdcscommunity@gmail.com.Thank you.");
			window.location.href = "index.php";
			</script>
			<?php
		}
		
	}else{
		?>
	<script>
		var staff_student_id = '<?php echo $staff_student_id; ?>';
		alert("We truly appreciate your interest and sympathy. However, as of now, "+staff_student_id+" might not meet the eligibility criteria. Please feel free to get in touch with our support team for more information and assistance. Your understanding means a lot to us. ");
		window.location.href = "index.php";
	</script>
	<?php
	}
	
}else{
	?>
	<script>
		alert("Your session has expired. For security reasons, please log in again to continue accessing our services. We're here to ensure your privacy and protection.");
	</script>
	<?php
}
?>