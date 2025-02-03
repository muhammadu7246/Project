<?php
include('header.php');
include('slidebar.php');
?>
<?php
// session_start();
include('conn.php');

$mid = $_GET['mid'];
$qry7 = mysqli_query($con, "select * from tbl_theatre WHERE id='$mid'");
$_SESSION['success'] = "Movie Deleted";
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
                            <input type="hidden" name="add_theater" value="1">

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
                                                <input type="text" class="form__input" name="name" value="<?php echo $c['name']; ?>" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="email" value="<?php echo $c['email']; ?>" readonly
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="pass" value="<?php echo $c['pass']; ?>" readonly
                                                    required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input id="text" name="address" class="form__textarea" value="<?php echo $c['address']; ?>" readonly
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="place" value="<?php echo $c['place']; ?>" readonly
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="state" value="<?php echo $c['state']; ?>" readonly
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="pin" value="<?php echo $c['pin']; ?>" readonly
                                                    required>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">

                                       
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