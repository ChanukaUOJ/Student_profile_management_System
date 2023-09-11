<?php
session_start();
include("connection.php");

if(isset($_POST['send'])){
		date_default_timezone_set("Asia/Colombo");
		$_SESSION['email_code_verified_time'] = date("i");
		$currrent_session_duration = $_SESSION['email_code_verified_time'] - $_SESSION['email_code_sent_time'];
		
		if($currrent_session_duration < 300){
			
	if($_SESSION['randomKey'] == $_POST['verification_code']){
		if(isset($_SESSION['reset_session'])){
			header("Location: forgot_password/change_password.php");
		}else{
			
			$staff_student_id = $_SESSION['staff_student_id'];
			$first_name = $_SESSION['first_name'];
			$last_name = $_SESSION['last_name'];
			$email = $_SESSION['email'];
			$user_status = $_SESSION['user_status'];
			$password = password_hash($_SESSION['password'],PASSWORD_DEFAULT);
			//error
			$query = "INSERT INTO staff_student_user_details(staff_student_id, first_name, last_name, email,user_status, password)
					VALUES('$staff_student_id','$first_name','$last_name','$email','$user_status','$password')";
					mysqli_query($con,$query);
					session_destroy();
					?>
					<script>
						alert("Welcome aboard! You're now connected to the system. Feel free to navigate and explore the features. If you have any questions or need assistance, we're here to help. Happy exploring! ");
						alert("Ensure Password Confidentiality 🤐🔒: Please remember to keep your password confidential and avoid sharing it with anyone. When using the system, make sure to input your username as 2222CSC222 using capital letters as specified. Your security is our priority. Stay protected!");
						window.location.href = "index.php";
					</script>
					<?php
			//error
		}					
	}else{
		?>
			<script>
				alert("Key Mismatch Error. The provided key does not match the expected value. Please verify the key and try again. Your security is important to us.");
				window.location.href = "user_verification.php";
			</script>
		<?php
	}
		}else{
			session_destroy();
			?>
			<script>
				alert("Your verification has expired. To continue, please initiate the verification process again. We're here to ensure a smooth experience for you.");
				window.location.href = "index.php";
			</script>
			
			<?php
		}
}else{
	session_destroy();
	?>
	<script>
		alert("Your session has expired. For security reasons, please log in again to continue accessing our services. We're here to ensure your privacy and protection.");
		window.location.href = "index.php";
	</script>
	<?php
}
//password attempt should be increased
?>