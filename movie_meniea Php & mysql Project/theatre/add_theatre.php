<?php
include('header.php');
include('slidebar.php');
include('conn.php');

?>
<?php
include 'config.php';
$userCheck = $emailCheck = $passCheck = $cpassCheck = false;
$userError = $emailError = $passError = $cpassError = false;

if (isset($_POST['submit'])) {
  $username = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];
  $address = $_POST["address"];
  $place = $_POST["place"];
  $state = $_POST["state"];
  $pin = $_POST["pin"];

//   INSERT INTO `tbl_theatre` (`name`, `address`, `place`, `state`, `pin`, `email`, `pass`) VALUES ('".$username."', '".$address."', '".$place."', '".$state."', '".$pin."', ''".$email."','".$pass."');
  
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
  $emailSql = "SELECT * FROM `tbl_theatre` WHERE `email` LIKE '$email'";
  $userSql = "SELECT * FROM `tbl_theatre` WHERE `name` LIKE '$username'";
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
      $sql = "INSERT INTO `tbl_theatre` (`name`, `address`, `place`, `state`, `pin`, `email`, `pass`) VALUES ('".$username."', '".$address."', '".$place."', '".$state."', '".$pin."', ''".$email."','".$pass."')";
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
  $username = $pass = $cpass = $email = NULL;
}
?>


<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add New theater</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="#" method="POST" class="form">
                    <input type="hidden" name="add_theater" value="1">

                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Theater name:</label>
                                        <input readonly id="form__img-upload" name="form__img-upload" type="text"
                                            accept=".png, .jpg, .jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="password" class="form__input" name="pass" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="password" class="form__input" name="cpass" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="address" class="form__textarea" placeholder="Address"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="place" placeholder="Place"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="state" placeholder="State"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="pin" placeholder="Pin code"
                                            required>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                
                                <div class="col-12">
                                    <button type="submit" name="submit" class="form__btn">Add theater</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>
<!-- end main content -->

<?php
include('footer.php');
?>