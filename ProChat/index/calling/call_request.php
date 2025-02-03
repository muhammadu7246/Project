<?php
session_start();
include "../conn.php";
include "../auth.php";

$caller = $_SESSION['username'];
$receiver = $_POST['receiver']; // User being called

// Generate a unique channel name for this call
$channel = uniqid("call_", true);

// Store call request details in the database
$sql = "INSERT INTO call_requests (caller, receiver, channel, status) VALUES ('$caller', '$receiver', '$channel', 'pending')";
mysqli_query($conn, $sql);

// Send response
echo json_encode(['channel' => $channel]);
?>
