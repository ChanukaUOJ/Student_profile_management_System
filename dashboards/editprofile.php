<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");

$staff_student_id = $_SESSION['regno'];
$query_1 = "SELECT first_name, last_name, email FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
$result_1 = mysqli_query($con,$query_1);
$row_1 = mysqli_fetch_assoc($result_1);

$query_2 = "SELECT * FROM student_profile WHERE staff_student_id = '$staff_student_id' ";
$result_2 = mysqli_query($con,$query_2);
$row_2 = mysqli_fetch_assoc($result_2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/editprofileandpost.css?=<?php echo time() ?>">
    <title><?php echo $row_1['first_name']." ".$row_1['last_name']; ?></title>
</head>

<body>

    <!-- updatedetails -->
    <div class="updatedetails" id="updatedetails">

        <form action="edit_profile_process.php" method="POST" enctype="multipart/form-data">

            <div class="addposttitle">
                <h1>Let Us Know!</h1>
            </div>


            <input type="hidden" name="userId" value="">

            <!-- regno -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Reg No" name="regno"
                        value="<?php echo $staff_student_id; ?>" disabled>
                    <label for="floatingInputGrid">Reg No</label>
                </div>
            </div>
            <!-- regno -->

            <!-- First Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="First Name"
                        name="firstname" value="<?php echo $row_1['first_name']; ?>" required disabled>
                    <label for="floatingInputGrid">First Name</label>
                </div>
            </div>
            <!-- first Name -->

            <!-- Last Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Last Name"
                        name="lastname" value="<?php echo $row_1['last_name']; ?>" required disabled>
                    <label for="floatingInputGrid">Last Name</label>
                </div>
            </div>
            <!-- Last Name -->

            <!-- email -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid"
                        placeholder="Registered Email Address" name="email" value="<?php echo $row_1['email']; ?>" rows="50"
                        required disabled>
                    <label for="floatingInputGrid">Registered Email Address</label>
                </div>
            </div>
            <!-- email -->

            <!-- image -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="fileToUpload" value=""
                        required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>
            <!-- image -->

            <!-- Short Bio -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Short
                Bio... | Word Limit - 150 characters</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Short Bio..."
                        name="bio" value="" required style="height: 300px"><?php echo $row_2['biodata'];?></textarea>
                    <label for="floatingInputGrid">Short Bio...<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- Short Bio -->

            <!-- education -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Education
                Qualifications...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-1"
                        name="education_1" value="<?php echo $row_2['education_qulification_1'];?>" required>
                    <label for="floatingInputGrid">Education 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-2"
                        name="education_2" value="<?php echo $row_2['education_qulification_2'];?>" required>
                    <label for="floatingInputGrid">Education 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- education -->

            <!-- skills -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Edit your
                skills...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-1" name="skill_1"
                        value="<?php echo $row_2['skill_1'];?>" required>
                    <label for="floatingInputGrid">Skill 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-2" name="skill_2"
                        value="<?php echo $row_2['skill_2'];?>" required>
                    <label for="floatingInputGrid">Skill 2<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-3" name="skill_3"
                        value="<?php echo $row_2['skill_3'];?>" required>
                    <label for="floatingInputGrid">Skill 3<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-4" name="skill_4"
                        value="<?php echo $row_2['skill_4'];?>" required>
                    <label for="floatingInputGrid">Skill 4<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- skills -->

            <!-- languages -->
            <label for="floatingInputGrid"
                style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Languages...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-1"
                        name="language_1" value="<?php echo $row_2['language_1'];?>" required>
                    <label for="floatingInputGrid">Language 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-2"
                        name="language_2" value="<?php echo $row_2['language_2'];?>" required>
                    <label for="floatingInputGrid">Language 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- languages -->

            <!-- experience -->
            <label for="floatingInputGrid"
                style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Experience... <span
                    style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-1"
                        name="experience_1" value="<?php echo $row_2['experience_1'];?>" required>
                    <label for="floatingInputGrid">Experience 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-2"
                        name="experience_2" value="<?php echo $row_2['experience_2'];?>" required>
                    <label for="floatingInputGrid">Experience 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- experience -->

            <!-- volunteering -->
            <label for="floatingInputGrid"
                style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Volunteering... <span
                    style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-1"
                        name="volunteering_1" value="<?php echo $row_2['volunteering1'];?>" required>
                    <label for="floatingInputGrid">Volunteering 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-2"
                        name="volunteering_2" value="<?php echo $row_2['volunteering2'];?>" required>
                    <label for="floatingInputGrid">Volunteering 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- volunteering -->

            <!-- socialmedia links -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Social
                media links... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Linkedin"
                        name="socialmedia_1" value="<?php echo $row_2['linkedIn_link'];?>" required>
                    <label for="floatingInputGrid">Linkedin<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Github"
                        name="socialmedia_2" value="<?php echo $row_2['github_link'];?>" required>
                    <label for="floatingInputGrid">Github<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Hacker Rank"
                        name="hackerrank" value="<?php echo $row_2['hacker_rank'];?>" required>
                    <label for="floatingInputGrid">Hacker Rank<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- socialmedia links -->

            <label for="floatingInputGrid" style="margin-top: 20px;">By updating this form, I certify that above entered
                details are true...</label>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3" name="edit_profile">Update profile</button>
            </div>

        </form>
    </div>
    <!-- updatedetails -->

</body>

</html>