<?php
//require './PHP/database.php';


//print_r($_SESSION);

//$_SESSION["user_name"];

//echo $userr_name;

//echo $_SESSION;
// include 'Signin-Signup.php';
//require 'Signin-Signup.php';
//require 'singin.php';


// $sql =
//     "SELECT NameE FROM users WHERE id = "
//      // using placeholder %s and replace it by email from the form 
// );
session_start();
// $result = $mysqli->query($sql);

// $user = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link style Css   -->
    <link rel="stylesheet" href="CSS/Home_style.css">
    <link rel="stylesheet" href="CSS/Responsive-Home.css">
    <!-- normalize Css -->
    <link rel="stylesheet" href="CSS/normaliz.css" />
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
            <a id="logo" href="#logo" class="logo">{ }
                <h4 class="h-logo">PaCoders</h4>
            </a>

            <ul class="main-nav">
                <li><a href="#header">Home</a></li>
                <li><a href="#Projects">Projects</a></li>
                <li><a href="#AboutUS">About US</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li><a href="shop.html"><i class="fa-solid fa-crown"></i>Shop</a></li>
            </ul>
            <?php if ($_SESSION) :  ?>
                <ul class="main-nav-log">
                    <li><a href="User_Profile.php"><?php echo $_SESSION["user_name"] ?></a></li>
                    <li><a class="LogOut" href="logout.php">Log out</a></li>
                </ul>

            <?php elseif (!($_SESSION)) : ?>
                <ul class="main-nav-log">
                    <li><a href="Signin-Signup.php">Log In</a></li>
                    <li><a class="singup" href="Signin-Signup.php">Sign Up</a></li>
                </ul>
            <?php endif; ?>
        </div>
        <!-- <div class="wrapper">
            <div class="sidebar">
                <h2>Sidebar</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
                    <li><a href="#"><i class="fas fa-project-diagram"></i>portfolio</a></li>
                    <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
                    <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                    <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
                </ul>
                <div class="social_media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div> -->

    </div>

    <!-- Start landing   -->
    <div class="landing" id="header">
        <div class="container">
            <div class="text">
                <h1>PaCoders</h1>
                <h2>Software Engineer Team</h2>
                <!-- <h2 class="team">Team</h2> -->
                <!-- <div class="buttoms">
                    <ul class="">
                        <li><a href="#hirus">Hire Us</a></li>
                        <li><a class="singup" href="#Singup">Down</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="image">
                <img src="imgs/Group 12.png" alt="" />
            </div>
        </div>
    </div>
    <!-- End Landing -->

    <!-- Start profile   -->

    <div id="Projects">
        <div class="container">
            <div id="formList">
                <div id="list">
                    <div class="item">
                        <img src="imgs/giga_chad.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Chopper</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>B??c s???</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>Cute</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/giga_chad.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Brook</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>H???i t???c</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>B???t t???</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/hope_garden.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Sanji</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>?????u b???p</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>Ch??n l???a</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/hope_garden.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Usopp</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>X??? th???</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>Ch??m gi??</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/hope_garden.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Nami</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>Hoa ti??u</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>??n hi???p ?????ng ?????i</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/giga_chad.png" class="avatar">
                        <div class="content">
                            <table width="100%" cellspacing="0">
                                <tr>
                                    <td>T??n</td>
                                    <!-- <td>Robin</td> -->
                                </tr>
                                <tr>
                                    <td>Ngh??? nghi???p</td>
                                    <!-- <td>H???i t???c</td> -->
                                </tr>
                                <tr>
                                    <td>S???c m???nh</td>
                                    <!-- <td>Ngh??n tay</td> -->
                                </tr>
                                <tr>
                                    <td colspan="2" class="nameGroup">Th??nh vi??n b??ng M?? R??m</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="direction">
                <button id="prev">
                    < </button>
                        <button id="next"> > </button>
            </div>

        </div>
    </div>

    <!-- AboutUS  -->

    <div id="AboutUS">
        <div class="container">
            <!-- <h1 class="About"><i class="fa-solid fa-address-card"></i>About US</h1> -->
            <div class="main">
                <div class="profile-card">
                    <div class="img">
                        <img src="imgs/Mohamed.jpg">
                    </div>
                    <div class="caption">
                        <h3>Mohamed Abdelwahab</h3>
                        <p>Junior Software Engineer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100010158949494"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="imgs/Hager.jpeg">
                    </div>
                    <div class="caption">
                        <h3>Hager Ashraf</h3>
                        <p>Junior Software Engineer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100009051716316"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="profile-card">
                    <div class="img">
                        <img src="imgs/Fatma.jpeg">
                    </div>
                    <div class="caption">
                        <h3>Fatma Tarek</h3>
                        <p>Junior Software Engineer</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="imgs/nabil.png">
                    </div>
                    <div class="caption">
                        <h3>Nabil Mohamed</h3>
                        <p>Junior Software Engineer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/lightning.black.359"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="imgs/besho.png">
                    </div>
                    <div class="caption">
                        <h3>Besho Mark</h3>
                        <p>Junior Software Engineer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/beshoy.mark.elmallah"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <h1>Hi !</h1>
            <h4>We are the <span>PaCoders</span></h4>
            <p>We are here to bring to you professionally developed software websites,applications and UI/UX designs.
            </p>
        </div>

    </div>


    <!-- Start Contact  -->
    <div id="Contact">
        <div class="container">
            <div class="contact">
                <div class="contact-box">
                    <div class="contact-links">
                        <h2 class="con">CONTACT</h2>
                        <div class="links">
                            <div class="link">
                                <a><img class="imge" src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
                            </div>
                            <div class="link">
                                <a><img class="imge" src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
                            </div>
                            <div class="link">
                                <a><img class="imge" src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
                            </div>
                            <div class="link">
                                <a><img class="imge" src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <form>
                            <div class="form-item">
                                <input type="text" name="sender" required>
                                <label>Name:</label>
                            </div>
                            <div class="form-item">
                                <input type="text" name="email" required>
                                <label>Email:</label>
                            </div>
                            <div class="form-item">
                                <textarea class="" name="message" required></textarea>
                                <label>Message:</label>
                            </div>
                            <button class="submit-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>



        </div>


    </div>
    <footer id="footer">
        <div class="containerr">
            <div class="row">
                <div class="col" id="company">
                    <!-- <img src="images/logo.png" alt="" class="logo"> -->
                    <h1>{ } PaCoders</h1>
                    <p>
                        We are specialized in designings, make your business a brand.
                        Try our premium services.
                    </p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>


                <div class="col" id="services">
                    <h3>Services</h3>
                    <div class="linkss">
                        <a href="#">Illustration</a>
                        <a href="#">Creatives</a>
                        <a href="#">Poster Design</a>
                        <a href="#">Card Design</a>
                    </div>
                </div>

                <div class="col" id="useful-links">
                    <h3>Links</h3>
                    <div class="linkss">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                    </div>
                </div>

                <div class="col" id="contact">
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <i class="fa fa-location"></i>
                        <p>Tanta<br>
                            Nagaa Hammadi <br>
                            Hurghada
                            <br>
                            Aswan
                        </p>
                    </div>
                    <div class="contact-details">
                        <i class="fa fa-phone"></i>
                        <p>+20 115 908 8065 <br>
                            +20 102 275 2620 <br>
                            +20 103 253 8555 <br>
                            +20 127 800 3266

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button class="b"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="JavaScript/chat-bot.js"></script>
    <script src="JavaScript/Home.js"></script>

</body>

</html>