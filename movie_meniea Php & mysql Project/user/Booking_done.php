<?php
session_start();
include('connection.php'); // Assuming you have a file that handles the database connection

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // Collect the form data

    $theater_id = isset($_GET['theatre']) ? htmlspecialchars($_GET['id']) : '';
    $screen_id = $_POST['screen_id'];
    $date = $_POST['date'];
    $show_time = $_SESSION['movie_start_time'] = date('h:i A', strtotime($ttme['start_time'])); // This field is not used in the query but might be needed elsewhere
    $num_seats = $_POST['seats'];
    $amount = $_POST['amount'];
    $user_id = $_SESSION['username']; // Assuming the user is logged in and their ID is stored in the session
    $show_id = $_SESSION['show']; // Assuming the selected show ID is stored in the session

    // Print all variables
    echo "<p>Theatre: " . $theater_id . "</p>";
    echo "Screen ID: " . htmlspecialchars($screen_id) . "<br>";
    echo "Date: " . htmlspecialchars($date) . "<br>";
    echo "Show Time: " . htmlspecialchars($show_time) . "<br>";
    echo "Number of Seats: " . htmlspecialchars($num_seats) . "<br>";
    echo "Amount: " . htmlspecialchars($amount) . "<br>";
    echo "User ID: " . htmlspecialchars($user_id) . "<br>";
    echo "Show ID: " . htmlspecialchars($show_id) . "<br>";

    // Check if the required fields are present
    if (!empty($theater_id) && !empty($screen_id) && !empty($date) && !empty($num_seats) && !empty($amount)) {
        // Insert booking details into the database
        $query = "INSERT INTO tbl_bookings (user_id, show_id, screen_id, ticket_date, no_seats, amount) 
                  VALUES ('$user_id', '$show_id', '$screen_id', '$date', '$num_seats', '$amount')";

        if (mysqli_query($con, $query)) {
            // Booking was successful
            $_SESSION['message'] = "Booking successful!";
            header('Location: confirmation.php'); // Redirect to a confirmation page
            exit;
        } else {
            // There was an error inserting the booking
            $_SESSION['error'] = "Error processing booking. Please try again.";
            // header('Location: booking.php');
            exit;
        }
    } else {
        // If some required fields are missing, set an error message
        $_SESSION['error'] = "All fields are required!";
        // header('Location: booking.php');
        exit;
    }
} else {
    // If the form was not submitted correctly, redirect back to the booking page
    // header('Location: booking.php');
    exit;
}
?>