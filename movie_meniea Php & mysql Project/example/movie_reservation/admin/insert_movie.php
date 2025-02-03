<?php
include('../db.php');

$movie_name = $_POST['movie_name'];
$movie_date = $_POST['movie_date'];
$movie_time = $_POST['movie_time'];
$hall_number = $_POST['hall_number'];

$sql = "INSERT INTO movies (movie_name, movie_date, movie_time, hall_number)
        VALUES ('$movie_name', '$movie_date', '$movie_time', $hall_number)";

if ($conn->query($sql) === TRUE) {
  echo "New movie added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
