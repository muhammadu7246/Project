<?php
session_start();
if (!isset($_SESSION['message'])) {
    header('Location: booking.php'); // Redirect to booking page if no message
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1><?php echo $_SESSION['message']; ?></h1>
    <p>Your booking has been successfully completed.</p>

    <!-- Clear the session message -->
    <?php unset($_SESSION['message']); ?>
</body>
</html>
