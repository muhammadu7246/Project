<?php
// accept_request.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = intval($_POST['request_id']);

    // Start a transaction
    $conn->begin_transaction();
    try {
        // Update request status to accepted
        $sql = "UPDATE friend_requests SET status = 'accepted' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $request_id);
        $stmt->execute();

        // Add to friends table
        $sql = "INSERT INTO friends (user1_id, user2_id) 
                SELECT sender_id, receiver_id FROM friend_requests WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $request_id);
        $stmt->execute();

        // Commit transaction
        $conn->commit();
        echo "Friend request accepted.";
    } catch (Exception $e) {
        // Rollback transaction on error
        $conn->rollback();
        echo "Error accepting request.";
    }

    $stmt->close();
    $conn->close();
}
?>
