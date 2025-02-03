<?php
// view_friends.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = intval($_GET['user_id']);

    $sql = "SELECT u.username 
            FROM friends f
            JOIN users u ON (f.user1_id = u.id OR f.user2_id = u.id)
            WHERE (f.user1_id = ? OR f.user2_id = ?) AND u.id != ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $user_id, $user_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h3>Friends:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . htmlspecialchars($row['username']) . "</p>";
        }
    } else {
        echo "You have no friends.";
    }

    $stmt->close();
    $conn->close();
}
?>
