<?php
session_start();
include("connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php

$staff_student_id = $_SESSION['staff_student_id'] ;
$verification_sent_email = $_SESSION['email'];

$query_check = "SELECT staff_student_id FROM identity_verification_staff_student WHERE staff_student_id = '$staff_student_id'";
$result_check = mysqli_query($con,$query_check);

$query = "SELECT unsuccessful_verification_attempt FROM identity_verification_staff_student WHERE staff_student_id = '$staff_student_id'";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result_check) == 1){
	$firstname = $_SESSION['first_name'];
	$row = mysqli_fetch_assoc($result);
	
	if($row['unsuccessful_verification_attempt'] >= 3){
	echo '<script>alert("Sorry..system was detected heavy unsuccessful verification attempts..! contact your system administrator.")</script>';
	session_destroy();
	?>
	<script>
	window.location.href = "index.php";
	</script>
	<?php
}else{
	$unsuccessful_verification_attempt = $row['unsuccessful_verification_attempt'] + 1;
	date_default_timezone_set("Asia/Colombo");
	$time_stamp = date("Y-m-d H:i:s");
	$query_update_identity_verification_staff_student = "UPDATE identity_verification_staff_student SET unsuccessful_verification_attempt = '$unsuccessful_verification_attempt',time_stamp = '$time_stamp' WHERE staff_student_id = '$staff_student_id'";
	mysqli_query($con,$query_update_identity_verification_staff_student);
	//Send verification code
	$minKey = 100000; // Minimum value for the key
	$maxKey = 999999; // Maximum value for the key
	$randomKey = rand($minKey, $maxKey);
	$_SESSION['randomKey'] = $randomKey;
	
	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';

	// Create a new PHPMailer instance
	$mail = new PHPMailer(true);

	try {
			// SMTP configuration
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'nimantha.rathnayake1999@gmail.com'; // Your Gmail email address
			$mail->Password   = 'kxqsjubrioakjvis'; // Your Gmail password or app-specific password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = 587; // Gmail SMTP port (TLS)

			// Sender and recipient
			$mail->setFrom('nimantha.rathnayake1999@gmail.com', 'DCS-Community');
			$mail->addAddress($verification_sent_email,$firstname);

			// Email content
			$mail->isHTML(false);
			$mail->Subject = 'verification Code';
			$mail->Body    = "Hello $firstname,\r\n\nPlease use the verification code below on the DCS-Student Management System : $randomKey.\r\n\nif you didn't request this, you can ignore this email or let us know.\r\n\n\nThanks!.";   
			// Send the email
			$mail->send();
			date_default_timezone_set("Asia/Colombo");
			$_SESSION['email_code_sent_time'] = date("i");
			?>
			
			<script>
				window.location.href = "signup_verification.php";
			</script>
			
			<?php
	} catch (Exception $e) {
			echo "Email could not be sent. Error: {$mail->ErrorInfo}";
	}
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

?>

</body>
</html>