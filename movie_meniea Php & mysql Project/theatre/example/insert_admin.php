<?php
require 'config.php';

$username = "admin";
$password = password_hash("adminpassword", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES ('".$username."', '".$password."')");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
?>
