<?php
session_start();
if(!isset($_POST["adminlogin"])){
	header("Location:index.php");
}

include('connection.php');
    //login verification
    if(isset($_POST["adminlogin"])){
	$staff_student_id = strtolower($_POST['adminusername']);
	$password = $_POST['adminpassword'];
	$query = "SELECT password FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
	$result = mysqli_query($con,$query);
	$numOfrow = mysqli_num_rows($result);
	if($numOfrow == 1){
		$row = mysqli_fetch_assoc($result);
		
		if(password_verify($password,$row['password'])){
			$_SESSION['staff_student_id'] = $staff_student_id;
			header("Location: dashboards/admindashboard.php");
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
    }

    //insert to main database
    if(isset($_POST['insertuser'])){

        $userId = $_POST['userid'];
        $time = date("Y-m-d H:i:s");
        $attempts = 0;

        $insertQuery = "INSERT INTO identity_verification_staff_student VALUES ('$userId','$time','$attempts')";
        $result = mysqli_query($con,$insertQuery);

        if($result){
            echo "<script>Insertion Successfull!</script>";
            header("location: dashboards/admindashboard.php?maindatabase");
            exit;
        } else {
            echo "<script>There is an error in insertion!</script>";
            exit;
        }

    }

    //deletion main database
    if(isset($_GET['maindatabaseactiondelete'])){
        $id = $_GET['id'];

        $query = "DELETE FROM identity_verification_staff_student WHERE staff_student_id='$id'";
        $result = mysqli_query($con,$query);

        if($result){
            header("location: dashboards/admindashboard.php?maindatabase");
            exit;
        } else {
            echo "<script>There is an error in deletion!</script>";
            exit;
        }
    }
	
	//Unlock user
	if(isset($_GET['userUnlock'])){
		$id = $_GET['id'];
		
		$query = "UPDATE identity_verification_staff_student SET unsuccessful_verification_attempt = 0  WHERE staff_student_id='$id'";
        $result = mysqli_query($con,$query);
		
		if($result){
            header("location: dashboards/admindashboard.php?maindatabase");
            exit;
        } else {
            echo "<script>There is an error in post deletion!</script>";
            exit;
        }
	}
	
    //delete community post
    if(isset($_GET['deletepost'])){
        $postid = $_GET['id'];

        $query = "DELETE FROM post WHERE post_id = '$postid'";
        $result = mysqli_query($con,$query);

        if($result){
            header("location: dashboards/admindashboard.php?communitypost");
            exit;
        } else {
            echo "<script>There is an error in post deletion!</script>";
            exit;
        }
    }

    //delete registered user
    if(isset($_GET['deleteregistereduser'])){
        $userid = $_GET['id'];

        $query = "DELETE FROM staff_student_user_details WHERE staff_student_id='$userid'";
        $result = mysqli_query($con,$query);

        if($result){
            header("location: dashboards/admindashboard.php?registeredusers");
            exit;
        } else {
            echo "<script>There is an error in registered user deletion!</script>";
            exit;
        }
    }

    //student profile deletion
    if(isset($_GET['userprofiledeletion'])){
        $userid = $_GET['id'];

        $query = "DELETE FROM student_profile WHERE staff_student_id = '$userid'";
        $result = mysqli_query($con,$query);

        if($result){
            header("location: dashboards/admindashboard.php?studentprofiles");
            exit;
        } else {
            echo "<script>There is an error in student profile deletion</script>";
            exit;
        }
    }

    //feedback deletion
    if(isset($_GET['feedbackdeletion'])){
        $feedbackid = $_GET['id'];

        $query = "DELETE FROM feedback WHERE feedback_id = '$feedbackid'";
        $result = mysqli_query($con,$query);

        if($result){
            header("Location: dashboards/admindashboard.php?feedback");
            exit;
        } else {
            echo "<script>There is an error in feedback deletion!</script>";
            exit;
        }
    }

    //admin deletion
    if(isset($_GET['adminpaneldeletion'])){
        $adminid = $_GET['id'];

        $query = "DELETE FROM admindetails WHERE admin_id = '$adminid'";
        $result = mysqli_query($con,$query);

        if($result){
            header("location: dashboards/admindashboard.php?adminpanel");
            exit;
        } else {
            echo "<script>There is an error in admin deletion!</script>";
            exit;
        }
    }



?>