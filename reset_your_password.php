<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sign_up&login.css">
    <title>Reset Your Password</title>
</head>
<body>

    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->
        <div class="reset_box">
            <div class="register_box_right">
               
                    <!-- display1 -->
                    <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Reset your password</span></h3> 

                    <form action="" method="POST">

                        <input type="hidden" name="userId">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="University Registered Email" value="">
                                <label for="floatingInputGrid">University Registered Email</label>
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3" name="send">Send</button>
                        </div>

                        <p></p>

                        <p style="text-align: center; margin-top: 15px;"><a href="#">Resend</a></p>
                        
                    </form>

                    <hr><!--remove this when you set the php functions for displays-->
                    <!-- display2 -->
                    <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Reset your password</span></h3> 
                    <p style="text-align: center;">Enter a valid password</p>
                    <form action="" method="POST">

                        <input type="hidden" name="userId">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID" value="">
                                <label for="floatingInputGrid">Temporary password</label>     
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID" value="">
                                <label for="floatingInputGrid">New password</label>     
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-id-card"></i></div>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGrid" placeholder="Reg No | Staff ID" value="">
                                <label for="floatingInputGrid">Confirm password</label>     
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Change password</button>
                        </div>

                        <p style="text-align: center;">Your password has been changed sucessesfully!</p>

                        <!-- <p style="text-align: center; margin-top: 15px;"><a href="#">Resend</a></p> -->
                        
                    </form>

               
                
            </div>
        </div>


    </div>
    
</body>
</html>