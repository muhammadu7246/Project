<?php session_start();


include_once 'database.php';
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'Teacher') {
  # code...
  header('Location:./logout.php');
}
?>
<?php

$sid = $fname = $lname = $classroom = $dob = $gender = $address = $parent = " ";


if (isset($_GET['update'])) {
  $update = "SELECT * FROM student WHERE sid='" . $_GET['update'] . "'";
  $result = $conn->query($update);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $sid = $row['sid'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $classroom = $row['classroom'];
      $email = $row['email'];
      $dob = date_format(new DateTime($row['bday']), 'm/d/Y');
      //echo $dob;
      $gender = $row['gender'];
      $address = $row['address'];
      $parent = $row['parent'];

    }
  }
}

?>

<?php

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
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
              <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
              <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                <th>Father</th>
                <th>gender</th>
                <th>Date of birth</th>
                <th>Address</th>
                <th>Class</th>
                <th>E-mail</th>
                <th>Edit</th>
                <th>Delete</th>

                <!-- <th>img</th> -->


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

                  $sql = "SELECT * FROM student";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                      ?>

                    </td>
                    <td> <?php echo ($row["sid"]); ?> </td>
                    <td class="text-center"><img src="uploded_img/<?php echo($row['img']) ?>" alt="student"></td>
                    <td> <?php echo ($row["lname"]); ?> </td>
                    <td> <?php echo ($row["fname"]); ?> </td>
                    <td> <?php echo ($row["gender"]); ?> </td>
                    <td> <?php echo ($row["bday"]); ?> </td>
                    <td> <?php echo ($row["address"]); ?> </td>
                    <td> <?php echo ($row["classroom"]); ?> </td>
                    <td> <?php echo ($row["email"]); ?> </td>
                    <td>
                      <a href='all-student.php?update=".$row["sid"]."'>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="flaticon-more-button-of-three-dots"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                  </div>
                </td>
              </tr>




            </tbody>
          </table>
        </div>
        <div class="container">
          
include_once 'database.php';
if (!isset($_SESSION['user'])||$_SESSION['role']!='Teacher') {
  # code...
  header('Location:./logout.php');
}
?>
<?php

 $sid =$fname =$lname = $classroom = $dob = $gender = $address = $parent=" ";
              

if(isset($_GET['update'])){
  $update = "SELECT * FROM student WHERE sid='".$_GET['update']."'";
  $result = $conn->query($update);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sid = $row['sid'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $classroom = $row['classroom'];
$email = $row['email'];
                $dob = date_format(new DateTime($row['bday']),'m/d/Y');
                //echo $dob;
                $gender = $row['gender'];
                  $address = $row['address'];
                $parent=$row['parent'];
                
    }
}
}

?>
          <h1>Update:</h1>
          
          <form class="new-added-form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>First Name *</label>
                            <input type="text" placeholder="Name" name="name" class="form-control" value=<?php echo "'".$fname."'"; ?>>
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
                            <label>Address</label>
                            <input name="address" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone</label>
                            <input name="number" type="number" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>NIC NUMBER</label>
                            <input type="number" name="NIC_NUMBER" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Certificate</label>
                            <input type="text" name="Certificate" placeholder="" class="form-control">
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