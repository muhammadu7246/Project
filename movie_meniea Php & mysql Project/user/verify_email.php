<?php
include 'connection.php';
session_start();

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $query = "SELECT * from registeration where  verify_token = '$token' limit 1";

    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)>0){
        $row = mysqli_fetch_assoc($query_run);
        $verify_status = $row['verify_status'];
        $check_token = $row['verify_token'];
        echo $verify_status."   ".$check_token;
        if($verify_status == 0){
            $update = "UPDATE registeration SET verify_status = '1' where verify_token = '$check_token'";
            $update_run = mysqli_query($conn , $update);
            if($update_run){
                $_SESSION['status'] = 'Your Email has been verified';
                header('Location:login.php');
            }
            else{
                $_SESSION['status'] = 'Verification failed';
                header('Location:login.php');
            }
        }
        else{
            $_SESSION['status'] = 'Your email already verified';
            header('Location:login.php');
        }
    }
    else{
        $_SESSION['status']= 'Verification code does not exists';
        header('Location:login.php');
    }
}
else{
    $_SESSION['status'] = "Not Allowed";  
    header('Location:login.php');  
}

?>