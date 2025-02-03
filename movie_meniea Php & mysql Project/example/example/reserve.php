<?php
// reserve.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected seats
    $selectedSeats = $_POST['selectedSeats'];

    if (!empty($selectedSeats)) {
        $seatArray = explode(',', $selectedSeats); // Split by commas if multiple seats are selected

        $movie_name = "Venus"; // You can dynamically set this
        $reservation_date = date("Y-m-d H:i:s"); // Current timestamp

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO reservations (movie_name, seat_number, reservation_date) VALUES (?, ?, ?)");

        foreach ($seatArray as $seat) {
            $stmt->bind_param("sss", $movie_name, $seat, $reservation_date);
            $stmt->execute();
        }

        echo "Seats reserved successfully!";
    } else {
        echo "No seats selected.";
    }
}

$conn->close();
?>