<?php
session_start();
include('conn.php');

$mid=$_GET['mid'];
mysqli_query($con,"DELETE FROM tbl_theatre WHERE id='$mid'");
 $_SESSION['success']="Movie Deleted";
header("location:all_theater.php");
?>