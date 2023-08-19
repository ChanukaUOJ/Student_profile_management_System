<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sign_up&login.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->

        <div class="register_box register_box_login">

            <div class="register_box_left login_left">

            </div><!--register_box_left-->

            <div class="register_box_right login_box">
                
                <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Login</span></h3>
                <p style="text-align: center; font-size: 20px;">Use your staff id or university registration
                    number when you log in</p> 

                <form action="" method="">

                    <input type="hidden" name="userId">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID" value="">
                            <label for="floatingInputGrid">Reg No | Staff ID</label>
                            
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password" value="">
                            <label for="floatingInputGrid">Password</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                    <p style="text-align: center; margin-top: 15px;"><a href="reset_your_password.php">Reset your password</a></p>
                    <p style="text-align: center; margin-top: 15px;">Don't have an account? <a href="Sign_up.php">Sign Up here</a></p>
                    
                </form>
                
            </div><!--register_box_right-->


        </div>


    </div>
    
</body>
</html>