<?php
// send_request.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender_id = intval($_POST['sender_id']);
    $receiver_id = intval($_POST['receiver_id']);

    if ($sender_id === $receiver_id) {
        die("You cannot send a friend request to yourself.");
    }

    // Check if request already exists
    $sql = "SELECT * FROM friend_requests WHERE sender_id = ? AND receiver_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $sender_id, $receiver_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Friend request already sent.";
    } else {
        $sql = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $sender_id, $receiver_id);
        if ($stmt->execute()) {
            echo "Friend request sent.";
        } else {
            echo "Error sending request.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
