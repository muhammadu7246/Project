<?php 
// if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} 
?>
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
            <h3>Students</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>All Students</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>All Students Data</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <form class="mg-b-20">
                    <div class="row gutters-8">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by Roll ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by Name ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by Class ..." class="form-control">
                        </div>
                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                        </div>
                    </div>
                </form>
                
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">Roll</label>
                                    </div>
                                </th>
                               
Full texts
<th>id</th>
<th>name</th>
<th>Guardian</th>
<th>Phone</th>
<th>Address</th>
<th>gender</th>
<th>Date of Birth</th>
<th>E mail</th>
<th>NIC number</th>
<th>Certificate</th>
<th>Religion</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
<!-- <th>img</th> -->
	

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                include ('connection.php');
                $select = "SELECT * FROM `teacher_details`";
                $result = mysqli_query($conn, $select);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
 <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label"><?php echo $row['id']; ?></label>
                                    </div>
                                </td>
                                <td class="text-center"><img src="uploded_img/<?php echo $row['img']; ?>" alt="student"></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['guardian']; ?></td>
                                <td><?php echo $row['Phone']; ?></td>
                                <td><?php echo $row['Address']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['Date_Of_Birth']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['NIC_num']; ?></td>
                                <td><?php echo $row['certificate']; ?></td>
                                <td><?php echo $row['Religion']; ?></td>
                                <td><button type="button" class="btn btn-primary">
                                    <a href="teacher-details.php?id=<?php echo($row['id']);?>">View</a></button></td>
                                <td><button type="button" class="btn btn-primary">Edit</button></td>
                                <td><button type="button" class="btn btn btn-danger">Delete</button></td>
                               
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
                <?php

                }
                ?>
                           
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Student Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                    href="#">PsdBosS</a></div>
        </footer>
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
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>

</html>