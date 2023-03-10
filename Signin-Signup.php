<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {           //to detect if the form has been submitted   

    $mysqli = require __DIR__ . "/PHP/database.php";  // connect to database

    $sql = sprintf(
        "SELECT * FROM users WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])   // using placeholder %s and replace it by email from the form 
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();



    // مش هيدخل علي ال باسورد اللي لو الاميل صح 

    if ($user) {

        if (password_verify($_POST["password"], $user["passsword"])) {    // Decrypt the password and compare it with the password of the forms


            session_start();

            session_regenerate_id(TRUE);
            $_SESSION["user_name"] = $user["NameE"];
            $_SESSION["user_Email"] = $user["email"];
            $_SESSION["user_id"] = $user["id"];


            //$_SESSION["user_id"] = $user["NameE"];

            header("Location: index.php");
            exit;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>



    <!-- link style Css   -->
    <!-- <link rel="stylesheet" href="CSS/styles_Singin-Singup.css"> -->
    <link rel = "stylesheet" href="CSS/styles_Singin-Singup.css">
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
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="./PHP/singUP.php" method="post" enctype="multipart/form-data" novalidate>
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="namee" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="file" name="image">
                <button type="submit">Sign Up</button>
            </form>
        </div>





        <div class="form-container sign-in-container">





            <form method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a style="color:black" href="PHP/forgetpass.php">Forgot your password?</a>
                <button>Sign In</button>
            </form>




        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <b> Follow me on </b>
        <div class="icons">
            <a href="#" target="_blank" class="social"><i class="fab fa-github"></i></a>
            <a href="#" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank" class="social"><i class="fab fa-medium"></i></a>
            <a href="#" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
            <a href="#" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <script src="JavaScript/Signin-Signup.js"></script>
    <script src="JavaScript/chat-bot.js"></script>
</body>

</html>