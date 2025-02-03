<?php
    include "conn.php";
    include "auth.php";
	if(isset($_SESSION['room']))
	{
		$room = $_SESSION['room'];
        if(isset($_SESSION['folder']))
        {
            $folder = $_SESSION['folder'];
        }
        else{
            $folder = "asset/user.png";
        }
        $room = $_SESSION['room'];
        $chat = $_POST['chat'];
        $sql = "INSERT INTO `$room` (`username`, `dp`, `msg`, `date`) VALUES ('$username', '$folder', '$chat', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            echo "Database Failure! Message not send";
        }
    }
    
?>