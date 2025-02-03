<?php
include('header.php');
include('slidebar.php');
include('conn.php');

?>

<?php
// session_start();
include('conn.php');

$mid = $_GET['mid'];
$qry7 = mysqli_query($con, "SELECT * FROM tbl_theatre WHERE id='$mid'");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $palce = $_POST['place'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $release_date = $_POST['pass'];
   
    // Update the movie details in the database
    $update_query = "UPDATE tbl_movie SET 
                        `name`='$movie_name', 
                        `address`='$address', 
                        place='$place', 
                        `state`='$state', 
                        pin='$pin', 
                        email='$email', 
                        pass='$pass'
                         
                    WHERE id='$mid'";

    if (mysqli_query($con, $update_query)) {
        $_SESSION['success'] = "Movie Updated Successfully";
    } else {
        $_SESSION['error'] = "Failed to Update Movie";
    }
}

?>


<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
        <?php
            if (mysqli_num_rows($qry7)) {
                while ($c = mysqli_fetch_array($qry7)) {
                    ?>
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
                                            <label for="form__img-upload"><?php echo $c['name']; ?> :</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-12 col-md-7 form__content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form__group">
                                            <input type="text" class="form__input" name="name"  value="<?php echo $c['name']; ?>"required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form__group">
                                            <input type="email" class="form__input" name="email" value="<?php echo $c['email']; ?>" 
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form__group">
                                            <input type="password" class="form__input" name="pass" value="<?php echo $c['pass']; ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form__group">
                                            <input id="text" name="address" class="form__textarea" value="<?php echo $c['address']; ?>"
                                                required>
                                        </div>
                                    </div>
    
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="form__group">
                                            <input type="text" class="form__input" name="place" value="<?php echo $c['place']; ?>"
                                                required>
                                        </div>
                                    </div>
    
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="form__group">
                                            <input type="text" class="form__input" name="state" value="<?php echo $c['state']; ?>"
                                                required>
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                        <div class="form__group">
                                            <input type="text" class="form__input" name="pin" value="<?php echo $c['pin']; ?>"
                                                required>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
    
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="form__btn">Confurm theater</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form -->
                    <?php
                }}
                ?>
            <!-- main title -->
        </div>
    </div>
</main>
<!-- end main content -->


<?php
include('footer.php');
?>