<?php
    include('conn.php');
    extract($_POST);
    mysqli_query($con,"insert into tbl_show_time values(NULL,'$screen','$sname','$time')");
?>