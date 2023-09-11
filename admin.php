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
    <link rel="stylesheet" href="css/admin.css?=<?php echo time() ?>">
    <title>Admin Login</title>
</head>

<body>

    <?php
        function setValue($name){
            if(isset($_POST[$name])){
                echo $_POST[$name];
            }
        }
    ?>

    <!-- login -->
    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->

        <div class="register_box register_box_login" id="register_box">

            <!-- register_box_right -->
            <div class="register_box_right login_box">

                <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Admin Login</span></h3>

                <form action="admindashboardscript.php" method="POST">

                    <input type="hidden" name="adminid">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid"
                                placeholder="Reg No | Staff ID" value="<?php setValue('adminusername')?>" name="adminusername">
                            <label for="floatingInputGrid">Admin Username</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password"
                                value="<?php setValue('adminpassword')?>" name="adminpassword">
                            <label for="floatingInputGrid">Admin Password</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="adminlogin">Login</button>
                    </div>
                    <!-- <p style="text-align: center; margin-top: 15px;"><a
                            href="forgot_password/reset_your_password.php">Fogot
                            password</a></p> -->
                    <p style="text-align: center; margin-top: 15px;">Forgot password/first attempt? <a href="forgot_password/reset_your_password.php"
                            class="toScreens">Reset password</a></p>

                </form>

            </div>
            <!--register_box_right-->


        </div>


    </div>
    <!-- login -->

</body>

</html>