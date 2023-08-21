<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sign_up&login.css">
    <title>Sign Up</title>
</head>
<body>

<?php 

    function setValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

?>


    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->

        <div class="register_box">
            
            <div class="register_box_left">
            </div> <!--register_box_left-->

            <div class="register_box_right">

                <h3 style="text-align:center; font-size: 42px;"><span style="font-weight: 600;">Sign up</span></h3>
                <p style="text-align:center; font-size: 25px;">Student & Staff</p> 

                <form action="" method="POST">

                    <input type="hidden" name="userId" value="">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID" name="regno" value="" required>
                            <label for="floatingInputGrid">Reg No | Staff ID</label>
                            
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name" name="name" value="" required>
                            <label for="floatingInputGrid">First Name</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Name" name="name" value="" required>
                            <label for="floatingInputGrid">Last Name</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="University Registered Email" name="email" value="" required>
                            <label for="floatingInputGrid">University Registered Email</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-hat-cowboy"></i></div>
                        </div>
                        <select class="form-control" style="color: #021129;" name="role" id="role" value="" required>
                            <option class="form-control" value="" hidden>Select Role...</option>
                            <option class="form-control" value="level-1">Level - 1</option>
                            <option class="form-control" value="level-2">Level - 2</option>
                            <option class="form-control" value="level-3">Level - 3</option>
                            <option class="form-control" value="level-4">Level - 4</option>
                            <option class="form-control" value="Staff Member">Staff Member</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Password" name="password" value="" required>
                            <label for="floatingInputGrid">Password</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGrid" placeholder="Confirm Password" name="confirmPassword" value="" required>
                            <label for="floatingInputGrid">Confirm Password</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Register</button>
                    </div>

                    <p style="text-align: center; margin-top: 15px;">Have already an account? <a href="login.php">Login here</a></p>
                    
                </form>
            
            </div><!--register_box_right-->

            
        </div>


    </div>
    
</body>
</html>