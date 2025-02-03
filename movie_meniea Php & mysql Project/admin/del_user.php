<?php
session_start();
include('conn.php');

$mid=$_GET['mid'];
mysqli_query($con,"DELETE FROM tbl_registration WHERE user_id='$mid'");
 $_SESSION['success']="Movie Deleted";
header("location:all_user.php");
?>