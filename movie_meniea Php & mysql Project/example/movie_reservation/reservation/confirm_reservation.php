<?php
include('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movie_id = $_POST['movie_id'];
    $seat_ids = $_POST['seat_ids']; // Array of selected seat IDs

    if (!empty($seat_ids)) {
        echo "<h1>Confirm Your Reservation</h1>";
        echo "<form method='POST' action='confirm_reservation.php'>";
        echo "<input type='hidden' name='movie_id' value='$movie_id'>";
        echo "<input type='hidden' name='seat_ids' value='" . implode(",", $seat_ids) . "'>";
        echo "<label>Your Name:</label><br>";
        echo "<input type='text' name='customer_name' required><br>";
        echo "<input type='submit' name='confirm' value='Confirm'>";
        echo "</form>";
    } else {
        echo "No seats selected.";
    }
} elseif (isset($_POST['confirm'])) {
    // Process the final reservation
    $movie_id = $_POST['movie_id'];
    $seat_ids = explode(",", $_POST['seat_ids']); // Convert the seat_ids string back to an array
    $customer_name = $_POST['customer_name'];

    foreach ($seat_ids as $seat_id) {
        // Insert reservation for each selected seat
        $sql = "INSERT INTO reservations (movie_id, seat_id, customer_name) VALUES ($movie_id, $seat_id, '$customer_name')";
        $conn->query($sql);

        // Mark the seat as reserved
        $update_seat_sql = "UPDATE seats SET is_available = 0 WHERE id = $seat_id";
        $conn->query($update_seat_sql);
    }

    echo "Reservation successful for seats: " . implode(", ", $seat_ids);
} else {
    echo "Invalid request.";
}

$conn->close();
?>
