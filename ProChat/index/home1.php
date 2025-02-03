<?php
include "conn.php";
include "auth.php";

if (!isset($_SESSION['room'])) {
    // $room = $username . "bot";
    // $sql = "CREATE TABLE `epiz_27865341_user`.`$room` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL, `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = MyISAM;";
    $sql = "CREATE TABLE `user`.`$room` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL,  `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['room'] = $room;
        // header("Location:bot.php");
    } else {
        $_SESSION['room'] = $room;
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $sql = "CREATE TABLE `epiz_27865341_user`.`$id` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL, `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = MyISAM;";
    $sql = "CREATE TABLE `user`.`$id` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL,  `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['room'] = $id;
    } else {
        $_SESSION['room'] = $id;
    }
}
$room = $_SESSION['room'];
if (isset($_SESSION['folder'])) {
    $folder = $_SESSION['folder'];
} else {
    $folder = "asset/user.png";
}
$finalName = str_replace($username, "", $_SESSION['room']);
$getImg = "SELECT * FROM `dp` WHERE `username` = '$finalName';";
$imgResult = mysqli_query($conn, $getImg);
if (mysqli_num_rows($imgResult) > 0) {
    $imgData = mysqli_fetch_array($imgResult);
    $friendImg = $imgData['folder'];
} else {
    $friendImg = "asset/user.png";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content />
    <meta name="keywords" content />

    <title>Skychat - Chat App HTML5 Template</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/feather.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <main class="main-layout">
        <div class="container1">
            <div class="row">
                <div class="col-md-4">
                    <div class="layout-wrapper">
                        <!-- //////////////   side-menu ////////////////////// -->
                        <div class="side-menu">
                            <div class="nav-brand">
                                <a class="logo" href="hatDisplay.php">

                                    <img src="assets/img/logo/favicon.png" alt="logo" /></a>
                            </div>

                            <ul class="nav flex-column nav-pills mb-3" role="tablist">
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Chat">
                                    <a href="#" class="nav-link active" id="pills-sm-tab1" data-bs-toggle="pill"
                                        data-bs-target="#pills-sm1" role="tab" aria-controls="pills-sm1"
                                        aria-selected="true">
                                        <i class="feather-message-circle icon"></i><span
                                            class="nav-active-shape"></span>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Friends">
                                    <a href="#" class="nav-link" id="pills-sm-tab3" data-bs-toggle="pill"
                                        data-bs-target="#pills-sm3" role="tab" aria-controls="pills-sm3"
                                        aria-selected="false">
                                        <i class="feather-users icon"></i><span class="nav-active-shape"></span>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="group">
                                    <a href="#" class="nav-link" id="pills-sm-tab4" data-bs-toggle="pill"
                                        data-bs-target="#pills-sm4" role="tab" aria-controls="pills-sm4"
                                        aria-selected="false">
                                        <i class="feather-users icon"></i><span class="nav-active-shape"></span>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                                    <a href="#" class="nav-link" id="pills-sm-tab5" data-bs-toggle="pill"
                                        data-bs-target="#pills-sm5" role="tab" aria-controls="pills-sm5"
                                        aria-selected="false">
                                        <i class="feather-user icon"></i><span class="nav-active-shape"></span>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Help">
                                    <a href="#" class="nav-link" id="pills-sm-tab7" data-bs-toggle="pill"
                                        data-bs-target="#pills-sm7" role="tab" aria-controls="pills-sm7"
                                        aria-selected="false">
                                        <i class="feather-help-circle icon"></i><span class="nav-active-shape"></span>
                                    </a>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Login">
                                    <a href="login.html" class="nav-link"><i class="feather-lock icon"></i></a>
                                </li>
                            </ul>

                            <div class="account">
                                <div class="color-mode theme-mode-control">
                                    <a href="#" class="light-btn" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Light"><i class="feather-sun"></i></a>
                                    <a href="#" class="dark-btn" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Dark"><i class="feather-moon"></i></a>
                                </div>

                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="avatar">
                                            <img src="<?php echo $folder; ?>" alt />
                                            <span class="status online"></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="login.html"><i
                                                    class="feather-log-in"></i>Login</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="register.html"><i
                                                    class="feather-user-plus"></i>Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="forgot-password.html"><i
                                                    class="feather-key"></i>Forgot
                                                Password</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="lock-screen.html"><i
                                                    class="feather-lock"></i>Lock
                                                Screen</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="feather-log-out"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- //////////////   side-menu ////////////////////// -->


                        <!-- //////////////   side-menu-tab ////////////////////// -->
                        <div class="side-menu-tab">
                            <div class="tab-content">

                                <div class="tab-pane chat fade show active" id="pills-sm1" role="tabpanel"
                                    aria-labelledby="pills-sm-tab1" tabindex="0">
                                    <div class="side-menu-content">
                                        <div class="side-menu-header">
                                            <h2 class="title"><?php echo $_SESSION['username']; ?></h2>
                                            <br>
                                        </div>
                                        <p>Chat</p>

                                        <div class="side-menu-search">
                                            <form action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search users or messages" />
                                                    <span class="input-group-text"><i class="feather-search"></i></span>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="user-status">
                                            <div class="sub-header">
                                                <h5 class="sub-title">Friends</h5>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="feather-more-horizontal"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="feather-eye-off"></i>Hide</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="feather-users"></i>Active</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="status-slider owl-carousel owl-theme">
                                                <?php
                                                $findSql = "SELECT * FROM `login`;";
                                                $result = mysqli_query($conn, $findSql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($data = mysqli_fetch_assoc($result)) {

                                                        $friendUsername = $data['username'];
                                                        $friendEmail = $data['email'];
                                                        $friendMobile = $data['mobile'];
                                                        $target = $friendUsername . $username;
                                                        if ($friendUsername != $username) {
                                                            $getImg = "SELECT * FROM `dp` WHERE `username` = '$friendUsername';";
                                                            $imgResult = mysqli_query($conn, $getImg);
                                                            if (mysqli_num_rows($imgResult) > 0) {
                                                                $imgData = mysqli_fetch_array($imgResult);
                                                                $folder = $imgData['folder'];
                                                            } else {
                                                                $folder = "asset/user.png";
                                                            }
                                                            echo "
														<a href='create.php?id=$target' class='status-item'>
															<div class='avatar'>
																<img src='$folder' alt />
																
															</div>
															<h4 class='avatar-name'>$friendUsername</h4>
														</a>
													";
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="sub-header">
                                            <h5 class="sub-title">Recent Chats</h5>
                                            <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="far fa-bars-filter"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="feather-calendar"></i>By
                                                            Date</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="feather-users"></i>By
                                                            Members</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="feather-cloud-snow"></i>By
                                                            Groups</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['room'])) {
                                            $room = $_SESSION['room'];
                                            $findSql = "SHOW TABLES FROM user";
                                            $result = mysqli_query($conn, $findSql);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($data = mysqli_fetch_assoc($result)) {
                                                    $table = $data['Tables_in_user'];
                                                    $removeMe = str_replace($username, "", $table);
                                                    $ifMe = str_replace($removeMe, "", $table);
                                                    $finalName = str_replace($username, "", $table);
                                                    if ($table != "login" && $table != "dp" && $table != "profile" && $table != "username" && $ifMe == $username) {
                                                        $last = "SELECT * FROM `$table` WHERE sn = ( SELECT MAX( sn ) FROM `$table` )";
                                                        $lastResult = mysqli_query($conn, $last);
                                                        if (mysqli_num_rows($lastResult) > 0) {
                                                            $lastData = mysqli_fetch_array($lastResult);
                                                            $readMsg = $lastData['msg'];
                                                        } else {

                                                        }
                                                        $getImg = "SELECT * FROM `dp` WHERE `username` = '$finalName';";
                                                        $imgResult = mysqli_query($conn, $getImg);
                                                        if (mysqli_num_rows($imgResult) > 0) {
                                                            $imgData = mysqli_fetch_array($imgResult);
                                                            $folder = $imgData['folder'];
                                                        } else {
                                                            $folder = "asset/user.png";
                                                        }
                                                        ?>
                                                        <?php
                                                        echo "
											<a href='home.php?id=$table' class='chat-list-item'>
												<div class='chat-list-content'>
													<div class='avatar'>
														<img src='$folder' />
													</div>
													<div class='chat-list-info'>
														<div class='chat-list-title'>
															<h5 class='name'>$finalName</h5>
															<span class='time'>$readMsg</h5></span>
														</div>

													</div>
												</div>
											</a>";
                                                    }
                                                }
                                            }
                                        }

                                        ?>



                                    </div>
                                </div>
                                <div class="tab-pane contact fade" id="pills-sm3" role="tabpanel"
                                    aria-labelledby="pills-sm-tab3" tabindex="0">
                                    <div class="side-menu-content">
                                        <div class="side-menu-header">
                                            <h2 class="title">Friends</h2>
                                            <div class="contact-invite">
                                                <a href="#" class="theme-btn" data-bs-toggle="modal"
                                                    data-bs-target="#contactInvite"><span
                                                        class="feather-user-plus"></span>Add
                                                    Friends</a>
                                            </div>
                                        </div>

                                        <div class="side-menu-search">
                                            <form action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search contacts" />
                                                    <span class="input-group-text"><i class="feather-search"></i></span>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="contact-list scrollbar-wrap">
                                            <div class="contact-list-wrap">
                                                <?php
                                                $findSql = "SELECT * FROM `login`;";
                                                $result = mysqli_query($conn, $findSql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($data = mysqli_fetch_assoc($result)) {

                                                        $friendUsername = $data['username'];
                                                        $friendEmail = $data['email'];
                                                        $friendMobile = $data['mobile'];
                                                        $target = $friendUsername . $username;
                                                        if ($friendUsername != $username) {
                                                            $getImg = "SELECT * FROM `dp` WHERE `username` = '$friendUsername';";
                                                            $imgResult = mysqli_query($conn, $getImg);
                                                            if (mysqli_num_rows($imgResult) > 0) {
                                                                $imgData = mysqli_fetch_array($imgResult);
                                                                $folder = $imgData['folder'];
                                                            } else {
                                                                $folder = "asset/user.png";
                                                            }
                                                            echo "
												<div class='item'>
													<a href='create.php?id=$target' class='avatar'>
														<img src='$folder' alt />
														<span class='status away'></span>
													</a>
													<div class='info'>
														<h6 class='title'>
															<a href='create.php?id=$target'>$friendUsername</a>
														</h6>
													</div>
													<div class='action'>
														<div class='dropdown'>
															<button type='button' class='icon' data-bs-toggle='dropdown' aria-expanded='false'>
																<i class='feather-more-vertical'></i>
															</button>
															<ul class='dropdown-menu'>
																<li>
																	<a class='dropdown-item' href='#'><i class='feather-share-2'></i>Share</a>
																</li>
																<li>
																	<a class='dropdown-item' href='#'><i class='feather-slash'></i>Block</a>
																</li>
																<li>
																	<hr class='dropdown-divider' />
																</li>
																<li>
																	<a class='dropdown-item' href='#'><i class='feather-trash-2'></i>Delete</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												";
                                                        }
                                                    }
                                                }
                                                ?>
                                                <!-- <a href='create.php?id=$target' class='status-item'>
                                        <div class='avatar'>
                                            <img src='$folder' alt />
                                            
                                        </div>
                                        <h4 class='avatar-name'>$friendUsername</h4>
                                    </a> -->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane contact fade" id="pills-sm4" role="tabpanel"
                                    aria-labelledby="pills-sm-tab4" tabindex="0">
                                    <div class="side-menu-content">
                                        <div class="side-menu-header">
                                            <h2 class="title">Group</h2>
                                            <div class="contact-invite">
                                                <a href="#" class="theme-btn" data-bs-toggle="modal"
                                                    data-bs-target="#contactInvite"><span
                                                        class="feather-user-plus"></span>Create a
                                                    group</a>
                                            </div>
                                        </div>

                                        <div class="contact-list scrollbar-wrap">
                                            <div class="contact-list-wrap">
                                                <div class="side-menu-content">


                                                    <div class="side-menu-search">
                                                        <form action="#">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search contacts" />
                                                                <span class="input-group-text"><i
                                                                        class="feather-search"></i></span>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="contact-list scrollbar-wrap">
                                                        <div class="contact-list-wrap">
                                                            <?php
                                                            $queryData = "SELECT * FROM groups LIMIT 10";
                                                            $queryDataResult = mysqli_query($conn, $queryData);

                                                            if (mysqli_num_rows($queryDataResult) > 0) {
                                                                while ($row = mysqli_fetch_assoc($queryDataResult)) {
                                                                    $topic_id = $row["group_id"];
                                                                    $topic_name = $row["group_name"];
                                                                    $created_by = $row["created_by"];
                                                                    $userData = "SELECT * FROM users WHERE user_code = '$created_by' LIMIT 1";
                                                                    $userDataResult = mysqli_query($conn, $userData);

                                                                    if (mysqli_num_rows($userDataResult) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($userDataResult)) {
                                                                            $userDataUsername = $row["username"];
                                                                            $userDataAvatar = $row["avatar"];
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <div class='item'>
                                                                        <a href='group/app/group.php?fetch=<?php echo $topic_id; ?>'
                                                                            class='avatar'>
                                                                            <img src='$folder' alt />
                                                                            <span class='status away'></span>
                                                                        </a>
                                                                        <div class='info'>
                                                                            <h6 class='title'>
                                                                                <a
                                                                                    href='group/app/group.php?fetch=<?php echo $topic_id; ?>'><?php echo $topic_name; ?></a>
                                                                            </h6>
                                                                        </div>
                                                                        <div class='action'>
                                                                            <div class='dropdown'>
                                                                                <button type='button' class='icon'
                                                                                    data-bs-toggle='dropdown'
                                                                                    aria-expanded='false'>
                                                                                    <i class='feather-more-vertical'></i>
                                                                                </button>
                                                                                <ul class='dropdown-menu'>
                                                                                    <li>
                                                                                        <a class='dropdown-item' href='#'><i
                                                                                                class='feather-share-2'></i>Share</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class='dropdown-item' href='#'><i
                                                                                                class='feather-slash'></i>Block</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <hr class='dropdown-divider' />
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class='dropdown-item' href='#'><i
                                                                                                class='feather-trash-2'></i>Delete</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div><?php
                                                                }
                                                            } else {
                                                                // Handle case when there are no topics
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane profile fade" id="pills-sm5" role="tabpanel"
                                    aria-labelledby="pills-sm-tab5" tabindex="0">

                                    <?php
                                    $selectSql = "SELECT * FROM `dp` WHERE `username` = '$username';";
                                    $result = mysqli_query($conn, $selectSql);
                                    $data = mysqli_fetch_array($result);
                                    if ($data) {
                                        $folder = $data['folder'];
                                    } else {
                                        $folder = "asset/user.png";
                                    }

                                    $sql = "SELECT * FROM `profile` WHERE `username` = '$username';";
                                    $result = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($result);
                                    if ($data) {
                                        $name = $data['fn'] . " " . $data['ln'];
                                        $work = $data['work'];
                                        $gender = $data['gender'];
                                        $dob = $data['dob'];
                                        $city = $data['city'];
                                        $state = $data['state'];
                                        $country = $data['country'];
                                        $address = $city . ", " . $state . ", " . $country;
                                        $bio = $data['bio'];
                                    } else {
                                        $name = $username;
                                        $work = "Add your work";
                                        $gender = "NA";
                                        $dob = "NA";
                                        $city = "NA";
                                        $state = "NA";
                                        $country = "Add your country";
                                        $address = "NA";
                                        $bio = "Add your beautiful description.";
                                    }
                                    ?>


                                    <div class="side-menu-content">
                                        <div class="side-menu-header">
                                            <h2 class="title">Profile</h2>
                                        </div>

                                        <div class="profile-top">
                                            <div class="avatar">
                                                <img src="<?php echo $folder; ?>" alt />
                                                <span class="status online"></span>
                                            </div>
                                            <h5><?php echo $username; ?></h5>
                                            <p><?php echo $work; ?></p>
                                        </div>

                                        <div class="profile-content scrollbar-wrap">
                                            <div class="profile-wrap">
                                                <div class="label">Profile Info</div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li class="item">
                                                            <div class="info">
                                                                <h6>Name</h6>
                                                                <p><?php echo $username; ?></p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="feather-user"></i>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <p><?php echo $_SESSION['email']; ?></p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="feather-mail"></i>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <h6>Phone</h6>
                                                                <p><?php echo $_SESSION['mobile']; ?></p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="feather-phone-call"></i>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <h6>Location</h6>
                                                                <p><?php echo $address; ?></p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="feather-globe"></i>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <h6>Date of Birth</h6>
                                                                <p><?php echo $dob; ?></p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="feather-calendar"></i>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="label">Logout</div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="item w-100">
                                                                <div class="info">
                                                                    <h6>Logout</h6>
                                                                    <p class="text-muted">
                                                                        Sign out from this device.
                                                                    </p>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="feather-log-out text-muted"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane help fade" id="pills-sm7" role="tabpanel"
                                    aria-labelledby="pills-sm-tab7" tabindex="0">
                                    <div class="side-menu-content">
                                        <div class="side-menu-header">
                                            <h2 class="title">Help</h2>
                                        </div>

                                        <div class="side-menu-search">
                                            <form action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search help" />
                                                    <span class="input-group-text"><i class="feather-search"></i></span>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="help-content scrollbar-wrap">
                                            <div class="help-wrap">
                                                <div class="item">
                                                    <div class="accordion accordion-flush" id="accordion-help">
                                                        <div class="accordion-item">
                                                            <div class="accordion-header">
                                                                <a href="#" class="accordion-button collapsed"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#help-collapse1"
                                                                    aria-expanded="false"
                                                                    aria-controls="help-collapse1">
                                                                    <div>
                                                                        <h6>Faq's</h6>
                                                                        <p>Frequently asked questions</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="help-collapse1" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion-help">
                                                                <div class="accordion-body">
                                                                    <div class="faq-content">
                                                                        <ul class="faq-list">
                                                                            <li>
                                                                                <h6>How to open an account?</h6>
                                                                                <p>
                                                                                    It is a long established fact that a
                                                                                    reader will be distracted by the
                                                                                    readable
                                                                                    content of a page when looking at
                                                                                    its
                                                                                    layout.
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Do I need an account?</h6>
                                                                                <p>
                                                                                    It is a long established fact that a
                                                                                    reader will be distracted by the
                                                                                    readable
                                                                                    content of a page when looking at
                                                                                    its
                                                                                    layout.
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>How to send friend invite?</h6>
                                                                                <p>
                                                                                    It is a long established fact that a
                                                                                    reader will be distracted by the
                                                                                    readable
                                                                                    content of a page when looking at
                                                                                    its
                                                                                    layout.
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>How to create a group?</h6>
                                                                                <p>
                                                                                    It is a long established fact that a
                                                                                    reader will be distracted by the
                                                                                    readable
                                                                                    content of a page when looking at
                                                                                    its
                                                                                    layout.
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>How to reset my password?</h6>
                                                                                <p>
                                                                                    It is a long established fact that a
                                                                                    reader will be distracted by the
                                                                                    readable
                                                                                    content of a page when looking at
                                                                                    its
                                                                                    layout.
                                                                                </p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <div class="accordion-header">
                                                                <a href="#" class="accordion-button collapsed"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#help-collapse2"
                                                                    aria-expanded="false"
                                                                    aria-controls="help-collapse2">
                                                                    <div>
                                                                        <h6>Contact Us</h6>
                                                                        <p>Send your message to us</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="help-collapse2" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion-help">
                                                                <div class="accordion-body">
                                                                    <div class="group-form">
                                                                        <form action="#">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" />
                                                                                <span class="input-group-text"><i
                                                                                        class="feather-user"></i></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" />
                                                                                <span class="input-group-text"><i
                                                                                        class="feather-mail"></i></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Subject" />
                                                                                <span class="input-group-text"><i
                                                                                        class="feather-edit-2"></i></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <textarea class="form-control" cols="30"
                                                                                    rows="4"
                                                                                    placeholder="Your message"></textarea>
                                                                            </div>
                                                                            <div>
                                                                                <button type="submit"
                                                                                    class="theme-btn w-100">
                                                                                    <span class="feather-send"></span>
                                                                                    Send
                                                                                    Message
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item accordion-text">
                                                            <div class="accordion-header">
                                                                <a href="#" class="accordion-button">
                                                                    <div>
                                                                        <h6>Live Chat</h6>
                                                                        <p>Chat with our support team</p>
                                                                    </div>
                                                                    <div class="icon">
                                                                        <i class="feather-message-square"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="layout-content">
                                    <?php

                                    $room = $_SESSION['room'];
                                    ?>

                                    <script src="https://code.jquery.com/jquery-3.5.1.js"
                                        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                                        crossorigin="anonymous"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $("#button").click(function () {
                                                $(document).scrollTop($(document).height());
                                            });
                                            setInterval(() => {
                                                $("#autodata").load("hat.php");
                                            }, 500);
                                            $('#formbox').on("submit", function () {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "insert.php",
                                                    data: $(this).serialize(),
                                                    success: function () {
                                                        $('#formbox').trigger('reset');
                                                    },
                                                    error: function () {
                                                        alert("ERROR! Message not sent");
                                                    }
                                                });
                                                return false;
                                            });
                                        });
                                    </script>
                                    <div class="layout-content active">
                                        <div class="chat-box">
                                            <div class="container">
                                                <div class="chat-wrap">
                                                    <div class="chat-header">
                                                        <div class="layout-content-btn">
                                                            <button type="button"><i class="far fa-xmark"></i></button>
                                                        </div>
                                                        <a href="#" class="chat-user" data-bs-toggle="offcanvas"
                                                            data-bs-target="#chatUserMore" aria-controls="chatUserMore">
                                                            <div class="avatar">
                                                                <img src="<?php echo $folder; ?>" alt />
                                                                <span class="status online"></span>
                                                            </div>

                                                            <div class="info">
                                                                <h6>
                                                                    <?php
                                                                    $finalName = str_replace($username, "", $room);
                                                                    echo $finalName;
                                                                    ?>
                                                                </h6>
                                                                <span>Online</span>
                                                            </div>
                                                        </a>
                                                        <div class="chat-action">
                                                            <ul class="list">
                                                                <li>
                                                                    <div class="search-btn">
                                                                        <button type="button" class="action-btn">
                                                                            <i class="feather-search"></i>
                                                                        </button>
                                                                        <div class="search-form">
                                                                            <form action="#">
                                                                                <div class="input-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Search Here..." />
                                                                                    <span class="input-group-text"><i
                                                                                            class="feather-search"></i></span>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="user-btn">
                                                                    <button type="button" class="action-btn"
                                                                        data-bs-toggle="offcanvas"
                                                                        data-bs-target="#chatUserMore"
                                                                        aria-controls="chatUserMore">
                                                                        <i class="feather-user"></i>
                                                                    </button>
                                                                </li>
                                                                <li class="audio-call">
                                                                    <button type="button" class="action-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#audio-call">
                                                                        <i class="feather-phone"></i>
                                                                    </button>
                                                                </li>
                                                                <li class="video-call">
                                                                    <button type="button" id="join-btn" id=""
                                                                        class="action-btn" data-bs-toggle="modal"
                                                                        data-bs-target="#video-call">
                                                                        <i class="feather-video"></i>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <button type="button" class="action-btn"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="feather-more-vertical"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    data-bs-target="#chatUserMore"
                                                                                    aria-controls="chatUserMore"><i
                                                                                        class="feather-user"></i>Profile
                                                                                    Info</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#audio-call"><i
                                                                                        class="feather-phone"></i>Audio
                                                                                    Call</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#video-call"><i
                                                                                        class="feather-video"></i>Video
                                                                                    Call</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="feather-volume-x"></i>Mute
                                                                                    Notifications</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="feather-trash-2"></i>Delete
                                                                                    Chat</a>
                                                                            </li>
                                                                            <li>
                                                                                <hr class="dropdown-divider" />
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="feather-slash"></i>Block
                                                                                    User</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="scrollbar-wrap bottom-scroll">
                                                        <div class="chat-content">
                                                            <div class="message-list">
                                                                <div class="top-bar">
                                                                </div>

                                                                <div class="convo__wrapper">
                                                                    <ul class="bubble__wrapper" id="autodata">
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="chat-bottom">
                                                        <div class="chat-form">
                                                            <!-- <form action="#"> -->
                                                            <div class="chat-form-wrap">
                                                                <div class="microphone">
                                                                    <button type="button">
                                                                        <i class="feather-mic"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="form-group">
                                                                    <form id="formbox" autocomplete="off">
                                                                        <div class="cui__response">
                                                                            <!-- <div class="send-btn"> -->
                                                                            <form id="formbox" autocomplete="off">
                                                                                <input type="text" required name="chat"
                                                                                    class=" form-control"
                                                                                    placeholder="Enter to send">
                                                                                <input type="submit" name="submit"
                                                                                    class="cui_option_btn_submit">
                                                                            </form>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                        <div class="background">&nbsp;</div>

                                                                        <script>
                                                                            function goBack() {
                                                                                window.history.back();
                                                                            }
                                                                        </script>

                                                                </div>
                                                                <!-- <div class="emoji">
                                                            <btype="button">
                                                                <i class="feather-smile"></i>
                                                                </btype=>
                                                        </div>
                                                        <div class="chat-file">
                                                            <button type="button" class="file-btn">
                                                                <i class="feather-paperclip"></i>
                                                            </button>
                                                            <input type="file" class="file-input" />
                                                        </div>
                                                        <div class="send-btn">
                                                            <button type="submit">
                                                                <i class="feather-send"></i>
                                                            </button>
                                                        </div> -->
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $selectSql = "SELECT * FROM `dp` WHERE `username` = '$username';";
                                    $result = mysqli_query($conn, $selectSql);
                                    $data = mysqli_fetch_array($result);
                                    if ($data) {
                                        $folder = $data['folder'];
                                    } else {
                                        $folder = "asset/user.png";
                                    }

                                    $sql = "SELECT * FROM `profile` WHERE `username` = '$username';";
                                    $result = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($result);
                                    if ($data) {
                                        $name = $data['fn'] . " " . $data['ln'];
                                        $work = $data['work'];
                                        $gender = $data['gender'];
                                        $dob = $data['dob'];
                                        $city = $data['city'];
                                        $state = $data['state'];
                                        $country = $data['country'];
                                        $address = $city . ", " . $state . ", " . $country;
                                        $bio = $data['bio'];
                                    } else {
                                        $name = $username;
                                        $work = "Add your work";
                                        $gender = "NA";
                                        $dob = "NA";
                                        $city = "NA";
                                        $state = "NA";
                                        $country = "Add your country";
                                        $address = "NA";
                                        $bio = "Add your beautiful description.";
                                    }
                                    ?>

                                    <div class="chat-user-more offcanvas offcanvas-end" data-bs-scroll="true"
                                        data-bs-backdrop="false" tabindex="-1" id="chatUserMore"
                                        aria-labelledby="chatUserMoreLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="chatUserMoreLabel">Profile Info</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close">
                                                <i class="far fa-xmark"></i>
                                            </button>
                                        </div>
                                        <div class="offcanvas-body scrollbar-wrap">
                                            <div class="chat-user-info">
                                                <div class="profile-content">
                                                    <div class="profile-top">
                                                        <div class="avatar">
                                                            <img src="<?php echo $folder; ?>" alt />
                                                            <span class="status online"></span>
                                                        </div>
                                                        <h5><?php echo $name; ?> </h5>
                                                        <p>I'm a professional graphic designer.</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //////////////   layout-content ////////////////////// -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                    Usama
                </div>
            </div>
        </div>

        <!-- //////////////   side-menu-tab ////////////////////// -->

        <!-- //////////////   layout-content ////////////////////// -->

        </div>
    </main>

    <!-- //////////////   contact-invite-modal ////////////////////// -->
    <div class="modal contact-invite-modal fade" id="contactInvite" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="feather-x"></i>
                </button>
                <div class="modal-body">
                    <div class="contact-invite-info">
                        <div class="contact-invite-header">
                            <div class="avatar">
                                <span class="avatar-text"><i class="fal fa-users"></i></span>
                            </div>
                            <h5>Invite Your Friends</h5>
                            <p>Send invitation links to your friends</p>
                        </div>
                        <div class="contact-invite-form">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email" />
                                    <span class="input-group-text"><i class="feather-mail"></i></span>
                                </div>
                                <div class="input-group">
                                    <textarea class="form-control" cols="30" rows="4"
                                        placeholder="Invite message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="theme-btn">
                                        Send Invite Request<i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //////////////   contact-invite-modal ////////////////////// -->
    <!-- //////////////   Video Calling ////////////////////// -->
    <div class="modal video-call" id="video-call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <div class="call-wrap">
                        <div class="call-user">
                            <div id="stream-wrapper">
                                <div id="video-streams"></div>

                                <div id="stream-controls">
                                    <button id="leave-btn">Leave Stream</button>
                                    <button id="mic-btn">Mic On</button>
                                    <button id="camera-btn">Camera on</button>
                                </div>
                                <div class="video-call-wrap">
                                    <img src="assets/img/video-call/01.jpg" alt />
                                    <div class="avatar">
                                        <img src="assets/img/account/08.jpg" alt />
                                    </div>
                                </div>
                                <div class="call-info">
                                    <h6>Brandi Ingles</h6>
                                    <div class="call-time">05:25 Min</div>
                                </div>
                                <div class="call-more-action">
                                    <a href="#" data-bs-toggle="tooltip" title="Switch Audio Call"><i
                                            class="feather-phone-call"></i></a>
                                    <a href="#" data-bs-toggle="tooltip" title="Screen Share"><i
                                            class="feather-airplay"></i></a>
                                    <a href="#" data-bs-toggle="tooltip" title="Fullscreen"><i
                                            class="feather-maximize"></i></a>
                                    <a href="#" data-bs-toggle="tooltip" title="Add Person"><i
                                            class="feather-user-plus"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button">
                                <span class="feather-message-square"></span>
                            </button>
                            <button type="button" class="call-btn" data-bs-dismiss="modal">
                                <span class="feather-video"></span>
                            </button>
                            <button type="button">
                                <span class="feather-mic-off"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //////////////   Video Calling ////////////////////// -->


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>