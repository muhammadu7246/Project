<?php
include ('connect.php');
session_start();

if(!isset($_SESSION['verifed'])){
    $_SESSION['status'] ='please login to Ascess home page';
    header('Location: login.php');

}


?>
<!-- 
session_start();
if (isset($_SESSION['verifed'])) {
    echo 'Username: ' . $_SESSION['verifed_user'];
    echo 'Email: ' . $_SESSION['user_email'];
    echo 'User ID: ' . $_SESSION['user_id'];
} -->

