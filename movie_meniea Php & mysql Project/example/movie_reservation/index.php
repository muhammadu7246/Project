<?php include('db.php'); ?>

<h1>Available Movies</h1>

<?php
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "Movie: " . $row['movie_name'] . " | Date: " . $row['movie_date'] .
         " | Time: " . $row['movie_time'] . " | Hall: " . $row['hall_number'];
    echo "<a href='reservation/select_seat.php?movie_id=" . $row['id'] . "'>Reserve Now</a><br>";
  }
} else {
  echo "No movies available.";
}

$conn->close();
?>
