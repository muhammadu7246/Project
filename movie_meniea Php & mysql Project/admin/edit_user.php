<?php
include('header.php');
include('slidebar.php');
?>
<?php
// session_start();
include('conn.php');

$mid = $_GET['mid'];
$qry7 = mysqli_query($con, "SELECT * FROM tbl_registration WHERE user_id='$mid'");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // Update the movie details in the database
    $update_query = "UPDATE tbl_movie SET 
                        `name`='$name', 
                        `email`='$email', 
                        phone='$phone', 
                        age='$age', 
                        gender='$gender'
                    WHERE user_id='$mid'";

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
                    <!-- main title -->
                    <div class="col-12">
                        <div class="main__title">
                            <h2><?php echo $c['name']; ?></h2>
                        </div>
                    </div>
                    <!-- end main title -->

                    <!-- form -->
                    <div class="col-12">
                        <form action="#" method="POST" class="form">
                            <input type="hidden" name="add_theater" value="<?php echo $mid; ?>">

                            <div class="row">
                                <div class="col-12 col-md-5 form__cover">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <div class="form__img">
                                                <label for="form__img-upload"><?php echo $c['name']; ?></label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-7 form__content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="name" value="<?php echo $c['name']; ?>"  required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="email" value="<?php echo $c['email']; ?>" 
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="pass" value="<?php echo $c['phone']; ?>" 
                                                    required>
                                            </div>
                                        </div>
                                        

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="place" value="<?php echo $c['gender']; ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="state" value="<?php echo $c['age']; ?>" 
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="form__btn">Edited User</button>
                                    </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end form -->
                    
                    <?php
                }
            }
            ?>
        </div>
    </div>
</main>
<!-- end main content -->

<?php
include('footer.php');
?>