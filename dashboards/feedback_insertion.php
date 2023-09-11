<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");
if(isset($_POST['SendYourFeedback'])){
	
$staff_student_id = $_SESSION['regno'];
$feedbackTitle = ucfirst($_POST['feedbackTitle']);
$feedbackDescription = ucfirst($_POST['feedbackDescription']);

$query = "INSERT INTO feedback(	staff_student_id,feedback_title,feedback_description) VALUES ('$staff_student_id','$feedbackTitle','$feedbackDescription')";
mysqli_query($con,$query);
?>
			<script>
				alert("Thank you for providing your valuable feedback. Your input is crucial in helping us improve our services. Our support team has been notified and will carefully review your feedback. We appreciate your engagement and look forward to enhancing your experience based on your suggestions.");
				window.location.href = "dcs_forum.php";
			</script>
<?php
}else{
	?>
<script>
alert("Please be informed that your session has expired due to inactivity. To continue using our services, please log in again. Thank you for choosing our platform.");
</script>
	<?php
}
?>

</body>
</html>