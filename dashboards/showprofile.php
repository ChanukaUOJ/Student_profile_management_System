<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/showprofile.css">
    <title>Chanuka Ranathunga</title>
</head>
<body>

    <div class="containerdashboard">

        <div class="mainbar">

        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                        <h5>Marie Horwitz</h5>
                        <p>Web Designer</p>
                        <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Email</h6>
                                <p class="text-muted">info@example.com</p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Phone</h6>
                                <p class="text-muted">123 456 789</p>
                            </div>
                            </div>
                            <h6>Projects</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Recent</h6>
                                <p class="text-muted">Lorem ipsum</p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>Most Viewed</h6>
                                <p class="text-muted">Dolor sit amet</p>
                            </div>
                            </div>
                            <div class="d-flex justify-content-start">
                            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        
        </div>
    </div>

    <!-- javascript -->
    <script type="text/javascript">  
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