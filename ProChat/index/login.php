<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location: home.php");
  die();
}
?>

<?php
include 'conn.php';
$login = false;
$userCheck = $passCheck = false;
$userError = $passError = false;

if(isset($_POST['submit']))
{
  $username = $_POST["username"];
  $pass = $_POST["pass"];

  // Username input validation
  if(empty($username)) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Warning! </strong>Username cannot be empty. 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>";
    $userError = true;
  } 
  else if(preg_match("/^[A-Za-z0-9!@#$%^&*_.]{3,}$/",$username)) {
    $userCheck = true;
  }
  else{
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Warning! </strong>Invalid Username.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>";
    $userError = true;
  }

  // Password input validation
  if(empty($pass)) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Warning! </strong>Password cannot be empty.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>";
    $passError = true;
  }
  else if(preg_match('/^[A-Za-z0-9!@#$%^&*_.]{1,}$/', $pass)) {
    $passCheck = true;
  }
  else{
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Warning! </strong>Trying to Hack me. Not that much EASY :) 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>";
    $passError = true;
  }

  if($userCheck && $passCheck)
  {
    $sql = "SELECT * FROM `login` WHERE `username` LIKE '$username' AND `pass` LIKE '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $check = mysqli_num_rows($result);
    if($check >= 1)
    {
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = strtolower($username);
      $_SESSION['mobile'] = $row['mobile'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['pass'] = $row['pass'];
      $_SESSION['timestamp'] = time();
      header("location: home.php");
    }
    else
    {
      $userError = $passError = true;
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Warning! </strong>Either Username or Password is incorrect.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      </div>";
    }
  }
}
else{
  $username = $pass = NULL;
}
?>
<?php include ('header1.php'); ?>

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
                    placeholder="Your Name" value="<?php echo $username; ?>">
                  <?php if ($userError)
                    echo "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>"; ?>
                  <label for="name">Your Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="Password" name="pass" class="form-control login__input pass" id="email"
                    value="<?php echo $pass; ?>" placeholder="Your Email">
                  <?php if ($passError)
                    echo "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>"; ?>
                  <label for="email">Your Password</label>
                </div>
              </div>
              <!-- <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div> -->
              <!-- <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div> -->
              <div class="col-12 text-center">
              <!-- <input type="submit" name="submit" class="login__submit" value="Sign In"> -->
              <br><br>

              <input class="btn btn-primary-gradient rounded-pill py-3 px-5 login__submit" type="submit" name="submit"  value="Login"/>
              <br><br>
              <p class="login__signup">Don't have an account? &nbsp;<a href="signup.php">Sign Up</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include ('footer.php'); ?>