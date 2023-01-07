
'<?php
require './PHP/database.php';
require './Signin-Signup.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {           //to detect if the form has been submitted   

    // $mysqli = require __DIR__ . "/PHP/database.php";  // connect to database

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
            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        }
    }
}
