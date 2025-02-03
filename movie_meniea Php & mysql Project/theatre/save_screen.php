<?php
// Ensure session is started and the database connection is included
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $theatre = $_POST['theatre'];
    $name = $_POST['name'];
    $seats = $_POST['seats'];
    $charge = $_POST['charge'];

    // Prepare and execute the query
    $stmt = $con->prepare("INSERT INTO tbl_screens (t_id, screen_name, seats, charge) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('isii', $theatre, $name, $seats, $charge);

    if ($stmt->execute()) {
        echo "Screen added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
