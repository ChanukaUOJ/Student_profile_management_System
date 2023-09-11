<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");
$staff_student_id = $_SESSION['regno'];
$query = "SELECT staff_student_id, staff_student_profile_image_path, linkedIn_link,hacker_rank,experience_1, experience_2, education_qulification_1, education_qulification_2, skill_1, skill_2, skill_3, skill_4, language_1, language_2, volunteering1, biodata, github_link, volunteering2 FROM student_profile WHERE staff_student_id = '$staff_student_id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$rowCount = mysqli_num_rows($result);

if($rowCount == 1){
	$staff_student_profile_image_path = $row['staff_student_profile_image_path'];
	$biodata =  $row['biodata'];
	$linkedIn_link = $row['linkedIn_link'];
	$github_link = $row['github_link'];
	$hackerrank = $row['hacker_rank'];
	$experience_1 = $row['experience_1'];
	$experience_2 = $row['experience_2'];
	$education_qulification_1 = $row['education_qulification_1'];
	$education_qulification_2 = $row['education_qulification_2'];
	$skill_1 = $row['skill_1'];
	$skill_2 = $row['skill_2'];
	$skill_3 = $row['skill_3'];
	$skill_4 = $row['skill_4'];
	$language_1 = $row['language_1'];
	$language_2 = $row['language_2'];
	$volunteering1 = $row['volunteering1'];
	$volunteering2 = $row['volunteering2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/showprofile.css">
    <title><?php echo $_SESSION['firstname']."  ".$_SESSION['lastname']; ?></title>
</head>
<body>

    <div class="containerdashboard">

            <div class="container">
                
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white avatarcolumn"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="../profile/<?php echo $staff_student_profile_image_path; ?>"
                            alt="Avatar" class="img-fluid my-5" style="width: 200px; height: 200px;" />
                        <h5><?php echo $_SESSION['firstname']."  ".$_SESSION['lastname']; ?></h5>
                        <p>Computer Science || University of Jaffna</p>
                        <center>
                        <div class="d-flex justify-content-start socialmedia">
                            <a href="<?php if($linkedIn_link == "no"){echo "https://www.linkedin.com/" ;}else{echo $linkedIn_link ;} ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="<?php if($github_link == "no"){echo "https://github.com/" ;}else{echo $github_link ;} ?>"><i class="fa-brands fa-github"></i></a>
                            <a href="<?php if($hackerrank == "no"){echo "https://www.hackerrank.com/" ;}else{echo $hackerrank ;} ?>"><i class="fa-brands fa-hackerrank"></i></a>
                            <a href="mailto:<?php echo $_SESSION['email']; ?>"><i class="fa-regular fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                        </center>
                            
                            <h6 style="padding-top: 50px;">Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>First Name</h6>
                                    <p class="text-muted"><?php echo $_SESSION['firstname']; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Last Name</h6>
                                    <p class="text-muted"><?php echo $_SESSION['lastname'] ; ?></</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Reg No:</h6>
                                    <p class="text-muted"><?php echo $staff_student_id; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted"><?php echo $_SESSION['email']; ?></</p>
                                </div>
                            </div>
                            
                            
                            <h6>Short Bio...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row2">
                                <div class="bio">
                                    <p class="text-muted"><?php echo $biodata;?></p>
                                </div>
                            </div>
                            
                            <h6>Education Qualification...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Higher Education</h6>
                                    <p class="text-muted"><?php echo $education_qulification_1; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Secondary Education</h6>
                                    <p class="text-muted"><?php echo $education_qulification_2; ?></p>
                                </div>
                            </div>

                            <h6>Your Skills...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <p class="text-muted"><?php echo $skill_1; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <p class="text-muted"><?php echo $skill_2; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <p class="text-muted"><?php echo $skill_3; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <p class="text-muted"><?php echo $skill_4; ?></p>
                                </div>
                            </div>

                            <h6>Languages...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Primary Language</h6>
                                    <p class="text-muted"><?php echo $language_1; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Secondary Language</h6>
                                    <p class="text-muted"><?php echo $language_2; ?></p>
                                </div>
                            </div>

                            <h6>Experience...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>1<sup>st</sup> Experience</h6>
                                    <p class="text-muted"><?php echo $experience_1; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>2<sup>nd</sup> Experience</h6>
                                    <p class="text-muted"><?php echo $experience_2; ?></p>
                                </div>
                            </div>

                            <h6>Volunteering...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>1<sup>st</sup> Volunteering</h6>
                                    <p class="text-muted"><?php echo $volunteering1; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>2<sup>nd</sup> Volunteering</h6>
                                    <p class="text-muted"><?php echo $volunteering2; ?></p>
                                </div>
                            </div>

                            <h6>Published Articles in DCS Community...</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row2">
							
<?php
$postInformation = "SELECT post_title FROM post WHERE staff_student_id ='$staff_student_id'";
$result_postInformation = mysqli_query($con, $postInformation);
$numOfrow = mysqli_num_rows($result_postInformation);
if($numOfrow>=1){
$i=0;
while($row_postInformation = mysqli_fetch_assoc($result_postInformation)){
$i++;
?>
                                <div class="bio">
                                    <p class="text-muted"><?php echo $i.".".$row_postInformation['post_title'];?></p>
                                </div>
<?php
	}
}else{
	?>
	 <div class="bio">
         <p class="text-muted">No articles yet.</p>
     </div>
	 <?php
}
?>
                            </div>
                        
                        
                        </div>
                        
                    </div>
                </div>

            </div>

    </div>

    <!-- javascript -->
    <script type="text/javascript">  
        // open script
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var postarticleform = document.getElementById('postarticleform');
            postarticleform.classList.toggle('active');
        }

        function feedbacktoggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var feedbackform = document.getElementById('feedbackform');
            feedbackform.classList.toggle('active');
        }

        function updatetoggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var updatedetails = document.getElementById('updatedetails');
            updatedetails.classList.toggle('active');
        }

        // close script
        function closePopup() {
            var blur = document.getElementById('blur');
            blur.classList.remove('active');
            
            var postarticleform = document.getElementById('postarticleform');
            postarticleform.classList.remove('active');
        }

        function closePopupFeedback() {
            var blur = document.getElementById('blur');
            blur.classList.remove('active');
            
            var feedbackform = document.getElementById('feedbackform');
            feedbackform.classList.remove('active');
        }

        function closePopupUpdate() {
            var blur = document.getElementById('blur');
            blur.classList.remove('active');
            
            var updatedetails = document.getElementById('updatedetails');
            updatedetails.classList.remove('active');
        }
    </script>
    <!-- javascript -->
    
</body>
</html>
<?php
}else{
	?>
	<script>
	alert("It appears that your profile has not been properly created. Please review the information you provided and ensure that all necessary details have been entered accurately");
	window.location.href = "dcs_forum.php?dcs_community=#";
	</script>
<?php
}
?>