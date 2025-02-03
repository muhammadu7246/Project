<?php
// session_start(); // Start the session

// Include files only after starting the session
include('header.php');
include('slidebar.php');
include('conn.php'); // Ensure this file sets up the $con variable for database connection

if (isset($_POST['add_movie'])) {
    // Retrieve form data
    $movie_name = $_POST['name'];
    $desc = $_POST['dics'];
    $release_date = $_POST['release_date'];
    $cast = $_POST['cast'];
    $video_url = $_POST['video_url'];
    
    // Handle image upload
    $image = $_FILES['gallery']['name'];
    $image_tmp = $_FILES['gallery']['tmp_name'];
    $location = "../user/images/";
    $target_file = $location . basename($image);

    if (move_uploaded_file($image_tmp, $target_file)) {
        // File upload succeeded
        $image_path = $target_file; // Store the path for database insertion
    } 

    // Insert the movie details into the database using prepared statements
    $stmt = $con->prepare("INSERT INTO tbl_movie (t_id, movie_name, `cast`, `desc`, release_date, image, video_url, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $_SESSION['theatre'], $movie_name, $cast, $desc, $release_date, $image_path, $video_url, $status);

    $status = 1; // Set default status value

    if ($stmt->execute()) {
        $_SESSION['success'] = "Movie Added";
    } else {
        $_SESSION['error'] = "Failed to add movie.";
    }

    $stmt->close();
    $con->close();

    // header('Location:add_movie.php');
    exit();
}
?>


<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add New Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form method="POST"  class="form" enctype="multipart/form-data">
                    <input type="hidden" name="add_movie" value="1">
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
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="name" placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="dics" class="form__textarea" placeholder="Description"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="date" class="form__input" name="release_date"
                                            placeholder="Release Date" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="cast" placeholder="Cast" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__gallery">
                                        <label id="gallery1" for="form__gallery-upload">Upload photos</label>
                                        <input data-name="#gallery1" id="form__gallery-upload" name="gallery"
                                            class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg"
                                            multiple>
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
                                    <input id="type1" type="radio" name="type" checked="">
                                    <label for="type1">Movie</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form__group form__group--link">
                                        <input type="text" class="form__input" name="video_url"
                                            placeholder="or add a link">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form__btn">Add Movie</button>
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