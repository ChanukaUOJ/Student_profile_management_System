<?php
session_start();
//if(!isset($_SESSION['regno'])){
	//header("Location:index.php");
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sign_up&login.css">
    <title>Signup Verfication</title>
</head>
<body>

    <div class="container">
        <!-- <h3 style="text-align: center; font-size: 55px;  font-weight: bold;">Register</h3> -->
        <div class="reset_box">
            <div class="register_box_right">
               
                    <h3 style="text-align: center; font-size: 42px;"><span style="font-weight: 600;">Verification</span></h3> 
                    <p style="text-align: center; margin-top: 40px">The account verification code has been
                        sent to your registered email address
                        <span style="font-weight: bold;"><?php echo $_SESSION['email'] ?></span></p>
                    <form action="user_verification.php" method="POST">

                        <input type="hidden" name="userId">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInputGrid" placeholder="University Registered Email" name = "verification_code">
                                <label for="floatingInputGrid">6 digit verification code</label>
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3" name="send">Verify Your Account</button>
                        </div>

                        <p></p>
			
                        <p style="text-align: center; margin-top: 15px;"><a href="verify_reset_your_password.php?send=ok&staff_student_id=<?php echo strtoupper($_SESSION['staff_student_id']); ?>" target="_self">Resend</a></p>
                        
                    </form>
                
            </div>
        </div>


    </div>
    
</body>
</html>