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
    <link rel="stylesheet" href="css/index.css">
    <title>Student Profile Management System - University Of Jaffna</title>
</head>

<body>
    <!--form detail collection-->
    <?php
    if (isset($_POST['register'])) {

        if ($_POST['password'] == $_POST['confirmPassword']) {
            session_start();
            $_SESSION['staff_student_id'] = strtoupper($_POST['regno']);
            $_SESSION['first_name'] = ucfirst($_POST['fname']);
            $_SESSION['last_name'] = ucfirst($_POST['lname']);
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user_status'] = $_POST['role'];
            $_SESSION['password'] = $_POST['password'];
            ?>
            <script>
                window.location.href = "phpmailer.php";
            </script>
            <?php
        } else { ?>

            <script>
                alert("Passwords do not match. Please ensure both passwords are the same and try again. Your data's security is important!");
            </script>

            <?php

            function setValue($name)
            {
                if (isset($_POST[$name])) {
                    return $_POST[$name];
                }
            }

            function setSelected($fieldName, $fieldValue)
            {
                if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
                    return "selected='selected'";
                }
            }
        }

    } else {

        function setValue($name)
        {
            if (isset($_POST[$name])) {
                return null;
            }
        }

        function setSelected($fieldName, $fieldValue)
        {
            if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
                return "selected=' '";
            }
        }
    }
    ?>
    <!--form detail collection-->

    <!-- container -->
    <div class="containerindexhtml" id="blur">

        <div id="navbar">
            <div id="logo">
                <img src="https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new.png" alt="">
            </div>

            <div class="navbar_links">
                <ul>
                    <li><a href="https://www.csc.jfn.ac.lk/" target="_blank">Department</a></li>
                    <li><a href="https://lms.jfn.ac.lk/lms/course/index.php?categoryid=9" target="_blank">LMS</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li class="loginbuttonmain loginbuttonnav" onclick="loginToggle()"><a href="#">Login</a></li>
                    <li><a href="#" onclick="RegisterToggle()">Register</a></li>
                </ul>
            </div>
        </div>

        <div class="head">
            <div class="main-title">
                <h1>Student Profile<br /><span>Management System</span></h1>
                <h4><i>"Your Profile, Your Journey: Charting Success Together"</i></h4>
                <button type="submit" class="loginbuttonmain" id="loginbuttonmain" onclick="loginToggle()"><i
                        class="fa-solid fa-right-to-bracket"></i>Login</button>
            </div>
            <div class="head-image">
                <img src="images/websitehead.png" alt="head-image">
            </div>
        </div>

    </div>
    <!-- container -->

    <!-- login -->
    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->

        <div class="register_box register_box_login" id="register_box">

            <!-- register_box_left -->
            <div class="register_box_left login_left">
            </div>
            <!--register_box_left-->

            <!-- register_box_right -->
            <div class="register_box_right login_box">

                <div class="addpostclosebutton">
                    <a href="#" onclick="loginClosePopup()"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>

                <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Login</span></h3>
                <p style="text-align: center; font-size: 20px;">Use your staff id or university registration
                    number when you log in</p>

                <form action="login_verification.php" method="post">

                    <input type="hidden" name="userId">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid"
                                placeholder="Reg No | Staff ID" value="" name="regno">
                            <label for="floatingInputGrid">Reg No | Staff ID</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password"
                                value="" name="password">
                            <label for="floatingInputGrid">Password</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
                    </div>
                    <p style="text-align: center; margin-top: 15px;"><a
                            href="forgot_password/reset_your_password.php">Fogot password</a></p>
                    <p style="text-align: center; margin-top: 15px;">Don't have an account? <a class="toScreens"
                            onclick="toSignUp()">Sign Up here</a></p>

                </form>

            </div>
            <!--register_box_right-->


        </div>


    </div>
    <!-- login -->

    <!-- register -->
    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->

        <div class="register_box register_box_signup" id="register_box_signup">

            <div class="register_box_left">
            </div> <!--register_box_left-->

            <div class="register_box_right">

                <div class="addpostclosebutton">
                    <a href="#" onclick="RegisterClosePopup()"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>

                <h3 style="text-align:center; font-size: 42px;"><span style="font-weight: 600;">Sign up</span></h3>
                <p style="text-align:center; font-size: 25px;">Student & Staff</p>

                <form action="index.php" method="POST">

                    <input type="hidden" name="userId" value="">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid"
                                placeholder="Reg No | Staff ID" name="regno" value="<?php echo setValue("regno"); ?>"
                                required>
                            <label for="floatingInputGrid">Reg No | Staff ID</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name"
                                name="fname" value="<?php echo setValue("fname"); ?>" required>
                            <label for="floatingInputGrid">First Name</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name"
                                name="lname" value="<?php echo setValue("lname"); ?>" required>
                            <label for="floatingInputGrid">Last Name</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid"
                                placeholder="University Registered Email" name="email"
                                value="<?php echo setValue("email"); ?>" required>
                            <label for="floatingInputGrid">University Registered Email</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-hat-cowboy"></i></div>
                        </div>
                        <select class="form-control" style="color: #021129;" name="role" id="role" required>
                            <option class="form-control" value="" hidden />Select Role...</option>
                            <option class="form-control" value="level-1" <?php echo setSelected("role", "level-1"); ?> />Level - 1</option>
                            <option class="form-control" value="level-2" <?php echo setSelected("role", "level-2"); ?> />Level - 2</option>
                            <option class="form-control" value="level-3" <?php echo setSelected("role", "level-3"); ?> />Level - 3</option>
                            <option class="form-control" value="level-4" <?php echo setSelected("role", "level-4"); ?> />Level - 4</option>
                            <option class="form-control" value="Staff Member" <?php echo setSelected("role", "Staff Member"); ?> />Staff Member</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password"
                                name="password" value="" required>
                            <label for="floatingInputGrid">Password</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid"
                                placeholder="Confirm Password" name="confirmPassword" value="" required>
                            <label for="floatingInputGrid">Confirm Password</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="register">Register</button>
                    </div>

                    <p style="text-align: center; margin-top: 15px;">Have already an account? <a class="toScreens"
                            onclick="toLogin()">Login here</a></p>

                </form>

            </div><!--register_box_right-->


        </div>


    </div>
    <!-- register -->

    <!-- script -->
    <script>

        // popup
        function loginToggle() {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');

            var register_box = document.getElementById('register_box');
            register_box.classList.toggle('active');
        }

        function RegisterToggle() {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');

            var register_box = document.getElementById('register_box_signup');
            register_box.classList.toggle('active');
        }

        function toSignUp() {
            loginClosePopup();
            RegisterToggle();
        }

        function toLogin() {
            RegisterClosePopup();
            loginToggle();
        }

        // close
        function loginClosePopup() {
            var blur = document.getElementById('blur');
            blur.classList.remove('active');

            var register_box = document.getElementById('register_box');
            register_box.classList.remove('active');
        }

        function RegisterClosePopup() {
            var blur = document.getElementById('blur');
            blur.classList.remove('active');

            var register_box = document.getElementById('register_box_signup');
            register_box.classList.remove('active');
        }
    </script>
    <!-- script -->

</body>

</html>