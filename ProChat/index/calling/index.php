<?php
error_reporting(0);

include "../conn.php";
include "../auth.php";

// Start session
// session_start();

$room = $_SESSION['room'];
$readSql = "SELECT DISTINCT username FROM `$room`";
$readResult = mysqli_query($conn, $readSql);

$usernames = [];
if (mysqli_num_rows($readResult) > 0) {
    while ($data = mysqli_fetch_assoc($readResult)) {
        $usernames[] = $data['username'];
    }
}

// Print usernames
if (count($usernames) == 2) {
    $user1 = htmlspecialchars($usernames[0]);
    $user2 = htmlspecialchars($usernames[1]);
} else {
    echo "There are not exactly two users in this conversation.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ivy Streams</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>
    <?php 
    echo $user1;
    ?>

    <button id="join-btn">Join Stream</button>

    <div id="stream-wrapper">
        <div id="video-streams"></div>

        <div id="stream-controls">
            <button id="leave-btn">Leave Stream</button>
            <button id="mic-btn">Mic On</button>
            <button id="camera-btn">Camera on</button>
        </div>
    </div>

</body>
<script src="https://download.agora.io/sdk/release/AgoraRTC_N.js"></script>
<script src="AgoraRTC_N-4.7.3.js"></script>
<script src='main.js'></script>

</html>