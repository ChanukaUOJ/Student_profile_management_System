<?php
session_start();
if(!isset($_SESSION['staff_student_id'])){
	header("Location:../index.php");
}

include('../connection.php');
$staff_student_id = $_SESSION['staff_student_id'];
$query_unlock = "UPDATE identity_verification_staff_student SET unsuccessful_verification_attempt = 0  WHERE staff_student_id='$staff_student_id'";
mysqli_query($con,$query_unlock);






if (isset($_GET["maindatabase"])) {
    maindatabase();
} else if (isset($_GET['registeredusers'])) {
    registeredusers();
} else if (isset($_GET['communitypost'])) {
    communitypost();
} else if (isset($_GET['studentprofiles'])) {
    studentprofiles();
} else if (isset($_GET['feedback'])) {
    feedback();
} else if (isset($_GET['adminpanel'])) {
    adminpanel();
} else {
    dashboard();
}

function setValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}



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
    <link rel="stylesheet" href="../css/admindashboard.css?=<?php echo time() ?>">
    <title>DCS Forum</title>
</head>

<body>

    <div class="containerdashboard">

        <div class="fixednav">
            <h1 style="text-align: center; margin-top: 20px; font-weight: bold;">Admin Dashboard</h1>
        </div>

        <!-- sidebar -->
        <nav class="sidebar">
            <div class="menu-bar">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="?dashboard">
                            <i class="fa-solid fa-chart-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?maindatabase">
                            <i class="fa-solid fa-database"></i>
                            <span>Main database</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?registeredusers">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Registered Users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?communitypost">
                            <i class="fa-solid fa-file-waveform"></i>
                            <span>Community Posts</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="?studentprofiles">
                            <i class="fa-solid fa-id-badge"></i>
                            <span>Student Profiles</span>
                        </a>
                    </li>

                    <li class="nav-link" onclick="updatetoggle()">
                        <a href="?feedback">
                            <i class="fa-solid fa-comments"></i>
                            <span>Recieved Feedbacks</span>
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

        <!-- mainside -->
        <div class="mainside">

            <?php
            function dashboard()
            {
                ?>
                <!-- dashboard -->
                <div class="dashboard">

                    <div class="statistics">
                        <div class="cardgrid">
                            <div class="card">
                                <h1>
                                    <?php include('../connection.php');
                                    $query = "SELECT * FROM post";
                                    $result = mysqli_query($con, $query);
                                    $communitypostsrows = mysqli_num_rows($result);
                                    echo $communitypostsrows ?>
                                </h1>
                                <p><span><i class="fa-solid fa-marker"></i></span>Articles</p>
                            </div>

                            <div class="card">
                                <h1>
                                    <?php include('../connection.php');
                                    $query = "SELECT * FROM staff_student_user_details";
                                    $result = mysqli_query($con, $query);
                                    $registeredusersrows = mysqli_num_rows($result);
                                    echo $registeredusersrows ?>
                                </h1>
                                <p><span><i class="fa-solid fa-users"></i></span>Registered Users</p>
                            </div>

                            <div class="card lastcard">
                                <h1>
                                    <?php include('../connection.php');
                                    $query = "SELECT * FROM student_profile";
                                    $result = mysqli_query($con, $query);
                                    $studentprofilerows = mysqli_num_rows($result);
                                    echo $studentprofilerows ?>
                                </h1>
                                <p><span><i class="fa-solid fa-id-badge"></i></span>Student Profiles</p>
                            </div>
                        </div>

                        <div class="latestpost">
                            <h3>Latest Article</h3>
                            <?php
                            include("../connection.php");
                            $query = "SELECT * FROM post ORDER BY post_id desc";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <table class="tablecard">
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $row['staff_student_id'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $row['post_date'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $row["post_title"] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $row["post_description"] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="latestfeedback">
                            <h3>Latest Feedback</h3>
                            <?php
                            include("../connection.php");
                            $query = "SELECT * FROM feedback  ORDER BY feedback_id desc";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <table class="tablefeedback">
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $row['staff_student_id'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $row['feedback_title'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $row["feedback_description"] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- dashboard -->
                <?php
            }

            function maindatabase()
            {
                ?>
                <!-- maindatabase -->
                <div class="maindatabase">

                    <?php
                    include("../connection.php");
                    $query = "SELECT * FROM identity_verification_staff_student";
                    $result = mysqli_query($con, $query);

                    ?>
                    <table>
                        <thead>
                            <td>Staff Student ID</td>
                            <td>Time Stamp</td>
                            <td>Verification attempts</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $row['staff_student_id'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['time_stamp'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['unsuccessful_verification_attempt'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="../admindashboardscript.php?id=<?php echo $row['staff_student_id'] ?>&userUnlock=#" style="margin-right: 10px"><i class="fa-solid fa-lock-open"></i></a>
                                        <a
                                            href="../admindashboardscript.php?id=<?php echo $row['staff_student_id'] ?>&maindatabaseactiondelete"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="addmaindatabase">
                        <a href="#" onclick="toggle()"><i class="fa-solid fa-circle-plus"></i></a>
                    </div>
                </div>
                <!-- maindatabase -->
            <?php }

            function communitypost()
            {
                ?>
                <div class="maindatabase">

                    <?php
                    include("../connection.php");
                    $query = "SELECT * FROM post";
                    $result = mysqli_query($con, $query);

                    ?>
                    <table>
                        <thead>
                            <td>Post ID</td>
                            <td>Staff Student ID</td>
                            <td>Post Title</td>
                            <td>Likes</td>
                            <td>Post Dates</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>

                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $row['post_id'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['staff_student_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['post_title'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['post_like'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['post_date'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="../admindashboardscript.php?id=<?php echo $row['post_id'] ?>&deletepost"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>

            <?php }

            function registeredusers()
            {
                ?>
                <div class="maindatabase">

                    <?php
                    include("../connection.php");
                    $query = "SELECT * FROM staff_student_user_details";
                    $result = mysqli_query($con, $query);

                    ?>
                    <table>
                        <thead>
                            <td>Staff Student ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>User Status</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $row['staff_student_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['first_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['last_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['user_status'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a
                                            href="../admindashboardscript.php?id=<?php echo $row['staff_student_id'] ?>&deleteregistereduser"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            <?php }

            function studentprofiles()
            {
                ?>
                <div class="maindatabase">

                    <?php
                    include("../connection.php");
                    $query = "SELECT * FROM student_profile";
                    $result = mysqli_query($con, $query);

                    ?>
                    <table>
                        <thead>
                            <td>Staff Student ID</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $row['staff_student_id'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a
                                            href="../admindashboardscript.php?id=<?php echo $row['staff_student_id'] ?>&userprofiledeletion"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>


            <?php }

            function feedback()
            {
                ?>

                <div class="maindatabase">

                    <?php
                    include("../connection.php");
                    $query = "SELECT * FROM feedback";
                    $result = mysqli_query($con, $query);

                    ?>
                    <table>
                        <thead>
                            <td>Feedback ID</td>
                            <td>Staff Student ID</td>
                            <td>Feedback Title</td>
                            <td>Feedback Description</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <tr>
                                    <td style="text-align: center;">
                                        <?php echo $row['feedback_id'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['staff_student_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['feedback_title'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['feedback_description'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <a
                                            href="../admindashboardscript.php?id=<?php echo $row['feedback_id'] ?>&feedbackdeletion"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>


            <?php } ?>
        </div>
        <!-- mainside -->

    </div>

    <!-- addmaindatabase -->
    <div class="register_box_right login_box" id="register_box_right">

        <div class="addpostclosebutton">
            <a href="#" onclick="closePopup()"><i class="fa-solid fa-circle-xmark"></i></a>
        </div>

        <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Insert to main
                database</span></h3>

        <form action="../admindashboardscript.php" method="POST">

            <input type="hidden" name="adminid">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID"
                        value="<?php setValue('userid') ?>" name="userid">
                    <label for="floatingInputGrid">Reg No | Staff ID</label>
                </div>
            </div>

            <!-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password"
                            value="" name="numberofattempts">
                        <label for="floatingInputGrid">Admin Password</label>
                    </div>
                </div> -->

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" name="insertuser">Insert</button>
            </div>

        </form>

    </div>
    <!-- addmaindatabase -->

    <!-- script -->
    <script type="text/javascript">
        function toggle() {
            // var blur = document.getElementById('blur');
            // blur.classList.toggle('active');

            var register_box = document.getElementById('register_box_right');
            register_box.classList.toggle('active');
        }

        function closePopup() {
            // var blur = document.getElementById('blur');
            // blur.classList.remove('active');

            var register_box = document.getElementById('register_box_right');
            register_box.classList.remove('active');
        }
    </script>
    <!-- script -->
</body>

</html>