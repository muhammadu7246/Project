<?php
session_start();
include "../conn.php";
include "../auth.php";

$receiver = $_SESSION['username'];
$channel = $_POST['channel'];

// Update call request status to 'accepted'
$sql = "UPDATE call_requests SET status='accepted' WHERE receiver='$receiver' AND channel='$channel'";
mysqli_query($conn, $sql);

// Send response
echo json_encode(['channel' => $channel]);
?>
