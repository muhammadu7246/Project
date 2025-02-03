<?php include('../db.php'); ?>

<form action="insert_movie.php" method="post">
  <label>Movie Name:</label>
  <input type="text" name="movie_name" required>
  
  <label>Date:</label>
  <input type="date" name="movie_date" required>
  
  <label>Time:</label>
  <input type="time" name="movie_time" required>
  
  <label>Hall Number:</label>
  <input type="number" name="hall_number" required>
  
  <input type="submit" value="Add Movie">
</form>
