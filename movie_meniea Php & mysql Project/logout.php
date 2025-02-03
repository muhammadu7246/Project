
<?php
include ('connect.php');
session_start();
session_unset();

header("Location: login.php");
session_destory();
?>