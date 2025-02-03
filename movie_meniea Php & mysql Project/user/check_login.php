<?php
session_start();

$_SESSION['show']=$_GET['show'];
$_SESSION['movie']=$_GET['movie'];
$_SESSION['theatre']=$_GET['theatre'];
if(isset($_SESSION['username']))
{
    header('location:movie-checkout.php');
}
else
{
    // header('location:ogin.php');
}
?>