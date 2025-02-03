<?php
include('conn.php');

if (isset($_POST['add_show'])) {
    $movie_id = $_POST['movie'];
    $screen_id = $_POST['screen'];
    $show_times = $_POST['stime'];
    $date = $_POST['date'];
    $theatre_id = $_SESSION['theatre'];

    // Insert data into the database
    foreach ($show_times as $show_time) {
        $sql = "INSERT INTO tbl_shows (movie_id, screen_id, show_time, date, theatre_id) VALUES ('$movie_id', '$screen_id', '$show_time', '$date', '$theatre_id')";
        if (mysqli_query($con, $sql)) {
            echo "Show added successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>