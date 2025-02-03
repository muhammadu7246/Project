<?php
// Include your database connection
include 'db_conn.php';

// Check if email is provided
if (isset($_GET['email']) && !empty($_GET['email'])) {
    $searchEmail = mysqli_real_escape_string($conn, $_GET['email']);
    $findSql = "SELECT * FROM `login` WHERE `email` LIKE '%$searchEmail%';";
} else {
    $findSql = "SELECT * FROM `login`;";
}

$result = mysqli_query($conn, $findSql);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $friendUsername = $data['username'];
        $friendEmail = $data['email'];
        $friendMobile = $data['mobile'];
        $target = $friendUsername . $username;

        // Get the user image
        $getImg = "SELECT * FROM `dp` WHERE `username` = '$friendUsername';";
        $imgResult = mysqli_query($conn, $getImg);
        $folder = (mysqli_num_rows($imgResult) > 0) ? mysqli_fetch_array($imgResult)['folder'] : "asset/user.png";

        // Output the user item
        echo "
        <div class='item'>
            <a href='create.php?id=$target' class='avatar'>
                <img src='$folder' alt />
                <span class='status away'></span>
            </a>
            <div class='info'>
                <h6 class='title'>
                    <a href='create.php?id=$target'>$friendUsername</a>
                </h6>
                <p>$friendEmail</p>
            </div>
            <div class='action'>
                <div class='dropdown'>
                    <button type='button' class='icon' data-bs-toggle='dropdown' aria-expanded='false'>
                        <i class='feather-more-vertical'></i>
                    </button>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='#'><i class='feather-share-2'></i>Share</a></li>
                        <li><a class='dropdown-item' href='#'><i class='feather-slash'></i>Block</a></li>
                        <li><hr class='dropdown-divider' /></li>
                        <li><a class='dropdown-item' href='#'><i class='feather-trash-2'></i>Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>";
    }
} else {
    echo "<p>No contacts found with that email.</p>";
}
?>
