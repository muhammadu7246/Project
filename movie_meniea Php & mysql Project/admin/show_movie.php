<?php
include('header.php');
include('slidebar.php');
?>
<?php
// session_start();
include('conn.php');

$mid = $_GET['mid'];
$qry7 = mysqli_query($con, "select * from tbl_movie WHERE movie_id='$mid'");
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
                            <h2><?php echo $c['movie_name']; ?></h2>
                        </div>
                    </div>
                    <!-- end main title -->
        
                    <!-- form -->
        
                    <div class="col-12">
                        <form action="#" class="form">
                            <div class="row">
                                <div class="col-12 col-md-5 form__cover">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <div class="form__img">
                                                <img src="images/<?php echo $c['image']; ?>" height="100%" width="100%" alt="<?php echo $c['movie_name']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-12 col-md-7 form__content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input readonly type="text" class="form__input" value="<?php echo $c['movie_name']; ?>">
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form__group">
                                                <textarea readonly id="text" name="text" placeholder="<?php echo $c['desc']; ?>" class="form__textarea"></textarea>
                                            </div>
                                        </div>
        
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input readonly type="text" class="form__input" value="<?php echo $c['release_date']; ?>">
                                            </div>
                                        </div>
        
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input readonly type="text" class="form__input" value="<?php echo $c['status']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-12">
                                    <ul class="form__radio">
                                        <li>
                                            <span>Item type:</span>
                                        </li>
                                        <li>
                                            <input readonly id="type1" type="radio" name="type" checked="">
                                            <label for="type1">Movie</label>
                                        </li>
                                        
                                    </ul>
                                </div>
        
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form__group form__group--link">
                                                <input readonly type="text" class="form__input" placeholder="<?php echo $c['video_url']; ?>">
                                            </div>
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
include('header.php');
?>