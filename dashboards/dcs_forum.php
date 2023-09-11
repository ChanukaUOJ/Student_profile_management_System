<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}

include("../connection.php");
$staff_student_id = $_SESSION['regno'];
$query = "SELECT first_name,last_name,email FROM staff_student_user_details WHERE staff_student_id = '$staff_student_id'";
$result = mysqli_query($con, $query);
$numOfrows = mysqli_num_rows($result);
if ($numOfrows == 1) {
    $row = mysqli_fetch_assoc($result);
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $email = $row['email'];
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;

} else {
    // echo "Wrong connection!";
}

$query_unlock = "UPDATE identity_verification_staff_student SET unsuccessful_verification_attempt = 0  WHERE staff_student_id='$staff_student_id'";
mysqli_query($con,$query_unlock);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/copy.css?=<?php echo time() ?>">
    <title>DCS Forum</title>
</head>
<body>

    <div class="containerdashboard" id="blur">
        
    <div class="filler" style="background-color: #f1f1f1; width:100%; height: 50px; position: fixed; top: 0; left: 0; z-index: 50;"></div>


            <!-- top navbar -->
            <div class="navbar">
                <div class="container">
                    <div id="logo">
                        <img src="https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new.png" alt="">
                    </div>
            
                    <div class="screen_heading" style="">
                        <h1 style="font-weight: bold;"><?php if(isset($_GET['findStudent'])){echo "Student Portal";}else if(isset($_GET['yourArticles'])){echo "Articles View";}else{echo "DCS Community";} ?></h1>
                    </div>
                </div>
            </div>
            <!-- top navbar -->

        <!-- sidebar -->
        
        <nav class="sidebar close">
            <header >
                <div class="menuicon" onclick="sidebareffect()"><i class="fa-solid fa-bars"></i></div>
                <div class="image-text">
                    <span class="image">
                    
<?php

$staff_student_id = $_SESSION['regno'];
$query_profile = "SELECT staff_student_profile_image_path FROM student_profile WHERE staff_student_id = '$staff_student_id'";
$result_profile = mysqli_query($con, $query_profile);
$row_profile = mysqli_fetch_assoc($result_profile);
$numOfrows_profile = mysqli_num_rows($result_profile);
if ($numOfrows_profile == 1) {
    ?>
        <img src="../profile/<?php echo $row_profile['staff_student_profile_image_path']; ?>" alt="">
    
        <?php
} else {
    ?>
        <img src="../images/background.jpg" alt="">
        <?php
}
?>                
                    </span>

                    <div class="text header-text">
                        <span class="name"><?php echo $firstname . " "; ?></span><span class="name"><?php echo $lastname; ?></span><br>
                        <span class="regno"><?php echo $_SESSION['regno']; ?></span>
                    </div>
                </div>

            </header>

            <div class="menu-bar">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="?dcs_community=#">
                            <i class="fa-solid fa-copy"></i>
                            <span>DCS Community</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?findStudent=#">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Find a Student</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?yourArticles=#">
                            <i class="fa-solid fa-newspaper"></i>
                            <span>your Articles</span>
                        </a>
                    </li>

                    <li class="nav-link" onclick="feedbacktoggle()">
                        <a href="#">
                            <i class="fa-solid fa-comments"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
    
                    <li class="nav-link" onclick="updatetoggle()">
                        <a href="#">
                            <i class="fa-solid fa-gear"></i>
                            <span>Update Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="editprofile.php" target="_blank">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Edit Profile</span>
                        </a>
                    </li>
            
                    <li class="nav-link">
                        <a href="showprofile.php" target="_blank">
                            <i class="fa-regular fa-file-lines"></i>
                            <span>View Your Profile</span>
                        </a>
                    </li>
            
                    <li class="nav-link logout">
                        <a href="../logout.php">
                            <i class="fa-solid fa-power-off"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- sidebar -->

        <div class="mainbar">

            
<?php
if (isset($_GET['yourArticles'])) {
    yourArticles();
} else if (isset($_GET['findStudent'])) {
    findStudent();
} else if (isset($_GET['dcs_community'])) {
    dcs_community();
} else if (isset($_GET['level1'])) {
    level1();
} else if (isset($_GET['level2'])) {
    level2();
} else if (isset($_GET['level3'])) {
    level3();
} else if (isset($_GET['level4'])) {
    level4();
} else {
    dcs_community();
}
?>
<?php

function dcs_community()
{
    include("../connection.php");
    $postInformation = "SELECT staff_student_id,post_id,post_image_path,post_title,post_description,post_like FROM post";
    $result_postInformation = mysqli_query($con, $postInformation);
	
    ?>        <!-- DCS Community -->
                <div class="card-box">
                <?php
                $i = 0;
                while ($row_postInformation = mysqli_fetch_assoc($result_postInformation)) {
					
					//USER IMAGE VIEW
					$staff_student_id = $row_postInformation['staff_student_id'];
					$query_profile = "SELECT staff_student_profile_image_path FROM student_profile WHERE staff_student_id = '$staff_student_id'";
					$result_profile = mysqli_query($con, $query_profile);
					$row_profile = mysqli_fetch_assoc($result_profile);

                    ?>
                        <!-- card 1 dummy -->
                        <div class="card">
                            <img class="card-img-top" src="../uploads/<?php echo $row_postInformation['post_image_path']; ?>" alt="Card image cap">
                            <!-- <div class="card-body-filler"></div> -->
                            <div class="card-body">
                                <h4 class="card-title"><?php echo substr($row_postInformation['post_title'], 0, 39) . ".."; ?></h4>
                                <div class="author_details">
                                    <div class="author_image">
                                        <img src="../profile/<?php echo $row_profile['staff_student_profile_image_path']; ?>" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                                    </div>
                                    <div class="author_regno">
                                        <?php echo $row_postInformation['staff_student_id']; ?>
                                    </div>

                                </div>
                                <p class="card-text"><?php echo substr($row_postInformation['post_description'], 0, 100) . ".."; ?></p>
                                <div class="bottom_details">
                                    <!-- <img src="../images/background.jpg" alt=""> -->
                                    <div class="likebuttonbody">
                                        <div  class="likebutton"><a href="postLike.php?post_id=<?php echo $row_postInformation['post_id'];?>"><i class="fa-solid fa-thumbs-up"></i></a></div>
                                    </div>
                                    <p><?php echo $row_postInformation['post_like'];?></p>
                                </div>
                                <a class="readmorebutton" href="articleview.php?post_id=<?php echo $row_postInformation['post_id'];?>" target="_blank">Read more...</a>
                            </div>
                        </div>

                
                          
        <?php
        $i++;
                }
                ?>
                    <!-- post your article -->
                    <div class="postarticle">
                        <div><a href="#" onclick="toggle()"><i class="fa-solid fa-circle-plus"></i></a></div>
                    </div>
                
                </div>
                <!-- DCS Community -->
<?php }


function findStudent()
{
    ?>

                <!-- find a student -->
                <div class="findastudent" id="findastudent">

                    <h1 class="findastudentheading">Find a Student?</h1>

                    <!-- searchbar -->
                    <div class="searchbar">
                        <form action="" method="GET">
                            <div class="searchbaritems">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingInputGrid" placeholder="Enter a registration number" value="">
                                    <label for="floatingInputGrid">Enter a registration number</label>     
                                </div>
                                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div> 
                        </form>
                    </div>
                    <!-- searchbar -->

                    <!-- search student grid -->
                    <div class="searchstudentgrid">
                    
                        <div class="studentlevel">
                            <div class="level-text">
                                <p>Level 1</p>
                            </div> 
                            <div class="levelimage">
                                <a href="?level1=#"><img src="../images/levels/level1.jpg" alt=""></a>
                            </div>   
                        </div>

                        <div class="studentlevel">
                            <div class="level-text">
                                <p>Level 2</p>
                            </div> 
                            <div class="levelimage">
                                <a href="?level2=#"><img src="../images/levels/level2.jpg" alt=""></a>
                            </div>
                        
                        </div>

                        <div class="studentlevel">
                            <div class="level-text">
                                <p>Level 3</p>
                            </div> 
                            <div class="levelimage">
                                <a href="?level3=#"><img src="../images/levels/level3.jpg" alt=""></a>
                            </div>
                        
                        </div>

                        <div class="studentlevel">
                            <div class="level-text">
                                <p>Level 4</p>
                            </div> 
                            <div class="levelimage">
                                <a href="?level4=#"><img src="../images/levels/level4.jpg" alt=""></a>
                            </div>
                        
                        </div>

                    
                </div>
                <!-- searchstudentgrid -->

    <?php
}

function yourArticles()
{

    ?>
             <h1 class="findastudentheading"  style="margin-top: 200px">Article Dashboard</h1>
        <?php
        include("../connection.php");
        $staff_student_id = $_SESSION['regno'];
        $query_yourarticle = "SELECT post_id,post_image_path, post_title,current_date FROM post WHERE staff_student_id = '$staff_student_id'";
        $result_yourarticle = mysqli_query($con, $query_yourarticle);
        $user_article_count = mysqli_num_rows($result_yourarticle);
        if ($user_article_count > 0) {
            while ($row_yourarticle = mysqli_fetch_assoc($result_yourarticle)) {
                ?>

                        <!-- articledashboard -->
                        <div class="articledashboard">

                            <div class="articledashboard_child">

                                <div class="postcard">

                                    <div class="postcardimage">
                                        <img src="../uploads/<?php echo $row_yourarticle['post_image_path']; ?>" class="rounded-circle img-fluid" />
                                    </div>

                                    <div class="postcardleft">
                                        <h4><?php echo $row_yourarticle['post_title']; ?></h4>
                                        <h5><?php echo $row_yourarticle['current_date']; ?></h5>
                                    </div>
                                    
                                    <div class="postcardright">
                                        <div class="postcardedit">
                                            <a href="postedit.php?post_id=<?php echo $row_yourarticle['post_id']?>?>" target="_blank"><i class="fa-solid fa-file-pen"></i></a>
                                        </div>
                                        <div class="postcardremove">
                                            <a href="delete.php?post_id=<?php echo $row_yourarticle['post_id']?>"><i class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- articledashboard -->


            <?php
            }

        } else {
            ?>
                <script>
                    alert("No posts have been created. If you'd like to share something or make a post, feel free to use the appropriate features to create and publish content.");
                    window.location.href = "dcs_forum.php";
                </script>
                <?php
        }
}

function level1()
{
include("../connection.php");
    $query = "SELECT first_name,last_name,linkedIn_link,github_link,hacker_rank,staff_student_user_details.staff_student_id,staff_student_profile_image_path FROM staff_student_user_details LEFT JOIN student_profile ON staff_student_user_details.staff_student_id = student_profile.staff_student_id WHERE user_status = 'level-1' ";
    $result = mysqli_query($con, $query);
    ?>  

                    <!-- studentdatabase -->
                    <!-- <div class="studentdatabase"> -->
                        <!-- <div class="level1mainbox"> -->

                            <h1 style="text-align: center;" class="findastudentheading">Level 1 Undergraduates</h1>

                            <!-- searchbar -->
                            <div class="searchbar">
                                <form action="" method="">
                                    <div class="searchbaritems">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Enter a registration number" value="">
                                            <label for="floatingInputGrid">Enter a registration number</label>     
                                        </div>
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div> 
                                </form>
                            </div>
                            <!-- searchbar -->
                        
                            <div class="level-1-grid">     

                            <?php
                            //$i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="newcard">
                                        <div class="newImage">
                                            <img src="../profile/<?php echo $row['staff_student_profile_image_path']; ?>" alt="">
                                        </div>
                                        <div class="newcardmiddle">
                                            <div class="newcardfullname">
                                                <div class="newcardfirstname">
                                                    <h3><?php echo $row['first_name'];?></h3>
                                                </div>
                                                <div class="newcardlastname">
                                                    <h3><?php echo $row['last_name'];?></h3>
                                                </div>
                                            </div>
                                            <div class="newcardreg">
                                                <h5><?php echo $row['staff_student_id'];?></h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="newcardbottom">
                                            <div class="newcardbottombox">
                                                <div class="linksocial">
                                                    <a href="<?php if($row['github_link'] == "no" or $row['github_link'] == "No"){echo "https://github.com/" ;}else{echo $row_level2['github_link'] ;} ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['linkedIn_link'] == "no" or $row['linkedIn_link'] == "No"){echo "https://www.linkedin.com/" ;}else{echo $row_level2['linkedIn_link'] ;} ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['hacker_rank'] == "no" or $row['hacker_rank'] == "No"){echo "https://www.hackerrank.com/" ;}else{echo $row_level2['hacker_rank'] ;} ?>" target="_blank"><i class="fa-brands fa-hackerrank"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewprofilebottom">
                                            <a href="showFullProfile.php?id=<?php echo $row['staff_student_id']; ?>" target="_blank">Profile</a>
                                        </div>
                                    </div>
                        
                                <?php
                                //$i++;
                            } ?>

                            </div>
                        <!-- </div> -->
                    <!-- </div> -->


    <?php
}

function level2()
{
    include("../connection.php");
    $query = "SELECT first_name,last_name,linkedIn_link,github_link,hacker_rank,staff_student_user_details.staff_student_id,staff_student_profile_image_path FROM staff_student_user_details LEFT JOIN student_profile ON staff_student_user_details.staff_student_id = student_profile.staff_student_id WHERE user_status = 'level-2' ";
    $result = mysqli_query($con, $query);
    ?>  

                    <!-- studentdatabase -->
                    <!-- <div class="studentdatabase"> -->
                        <!-- <div class="level1mainbox"> -->

                            <h1 style="text-align: center;" class="findastudentheading">Level 2 Undergraduates</h1>

                            <!-- searchbar -->
                            <div class="searchbar">
                                <form action="" method="">
                                    <div class="searchbaritems">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Enter a registration number" value="">
                                            <label for="floatingInputGrid">Enter a registration number</label>     
                                        </div>
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div> 
                                </form>
                            </div>
                            <!-- searchbar -->
                        
                            <div class="level-1-grid">     

                            <?php
                            //$i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="newcard">
                                        <div class="newImage">
                                            <img src="../profile/<?php echo $row['staff_student_profile_image_path']; ?>" alt="">
                                        </div>
                                        <div class="newcardmiddle">
                                            <div class="newcardfullname">
                                                <div class="newcardfirstname">
                                                    <h3><?php echo $row['first_name'];?></h3>
                                                </div>
                                                <div class="newcardlastname">
                                                    <h3><?php echo $row['last_name'];?></h3>
                                                </div>
                                            </div>
                                            <div class="newcardreg">
                                                <h5><?php echo $row['staff_student_id'];?></h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="newcardbottom">
                                            <div class="newcardbottombox">
                                                <div class="linksocial">
                                                    <a href="<?php if($row['github_link'] == "no" or $row['github_link'] == "No"){echo "https://github.com/" ;}else{echo $row_level2['github_link'] ;} ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['linkedIn_link'] == "no" or $row['linkedIn_link'] == "No"){echo "https://www.linkedin.com/" ;}else{echo $row_level2['linkedIn_link'] ;} ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['hacker_rank'] == "no" or $row['hacker_rank'] == "No"){echo "https://www.hackerrank.com/" ;}else{echo $row_level2['hacker_rank'] ;} ?>" target="_blank"><i class="fa-brands fa-hackerrank"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewprofilebottom">
                                            <a href="showFullProfile.php?id=<?php echo $row['staff_student_id']; ?>" target="_blank">Profile</a>
                                        </div>
                                    </div>
                        
                                <?php
                                //$i++;
                            } ?>

                            </div>
                        <!-- </div> -->
                    <!-- </div> -->


    <?php
}

function level3()
{
    include("../connection.php");
    $query = "SELECT first_name,last_name,linkedIn_link,github_link,hacker_rank,staff_student_user_details.staff_student_id,staff_student_profile_image_path FROM staff_student_user_details LEFT JOIN student_profile ON staff_student_user_details.staff_student_id = student_profile.staff_student_id WHERE user_status = 'level-3' ";
    $result = mysqli_query($con, $query);
    ?>  

                    <!-- studentdatabase -->
                    <!-- <div class="studentdatabase"> -->
                        <!-- <div class="level1mainbox"> -->

                            <h1 style="text-align: center;" class="findastudentheading">Level 3 Undergraduates</h1>

                            <!-- searchbar -->
                            <div class="searchbar">
                                <form action="" method="">
                                    <div class="searchbaritems">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Enter a registration number" value="">
                                            <label for="floatingInputGrid">Enter a registration number</label>     
                                        </div>
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div> 
                                </form>
                            </div>
                            <!-- searchbar -->
                        
                            <div class="level-1-grid">     

                            <?php
                            //$i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="newcard">
                                        <div class="newImage">
                                            <img src="../profile/<?php echo $row['staff_student_profile_image_path']; ?>" alt="">
                                        </div>
                                        <div class="newcardmiddle">
                                            <div class="newcardfullname">
                                                <div class="newcardfirstname">
                                                    <h3><?php echo $row['first_name'];?></h3>
                                                </div>
                                                <div class="newcardlastname">
                                                    <h3><?php echo $row['last_name'];?></h3>
                                                </div>
                                            </div>
                                            <div class="newcardreg">
                                                <h5><?php echo $row['staff_student_id'];?></h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="newcardbottom">
                                            <div class="newcardbottombox">
                                                <div class="linksocial">
                                                    <a href="<?php if($row['github_link'] == "no" or $row['github_link'] == "No"){echo "https://github.com/" ;}else{echo $row_level2['github_link'] ;} ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['linkedIn_link'] == "no" or $row['github_link'] == "No"){echo "https://www.linkedin.com/" ;}else{echo $row_level2['linkedIn_link'] ;} ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['hacker_rank'] == "no" or $row['github_link'] == "No"){echo "https://www.hackerrank.com/" ;}else{echo $row_level2['hacker_rank'] ;} ?>" target="_blank"><i class="fa-brands fa-hackerrank"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewprofilebottom">
                                            <a href="showFullProfile.php?id=<?php echo $row['staff_student_id']; ?>" target="_blank">Profile</a>
                                        </div>
                                    </div>
                        
                                <?php
                                //$i++;
                            } ?>

                            </div>
                        <!-- </div> -->
                    <!-- </div> -->


    <?php
}

function level4()
{
include("../connection.php");
    $query = "SELECT first_name,last_name,linkedIn_link,github_link,hacker_rank,staff_student_user_details.staff_student_id,staff_student_profile_image_path FROM staff_student_user_details LEFT JOIN student_profile ON staff_student_user_details.staff_student_id = student_profile.staff_student_id WHERE user_status = 'level-4' ";
    $result = mysqli_query($con, $query);
    ?>  

                    <!-- studentdatabase -->
                    <!-- <div class="studentdatabase"> -->
                        <!-- <div class="level1mainbox"> -->

                            <h1 style="text-align: center;" class="findastudentheading">Level 4 Undergraduates</h1>

                            <!-- searchbar -->
                            <div class="searchbar">
                                <form action="" method="">
                                    <div class="searchbaritems">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Enter a registration number" value="">
                                            <label for="floatingInputGrid">Enter a registration number</label>     
                                        </div>
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div> 
                                </form>
                            </div>
                            <!-- searchbar -->
                        
                            <div class="level-1-grid">     

                            <?php
                            //$i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="newcard">
                                        <div class="newImage">
                                            <img src="../profile/<?php echo $row['staff_student_profile_image_path']; ?>" alt="">
                                        </div>
                                        <div class="newcardmiddle">
                                            <div class="newcardfullname">
                                                <div class="newcardfirstname">
                                                    <h3><?php echo $row['first_name'];?></h3>
                                                </div>
                                                <div class="newcardlastname">
                                                    <h3><?php echo $row['last_name'];?></h3>
                                                </div>
                                            </div>
                                            <div class="newcardreg">
                                                <h5><?php echo $row['staff_student_id'];?></h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="newcardbottom">
                                            <div class="newcardbottombox">
                                                <div class="linksocial">
                                                    <a href="<?php if($row['github_link'] == "no" or $row['github_link'] == "No"){echo "https://github.com/" ;}else{echo $row_level2['github_link'] ;} ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['linkedIn_link'] == "no" or $row['github_link'] == "No"){echo "https://www.linkedin.com/" ;}else{echo $row_level2['linkedIn_link'] ;} ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                                </div>
                                                <div class="linksocial">
                                                    <a href="<?php if($row['hacker_rank'] == "no" or $row['github_link'] == "No"){echo "https://www.hackerrank.com/" ;}else{echo $row_level2['hacker_rank'] ;} ?>" target="_blank"><i class="fa-brands fa-hackerrank"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewprofilebottom">
                                            <a href="showFullProfile.php?id=<?php echo $row['staff_student_id']; ?>" target="_blank">Profile</a>
                                        </div>
                                    </div>
                        
                                <?php
                                //$i++;
                            } ?>

                            </div>
                        <!-- </div> -->
                    <!-- </div> -->


    <?php
}
?>
                

            </div>
                <!-- studentdatabase -->
             </div>
            <!-- find a student -->
           
        
        </div>
    </div>

    <!-- post your article -->
    <div class="postarticleform" id="postarticleform">
	
	
        <form action="../upload.php" method="POST" enctype="multipart/form-data" >
            
            <div class="addpostclosebutton">
                <a href="#" onclick="closePopup()"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            
            <div class="addposttitle">
                <h1>Add Your Post</h1>
            </div>

            <input type="hidden" name="postId" value="">

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Post Title" name="title" value="" required>
                    <label for="floatingInputGrid">Post Title</label>
            </div>

                    
                </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Type your description..." name="description" value="" required style="height: 380px"></textarea>
                    <label for="floatingInputGrid">Type your description...</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="fileToUpload" value="" required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3" name="submit">Post</button>
            </div>

        </form>
    </div>
    <!-- post your articles -->

    <!-- feedbackform -->
    <div class="feedbackform" id="feedbackform">
        <form action="feedback_insertion.php" method="POST">
            
            <div class="addpostclosebutton">
                <a href="#" onclick="closePopupFeedback()"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            
            <div class="addposttitle">
                <h1>Let Us Know!</h1>
            </div>


            <input type="hidden" name="feedbackId" value="">

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Feedback Title" name="feedbackTitle" value="" required>
                    <label for="floatingInputGrid">Feedback Title</label> 
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Feedback description..." name="feedbackDescription" value="" rows="50" required></textarea>
                    <label for="floatingInputGrid">Feedback description...</label>
                </div>
            </div>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3" name="SendYourFeedback">Send Your Feedback</button>
            </div>

        </form>
    </div>
    <!-- feedbackform -->

    <!-- updatedetails -->
    <div class="updatedetails" id="updatedetails">
        
        <form action="update_profile.php" method="POST" enctype="multipart/form-data" >
            
            <div class="addpostclosebutton">
                <a href="#" onclick="closePopupUpdate()"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
        
            
            <div class="addposttitle">
                <h1>Let Us Know!</h1>
            </div>


            <input type="hidden" name="userId" value="">

             <!-- regno -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Reg No" name="regno" value="<?php echo $staff_student_id; ?>" disabled>
                    <label for="floatingInputGrid">Reg No</label> 
                </div>
            </div>
            <!-- regno -->

            <!-- First Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" required disabled>
                    <label for="floatingInputGrid">First Name</label> 
                </div>
            </div>
            <!-- first Name -->

            <!-- Last Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" required disabled>
                    <label for="floatingInputGrid">Last Name</label> 
                </div>
            </div>
            <!-- Last Name -->

            <!-- email -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Registered Email Address" name="email" value="<?php echo $email; ?>" rows="50" required disabled>
                    <label for="floatingInputGrid">Registered Email Address</label>
                </div>
            </div>
            <!-- email -->
            
            <!-- image -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="fileToUpload" value="" required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>
            <!-- image -->

            <!-- Short Bio -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Short Bio... | Word Limit - 500 characters</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Short Bio..." name="bio" value="" required style="height: 300px"></textarea>
                    <label for="floatingInputGrid">Short Bio...<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- Short Bio -->

            <!-- education -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Education Qualifications...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-1" name="education_1" value=""required>
                    <label for="floatingInputGrid">Education 1<span style="color: red;">*</span></label>
                </div>
            </div>
            
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-2" name="education_2" value=""required>
                    <label for="floatingInputGrid">Education 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- education -->

            <!-- skills -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Edit your skills...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-1" name="skill_1" value=""required>
                    <label for="floatingInputGrid">Skill 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-2" name="skill_2" value=""required>
                    <label for="floatingInputGrid">Skill 2<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-3" name="skill_3" value=""required>
                    <label for="floatingInputGrid">Skill 3<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-4" name="skill_4" value=""required>
                    <label for="floatingInputGrid">Skill 4<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- skills -->

            <!-- languages -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Languages...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-1" name="language_1" value=""required>
                    <label for="floatingInputGrid">Language 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-2" name="language_2" value="" required>
                    <label for="floatingInputGrid">Language 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- languages -->

            <!-- experience -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Experience... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-1" name="experience_1" value="" required>
                    <label for="floatingInputGrid">Experience 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-2" name="experience_2" value=""required>
                    <label for="floatingInputGrid">Experience 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- experience -->

            <!-- volunteering -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Volunteering... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-1" name="volunteering_1" value="" required>
                    <label for="floatingInputGrid">Volunteering 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-2" name="volunteering_2" value=""required>
                    <label for="floatingInputGrid">Volunteering 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- volunteering -->

            <!-- socialmedia links -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Social media links... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Linkedin" name="socialmedia_1" value="" required>
                    <label for="floatingInputGrid">Linkedin<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Github" name="socialmedia_2" value="" required>
                    <label for="floatingInputGrid">Github<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Hacker Rank" name="hackerrank" value="" required>
                    <label for="floatingInputGrid">Hacker Rank<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- socialmedia links -->

            <label for="floatingInputGrid" style="margin-top: 20px;">By updating this form, I certify that above entered details are true...</label>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3" name="Update_profile">Update profile</button>
            </div>

        </form>
    </div>
    <!-- updatedetails -->


    <!-- javascript -->
    <script type="text/javascript">  

        function sidebareffect(){
            const body = document.querySelector("body"),
            sidebar = body.querySelector(".sidebar"),
            toggle = body.querySelector(".menuicon");

            toggle.addEventListener("click",() => {
                sidebar.classList.toggle("close");
            });
        }

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
