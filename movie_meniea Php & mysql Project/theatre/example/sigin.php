
<?php
include 'config.php';
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
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Confirm Password cannot be empty.</div>';
    $cpassError = true;
  } else if ($pass == $cpass) {
    $cpassCheck = true;
  } else {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Your password and confirmation password do not match.</div>';
    $cpassError = true;
  }

  // Password input validation
  if (empty($pass)) {
    echo '<div class="alert alert-danger" role="alert"><b>Warning!</b> Password cannot be empty.</div>';
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
      echo '<div class="alert alert-danger" role="alert"><b>Warning! </b>
        Your email is already registered. <a href="index11.php">Sign In</a> instead?
        </div>';
    } else if ($userMatch >= 1) {
      $userError = true;
      echo '<div class="alert alert-danger" role="alert"><b>Warning! </b>';
      echo "'$username'";
      echo ' username not available. </div>';
    } else {
      $sql = "INSERT INTO `login` (`username`, `pass`, `email`, `date`) VALUES ('$username', '$pass', '$email', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $username = $pass = $cpass = $email  = NULL;
        echo '<div class="alert alert-success" role="alert">
          <b>Success! </b>Your account has been created successfully. <a href="index11.php">Sign In</a> now?
          </div>';
      }
    }
  }
} else {
  $username = $pass = $cpass = $email = $mobile = NULL;
}
?>

<div class="container-xxl py-5" id="contact">
  <div class="container py-5 px-lg-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="text-primary-gradient fw-medium">Login Your Account Here!</h5>
      <h1 class="mb-5">Login</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="wow fadeInUp" data-wow-delay="0.3s">

          <form method="post">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" name="username" class="form-control login__input name" id="name"
                    placeholder="User Name" >
                
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                
                  <input type="email" name="email" class="form-control login__input pass" id="email"
                    value="<?php echo $email;?>" placeholder="Your Email">
                    
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="password" name="pass" class="form-control login__input pass" id="subject" placeholder="Password" value="<?php echo $pass; ?>">
                  <label for="Password">Password</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="Password" name="cpass" class="form-control login__input pass" id="subject" placeholder="Confirm Password" value="<?php echo $cpass; ?>">
                  <label for="Confirm Password">Confirm Password</label>

                 
                </div>
              </div>

              <div class="col-12 text-center">
                <!-- <input type="submit" name="submit" class="login__submit" value="Sign In"> -->
                <br><br>

                <input class="btn btn-primary-gradient rounded-pill py-3 px-5 login__submit" type="submit" name="submit"
                  value="Sign In" />
                <br><br>
                <p class="login__signup">have an account? &nbsp;<a href="index1.php">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
