<?php
// view_requests.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = intval($_GET['user_id']);

    $sql = "SELECT fr.id, u.username AS sender 
            FROM friend_requests fr
            JOIN users u ON fr.sender_id = u.id
            WHERE fr.receiver_id = ? AND fr.status = 'pending'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h3>Pending Friend Requests:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>Request from: " . htmlspecialchars($row['sender']) . " 
                  <form action='accept_request.php' method='post' style='display:inline;'>
                    <input type='hidden' name='request_id' value='" . $row['id'] . "'>
                    <input type='submit' value='Accept'>
                  </form>
                  <form action='reject_request.php' method='post' style='display:inline;'>
                    <input type='hidden' name='request_id' value='" . $row['id'] . "'>
                    <input type='submit' value='Reject'>
                  </form>
                  </p>";
        }
    } else {
        echo "No pending friend requests.";
    }

    $stmt->close();
    $conn->close();
}
?>
