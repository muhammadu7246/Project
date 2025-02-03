<?php
include ('ad_header.php');
?>
<!-- Page Area Start Here -->
<div class="dashboard-page-one">
    <?php
    include ('ad_Sidebar.php');
    ?>
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Admin Dashboard</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Student</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
            <!-- Student Info Area Start Here -->
            <div class="col-4-xxxl col-12">
                <div class="card dashboard-card-ten">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
            <!-- Student Info Area End Here -->
            <div class="col-8-xxxl col-12">
                <div class="row">
                    <!-- Summery Area Start Here -->
                    <div class="col-lg-4">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-magenta">
                                        <i class="flaticon-shopping-list text-magenta"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Notification</div>
                                        <div class="item-number"><span class="counter" data-num="12">12</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-calendar text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Events</div>
                                        <div class="item-number"><span class="counter" data-num="06">06</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-percentage-discount text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Attendance</div>
                                        <div class="item-number"><span class="counter"
                                                data-num="94">94</span><span>%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Summery Area End Here -->
                    <!-- Exam Result Area Start Here -->
                    <div class="col-lg-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Student</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-box-wrap">
                                    <form class="search-form-box">
                                        <div class="row gutters-8">
                                            <div class="col-lg-4 col-12 form-group">
                                                <input type="text" placeholder="Search by Exam ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Subject ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="dd/mm/yyyy" class="form-control">
                                            </div>
                                            <div class="col-lg-2 col-12 form-group">
                                                <button type="submit"
                                                    class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive result-table-box">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll">
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    
                                                    <th>name</th>
                                                    <th>Father</th>
                                                    <th>gender</th>
                                                    <th>Date of birth</th>
                                                    <th>Address</th>
                                                    <th>Class</th>
                                                    <th>E-mail</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                        <?php
                                                        include ('database.php');
                                                        $sql = "SELECT * FROM student";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>

                                                            </td>
                                                            <td> <?php echo ($row["sid"]); ?> </td>
                                                            <td class="text-center"><img
                                                                    src="uploded_img/<?php echo ($row['img']) ?>" alt="student">
                                                            </td>
                                                            <td> <?php echo ($row["lname"]); ?> </td>
                                                            <td> <?php echo ($row["fname"]); ?> </td>
                                                            <td> <?php echo ($row["gender"]); ?> </td>
                                                            <td> <?php echo ($row["bday"]); ?> </td>
                                                            <td> <?php echo ($row["address"]); ?> </td>
                                                            <td> <?php echo ($row["classroom"]); ?> </td>
                                                            <td> <?php echo ($row["email"]); ?> </td>
                                                            <td>
                                                                <a href='all-student.php?update=". $row["sid"]."'>
                                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn btn-danger">Delete</button>

                                                            </td>
                                                            <?php
                                                            }

                                                        }

                                                        ?>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exam Result Area End Here -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4-xxxl col-xl-6 col-12">
                <div class="card dashboard-card-three">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Attendence</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="doughnut-chart-wrap">
                            <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                        </div>
                        <div class="student-report">
                            <div class="student-count pseudo-bg-blue">
                                <h4 class="item-title">Absent</h4>
                                <div class="item-number">28.2%</div>
                            </div>
                            <div class="student-count pseudo-bg-yellow">
                                <h4 class="item-title">Present</h4>
                                <div class="item-number">65.8%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4-xxxl col-xl-6 col-12">
                <div class="card dashboard-card-thirteen">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Event Calender</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="calender-wrap">
                            <div id="fc-calender" class="fc-calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4-xxxl col-12">
                <div class="card dashboard-card-six">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-17">
                            <div class="item-title">
                                <h3>Notifications</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="notice-box-wrap">
                            <div class="notice-list">
                                <div class="post-date bg-skyblue">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend
                                        lectus
                                        sed maximus mi faucibusnting.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-yellow">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-pink">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed
                                        mim
                                        us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-skyblue">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                        printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-yellow">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                            <div class="notice-list">
                                <div class="post-date bg-pink">16 June, 2019</div>
                                <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area Start Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                    href="#">PsdBosS</a></div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
</div>
<!-- Page Area End Here -->
</div>
<!-- jquery-->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Counterup Js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Moment Js -->
<script src="js/moment.min.js"></script>
<!-- Waypoints Js -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Full Calender Js -->
<script src="js/fullcalendar.min.js"></script>
<!-- Chart Js -->
<script src="js/Chart.min.js"></script>
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>

</html>