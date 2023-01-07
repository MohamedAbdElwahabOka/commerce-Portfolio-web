<?php
$server_name = "localhost";
$username = "Pacoders";
$passWord = "admin1234";
$dbname = 'pacoders_db';


// Create connection
$mysqli = new mysqli($server_name, $username, $passWord, $dbname);
// Check connection
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
