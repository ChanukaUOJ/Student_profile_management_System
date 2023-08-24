<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/dashboards.css">
    <title>DCS Forum</title>
</head>
<body>

    <div class="containerdashboard" id="blur">
        <!-- sidebar -->
        <nav class="sidebar">
            <header>
                <div class="menuicon"><i class="fa-solid fa-bars"></i></div>
                <div class="image-text">
                    <span class="image">
                        <img src="../images/background.jpg" alt="">
                    </span>

                    <div class="text header-text">
                        <span class="name">PDCC Ranathunga</span><br>
                        <span class="regno">2020/CSC/038</span>
                    </div>
                </div>

            </header>

            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="#">
                                <i class="fa-solid fa-copy"></i>
                                <span>DCS Community</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#findastudent">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Find a Student</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
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
                            <a href="#">
                                <i class="fa-regular fa-file-lines"></i>
                                <span>View Your Profile</span>
                            </a>
                        </li>
                        <li class="nav-link logout">
                            <a href="#">
                                <i class="fa-solid fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- sidebar -->

        <div class="mainbar">

            <!-- top navbar -->
            <div id="navbar">
                <div class="container">
                    <div id="logo">
                        <img src="https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new.png" alt="">
                    </div>
            
                    <div class="screen_heading" style="display: flex; left: 0;">
                        <h1 style="font-weight: bold;">DCS Community</h1>
                    </div>
                </div>
            </div>
            <!-- top navbar -->

            <!-- DCS Community -->
            <div class="card-box">

                <!-- card 1 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/female-hand-typing-keyboard-laptop_1150-15742.jpg?w=1380&t=st=1692617534~exp=1692618134~hmac=2ced647283aa295a675e4e782484fa5908e59afb4436c53a1e0af77832f054ed" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">How to create a login forum using php</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="articleview.php" class="btn btn-primary" target="_blank">Read</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 2 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/3d-render-code-testing-functional-test-usability_107791-16607.jpg?w=1480&t=st=1692662917~exp=1692663517~hmac=6762cfa35762433e767915865dac9d6ad4aeb056d59feea8669d1f0a3be2566e" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Ethical Hacking</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 3 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-vector/desktop-computer-vconcept-illustration_114360-12153.jpg?t=st=1692662914~exp=1692663514~hmac=bf11af31f09a4512f2b7bee082344f3c3c32e93c601636e72e31d1238e1529c5" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">How to make a web site</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 4 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/black-man-helping-colleague_23-2147808186.jpg?w=1380&t=st=1692662957~exp=1692663557~hmac=c40e31df1d516780f53f9d9aaefe8ff80e225bb58e4fdc2a3f2f704292cc1911" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Implement Node.js System</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 5 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-vector/colorful-business-landing-page_52683-988.jpg?w=740&t=st=1692662977~exp=1692663577~hmac=4866d31eee5535c18a49d1133f52325e11cc77f327b015ad348106cdd7edcfb0" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">How the backend works?</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 6 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/close-up-male-hands-using-laptop-home_1150-790.jpg?w=1380&t=st=1692662995~exp=1692663595~hmac=bf3ee29aed21aae2116027f444e487a84b5c5d663b67ceafc395eab1376d74db" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">How to create a login forum using php</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 7 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-psd/computer-mockup_1310-706.jpg?w=1380&t=st=1692663024~exp=1692663624~hmac=b73077f35ef3503162256cf05b2c5b7fc854fd7ce31a9657e67751da9bacc2eb" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Only money free</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card 8 dummy -->
                <div class="card">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/view-3d-laptop-device-with-screen-keyboard_23-2150714099.jpg?t=st=1692663038~exp=1692666638~hmac=1d6c28e00cd72b8c1c9281eef537ba73dc8f3cf1d3c250f36f06b8cc4632a83c&w=740" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">How to create a login forum using php</h4>
                        <div class="author_details">
                            <div class="author_image">
                                <img src="../images/background.jpg" alt="" style="width: 30px; height: 30px; border-radius: 50%;">
                            </div>
                            <div class="author_regno">
                                2020/csc/038
                            </div>

                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet con secte tur, adipisicing elit. a </p>
                        <div class="bottom_details">
                            <!-- <img src="../images/background.jpg" alt=""> -->
                            <a href="#" class="btn btn-primary">View More</a>
                            <div class="likebuttonbody">
                                <div  class="likebutton"><a href="#"><i class="fa-solid fa-thumbs-up"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- post your article -->
                <div class="postarticle">
                    <div><a href="#" onclick="toggle()"><i class="fa-solid fa-circle-plus"></i></a></div>
                </div>
                
            </div>
            <!-- DCS Community -->

            <hr>

            <!-- find a student -->
            <div class="findastudent" id="findastudent">

                <h1 class="findastudentheading">Find a Student?</h1>

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

                <!-- search student grid -->
                <div class="searchstudentgrid">
                    
                    <div class="studentlevel">
                        <div class="level-text">
                            <p>Level 1</p>
                        </div> 
                        <div class="levelimage">
                            <a href="#"><img src="../images/levels/level1.jpg" alt=""></a>
                        </div>   
                    </div>

                    <div class="studentlevel">
                        <div class="level-text">
                            <p>Level 2</p>
                        </div> 
                        <div class="levelimage">
                            <a href="#"><img src="../images/levels/level2.jpg" alt=""></a>
                        </div>
                        
                    </div>

                    <div class="studentlevel">
                        <div class="level-text">
                            <p>Level 3</p>
                        </div> 
                        <div class="levelimage">
                            <a href="#"><img src="../images/levels/level3.jpg" alt=""></a>
                        </div>
                        
                    </div>

                    <div class="studentlevel">
                        <div class="level-text">
                            <p>Level 4</p>
                        </div> 
                        <div class="levelimage">
                            <a href="#"><img src="../images/levels/level4.jpg" alt=""></a>
                        </div>
                        
                    </div>

                    
                </div>
                <!-- searchstudentgrid -->

                <!-- studentdatabase -->
                <div class="studentdatabase">
                <hr>
                    <div class="level1mainbox">

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

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">
                                    <a href="showprofile.php" target="_blank">
                                        <div class="card profilecardwidth" style="border-radius: 15px;">
                                        <div class="card-body text-center">
                                            <div class="mt-3 mb-4">
                                            <img src="../images/dummyprofile.png"
                                                class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                            </div>
                                            <h4 class="mb-2">PDCC Ranathunga</h4>
                                            <!-- <p class="text-muted mb-2">@web Developer</p> -->
                                            <p class="text-muted mb-4">2020/CSC/038</p>
                                            <div class="mb-4 pb-2">
                                            <button type="button" class="btn btn-outline-primary btn-floating">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-floating">
                                                <i class="fa-brands fa-github"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary btn-floating">
                                                <i class="fa-brands fa-hackerrank"></i>
                                            </button>
                                            </div>
                                            <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                            </div>
                                        </div>
                                        </div>
                                    </a>
                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="level2mainbox">

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

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="level3mainbox">

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

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="level4mainbox">

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

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="container profilecard">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card profilecardwidth" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                        <img src="../images/dummyprofile.png"
                                            class="rounded-circle img-fluid" style="width: 200px; height: 200px;" />
                                        </div>
                                        <h4 class="mb-2">PDCC Ranathunga</h4>
                                        <p class="text-muted mb-2">@web Developer</p>
                                        <p class="text-muted mb-4">2020/CSC/038</p>
                                        <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa-brands fa-github"></i>
                                        </button>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-rounded btn-lg profilebutton">
                                        contact me
                                        </button>
                                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- studentdatabase -->

            </div>
            <!-- find a student -->

            <!-- articledashboard -->
            <div class="articledashboard">

                <h1 class="findastudentheading"  style="margin-top: 200px">Article Dashboard</h1>

                <div class="articledashboard_child">

                    <div class="postcard">

                        <div class="postcardimage">
                        <img src="../images/login.jpg" class="rounded-circle img-fluid" style="width: 120px; height: 120px;" />
                        </div>

                        <div class="postcardleft">
                            <h4>How to create a login forum using php</h4>
                            <h5>2023/08/24</h5>
                        </div>

                        <div class="postcardmiddle">
                            
                        </div>

                        <div class="postcardright">
                            <div class="postcardedit">
                                <a href=""><i class="fa-solid fa-file-pen"></i></a>
                            </div>
                            <div class="postcardremove">
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- articledashboard -->
        
        </div>
    </div>

    <!-- post your article -->
    <div class="postarticleform" id="postarticleform">
        <form action="" method="POST">
            
            <div class="addpostclosebutton">
                <a href="#" onclick="closePopup()"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            
            <div class="addposttitle">
                <h1>Add Your Post</h1>
            </div>


            <input type="hidden" name="postId" value="">

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Post Title" name="regno" value="" required>
                    <label for="floatingInputGrid">Post Title</label>
                    
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Type your description..." name="name" value="" rows="50" required></textarea>
                    <label for="floatingInputGrid">Type your description...</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="name" value="" required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3">Post</button>
            </div>

        </form>
    </div>
    <!-- post your articles -->

    <!-- feedbackform -->
    <div class="feedbackform" id="feedbackform">
        <form action="" method="POST">
            
            <div class="addpostclosebutton">
                <a href="#" onclick="closePopupFeedback()"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            
            <div class="addposttitle">
                <h1>Let Us Know!</h1>
            </div>


            <input type="hidden" name="feedbackId" value="">

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Feedback Title" name="regno" value="" required>
                    <label for="floatingInputGrid">Feedback Title</label> 
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Feedback description..." name="name" value="" rows="50" required></textarea>
                    <label for="floatingInputGrid">Feedback description...</label>
                </div>
            </div>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3">Send Your Feedback</button>
            </div>

        </form>
    </div>
    <!-- feedbackform -->

    <!-- updatedetails -->
    <div class="updatedetails" id="updatedetails">
        
        <form action="" method="POST">
            
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
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Reg No" name="regno" value="2020/CSC/038" disabled>
                    <label for="floatingInputGrid">Reg No</label> 
                </div>
            </div>
            <!-- regno -->

            <!-- First Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="First Name" name="firstname" value="Chanuka" required disabled>
                    <label for="floatingInputGrid">First Name</label> 
                </div>
            </div>
            <!-- first Name -->

            <!-- Last Name -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Last Name" name="lastname" value="Ranathunga" required disabled>
                    <label for="floatingInputGrid">Last Name</label> 
                </div>
            </div>
            <!-- Last Name -->

            <!-- email -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="Registered Email Address" name="email" value="chamith.chanuka23@gmail.com" rows="50" required disabled>
                    <label for="floatingInputGrid">Registered Email Address</label>
                </div>
            </div>
            <!-- email -->
            
            <!-- image -->
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="name" value="" required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>
            <!-- image -->

            <!-- Short Bio -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Short Bio... | Word Limit - 500 characters</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" placeholder="Short Bio..." name="bio" value="" rows="10" required></textarea>
                    <label for="floatingInputGrid">Short Bio...<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- Short Bio -->

            <!-- education -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Education Qualifications...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-1" name="education-1" value=""required>
                    <label for="floatingInputGrid">Education 1<span style="color: red;">*</span></label>
                </div>
            </div>
            
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="education-2" name="education-2" value=""required>
                    <label for="floatingInputGrid">Education 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- education -->

            <!-- skills -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Edit your skills...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-1" name="skill-1" value=""required>
                    <label for="floatingInputGrid">Skill 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-2" name="skill-2" value=""required>
                    <label for="floatingInputGrid">Skill 2<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-3" name="skill-3" value=""required>
                    <label for="floatingInputGrid">Skill 3<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="skill-4" name="skill-4" value=""required>
                    <label for="floatingInputGrid">Skill 4<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- skills -->

            <!-- languages -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Languages...</label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-1" name="language-1" value=""required>
                    <label for="floatingInputGrid">Language 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="language-2" name="language-2" value="" required>
                    <label for="floatingInputGrid">Language 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- languages -->

            <!-- experience -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Experience... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-1" name="experience-1" value="" required>
                    <label for="floatingInputGrid">Experience 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="experience-2" name="experience-2" value=""required>
                    <label for="floatingInputGrid">Experience 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- experience -->

            <!-- volunteering -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Volunteering... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-1" name="volunteering-1" value="" required>
                    <label for="floatingInputGrid">Volunteering 1<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="volunteering-2" name="volunteering-2" value=""required>
                    <label for="floatingInputGrid">Volunteering 2<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- volunteering -->

            <!-- socialmedia links -->
            <label for="floatingInputGrid" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">Social media links... <span style="font-weight: 100;"> | Type 'No' If you don't have</span></label>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Linkedin" name="socialmedia-1" value="" required>
                    <label for="floatingInputGrid">Linkedin<span style="color: red;">*</span></label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Github" name="socialmedia-2" value="" required>
                    <label for="floatingInputGrid">Github<span style="color: red;">*</span></label>
                </div>
            </div>
            <!-- socialmedia links -->

            <label for="floatingInputGrid" style="margin-top: 20px;">By updating this form, I certify that above entered details are true...</label>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3">Update profile</button>
            </div>

        </form>
    </div>
    <!-- updatedetails -->

    <!-- showprofile -->

    <!-- showprofile -->



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