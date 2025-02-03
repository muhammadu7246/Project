<?php include ('verifed.php'); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:29:21 GMT -->
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
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


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
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner01.jpg"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                        <b>Sport</b>
                    </span>
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="assets/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome to Boleto </h6>
                            <h3 class="title">what are you looking for</h3>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-15">
                        <ul class="tab-menu ticket-tab-menu">
                            
                            <li>
                                <div class="tab-thumb">
                                    <img src="assets/images/ticket/ticket-tab01.png" alt="ticket">
                                </div>
                                <span>movie</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <a href="sport-page3.html">
                                    <img src="assets/images/ticket/ticket-tab03.png" alt="ticket">
                                </a>
                                </div>
                            
                                <span>sports</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search for Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">islamabad</option>
                                    <option value="dhaka">karachi</option>
                                    <option value="rosario">lahore</option>
                                    <option value="madrid">peshawar</option>
                                    <option value="koltaka">quetta</option>
                                    <option value="rome">hyderabad</option>
                                    <option value="khoksa">multan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2024</option>
                                    <option value="26-12-19">24/10/2024</option>
                                    <option value="26-12-19">25/10/2024</option>
                                    <option value="26-12-19">26/10/2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">cinema</span>
                                <select class="select-bar">
                                    <option value="Awaken">the arena cinema 3d</option>
                                    <option value="dhaka">nuplex cinema</option>
                                    <option value="rosario">venus cinema</option>
                                    <option value="madrid">cinepax cinema</option>
                                    <option value="koltaka">afshan cinema</option>
                                    
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search for Events">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">islamabad</option>
                                    <option value="dhaka">karachi</option>
                                    <option value="rosario">lahore</option>
                                    <option value="madrid">peshawar</option>
                                    <option value="koltaka">quetta</option>
                                    <option value="rome">hyderabad</option>
                                    <option value="khoksa">multan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2024</option>
                                    <option value="26-12-19">24/10/2024</option>
                                    <option value="26-12-19">25/10/2024</option>
                                    <option value="26-12-19">26/10/2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">stadium</span>
                                <select class="select-bar">
                                    <option value="angular">angular</option>
                                    <option value="startup">startup</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="Last-First">Last-First</option>
                                    <option value="wish">wish</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Sports">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">islamabad</option>
                                    <option value="dhaka">karachi</option>
                                    <option value="rosario">lahore</option>
                                    <option value="madrid">peshawar</option>
                                    <option value="koltaka">quetta</option>
                                    <option value="rome">hyderabad</option>
                                    <option value="khoksa">multan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2020</option>
                                    <option value="26-12-19">24/10/2020</option>
                                    <option value="26-12-19">25/10/2020</option>
                                    <option value="26-12-19">26/10/2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">sports</span>
                                <select class="select-bar">
                                    <option value="football">football</option>
                                    <option value="cricket">cricket</option>
                                    <option value="cabadi">cabadi</option>
                                    <option value="madrid">madrid</option>
                                    <option value="gadon">gadon</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Main-Section========== -->
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
                <div class="col-lg-9">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">movies</h2>
                            <a class="view-all" href="movie-grid.html">View All</a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.html">
                                            <img src="assets/images/movie/movie01.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.html">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <a href="movie-ticket-plan.html" class="custom-button">book your ticket</a>  
                                            </li>
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.html">
                                            <img src="assets/images/movie/movie02.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.html">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <a href="movie-ticket-plan.html" class="custom-button">book your ticket</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="movie-details.html">
                                            <img src="assets/images/movie/movie03.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="movie-details.html">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <a href="movie-ticket-plan.html" class="custom-button">book your ticket</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="article-section">
                        <div class="section-header-1">
                            <h2 class="title">sports</h2>
                            <a class="view-all" href="sports.html">View All</a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="assets/images/sports/sports01.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <a href="sports-ticket.html" class="custom-button">book your ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="assets/images/sports/sports02.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world cricket league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <a href="sports-ticket.html" class="custom-button">book your ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="assets/images/sports/sports03.jpg" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">basket ball tournament 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <a href="sports-ticket.html" class="custom-button">book your ticket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Main-Section========== -->

    <!-- ==========Newslater-Section========== -->
   <?php
   include('footer.php');
   ?>
    <!-- ==========Newslater-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/heandline.js"></script>
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


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 11:29:51 GMT -->
</html>