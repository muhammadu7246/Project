<?php
include ('ad_header.php');
?>
<td>
    <?php ?>

</td>
<!-- Page Area Start Here -->
<div class="dashboard-page-one">
    <?php
    include ('ad_Sidebar.php');
    ?>
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Teacher</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Teacher Details</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Details Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>About Me</h3>
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
                <?php 
                include ('connection.php');
                $id = $_GET['id'];
                $select = "SELECT * FROM `teacher_details` WHERE id= '".$id."' ";
                $result = mysqli_query($conn, $select);
                
                
                while($row = mysqli_fetch_array($result)){
                    ?>
                   
                
                
                <div class="single-info-details">
                    <div class="item-img">
                        <img src="uploded_img/<?php echo $row['img'];?>" style="border-radius: 3%;" alt="student">
                    </div>
                    <div class="item-content">
                        <div class="header-inline item-header">
                            <h3 class="text-dark-medium font-medium"> <?php echo $row['name'];?></h3>
                            <div class="header-elements">
                                <ul>
                                    <li><a href="#"><i class="far fa-edit"></i></a></li>
                                    <li><a href="#"><i class="fas fa-print"></i></a></li>
                                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                            taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.</p>
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td class="font-medium text-dark-medium">Jessia Rose</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td class="font-medium text-dark-medium">Female</td>
                                    </tr>
                                    <tr>
                                        <td>Father Name:</td>
                                        <td class="font-medium text-dark-medium">Steve Jones</td>
                                    </tr>
                                    <tr>
                                        <td>Mother Name:</td>
                                        <td class="font-medium text-dark-medium">Naomi Rose</td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth:</td>
                                        <td class="font-medium text-dark-medium">07.08.2016</td>
                                    </tr>
                                    <tr>
                                        <td>Religion:</td>
                                        <td class="font-medium text-dark-medium">Islam</td>
                                    </tr>
                                    <tr>
                                        <td>Father Occupation:</td>
                                        <td class="font-medium text-dark-medium">Graphic Designer</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Admission Date:</td>
                                        <td class="font-medium text-dark-medium">07.08.2019</td>
                                    </tr>
                                    <tr>
                                        <td>Class:</td>
                                        <td class="font-medium text-dark-medium">2</td>
                                    </tr>
                                    <tr>
                                        <td>Section:</td>
                                        <td class="font-medium text-dark-medium">Pink</td>
                                    </tr>
                                    <tr>
                                        <td>Roll:</td>
                                        <td class="font-medium text-dark-medium">10005</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
        <!-- Student Details Area End Here -->
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
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>

</html>