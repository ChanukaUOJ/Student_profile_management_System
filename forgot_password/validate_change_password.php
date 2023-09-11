<?php
session_start();
include("../connection.php");
if(isset($_POST['Change_password'])){
	if($_POST['New_password'] == $_POST['Confirm_password']){
		$New_password = password_hash($_POST['New_password'],PASSWORD_DEFAULT);
		$staff_student_id = $_SESSION['staff_student_id'];
		$query = "UPDATE staff_student_user_details SET password = '$New_password' WHERE staff_student_id = '$staff_student_id'";
		mysqli_query($con,$query);
		session_destroy();
		?>
			<script>
				alert("Your password has been successfully reset. Your account is now secure. Remember to keep your new password safe and confidential. If you have any further concerns or questions, feel free to reach out. Your security is our top priority. 🛡️🔐");
				window.location.href = "../index.php";
			</script>
		<?php
	}else{
		?>
		<script>
		alert("Key Mismatch Error. The provided key does not match the expected value. Please verify the key and try again. Your security is important to us.");
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