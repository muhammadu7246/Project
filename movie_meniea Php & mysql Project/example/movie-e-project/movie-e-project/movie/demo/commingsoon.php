<?php 
include('header.php');
include('connect.php');
$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_GET['id']."'AND release_date > now()");
$movie=mysqli_fetch_array($qry2);




// Check if 'id' is set in the GET parameters
//  if (isset($_GET['id'])) {
//    $movie_id = $_GET['id'];

//     // Coming Soon movies ke liye SQL query
//     $qry2 = mysqli_query($con, "SELECT * FROM tbl_movie WHERE movie_id='" . $movie_id . "' AND release_date > now()");
    
//     // Check if the movie is found
//     if (mysqli_num_rows($qry2) > 0) {
//         $movie = mysqli_fetch_array($qry2);
//     } else {
//         echo "<p class='text-center' style='color:white;'>Movie not found or not coming soon!</p>";
//         include('footer.php');
//         exit();
//     }
// } else {
//     echo "<p class='text-center ' style='color:white; font-size:25px'>Invalid movie ID!</p>";
//     include('footer.php');
//     exit();
// }
?>

<div class="content">
    <div class="wrap">
        <div class="content-top">
            <div class="section group">
                <div class="about span_1_of_2 ">    
                    <h1 style="color:white; font-size:15px;" class="text-center mt-6"><?php echo htmlspecialchars($movie['movie_name']); ?></h1>    
                    <div class="about-top">    
                        <div class="grid images_3_of_2">
                            <img src="<?php echo htmlspecialchars($movie['image']); ?>" alt="" width="100px" height="100px">
                        </div>
                        <div class="desc span_3_of_2">
                            <p class="p-link" style="font-size:15px"><b>Cast: </b><?php echo htmlspecialchars($movie['cast']); ?></p>
                            <p class="p-link" style="font-size:15px"><b>Release Date: </b><?php echo date('d-M-Y', strtotime($movie['release_date'])); ?></p>
                            <p style="font-size:15px"><?php echo htmlspecialchars($movie['desc']); ?></p>
                            <a href="<?php echo htmlspecialchars($movie['video_url']); ?>" target="_blank" class="watch_but" style="text-decoration:none;">Watch Trailer</a>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <?php 
                    // Future shows ke liye query
                    $s = mysqli_query($con, "SELECT DISTINCT theatre_id FROM tbl_shows WHERE movie_id='" . $movie['movie_id'] . "' AND show_date >= CURDATE()");
                    if (mysqli_num_rows($s)) {
                    ?>
                    <table class="table table-hover table-bordered text-center">
                        <h3 style="color:#444;" class="text-center">Available Shows</h3>

                        <thead>
                            <tr>
                                <th class="text-center" style="font-size:15px;"><b>Theatre</b></th>
                                <th class="text-center" style="font-size:15px;"><b>Show Timings</b></th>
                            </tr>
                        </thead>
                        <?php   
                        while ($shw = mysqli_fetch_array($s)) {
                            $t = mysqli_query($con, "SELECT * FROM tbl_theatre WHERE id='" . $shw['theatre_id'] . "'");
                            $theatre = mysqli_fetch_array($t);
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($theatre['name']) . ", " . htmlspecialchars($theatre['place']); ?>
                                </td>
                                <td>
                                    <?php 
                                    $tr = mysqli_query($con, "SELECT * FROM tbl_shows WHERE movie_id='" . $movie['movie_id'] . "' AND theatre_id='" . $shw['theatre_id'] . "' AND show_date >= CURDATE()");
                                    while ($shh = mysqli_fetch_array($tr)) {
                                        $ttm = mysqli_query($con, "SELECT * FROM tbl_show_time WHERE st_id='" . $shh['st_id'] . "'");
                                        $ttme = mysqli_fetch_array($ttm);
                                    ?>
                                    <a href="check_login.php?show=<?php echo $shh['s_id']; ?>&movie=<?php echo $shh['movie_id']; ?>&theatre=<?php echo $shw['theatre_id']; ?>"><button class="btn btn-default"><?php echo date('h:i A', strtotime($ttme['start_time'])); ?></button></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    } else {
                    ?>
                    <h3 style="color:white; font-size:20px;" class="text-center">Currently, there are no shows available!</h3>
                    <p class="text-center mb-5" style="font-size:20px;">Please check back later!</p>
                    <?php
                    }
                    ?>
                </div>            
            </div>
            <div class="clear"></div>        
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
