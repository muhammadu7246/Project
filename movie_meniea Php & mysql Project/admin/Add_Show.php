<?php
include('header.php');
include('slidebar.php');
include('conn.php');
?>
<script src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/FormValidation.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/plugins/Bootstrap.min.js"></script>
<?php
include('form.php');
$frm = new formBuilder;
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add New Show</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="process_addshow.php" id="form1" method="POST" class="form" enctype="multipart/form-data">
                    <input type="hidden" name="add_show" value="1">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload">Image size (190 x 270)</label>
                                        <input id="form__img-upload" name="form__img-upload" type="file"
                                            accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" " style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <!-- Movie Select -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <select class="form__input" name="movie" required>
                                            <option value="">Select Movie</option>
                                            <?php
                                            $mv = mysqli_query($con, "SELECT * FROM tbl_movie WHERE status='0'");
                                            while ($movie = mysqli_fetch_array($mv)) {
                                                ?>
                                                <option value="<?php echo $movie['movie_id']; ?>">
                                                    <?php echo $movie['movie_name']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Screen Select -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <select class="form__input" id="screen" name="screen" required>
                                            <option value="">Select Screen</option>
                                            <?php
                                            $sc = mysqli_query($con, "SELECT * FROM tbl_screens WHERE t_id='" . $_SESSION['theatre'] . "'");
                                            while ($screen = mysqli_fetch_array($sc)) {
                                                ?>
                                                <option value="<?php echo $screen['screen_id']; ?>">
                                                    <?php echo $screen['screen_name']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Show Time Select -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <select class="form__input" id="stime" name="stime[]" multiple>
                                            <option value="">Select Time</option>
                                            <script
                                                src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                            <script type="text/javascript">
                                                // On change of screen, fetch available showtimes via AJAX
                                                $('#screen').change(function () {
                                                    var screen = $(this).val();
                                                    $.ajax({
                                                        url: 'get_showtime.php',
                                                        type: 'POST',
                                                        data: { screen: screen },
                                                        dataType: 'html',
                                                        success: function (data) {
                                                            $('#stime').html(data);
                                                        },
                                                        error: function () {
                                                            $('#stime').html('<option>Something went wrong, please try again...</option>');
                                                        }
                                                    });
                                                });
                                            </script>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="date" class="form__input" name="name" placeholder="Usama" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form__btn">Add Show</button>
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