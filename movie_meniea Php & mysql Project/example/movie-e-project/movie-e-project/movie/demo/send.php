<?php
include('connect.php');
    

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';
function contactMail($name, $email, $phone,$message){
$mail = new PHPMailer(true);
    //Server settings
                        //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'usman3shahid2010@gmail.com';                     //SMTP username
    $mail->Password   = 'kjdgbfoakdheruor';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = '465';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('usman3shahid2010@gmail.com',$_POST['name']);
    $mail->addAddress('Amnakamran2024@gmail.com', 'Amna');     //Add a recipien
    $mail->addReplyTo( $email,'information');
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact form :'.$_POST['email'];
    $mail->Body    = 'Name :'.$_POST['name'] .'<br> Email :'.$_POST['email'] .'<br>phone:'.$_POST['phone'] .'<br> Message:'.$_POST['message'];
    if($mail->send()){
        echo"<script>alert('Now verify your email address')</script>"; 
     }
     
 else{
     echo 'Message could not be sent.  ';
 }    
}
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   
    $sql = "INSERT INTO contact (name, email, phone, message,contact_date) VALUES ('$name','$email','$phone','$message',now())";
    contactMail($name, $email, $phone, $message);  // Call function to send mail
    $result = mysqli_query($con, $sql);
    if($result){
         echo"<script>alert('Your message has been sent successfully. We will contact you shortly.')</script>";
    }
    else{
        echo"<script>alert('Your message not sent ')</script>";
    }
 
 }

 if(isset($_SESSION['verifed'])){
    $_SESSION['status'] ='You are already logged in';
    header('Location: index.php');
    exit();
}