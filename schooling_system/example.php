<?php
include ('connection.php');
$select = " SELECT * from `student_detail`";
$result = mysqli_query($conn, $select);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <img src="img/<?php echo $row['img']; ?>" width="200px" alt="">
    <?php
}
?>