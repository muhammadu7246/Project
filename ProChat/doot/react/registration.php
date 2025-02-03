<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location: ../../index/home.php");
  die();
}
?>

<?php
include '../../index/conn.php';
$userCheck = $emailCheck = $passCheck = $cpassCheck = false;
$userError = $emailError = $passError = $cpassError = false;

if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  // $mobile = $_POST["mobile"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];

  // Confirm pass input validation
  if (empty($cpass)) {
    echo ' 
<script>alert("error! Confirm Password cannot be empty.");</script>
    
    ';
    $cpassError = true;
  } else if ($pass == $cpass) {
    $cpassCheck = true;
  } else {
    echo '
<script>alert("error! Your password and confirmation password do not match.");</script>
    
    ';
    $cpassError = true;
  }

  // Password input validation
  if (empty($pass)) {
    echo '
    <script>alert("error! Password cannot be empty.");</script>';
    $passError = true;
  } else if (preg_match('/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*_.]{6,}$/', $pass)) {
    $passCheck = true;
  } else {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Your password is weak. Please enter a strong password.</div>';
    $passError = true;
  }

  // // Mobile number input validation
  // if(empty($mobile)) {
  //   echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Mobile Number cannot be empty.</div>';
  //   $mobileError = true;
  // } 
  // else if(preg_match('/^[0-9]{10}$/', $mobile)) {
  //   $mobileCheck = true;
  // }
  // else{
  //   echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Invalid Mobile Number</div>';
  //   $mobileError = true;
  // }

  // Email input validation
  if (empty($email)) {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Email Address cannot be empty.</div>';
    $emailError = true;
  } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailCheck = true;
  } else {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Invalid Email Address</div>';
    $emailError = true;
  }

  // Username input validation
  if (empty($username)) {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Username cannot be empty.</div>';
    $userError = true;
  } else if (preg_match("/^[A-Za-z0-9!@#$%^&*_.]{3,}$/", $username)) {
    $userCheck = true;
  } else {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Invalid Username</div>';
    $userError = true;
  }


  // Checking User and Email Availability
  $emailSql = "SELECT * FROM `login` WHERE `email` LIKE '$email'";
  $userSql = "SELECT * FROM `login` WHERE `username` LIKE '$username'";
  $emailResult = mysqli_query($conn, $emailSql);
  $userResult = mysqli_query($conn, $userSql);
  $emailMatch = mysqli_num_rows($emailResult);
  $userMatch = mysqli_num_rows($userResult);
  if ($userCheck && $emailCheck && $passCheck && $cpassCheck) {
    if ($emailMatch >= 1) {
      $emailError = true;
      header('location:login.php');
    } else if ($userMatch >= 1) {
      $userError = true;
      echo '<div class="alert alert-danger" role="alert"><b>Warning! </b>';
      echo "'$username'";
      echo ' username not available. </div>';
    } else {
      $sql = "INSERT INTO `login` (`username`, `pass`, `email`, `date`) VALUES ('$username',  '$pass', '$email', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $username = $pass = $cpass = $email = NULL;
        echo '
        <script>alert("Success Your account has been created successfully. <a href="login.php">Sign In</a> now?")</script>
        
        ';
        header('location:login.php');
      }
    }
  }
} else {
  $username = $pass = $cpass = $email = $mobile = NULL;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>ProChat || Real time Chat Application</title>
  <link rel="shortcut icon" href="../images/favicon.ico" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Sarabun:400,500,600,700|Rubik:300,400,500" rel="stylesheet" />
  <!-- cndk.beforeafter css -->
  <link rel="stylesheet" type="text/css" href="../css/cndk.beforeafter.css" />
  <!--Material Icon -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.materialdesignicons.com/4.7.95/css/materialdesignicons.min.css" />
  <!-- Bootstrap Css-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="../css/colors/red.css" />
</head>

<body data-spy="scroll" data-target="#data-scroll" data-hijacking="on" data-animation="scaleDown">
  <!-- STRAT NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand logo text-uppercase" href="index.html">
        <img src="../../index\assets\img\logo/logo.png" width="80px" height="80px" alt="logo" height="20" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="mdi mdi-menu"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav navbar-center ms-auto" id="mySidenav">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>

          <li class="nav-item">
            <a href="#features" class="nav-link">Features</a>
          </li>
          <li class="nav-item">
            <a href="registration.php" target="_blank" class="nav-link">Registration</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR -->

  <!--START HOME-->
  <section class="section bg-home home-half bg-pattern text-white-50" id="home">
    <div class="bg-overlay"></div>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <h4 class="home-small-title">Real Time chatting and Calling</h4>
          <h1 class="home-title fw-normal text-white">
            <b class="text-primary">ProChat</b> - Chat App Platform
          </h1>
          <p class="padding-t-15 home-desc mx-auto">
            <b class="text-white">ProChat</b> ProChat offers fast, secure, and
            easy-to-use real-time messaging for private or group chats,
            perfect for everyday communication.
          </p>

          <p class="margin-t-30 mb-5">
            <a href="https://1.envato.market/doot-react" target="_blank"
              class="btn btn-custom waves-effect waves-light check-demo"><i class="mdi mdi-arrow-down me-1"></i>Login
            </a>

            <a href="docs/index.html" target="_blank"
              class="btn btn-success border-0 waves-effect waves-light check-demo">Registrer it Here</a>
          </p>
        </div>

        <div class="col-lg-6 ms-lg-auto">
          <div class="row justify-content-between mb-2">
            <div class="col-auto">
              <a href="http://doot-light.react.themesbrand.com/" target="_blank">
                <span class="badge bg-secondary rounded-pill px-3 py-2 h5">Light</span>
              </a>
            </div>

            <div class="col-auto">
              <a href="http://doot-rtl.react.themesbrand.com/" target="_blank">
                <span class="badge bg-custom rounded-pill px-3 py-2 h5 text-white">RTL</span>
              </a>
            </div>

            <div class="col-auto">
              <a href="http://doot-dark.react.themesbrand.com/" target="_blank">
                <span class="badge bg-dark rounded-pill px-3 py-2 h5">Dark</span>
              </a>
            </div>
          </div>
          <div class="beforeafterdefault">
            <div data-type="data-type-image">
              <div data-type="before"><img src="../images/image1.png" /></div>
              <div data-type="after"><img src="../images/image2.png" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--END HOME-->

  <!-- CONTACT FORM START-->
  <section class="section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h1 class="section-title text-center">Login</h1>
          <div class="section-title-border margin-t-20"></div>
          <p class="section-subtitle text-muted text-center font-secondary padding-t-30">
            ProChat Support is available Monday to Friday, 10:00 AM to 6:00 PM IST, with an estimated response time of 1
            business day. Please review the theme’s documentation before submitting a ticket. Support excludes theme
            customization, installation, or third-party plugins and software assistance.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="custom-form mt-4 pt-4">
            <div id="message"></div>
            <form method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group mt-2">
                    <input required type="text" name="username" class="form-control login__input name" id="name"
                      value="<?php echo $username; ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group mt-2">
                    <input required type="email" name="email" class="form-control login__input pass" id="email"
                      value="<?php echo $email; ?>" placeholder="Your Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input required type="password" name="pass" class="form-control login__input pass" id="subject"
                      placeholder="Password" value="<?php echo $pass; ?>">

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input required type="Password" name="cpass" class="form-control login__input pass" id="subject"
                      placeholder="Confirm Password" value="<?php echo $cpass; ?>">

                    If you have already create an account so Login here!
                    <a href="Login.php"> Login</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-right">
                  <br>
                  <input class="btn bg-success text-white" type="submit"
                    name="submit" value="Sign In" />
                  <div id="simple-msg"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT FORM END-->

  <!--START FOOTER ALTER-->
  <div class="footer-alt">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-start pull-none">
            <p class="copy-rights text-muted mb-3 mb-sm-0">
              <script>
                document.write(new Date().getFullYear());
              </script>
              © ProChat -
              <a href="https://themesbrand.com/" class="text-reset" target="_blank">Real Time Chat Application</a>
            </p>
          </div>
          <div class="float-end pull-none">
            <ul class="list-inline social m-0">
              <li class="list-inline-item">
                <a href="" target="_blank" class="social-icon"><i class="mdi mdi-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" target="_blank" class="social-icon"><i class="mdi mdi-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" target="_blank" class="social-icon"><i class="mdi mdi-linkedin"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" target="_blank" class="social-icon"><i class="mdi mdi-behance"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="" target="_blank" class="social-icon"><i class="mdi mdi-dribbble"></i></a>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!--START FOOTER ALTER-->
  <!-- JAVASCRIPTS -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/scrollspy.min.js"></script>
  <!-- Sticky Header -->
  <script src="../js/jquery.sticky.js"></script>
  <!-- cndk.beforeafter js -->
  <script src="../js/cndk.beforeafter.js"></script>

  <script src="../js/app.js"></script>


</body>

</html>