<?php include('../db.php'); ?>

<form action="insert_seats.php" method="post">
  <label>Hall Number:</label>
  <input type="number" name="hall_number" required>
  
  <label>Seat Numbers (comma-separated):</label>
  <input type="text" name="seat_numbers" required>
  
  <input type="submit" value="Add Seats">
</form>
