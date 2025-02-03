<?php
// reject_request.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = intval($_POST['request_id']);

    $sql = "UPDATE friend_requests SET status = 'rejected' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $request_id);
    if ($stmt->execute()) {
        echo "Friend request rejected.";
    } else {
        echo "Error rejecting request.";
    }

    $stmt->close();
    $conn->close();
}
?>
