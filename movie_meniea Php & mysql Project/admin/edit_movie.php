<?php
include('header.php');
include('slidebar.php');
include('conn.php');

// Get the movie ID from the URL
$mid = $_GET['mid'];

// Fetch existing movie details from the database
$qry7 = mysqli_query($con, "SELECT * FROM tbl_movie WHERE movie_id='$mid'");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $movie_name = mysqli_real_escape_string($con, $_POST['name']);
    $desc = mysqli_real_escape_string($con, $_POST['dics']);
    $release_date = mysqli_real_escape_string($con, $_POST['release_date']);
    $cast = mysqli_real_escape_string($con, $_POST['cast']);
    $video_url = mysqli_real_escape_string($con, $_POST['video_url']);
    $image = $_FILES['form__img-upload']['name'];
    
    // Default location for uploads
    $location = '../user/images/';

    // Handle image upload
    if (!empty($image)) {
        $target_file = $location . basename($image);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES['form__img-upload']['tmp_name']);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (e.g., limit to 5MB)
        if ($_FILES['form__img-upload']['size'] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES['form__img-upload']['tmp_name'], $target_file)) {
                echo "The file ". htmlspecialchars(basename($_FILES['form__img-upload']['name'])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Update the movie details in the database
    $update_query = "UPDATE tbl_movie SET 
                        movie_name='$movie_name', 
                        `desc`='$desc', 
                        release_date='$release_date', 
                        cast='$cast', 
                        video_url='$video_url', 
                        image='$image' 
                    WHERE movie_id='$mid'";

    if (mysqli_query($con, $update_query)) {
        echo "Movie Updated Successfully";
    } else {
        echo "Failed to Update Movie: " . mysqli_error($con);
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
                            <h2><?php echo htmlspecialchars($c['movie_name']); ?></h2>
                        </div>
                    </div>
                    <!-- end main title -->

                    <!-- form -->
                    <div class="col-12">
                        <form action="" method="POST" class="form" enctype="multipart/form-data">
                            <input type="hidden" name="mid" value="<?php echo htmlspecialchars($mid); ?>">
                            <div class="row">
                                <div class="col-12 col-md-5 form__cover">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <div class="form__img">
                                                <label for="form__img-upload">Upload cover (190 x 270)</label>
                                                <input id="form__img-upload" name="form__img-upload" type="file"
                                                    accept=".png, .jpg, .jpeg">
                                                <img id="form__img" src="<?php echo htmlspecialchars('../user/images/' . $c['image']); ?>" alt="Cover Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-7 form__content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="name"
                                                    value="<?php echo htmlspecialchars($c['movie_name']); ?>" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form__group">
                                                <textarea id="text" name="dics" class="form__textarea" placeholder="Description"><?php echo htmlspecialchars($c['desc']); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="date" class="form__input" name="release_date"
                                                    value="<?php echo htmlspecialchars($c['release_date']); ?>" placeholder="Release year">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form__group">
                                                <input type="text" class="form__input" name="cast"
                                                    value="<?php echo htmlspecialchars($c['cast']); ?>" placeholder="Cast">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form__gallery">
                                                <label for="form__gallery-upload">Upload photos</label>
                                                <input id="form__gallery-upload" value="<?php echo htmlspecialchars($c['image']); ?>" name="gallery" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form__group form__group--link">
                                                <input type="text" class="form__input" name="video_url"
                                                    value="<?php echo htmlspecialchars($c['video_url']); ?>" placeholder="or add a link">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="form__btn">Update</button>
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
