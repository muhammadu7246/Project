<?php
// db.php
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // or your MySQL password
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
