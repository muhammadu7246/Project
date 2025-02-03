<?php
include ('ad_header.php');

?>
<!-- Page Area Start Here -->
<?php
include ('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Guardian = $_POST['Guardian'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $section = $_POST['group'];
    $Religion = $_POST['Religion'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $phone = $_POST['number'];
    $file_name = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];
    $UP_Loaded_img = move_uploaded_file($tmp_file, "uploded_img/". $file_name);
    $insert = "INSERT INTO `student_detail`(`id`, `name`, `gender`, `class`, `section`, `Parents`, `Address`, 
    `Date Of Birth`, `Phone`, `E-mail`, `img`) VALUES 
    ('','" . $name . "','" . $gender . "','" . $class . "','" . $section . "','" . $Guardian . "','" . $address . "','" . $date . "','" . $phone . "','" . $email . "',
        '" . $file_name . "')";

    $result = mysqli_query($conn, $insert);

} else {
}

?>
<div class="dashboard-page-one">
    <?php
    include ('ad_Sidebar.php');
    ?>
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Student</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Add New Student</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Students</h3>
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
                <form class="new-added-form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>First Name *</label>
                            <input type="text" placeholder="Name" name="name" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Guardian Name *</label>
                            <input type="text" placeholder="Name" name="Guardian" class="form-control">
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select class="select2" name="gender">
                                <option value="">Please Select Gender *</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="Other">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date Of Birth *</label>
                            <input type="text" name="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker">
                            <i class="far fa-calendar-alt"></i>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Section</label>
                            <select name="group" class="select2">
                                <option value="">Select Group *</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>

                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Religion *</label>
                            <select name="Religion" class="select2">
                                <option value="">Select Religion *</option>
                                <option value="ISLAM">Islam</option>
                                <option value="HINDU">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddish">Buddish</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class *</label>
                            <select name="class" class="select2">
                                <option value="">Select Class *</option>
                                <option value="PLAY">Play</option>
                                <option value="Nursery">Nursery</option>
                                <option value="ONE">one</option>
                                <option value="TWO">TWO</option>
                                <option value="THREE">THREE</option>
                                <option value="FOUR">FOUR</option>
                                <option value="FIVE">FIVE</option>
                                <option value="SIX">SIX</option>
                                <option value="SEVEN">SEVEN</option>
                                <option value="EIGHT">EIGHT</option>
                                <option value="NINE">NINE</option>
                                <option value="METRIC">METRIC</option>

                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Address</label>
                            <input name="address" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone</label>
                            <input name="number" type="number" placeholder="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                            <input type="file" name="file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="submit"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
        <!-- Add New Teacher Area End Here -->
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
<!-- Select 2 Js -->
<script src="js/select2.min.js"></script>
<!-- Date Picker Js -->
<!-- <script src="js/datepicker.min.js"></script> -->
<!-- Smoothscroll Js -->
<script src="js/jquery.smoothscroll.min.js"></script>
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>

</html>