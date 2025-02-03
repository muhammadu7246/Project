<?php
include('header.php');
include('slidebar.php');
include('conn.php');
?>

<?php
// Initialize checks and error variables
$userCheck = $emailCheck = $passCheck = $cpassCheck = false;
$userError = $emailError = $passError = $cpassError = false;

if (isset($_POST['submit'])) {
    // Capture the form data
    $username = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $address = $_POST["address"];
    $place = $_POST["place"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];

    // Start session
    session_start();

    // Ensure connection to the database
    // include('conn.php');

    // Insert data into the tbl_registration table
    mysqli_query($con, "INSERT INTO tbl_theatre VALUES (NULL, '$username', '$address', '$place', '$state', '$pin', '$email', '$pass')");

    // Get the ID of the inserted record
    $id = mysqli_insert_id($con);

    // Insert data into the tbl_login table
    mysqli_query($con, "INSERT INTO tbl_login VALUES (NULL, '$id', '$email', '$pass', '1')");

    // Optional: set session variable and redirect to another page
    // $_SESSION['user'] = $id;
    // header('location:index.php');
}
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add New Theater</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="#" method="POST" class="form">
                    <input required type="hidden" name="add_theater" value="1">

                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Theater name:</label>
                                        <input required readonly id="form__img-upload" name="form__img-upload" type="text"
                                            accept=".png, .jpg, .jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input required type="text" class="form__input" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input required type="text" class="form__input" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input required type="password" class="form__input" name="pass" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <input required type="password" class="form__input" name="cpass" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="address" class="form__textarea" placeholder="Address" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input required type="text" class="form__input" name="place" placeholder="Place" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input required type="text" class="form__input" name="state" placeholder="State" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <input required type="text" class="form__input" name="pin" placeholder="Pin code" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="submit" class="form__btn">Add Theater</button>
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
