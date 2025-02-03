
<?php 

include'connection.php';

if (isset($_POST['register_btn'])) {
    // Get the form data directly from POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if the passwords match
    if ($password != $cpassword) {
        $_SESSION['error'] = 'Passwords do not match';
        header('Location: register.php');
       echo' <script>alert("Password Do not match")</script>';

        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Simple SQL query to insert user data
    session_start();
    include('connection.php');
    extract($_POST);
    mysqli_query($conn,"insert into  tbl_registration values(NULL,'$username','$email','$phone','$age','$gender')");
    $id=mysqli_insert_id($conn);
    mysqli_query($conn,"insert into  tbl_login values(NULL,'$id','$email','$password','2')");
    $_SESSION['user']=$id;
    header('location:index.php');
  
}

?>