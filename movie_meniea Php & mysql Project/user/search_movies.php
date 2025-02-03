<?php
include('connection.php'); // Include your database connection

if (isset($_POST['query'])) {
    $query = $conn->real_escape_string($_POST['query']);
    $searchQuery = "SELECT * FROM tbl_movie WHERE movie_name LIKE '%$query%'";
    $searchResult = $conn->query($searchQuery);

    if ($searchResult->num_rows > 0) {
        while ($movie = $searchResult->fetch_assoc()) {
            echo '
            <div class="col-sm-6 col-lg-4">
                <div class="movie-grid">
                    <div class="movie-thumb c-thumb">
                        <a href="movie-details.php?id=' . $movie['movie_id'] . '">
                            <img src="' . $movie['image'] . '" alt="' . $movie['movie_name'] . '">
                        </a>
                    </div>
                    <div class="movie-content bg-one">
                        <h5 class="title m-0">
                            <a href="movie-details.php?id=' . $movie['movie_id'] . '">' . $movie['movie_name'] . '</a>
                        </h5>
                        <ul class="movie-rating-percent">
                            <li>
                                <a href="movie-details.php?id=' . $movie['movie_id'] . '" class="custom-button">Book your ticket</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo '<p>No movies found.</p>';
    }
    $conn->close();
}
?>
