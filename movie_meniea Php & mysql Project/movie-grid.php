<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/movie-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:30:21 GMT -->

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

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Boleto - Online Ticket Booking Website HTML Template</title>


</head>

<body>

    <!-- ==========Preloader========== -->
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
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

    <?php
    include('movieslider.php');
    ?>

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                    <div class="widget-1 widget-facility">
                        <div class="widget-1-body">
                            <ul>

                            </ul>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="assets/images/sidebar/banner/9668f8e1f4fd6ddce8f85511a5a22671.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                    <div class="widget-1 widget-trending-search">
                        <h3 class="title">Trending Searches</h3>
                        <div class="widget-1-body">
                            <ul>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">mars</a>
                                    </h6>
                                    <p>Movies</p>
                                </li>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">alone</a>
                                    </h6>
                                    <p>Movies</p>
                                </li>

                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">NBA Games 2020</a>
                                    </h6>
                                    <p>Sports</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="assets/images/sidebar/banner/woman-sports-wear-fashion-sale-shop-store-ad-design-template-8843cd2ac8f9fcd7d9911d3afd7a3e10_screen.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                // Database connection
                include('connection.php');

                // Fetch movie data
                $movieQuery = "SELECT * FROM movies";
                $movieResult = $conn->query($movieQuery);

                // Fetch sports data
                //$sportsQuery = "SELECT * FROM sports";
                //$sportsResult = $conn->query($sportsQuery);
                ?>

                <div class="col-lg-9">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">Movies</h2>
                            <a class="view-all" href="movie-grid.php">View All</a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <?php while ($movie = $movieResult->fetch_assoc()) { ?>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <?php
                                            echo '
                        <a href="movie-details.php?id=' . $movie['id'] . '">
                        
                        ';
                                            ?>
                                            <img src="data:image/jpeg;base64,<?= base64_encode($movie['image']); ?>" alt="<?= $movie['title']; ?>">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="movie-details.php"><?= $movie['title']; ?></a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <a href="movie-ticket-plan.php" class="custom-button">Book your ticket</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
   
                        </div>
                    </div>
    </section>
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


<!-- Mirrored from pixner.net/boleto/demo/movie-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:30:24 GMT -->

</html>