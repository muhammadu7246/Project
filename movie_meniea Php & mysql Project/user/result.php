<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "movie_mania";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the 'query' parameter is set in the URL
if (isset($_GET['query'])) {
    $search_query = $connection->real_escape_string($_GET['query']);

    // Search the database for movies that match the query
    $query = "SELECT * FROM movies WHERE title LIKE '%$search_query%'";
    $result = $connection->query($query);

    if ($result && $result->num_rows > 0) {
        echo "<h1>Search Results for '" . htmlspecialchars($search_query) . "':</h1>";
        echo "<ul>";
        while ($movie = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($movie['title']) . " - " . htmlspecialchars($movie['release_date']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No movies found for your search query.</p>";
    }
} else {
    echo "<p>Please enter a search term.</p>";
}

$connection->close();
?>
