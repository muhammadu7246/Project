<?php
include('conn.php');
session_start();
$email = $_POST["Email"];
$pass = $_POST["Password"];
echo $email;
echo $pass;
$quer = "select * from tbl_login where username='$email' and password='$pass'";
$qry = mysqli_query($con, $quer);
if (mysqli_num_rows($qry)) {
	$usr = mysqli_fetch_array($qry);
	if ($usr['user_type'] == 0) {
		
		$_SESSION['admin'] = $usr['user_id'];
		header('location:index.php');
	} else {
		$_SESSION['error'] = "Login Failed!";
		header("location:sign-in.php");
	}
} else {
	$_SESSION['error'] = "Login Failed!";
	header("location:sign-in.php");
}


?>