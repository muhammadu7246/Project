<?php
include('../db.php');

$hall_number = $_POST['hall_number'];
$seat_numbers = explode(",", $_POST['seat_numbers']);

foreach ($seat_numbers as $seat) {
  $seat = trim($seat);
  $sql = "INSERT INTO seats (hall_number, seat_number) VALUES ($hall_number, '$seat')";
  
  if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

echo "Seats added successfully";
$conn->close();
?>
