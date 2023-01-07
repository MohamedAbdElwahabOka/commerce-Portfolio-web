<?php
    $mysqli = require __DIR__ . "/database.php";  // connect to database
    session_start();

if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        $emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
        $emailCheckResult = mysqli_query($mysqli, $emailCheckQuery);

        // if query run
        if ($emailCheckResult) {
            // if email matched
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $code = rand(999999, 111111);
                $updateQuery = "UPDATE users SET code = $code WHERE email = '$email'";
                $updateResult = mysqli_query($mysqli, $updateQuery);
                if ($updateResult) {
                    $subject = 'Email Verification Code';
                    $message = "our verification code is $code";
                    $sender = 'From: hager.ashraf.aboelfadl@gmail.com';

                    if (mail($email, $subject, $message, $sender)) {
                        $message = "We've sent a verification code to your Email <br> $email";

                        $_SESSION['message'] = $message;
                        header('location: codeConfirmation.php');
                    } else {
                        $errors['otp_errors'] = 'Failed while sending code!';
                    }
                } 
            }
        }
    }

if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($mysqli, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM users WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($mysqli, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE users SET code = 0";
            $run = mysqli_query($mysqli,$newQuery);
            header("location: newPassword.php");
        }
    }
}

// change Password
if(isset($_POST['changePassword'])){

    // if($_POST['confirmPassword']===$_POST['changePassword']){

        /*if (empty($_POST["name"])) {
            die("name is required");
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("Valid Email is required");
        }*/
        if (strlen($_POST["password"]) < 8) {
            die("password must be at least 8 characters");
        }
        
        if (!preg_match("/[a-z]/i", $_POST["password"])) {
            die("Password must contain at least one letter");
        }
        
        if (!preg_match("/[0-9]/", $_POST["password"])) {
            die("Password must contain at least one number");
        }

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_SESSION['email'];
    $updatePassword = "UPDATE users SET passsword = '$password_hash' WHERE email = '$email'";
    $updatePass = mysqli_query($mysqli, $updatePassword) ;
  
    session_destroy();
    header('location: ../Signin-Signup.php');
  
    
}


?>