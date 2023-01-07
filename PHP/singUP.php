<?php
$mysqli = require __DIR__ . "/database.php"; //connection db

if (empty($_POST["namee"])) {
    die("name is required");
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Email is required");
}
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

$name = $_POST["namee"];
$email = $_POST["email"];

/*$image = $_FILES['image']['name'];
$query = "INSERT INTO users (profile_image) VALUES('$image')";
$res = mysqli_query($sql, $query);
if ($res) {
    move_uploaded_file($_FILES['image']['tmp_name'], "$image");
}
*/

$sql = "INSERT INTO users (NameE, email, passsword) 
        VALUES (?, ?, ?)";


$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("sss", $name, $email, $password_hash);


if ($stmt->execute()) {
    header("Location: ../Signin-Signup.php");
    exit;
} else {

    if ($mysqli->errno === 1062) {       // error code for taken taken
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
// print_r($_POST);
// var_dump($password_hash);


$stmt->close();
$mysqli->close();
























// $server_name = "localhost";
// $username = "PaCoders";
// $password = "admin123";
// $dbname = 'pacoders_db';
// // Create connection
// $connection = new mysqli($server_name, $username, $password, $dbname);


// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     echo $name, $email, $password;
// } else {
// }
/*
$name = $_POST['name'];
$email = $_POST['email'];
// $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);
$password = $_POST['password'];
// var_dump($name, $email, $password);


$server_name = "localhost";
$username = "PaCoders";
$passWord = "admin123";
$dbname = 'pacoders_db';
// Create connection
$connection = new mysqli($server_name, $username, $passWord, $dbname);
// Check connection
if ($connection->connect_error) {

    die("Connection failed: " . $connection->connect_error);
}
$sql = "INSERT INTO users(NAME,email,password)
        VALUES(? , ? ,?) ";

$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
mysqli_stmt_execute($stmt);
echo "recored saved";
*/
