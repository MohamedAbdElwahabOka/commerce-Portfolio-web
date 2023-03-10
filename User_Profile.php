<?php
//require __DIR__ . "/PHP/singUP.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>User Profile</title>
    <!-- link style Css   -->
    <link rel="stylesheet" href="CSS/User_Profile.css" />
    <link rel="stylesheet" href="CSS/User_Profile_framework.css" />
    <!-- normalize Css -->
    <link rel="stylesheet" href="CSS/normalize.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="CSS/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet">

</head>



<body>


    <!-- Start header -->
    <div class="header">
        <div class="container">
            <a href="#" class="logo">{ }</a>

            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#Projects">Projects</a></li>
                <li><a href="index.php#AboutUS">About US</a></li>
                <li><a href="index.php#Contact">Contact</a></li>
                <li><a href="shop.html">Shop</a></li>
            </ul>
            <ul class="main-nav-log">
                <li><a href="#"><?php echo $_SESSION["user_name"] ?></a></li>
                <li><a class="LogOut" href="logout.php">Log out</a></li>
            </ul>
        </div>
    </div>
    <!-- End header -->

    <!-- Start continer  -->
    <div class="container">
        <!-- Start Main part1  -->
        <div class="content w-full">
            <!-- start user-page -->
            <div class="user-page m-20">

                <!-- start overview -->
                <div class="overview  d-flex align-center bg-b rad-6">

                    <div class="avatar-box txt-c p-20">
                        <img src="imgs/1946429.png" width="150" decoding="async" class="rad-half mb-10">
                        <h3 class="m-0 "><?php echo $_SESSION["user_name"] ?></h3>

                    </div>

                    <!-- start box -->
                    <div class="info-box w-full txt-c-mobile">
                        <!-- Start Information Row1 -->
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
                            <div class="fs-14">
                                <span class="c-grey">Full Name:</span>
                                <span><?php echo $_SESSION["user_name"] ?></span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Gender:</span>
                                <span>Male</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Country:</span>
                                <span>Egypt</span>
                            </div>

                        </div>
                        <!-- End Information Row1 -->



                        <!-- Start Information Row2 -->
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
                            <div class="fs-14">
                                <span class="c-grey">Email:</span>
                                <span><?php echo $_SESSION["user_Email"] ?></span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Phone:</span>
                                <span>019123456789</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Date Of Birth:</span>
                                <span>25/10/1982</span>
                            </div>

                        </div>
                        <!-- End Information Row2 -->
                    </div>
                    <!-- end box -->


                </div>
                <!-- End overview -->



            </div>
            <!-- End user-page -->



        </div>
        <!-- End Main part1  -->




        <!-- Start Main part2  -->
        <h1 class="p-relative bg-t">Projects</h1>
        <!-- Start projects-page  -->
        <div class="projects-page d-grid m-20 gap-20 ">
            <div class="project  p-20 rad-6 p-relative bg-b">
                <!-- project1 -->
                <!-- chang using data base -->
                <span class="date fs-13 c-grey">Date</span>
                <h4 class="m-0">.............</h4>
                <p class="c-grey mt-10 mb-10 fs-14">Dashboard Project Design And Programming And Hosting</p>
                <div class="team">

                    <!-- chang using data base -->
                    <a href="#"><img src="imgs/team-01.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-02.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-03.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-04.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-05.png" alt="" /></a>
                </div>

                <!-- chang using data base -->
                <div class="do d-flex">
                    <span class="fs-13 rad-6 bg-eee">Programming</span>
                    <span class="fs-13 rad-6 bg-eee">Design</span>
                    <span class="fs-13 rad-6 bg-eee">Hosting</span>
                    <span class="fs-13 rad-6 bg-eee">Marketing</span>
                </div>
                <div class="info between-flex">
                    <div class="prog bg-eee">
                        <span class="bg-red" style="width: 50%"></span>
                    </div>
                    <div class="fs-14 c-grey">
                        <i class="fa-solid fa-dollar-sign"></i>
                        2500
                    </div>
                </div>

            </div>
            <!-- project2 -->
            <!-- chang using data base -->
            <div class="project bg-white p-20 rad-6 p-relative bg-b">
                <span class="date fs-13 c-grey">Date</span>
                <h4 class="m-0">Academy Portal</h4>
                <p class="c-grey mt-10 mb-10 fs-14">Academy Portal Project Design And Programming</p>
                <div class="team">
                    <a href="#"><img src="imgs/team-01.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-02.png" alt="" /></a>
                    <a href="#"><img src="imgs/team-03.png" alt="" /></a>
                </div>
                <div class="do d-flex">
                    <span class="fs-13 rad-6 bg-eee">Programming</span>
                    <span class="fs-13 rad-6 bg-eee">Design</span>
                </div>
                <div class="info between-flex">
                    <div class="prog bg-eee">
                        <span class="bg-green" style="width: 80%"></span>
                    </div>
                    <div class="fs-14 c-grey">
                        <i class="fa-solid fa-dollar-sign"></i>
                        1800
                    </div>
                </div>
            </div>
        </div>
        <!-- End projects-page  -->



    </div>
    <!-- End continer -->

    <script src="JavaScript/chat-bot.js"></script>
</body>

</html>