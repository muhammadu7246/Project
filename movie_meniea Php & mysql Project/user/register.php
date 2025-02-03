<?php session_start(); 
include'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Moviemania - Sign Up</title>
</head>

<body>
    <!-- Sign-Up Section -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3 text-center">
                        <span class="cate">Welcome to</span>
                        <h2 class="title">Moviemania</h2>
                    </div>

                    <!-- Registration Form -->
                    <form class="account-form" method="post" action="register_user.php">
                        <!-- Username Field -->
                        <div class="form-group">
                            <label for="username">Username<span>*</span></label>
                            <input required type="text" placeholder="Enter Your Username" name="username" id="username">
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email<span>*</span></label>
                            <input required type="email" placeholder="Enter Your Email" name="email" id="email">
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">Phone<span>*</span></label>
                            <input required type="tel" placeholder="Password" name="number" id="number">
                        </div>
                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">Age<span>*</span></label>
                            <input required type="text" placeholder="Password" name="age" id="number">
                            <label for="password">gender<span>*</span></label>
                            <input required type="text" placeholder="Password" name="gender" id="number">
                        </div>
                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">Password<span>*</span></label>
                            <input required type="password" placeholder="Password" name="password" id="password">
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group">
                            <label for="cpassword">Confirm Password<span>*</span></label>
                            <input required type="password" placeholder="Confirm Password" name="cpassword"
                                id="cpassword">
                        </div>

                        <!-- Phone Field -->


                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" name="register_btn"  class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>

                    <div class="option">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>