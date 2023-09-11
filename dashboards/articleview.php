<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");

$post_id = $_GET['post_id'];
$postInformation = "SELECT staff_student_id, post_image_path,post_title,post_description FROM post WHERE post_id='$post_id'";
$result_postInformation = mysqli_query($con, $postInformation);
$row_postInformation = mysqli_fetch_assoc($result_postInformation);

//USER IMAGE VIEW
$staff_student_id = $row_postInformation['staff_student_id'];
$query_profile = "SELECT staff_student_profile_image_path FROM student_profile WHERE staff_student_id = '$staff_student_id'";
$result_profile = mysqli_query($con, $query_profile);
$row_profile = mysqli_fetch_assoc($result_profile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/articleview.css?=<?php echo time() ?>">
    <title><?php echo $row_postInformation['post_title']; ?></title>

    <style>
    </style>

</head>

<body>

    <div class="containerdashboard">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <div class="card-right">
                        <h4 class="card-title"><?php echo $row_postInformation['post_title']; ?></h4>
                        <hr>
                        <center>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../profile/<?php echo $row_profile['staff_student_profile_image_path']; ?>" alt=""
                                style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                <?php echo $row_postInformation['staff_student_id']; ?>
                            </div>
                        </div>
                        </center>
                    </div>
                </div>
                <center>
                <div class="card-left">
                    <img class="card-img-top"
                        src="../uploads/<?php echo $row_postInformation['post_image_path']; ?>"
                        alt="Card image cap">
                </div>
                </center>
                <div class="cardbody">
                    <p class="card-text">
					 <?php echo $row_postInformation['post_description']; ?>
					</p>
                    <div class="bottom_details">
                        <!-- <img src="../images/background.jpg" alt=""> -->
                        <div class="likebuttonbody">
                            <div class="likebutton"><a href="postLike.php?post_id=<?php echo $post_id;?>"><i class="fa-solid fa-thumbs-up"></i><span>Like</span></a></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</body>

</html>