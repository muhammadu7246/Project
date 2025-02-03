<?php
session_start();

include 'connection.php';

// Set session variables from GET parameters
$_SESSION['show'] = isset($_GET['show']) ? $_GET['show'] : null;
$_SESSION['movie'] = isset($_GET['movie']) ? $_GET['movie'] : null;
$_SESSION['theatre'] = isset($_GET['theatre']) ? $_GET['theatre'] : null;

// Check if 'username' is set in the session
if (isset($_SESSION['username'])) {
    // Fetch the show details from the database
    $s = mysqli_query($conn, "SELECT * FROM tbl_shows WHERE s_id='" . $_SESSION['show'] . "'");
    $shw = mysqli_fetch_array($s);

    // Fetch the theatre details based on the theatre ID from the show details
    $t = mysqli_query($conn, "SELECT * FROM tbl_theatre WHERE id='" . $shw['theatre_id'] . "'");
    $theatre = mysqli_fetch_array($t);

    // Fetch show time information based on the show ID
    $ttm = mysqli_query($conn, "SELECT * FROM tbl_show_time WHERE st_id='" . $shw['st_id'] . "'");
    $ttme = mysqli_fetch_array($ttm);

    // Fetch the screen details based on the screen ID from the show time
    $sn = mysqli_query($conn, "SELECT * FROM tbl_screens WHERE screen_id='" . $ttme['screen_id'] . "'");
    $screen = mysqli_fetch_array($sn);

    $av = mysqli_query($conn, "SELECT SUM(no_seats) FROM tbl_bookings WHERE show_id='" . $_SESSION['show'] . "' AND ticket_date='$date'");
    $avl = mysqli_fetch_array($av);


    if (isset($_GET['date'])) {
        $date = $_GET['date'];
    } else {
        if ($shw['start_date'] > date('Y-m-d')) {
            $date = date('Y-m-d', strtotime($shw['start_date'] . "-1 days"));
        } else {
            $date = date('Y-m-d');
        }
        $_SESSION['dd'] = $date;
    }



    ?>
    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from pixner.net/boleto/demo/movie-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:30:36 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

        <title>Boleto - Online Ticket Booking Website HTML Template</title>
        <style>
            td,th{
                color: #ffff;
            }
        </style>


    </head>

    <body>
        <!-- ==========Preloader========== -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ==========Preloader========== -->
        <!-- ==========Overlay========== -->
        <div class="overlay"></div>
        <a href="#0" class="scrollToTop">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- ==========Overlay========== -->

        <!-- ==========Header-Section========== -->
        <?php
        include('nav.php');
        ?>
        <!-- ==========Header-Section========== -->

        <!-- ==========Banner-Section========== -->
        <section class="details-banner hero-area bg_img seat-plan-banner"
            data-background="assets/images/banner/banner04.jpg">
            <div class="container">
                <div class="details-banner-wrapper">
                    <div class="details-banner-content style-two">
                        <h3 class="title">Venus</h3>
                        <div class="tags">
                            <a href="#0">City Walk</a>
                            <a href="#0">English - 2D</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Banner-Section========== -->

        <!-- ==========Page-Title========== -->
        <section class="page-title bg-one">
            <div class="container">
                <div class="page-title-area">
                    <div class="item md-order-1">
                        <a href="movie-ticket-plan.php" class="custom-button back-button">
                            <i class="flaticon-double-right-arrows-angles"></i>back
                        </a>
                    </div>
                    <div class="item date-item">
                        <span class="date">MON, SEP 09 2020</span>
                        <select class="select-bar">
                            <option value="sc1">09:40</option>
                            <option value="sc2">13:45</option>
                            <option value="sc3">15:45</option>
                            <option value="sc4">19:50</option>
                        </select>
                    </div>
                    <div class="item">
                        <h5 class="title">05:00</h5>
                        <p>Mins Left</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Page-Title========== -->

        <!-- ==========Movie-Section========== -->
        <div class="movie-facility padding-bottom padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        
                        <div class="checkout-widget checkout-contact">
                            <h5 class="title">booking summery</h5>
                            <form method="POST" class="checkout-contact-form">
                                <div class="form-group">
                                    <label for="">Theatre</label>
                                    <input readonly value="<?php echo $theatre['name']; ?>" type="text"
                                        placeholder="Theatre">
                                </div>
                                <div class="form-group">
                                    <label for="">Screen</label>
                                    <input readonly value="<?php echo $screen['screen_name']; ?>" type="text"
                                        placeholder="Screen">
                                </div>
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input readonly value="<?php echo date('d-M-Y', strtotime($date)); ?>" type="text"
                                        placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="">Show Time</label>
                                    <input readonly
                                        value="<?php echo date('h:i A', strtotime($ttme['start_time'])) . ' ' . $ttme['name']; ?>"
                                        type="text" placeholder="Show Time">
                                </div>

                                <!-- The number of seats input -->
                                <div class="form-group">
                                    <label for="seats">Number of Seats</label>
                                    <input type="number" required max="<?php echo $screen['seats'] - $avl[0]; ?>" min="1"
                                        name="seats" id="seats" class="form-control"
                                        value="<?php echo date('d-M-Y', strtotime($date)); ?>"
                                        placeholder="Number of Seats">
                                </div>

                                <!-- Amount -->
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input readonly id="amount" value="Rs <?php echo $screen['charge']; ?>" type="text"
                                        placeholder="Amount">
                                </div>

                                <!-- Hidden fields for screen, date, and amount -->
                                <input type="hidden" name="screen_id" value="<?php echo $screen['screen_id']; ?>">
                                <input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge']; ?>">
                                <input type="hidden" name="date" value="<?php echo $date; ?>">

                                <script type="text/javascript">
                                    // When the seat count changes, update the amount
                                    $('#seats').on('input', function () {
                                        var charge = <?php echo $screen['charge']; ?>;
                                        var seats = $(this).val();
                                        var amount = charge * seats;

                                        // Update the amount field and hidden field
                                        $('#amount').val("Rs " + amount);
                                        $('#hm').val(amount);
                                    });
                                </script>

                                <div class="form-group">

                                    <input type="submit" name="Submit" value="Confirm Booking" class="custom-button">

                                </div>
                            </form>

                            <?php
                            include 'connection.php';

                            // Check if the form was submitted
                            if (isset($_POST['Submit'])) {
                                // Retrieve form inputs
                                $screen_id = $_POST['screen_id'];
                                $amount = $_POST['amount'];
                                $date = $_POST['date'];
                                $seats = $_POST['seats'];
                                $theater_id = $_POST['theater_id']; // Added theater_id
                                $user_id = 1; // Example user ID, should be fetched from session or other source
                        
                                // Generate IDs and other variables
                                $book_id = uniqid('book_');
                                $ticket_id = uniqid('ticket_');
                                $t_id = uniqid('t_');
                                $show_id = 1; // Example show ID, should be fetched from form or other source
                                $status = 'confirmed'; // Example status
                        
                                // Prepare and execute the SQL statement
                                $stmt = $conn->prepare("
        INSERT INTO bookings (book_id, ticket_id, t_id, user_id, show_id, screen_id, theater_id, no_seats, amount, ticket_date, date, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE(), ?, ?)
    ");
                                $stmt->bind_param("ssiiiidsss", $book_id, $ticket_id, $t_id, $user_id, $show_id, $screen_id, $theater_id, $seats, $amount, $date, $status);

                                if ($stmt->execute()) {
                                    echo "Booking confirmed successfully!";
                                } else {
                                    echo "Error: " . $stmt->error;
                                }

                                // Close the statement and connection
                                $stmt->close();
                                $conn->close();
                            } else {
                                echo "Invalid request.";
                            }
                            ?>



                        </div>

                        
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- ==========Movie-Section========== -->

        <!-- ==========Newslater-Section========== -->
        <?php
        include('footer.php');
        ?>
        <!-- ==========Newslater-Section========== -->


        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/countdown.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/viewport.jquery.js"></script>
        <script src="assets/js/nice-select.js"></script>
        <script src="assets/js/main.js"></script>
    </body>


    <!-- Mirrored from pixner.net/boleto/demo/movie-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:30:37 GMT -->

    </html>
    <?php
} else {
    // Redirect to login page if 'username' is not set
    header('Location: login.php');
    exit(); // Ensure no further code is executed after the redirect
}
?>