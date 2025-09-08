<?php
$servername = "localhost"; // or your host
$username = "your_db_username";
$password = "your_db_password";
$dbname = "user_data_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
