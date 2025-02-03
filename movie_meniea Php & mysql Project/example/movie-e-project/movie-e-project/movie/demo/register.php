<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:31:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Moviemania- Online Ticket Booking Website ...</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome</span>
                        <h2 class="title">moviemania </h2>
                    </div>
                    <form class="account-form" method="post">
                    <div class="form-group">
                            <label for="username">Username<span>*</span></label>
                            <input type="text" placeholder="Enter Your name"  name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="email" placeholder="Enter Your Email" name="email" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass1"name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass2" name="cpassword"  required>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone No<span>*</span></label>
                            <input type="number" placeholder="Enter Your phone no.." id="phone"  name="phone" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a href="#0">Fees</a></label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="register_btn" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>


<?php
    include('connect.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

function email_verify_token($name,$email,$verify_token){

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
    $mail->setFrom($_POST['email'],$_POST['username']);
    $mail->addAddress('Amnakamran2024@gmail.com', 'Amna');     //Add a recipien

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification from connect Amna:'.$_POST['email'];
    $mail->Body    = '<h2>Registration Code</h2>
                     <h3>Please verify your email address on below link</h3>
                     <h3><a href="http://localhost:80/movie-e-project/movie/demo/verify_email.php?token='.$verify_token.'">Click me to Verify email</a></h3>';
                     
    
    
    if($mail->send()){
       echo"<script>alert('Now verify your email address send on your email')</script>"; 
    }
    
else{
    echo 'Message could not be sent.  ';
}
    
}

if(isset($_POST['register_btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);
    $phone = $_POST['phone'];
    $verify_token = md5(rand(100,500));

    
$check_mail="SELECT email from registeration where email ='$email' limit 1";

$result_mail=mysqli_query($con,$check_mail);
if(mysqli_num_rows($result_mail)>0){
    $row= mysqli_fetch_assoc($result_mail);
    // echo "<script>alert('Email already exists,verify you emailEmail already exists,verify you email')</script>";
 $_SESSION['status']='Email already exists,verify you email';
}
else{

    email_verify_token($username , $email , $verify_token);

$sql = "INSERT INTO registeration (username, email, password,cpassword, phone, verify_token) VALUES ('$username', '$email', '$password','$cpassword', '$phone', '$verify_token')";

$result=mysqli_query($con, $sql);

    // echo "<script>alert('Registration successful.')</script>";
   $_SESSION['status']='Registration successful';
    header('Location: login.php');
}
}

?>
