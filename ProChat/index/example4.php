<?php
include "conn.php";
include "auth.php";

if (!isset($_SESSION['room'])) {
	$room = $username . "bot";
	// $sql = "CREATE TABLE `epiz_27865341_user`.`$room` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL, `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = MyISAM;";
	$sql = "CREATE TABLE `user`.`$room` ( `sn` INT(128) NOT NULL AUTO_INCREMENT , `username` VARCHAR(128) NOT NULL , `dp` VARCHAR(128) NOT NULL,  `msg` VARCHAR(128) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sn`)) ENGINE = InnoDB;";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$_SESSION['room'] = $room;
		header("Location:bot.php");
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
		<div class="layout-wrapper">
			<!-- //////////////   side-menu ////////////////////// -->
			<div class="side-menu">
				<div class="nav-brand">
					<a class="logo" href="hatDisplay.php">

						<img src="<?php echo $_SESSION['folder']; ?>" alt="logo" /></a>
				</div>

				<ul class="nav flex-column nav-pills mb-3" role="tablist">
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Chat">
						<a href="#" class="nav-link active" id="pills-sm-tab1" data-bs-toggle="pill"
							data-bs-target="#pills-sm1" role="tab" aria-controls="pills-sm1" aria-selected="true">
							<i class="feather-message-circle icon"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Groups">
						<a href="#" class="nav-link" id="pills-sm-tab2" data-bs-toggle="pill"
							data-bs-target="#pills-sm2" role="tab" aria-controls="pills-sm2" aria-selected="false">
							<i class="feather-cloud-snow icon"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Friends">
						<a href="#" class="nav-link" id="pills-sm-tab3" data-bs-toggle="pill"
							data-bs-target="#pills-sm3" role="tab" aria-controls="pills-sm3" aria-selected="false">
							<i class="feather-users icon"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Notifications">
						<a href="#" class="nav-link" id="pills-sm-tab4" data-bs-toggle="pill"
							data-bs-target="#pills-sm4" role="tab" aria-controls="pills-sm4" aria-selected="false">
							<i class="feather-bell icon notification-alert"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
						<a href="#" class="nav-link" id="pills-sm-tab5" data-bs-toggle="pill"
							data-bs-target="#pills-sm5" role="tab" aria-controls="pills-sm5" aria-selected="false">
							<i class="feather-user icon"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
						<a href="#" class="nav-link" id="pills-sm-tab6" data-bs-toggle="pill"
							data-bs-target="#pills-sm6" role="tab" aria-controls="pills-sm6" aria-selected="false">
							<i class="feather-settings icon"></i><span class="nav-active-shape"></span>
						</a>
					</li>
					<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Help">
						<a href="#" class="nav-link" id="pills-sm-tab7" data-bs-toggle="pill"
							data-bs-target="#pills-sm7" role="tab" aria-controls="pills-sm7" aria-selected="false">
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
						<a href="#" class="dark-btn" data-bs-toggle="tooltip" data-bs-placement="right" title="Dark"><i
								class="feather-moon"></i></a>
					</div>

					<div class="dropdown">
						<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="avatar">
								<img src="assets/img/account/03.jpg" alt />
								<span class="status online"></span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="login.html"><i class="feather-log-in"></i>Login</a>
							</li>
							<li>
								<a class="dropdown-item" href="register.html"><i
										class="feather-user-plus"></i>Register</a>
							</li>
							<li>
								<a class="dropdown-item" href="forgot-password.html"><i class="feather-key"></i>Forgot
									Password</a>
							</li>
							<li>
								<a class="dropdown-item" href="lock-screen.html"><i class="feather-lock"></i>Lock
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
											if ($friendUsername != $username && $friendUsername != 'bot') {
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
											<a class="dropdown-item" href="#"><i class="feather-calendar"></i>By
												Date</a>
										</li>
										<li>
											<a class="dropdown-item" href="#"><i class="feather-users"></i>By
												Members</a>
										</li>
										<li>
											<a class="dropdown-item" href="#"><i class="feather-cloud-snow"></i>By
												Groups</a>
										</li>
									</ul>
								</div>
							</div>
							<?php
							if (isset($_SESSION['room'])) {
								$room = $_SESSION['room'];
								// $findSql = "SHOW TABLES FROM epiz_27865341_user";
								$findSql = "SHOW TABLES FROM user";
								$result = mysqli_query($conn, $findSql);
								if (mysqli_num_rows($result) > 0) {
									while ($data = mysqli_fetch_assoc($result)) {
										// $table = $data['Tables_in_epiz_27865341_user'];
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
												if ($finalName == "bot") {
													$readMsg = "How may I help you?";
												} else {
													$readMsg = "You added $finalName";
												}
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
											<a href='hatDisplay.php?id=$table' class='chat-list-item'>
												<div class='chat-list-content'>
													<div class='avatar'>
														<img src='$folder' />
														<span class='status online'></span>
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

					<div class="tab-pane group fade" id="pills-sm2" role="tabpanel" aria-labelledby="pills-sm-tab2"
						tabindex="0">
						<div class="side-menu-content">
							<div class="side-menu-header">
								<h2 class="title">Groups</h2>
							</div>

							<div class="side-menu-search">
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search users or groups" />
										<span class="input-group-text"><i class="feather-search"></i></span>
									</div>
								</form>
							</div>

							<div class="group-menu-tab">
								<ul class="nav nav-pills nav-justified mb-4" role="tablist">
									<li class="nav-item">
										<button class="nav-link active" id="pills-group-tab1" data-bs-toggle="pill"
											data-bs-target="#pills-group1" type="button" role="tab"
											aria-controls="pills-group1" aria-selected="true">
											All Groups
										</button>
									</li>
									<li class="nav-item">
										<button class="nav-link" id="pills-group-tab2" data-bs-toggle="pill"
											data-bs-target="#pills-group2" type="button" role="tab"
											aria-controls="pills-group2" aria-selected="false">
											Create Group
										</button>
									</li>
								</ul>
							</div>

							<div class="group-menu-content scrollbar-wrap">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="pills-group1" role="tabpanel"
										aria-labelledby="pills-group-tab1" tabindex="0">
										<div class="group-content">
											<div class="group-list">
												<div class="group-list-wrap">
													<div class="item">
														<div class="content">
															<a href="chat-group.html" class="group-avatar">
																<div class="avatar">
																	<span class="avatar-text"><i
																			class="feather-users"></i></span>
																</div>
															</a>
															<div class="info">
																<h6 class="title">
																	<a href="chat-group.html">Designer Group</a>
																</h6>
																<p class="text">15 group members</p>
															</div>
															<div class="action">
																<div class="dropdown">
																	<button type="button" class="icon"
																		data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="feather-more-vertical"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-edit-2"></i>Edit</a>
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-bell"></i>Mute</a>
																		</li>
																		<li>
																			<hr class="dropdown-divider" />
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-trash-2"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="bottom">
															<div class="bottom-info">
																<span class="group-status"><i class="fas fa-circle"></i>
																	10
																	Online</span>
															</div>
															<div class="avatar-group">
																<div class="avatar">
																	<img src="assets/img/account/14.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/11.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/18.jpg" alt />
																</div>
																<div class="avatar">
																	<span class="avatar-text">+5</span>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="content">
															<a href="chat-group.html" class="group-avatar">
																<div class="avatar">
																	<img src="assets/img/account/group.png" alt />
																</div>
															</a>
															<div class="info">
																<h6 class="title">
																	<a href="chat-group.html">Designer Group</a>
																</h6>
																<p class="text">15 group members</p>
															</div>
															<div class="action">
																<div class="dropdown">
																	<button type="button" class="icon"
																		data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="feather-more-vertical"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-edit-2"></i>Edit</a>
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-bell"></i>Mute</a>
																		</li>
																		<li>
																			<hr class="dropdown-divider" />
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-trash-2"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="bottom">
															<div class="bottom-info">
																<span class="group-status"><i
																		class="fas fa-circle text-muted"></i>
																	Offline</span>
															</div>
															<div class="avatar-group">
																<div class="avatar">
																	<img src="assets/img/account/14.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/11.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/18.jpg" alt />
																</div>
																<div class="avatar">
																	<span class="avatar-text">+5</span>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="content">
															<a href="chat-group.html" class="group-avatar">
																<div class="avatar">
																	<span class="avatar-text"><i
																			class="feather-users"></i></span>
																</div>
															</a>
															<div class="info">
																<h6 class="title">
																	<a href="chat-group.html">Designer Group</a>
																</h6>
																<p class="text">15 group members</p>
															</div>
															<div class="action">
																<div class="dropdown">
																	<button type="button" class="icon"
																		data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="feather-more-vertical"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-edit-2"></i>Edit</a>
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-bell"></i>Mute</a>
																		</li>
																		<li>
																			<hr class="dropdown-divider" />
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-trash-2"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="bottom">
															<div class="bottom-info">
																<span class="group-status"><i class="fas fa-circle"></i>
																	10
																	Online</span>
															</div>
															<div class="avatar-group">
																<div class="avatar">
																	<img src="assets/img/account/14.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/11.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/18.jpg" alt />
																</div>
																<div class="avatar">
																	<span class="avatar-text">+5</span>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="content">
															<a href="chat-group.html" class="group-avatar">
																<div class="avatar">
																	<img src="assets/img/account/group.png" alt />
																</div>
															</a>
															<div class="info">
																<h6 class="title">
																	<a href="chat-group.html">Designer Group</a>
																</h6>
																<p class="text">15 group members</p>
															</div>
															<div class="action">
																<div class="dropdown">
																	<button type="button" class="icon"
																		data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="feather-more-vertical"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-edit-2"></i>Edit</a>
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-bell"></i>Mute</a>
																		</li>
																		<li>
																			<hr class="dropdown-divider" />
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-trash-2"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="bottom">
															<div class="bottom-info">
																<span class="group-status"><i class="fas fa-circle"></i>
																	10
																	Online</span>
															</div>
															<div class="avatar-group">
																<div class="avatar">
																	<img src="assets/img/account/14.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/11.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/18.jpg" alt />
																</div>
																<div class="avatar">
																	<span class="avatar-text">+5</span>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="content">
															<a href="chat-group.html" class="group-avatar">
																<div class="avatar">
																	<span class="avatar-text"><i
																			class="feather-users"></i></span>
																</div>
															</a>
															<div class="info">
																<h6 class="title">
																	<a href="chat-group.html">Designer Group</a>
																</h6>
																<p class="text">15 group members</p>
															</div>
															<div class="action">
																<div class="dropdown">
																	<button type="button" class="icon"
																		data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="feather-more-vertical"></i>
																	</button>
																	<ul class="dropdown-menu">
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-edit-2"></i>Edit</a>
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-bell"></i>Mute</a>
																		</li>
																		<li>
																			<hr class="dropdown-divider" />
																		</li>
																		<li>
																			<a class="dropdown-item" href="#"><i
																					class="feather-trash-2"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="bottom">
															<div class="bottom-info">
																<span class="group-status"><i class="fas fa-circle"></i>
																	10
																	Online</span>
															</div>
															<div class="avatar-group">
																<div class="avatar">
																	<img src="assets/img/account/14.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/11.jpg" alt />
																</div>
																<div class="avatar">
																	<img src="assets/img/account/18.jpg" alt />
																</div>
																<div class="avatar">
																	<span class="avatar-text">+5</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="pills-group2" role="tabpanel"
										aria-labelledby="pills-group-tab2" tabindex="0">
										<div class="group-content">
											<div class="group-create">
												<div class="group-list-wrap">
													<div class="accordion accordion-flush" id="accordion-group">
														<div class="accordion-item">
															<div class="accordion-header">
																<a href="#" class="accordion-button"
																	data-bs-toggle="collapse"
																	data-bs-target="#group-collapse1"
																	aria-expanded="true"
																	aria-controls="group-collapse1">
																	<div>
																		<h6>Details</h6>
																		<p>Start create a new group</p>
																	</div>
																</a>
															</div>
															<div id="group-collapse1"
																class="accordion-collapse collapse show"
																data-bs-parent="#accordion-group">
																<div class="accordion-body">
																	<div class="group-form">
																		<form action="#">
																			<div class="avatar group-profile-img">
																				<span class="avatar-text"><i
																						class="feather-users"></i></span>
																				<button type="button"
																					class="gp-img-btn file-btn">
																					<i class="fas fa-plus"></i>
																				</button>
																				<input type="file" class="file-input" />
																			</div>
																			<div class="input-group">
																				<input type="text" class="form-control"
																					placeholder="Group name" />
																				<span class="input-group-text"><i
																						class="feather-users"></i></span>
																			</div>
																			<div class="input-group">
																				<input type="text" class="form-control"
																					placeholder="Tagline" />
																				<span class="input-group-text"><i
																						class="feather-tag"></i></span>
																			</div>
																			<div class="input-group">
																				<textarea class="form-control" cols="30"
																					rows="4"
																					placeholder="Write description"></textarea>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>

														<div class="accordion-item">
															<div class="accordion-header">
																<a href="#" class="accordion-button collapsed"
																	data-bs-toggle="collapse"
																	data-bs-target="#group-collapse2"
																	aria-expanded="false"
																	aria-controls="group-collapse2">
																	<div>
																		<h6>Members</h6>
																		<p>Choose your group members</p>
																	</div>
																</a>
															</div>
															<div id="group-collapse2"
																class="accordion-collapse collapse"
																data-bs-parent="#accordion-group">
																<div class="accordion-body">
																	<div class="contact-list mt-0">
																		<div class="label mt-1">A</div>
																		<div class="item">
																			<div class="avatar">
																				<img src="assets/img/account/01.jpg"
																					alt />
																				<span class="status away"></span>
																			</div>
																			<div class="info">
																				<h6 class="title">Amanda Fusell</h6>
																				<p class="text">
																					last seen 5 days ago
																				</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																		<div class="item">
																			<div class="avatar">
																				<span class="avatar-text">AM</span>
																				<span class="status busy"></span>
																			</div>
																			<div class="info">
																				<h6 class="title">Aophia Murray</h6>
																				<p class="text">is busy now!</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																		<div class="label">B</div>
																		<div class="item">
																			<a class="avatar">
																				<img src="assets/img/account/16.jpg"
																					alt />
																				<span class="status online"></span>
																			</a>
																			<div class="info">
																				<h6 class="title">Brown Everet</h6>
																				<p class="text">is online now</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																		<div class="label">C</div>
																		<div class="item">
																			<div class="avatar">
																				<img src="assets/img/account/08.jpg"
																					alt />
																				<span class="status away"></span>
																			</div>
																			<div class="info">
																				<h6 class="title">Carley Walker</h6>
																				<p class="text">
																					last seen a week ago
																				</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																		<div class="item">
																			<div class="avatar">
																				<img src="assets/img/account/06.jpg"
																					alt />
																				<span class="status offline"></span>
																			</div>
																			<div class="info">
																				<h6 class="title">Canet Thacker</h6>
																				<p class="text">is offline now</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																		<div class="item">
																			<div class="avatar">
																				<img src="assets/img/account/17.jpg"
																					alt />
																				<span class="status online"></span>
																			</div>
																			<div class="info">
																				<h6 class="title">Crnold Riddick</h6>
																				<p class="text">
																					last seen 10 min ago
																				</p>
																			</div>
																			<div class="form-check">
																				<input class="form-check-input"
																					type="checkbox" name="contact"
																					value />
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="accordion-item accordion-text">
															<div class="accordion-header">
																<div class="accordion-button">
																	<div>
																		<h6>Private Group</h6>
																		<p>Make your group private</p>
																	</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input"
																			type="checkbox" />
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="mt-4 group-btn">
														<button type="button" class="theme-btn">
															Create Group <i class="fas fa-angle-right"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane contact fade" id="pills-sm3" role="tabpanel" aria-labelledby="pills-sm-tab3"
						tabindex="0">
						<div class="side-menu-content">
							<div class="side-menu-header">
								<h2 class="title">Friends</h2>
								<div class="contact-invite">
									<a href="#" class="theme-btn" data-bs-toggle="modal"
										data-bs-target="#contactInvite"><span class="feather-user-plus"></span>Add
										Friends</a>
								</div>
							</div>

							<div class="side-menu-search">
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search contacts" />
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
											if ($friendUsername != $username && $friendUsername != 'bot') {
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

					<div class="tab-pane notification fade" id="pills-sm4" role="tabpanel"
						aria-labelledby="pills-sm-tab4" tabindex="0">
						<div class="side-menu-content">
							<div class="side-menu-header">
								<h2 class="title">
									Notifications <span class="badge rounded-pill">20</span>
								</h2>
								<div class="dropdown">
									<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
											class="feather-more-horizontal"></i></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li><a class="dropdown-item" href="#">Clear Today</a></li>
										<li>
											<a class="dropdown-item" href="#">Clear Previous</a>
										</li>
										<li><a class="dropdown-item" href="#">Clear All</a></li>
									</ul>
								</div>
							</div>

							<div class="side-menu-search">
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search notifications" />
										<span class="input-group-text"><i class="feather-search"></i></span>
									</div>
								</form>
							</div>

							<div class="notification-list scrollbar-wrap">
								<div class="notification-list-wrap">
									<div class="label mt-1">
										<span>Today</span>
										<a href="#">Clear all</a>
									</div>
									<div class="item">
										<div class="avatar">
											<span class="avatar-text theme-bg-warning"><i
													class="feather-key"></i></span>
										</div>
										<div class="info">
											<div class="title">
												<h6>Password</h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">
													Your password has been changed successfully.
												</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="avatar">
											<img src="assets/img/account/05.jpg" alt />
										</a>
										<div class="info">
											<div class="title">
												<h6><a href="#">Amanda Fusell</a></h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">Send you a friend request.</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="bottom">
												<a href="#" class="theme-btn">Decline</a>
												<a href="#" class="theme-btn">Accept</a>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="avatar">
											<span class="avatar-text theme-bg-primary"><i
													class="feather-bell"></i></span>
										</div>
										<div class="info">
											<div class="title">
												<h6>Systems</h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">
													Your account info has been updated successfully.
												</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="label">
										<span>Previous</span>
										<a href="#">Clear all</a>
									</div>
									<div class="item">
										<a href="#" class="avatar">
											<img src="assets/img/account/04.jpg" alt />
										</a>
										<div class="info">
											<div class="title">
												<h6><a href="#">Dodma Kathleen</a></h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">
													Send you a private message request in private group.
												</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="bottom">
												<a href="#" class="theme-btn">Decline</a>
												<a href="#" class="theme-btn">Accept</a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="avatar">
											<img src="assets/img/account/07.jpg" alt />
										</a>
										<div class="info">
											<div class="title">
												<h6><a href="#">Canet Thacker</a></h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">
													Changed her full name to <br />
													<a href="#" class="primary">Aophia Murray</a>
												</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="avatar">
											<span class="avatar-text theme-bg-danger">EP</span>
										</div>
										<div class="info">
											<div class="title">
												<h6>Eerna Price</h6>
												<span class="time">05:10 PM</span>
											</div>
											<div class="body-text">
												<p class="text">You missed a video call.</p>
												<div class="action">
													<div class="dropdown">
														<button type="button" class="icon" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="feather-more-vertical"></i>
														</button>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-check-circle"></i>Mark
																	Read</a>
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-eye-off"></i>Hide</a>
															</li>
															<li>
																<hr class="dropdown-divider" />
															</li>
															<li>
																<a class="dropdown-item" href="#"><i
																		class="feather-trash-2"></i>Delete</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane profile fade" id="pills-sm5" role="tabpanel" aria-labelledby="pills-sm-tab5"
						tabindex="0">
						<div class="side-menu-content">
							<div class="side-menu-header">
								<h2 class="title">Profile</h2>
							</div>

							<div class="profile-top">
								<div class="avatar">
									<img src="assets/img/account/08.jpg" alt />
									<span class="status online"></span>
								</div>
								<h5>Aophia Murray</h5>
								<p>Web Designer</p>
							</div>

							<div class="profile-content scrollbar-wrap">
								<div class="profile-wrap">
									<div class="label">Profile Info</div>
									<div class="profile-info">
										<ul>
											<li class="item">
												<div class="info">
													<h6>Name</h6>
													<p>Aophia Murray</p>
												</div>
												<div class="icon">
													<i class="feather-user"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Email</h6>
													<p>
														<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
															data-cfemail="6d030c00082d08150c001d0108430e0200">[email&#160;protected]</a>
													</p>
												</div>
												<div class="icon">
													<i class="feather-mail"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Phone</h6>
													<p>(+2) 123 456 7889</p>
												</div>
												<div class="icon">
													<i class="feather-phone-call"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Location</h6>
													<p>Parkway Drive, USA</p>
												</div>
												<div class="icon">
													<i class="feather-globe"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Join Date</h6>
													<p>Aug 21, 2024</p>
												</div>
												<div class="icon">
													<i class="feather-calendar"></i>
												</div>
											</li>
										</ul>
									</div>
									<div class="label">Status</div>
									<div class="profile-info">
										<ul>
											<li class="item">
												<div class="info">
													<h6>Active Status</h6>
													<p>Show when you're active.</p>
												</div>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" checked />
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Friends Status</h6>
													<p>Show friends status in chat.</p>
												</div>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" checked />
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
									<div class="label">Social Media</div>
									<div class="profile-info">
										<ul>
											<li class="item">
												<div class="info">
													<h6>Facebook</h6>
													<p>@AophiaMurray</p>
												</div>
												<div class="icon">
													<i class="feather-facebook"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Instagram</h6>
													<p>@AophiaMurray</p>
												</div>
												<div class="icon">
													<i class="feather-instagram"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Linkedin</h6>
													<p>@AophiaMurray</p>
												</div>
												<div class="icon">
													<i class="feather-linkedin"></i>
												</div>
											</li>
										</ul>
									</div>
									<div class="label">Deactivate</div>
									<div class="profile-info">
										<ul>
											<li class="item">
												<div class="info">
													<h6>Deactivate Account</h6>
													<p>Deactivate your account</p>
												</div>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" />
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane setting fade" id="pills-sm6" role="tabpanel" aria-labelledby="pills-sm-tab6"
						tabindex="0">
						<div class="side-menu-content">
							<div class="side-menu-header">
								<h2 class="title">Settings</h2>
							</div>

							<div class="side-menu-search">
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search settings" />
										<span class="input-group-text"><i class="feather-search"></i></span>
									</div>
								</form>
							</div>

							<div class="setting-content scrollbar-wrap">
								<div class="setting-wrap">
									<div class="label mt-1">Account</div>
									<div class="item">
										<div class="accordion accordion-flush" id="accordion-account">
											<div class="accordion-item">
												<div class="accordion-header">
													<a href="#" class="accordion-button collapsed"
														data-bs-toggle="collapse" data-bs-target="#account-collapse1"
														aria-expanded="false" aria-controls="account-collapse1">
														<div>
															<h6>Profile Info</h6>
															<p>Update your profile info</p>
														</div>
													</a>
												</div>
												<div id="account-collapse1" class="accordion-collapse collapse"
													data-bs-parent="#accordion-account">
													<div class="accordion-body">
														<div class="group-form">
															<form action="#">
																<div class="avatar group-profile-img">
																	<img src="assets/img/account/01.jpg" alt />
																	<button type="button" class="gp-img-btn file-btn">
																		<i class="fas fa-plus"></i>
																	</button>
																	<input type="file" class="file-input" />
																</div>
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Name" value="Aophia Murray" />
																	<span class="input-group-text"><i
																			class="feather-user"></i></span>
																</div>
																<div class="input-group">
																	<input type="email" class="form-control"
																		placeholder="Email" value="name@example.com" />
																	<span class="input-group-text"><i
																			class="feather-mail"></i></span>
																</div>
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Phone" value="1234567889" />
																	<span class="input-group-text"><i
																			class="feather-phone"></i></span>
																</div>
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Location"
																		value="Parkway Drive, USA" />
																	<span class="input-group-text"><i
																			class="feather-map-pin"></i></span>
																</div>
																<div class="input-group">
																	<textarea class="form-control" cols="30" rows="4"
																		placeholder="Write bio">
Web Designer</textarea>
																</div>
																<div>
																	<button type="submit" class="theme-btn w-100">
																		<span class="feather-save"></span> Save
																		Changes
																	</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<div class="accordion-header">
													<a href="#" class="accordion-button collapsed"
														data-bs-toggle="collapse" data-bs-target="#account-collapse2"
														aria-expanded="false" aria-controls="account-collapse2">
														<div>
															<h6>Social Account</h6>
															<p>Connect your social account</p>
														</div>
													</a>
												</div>
												<div id="account-collapse2" class="accordion-collapse collapse"
													data-bs-parent="#accordion-account">
													<div class="accordion-body">
														<div class="group-form">
															<form action="#">
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Facebook" />
																	<span class="input-group-text"><i
																			class="feather-facebook"></i></span>
																</div>
																<div class="input-group">
																	<input type="email" class="form-control"
																		placeholder="Instagram" />
																	<span class="input-group-text"><i
																			class="feather-instagram"></i></span>
																</div>
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Linkedin" />
																	<span class="input-group-text"><i
																			class="feather-linkedin"></i></span>
																</div>
																<div>
																	<button type="submit" class="theme-btn w-100">
																		<span class="feather-save"></span> Save
																		Changes
																	</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Screen Lock</h6>
															<p>Enable your screen lock</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="label">Security</div>
									<div class="item">
										<div class="accordion accordion-flush" id="accordion-security">
											<div class="accordion-item">
												<div class="accordion-header">
													<a href="#" class="accordion-button collapsed"
														data-bs-toggle="collapse" data-bs-target="#security-collapse1"
														aria-expanded="false" aria-controls="security-collapse1">
														<div>
															<h6>Password</h6>
															<p>Change your password</p>
														</div>
													</a>
												</div>
												<div id="security-collapse1" class="accordion-collapse collapse"
													data-bs-parent="#accordion-security">
													<div class="accordion-body">
														<div class="group-form">
															<form action="#">
																<div class="input-group">
																	<input type="password" class="form-control"
																		placeholder="Old password" />
																	<span class="input-group-text"><i
																			class="feather-key"></i></span>
																</div>
																<div class="input-group">
																	<input type="email" class="form-control"
																		placeholder="New password" />
																	<span class="input-group-text"><i
																			class="feather-key"></i></span>
																</div>
																<div class="input-group">
																	<input type="text" class="form-control"
																		placeholder="Re-type password" />
																	<span class="input-group-text"><i
																			class="feather-key"></i></span>
																</div>
																<div>
																	<button type="submit" class="theme-btn w-100">
																		<span class="feather-edit-2"></span>
																		Change Password
																	</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Two-Factor Authentication</h6>
															<p>Enable two-factor authentication</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="label">Privacy</div>
									<div class="item">
										<div class="accordion accordion-flush">
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Private profile photo</h6>
															<p>Make your profile photo private</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Last seen</h6>
															<p>Show your last active status</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" checked />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Friend Invite</h6>
															<p>Anyone send friend invitation</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" checked />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Media Auto Download</h6>
															<p>Your media files auto download</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" checked />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="label">Notifications</div>
									<div class="item">
										<div class="accordion accordion-flush">
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Notifications</h6>
															<p>Enable notifications</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" checked />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Message Notifications</h6>
															<p>Enable message notifications</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Call Notifications</h6>
															<p>Enable call notifications</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Notifications Sound</h6>
															<p>Enable notifications sound</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="label">Storage</div>
									<div class="item">
										<div class="accordion accordion-flush" id="accordion-storage">
											<div class="accordion-item">
												<div class="accordion-header">
													<a href="#" class="accordion-button collapsed"
														data-bs-toggle="collapse" data-bs-target="#storage-collapse1"
														aria-expanded="false" aria-controls="storage-collapse1">
														<div>
															<h6>Storage Use</h6>
															<p>See your storage use</p>
														</div>
													</a>
												</div>
												<div id="storage-collapse1" class="accordion-collapse collapse"
													data-bs-parent="#accordion-storage">
													<div class="accordion-body">
														<div class="storage-progress">
															<p class="storage-progress-text">
																Disk uses <span>25%</span> of your storage
															</p>
															<div class="progress" role="progressbar"
																aria-label="Example with label" aria-valuenow="25"
																aria-valuemin="0" aria-valuemax="100">
																<div class="progress-bar" style="width: 25%">
																	25%
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Auto Backup</h6>
															<p>Backup your media files daily</p>
														</div>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" />
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<a href="#" class="accordion-button">
														<div>
															<h6>Clear Storage</h6>
															<p>Delete your all media files</p>
														</div>
														<div class="icon">
															<i class="feather-trash-2"></i>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="label">Last Activity</div>
									<div class="item">
										<div class="accordion accordion-flush">
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Windows - Sat 10:15 PM</h6>
															<p>Chrome Browser - Parkway, USA</p>
														</div>
														<span class="danger" data-bs-toggle="tooltip"
															title="Active Device"><i
																class="far fa-circle-dot"></i></span>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>iPhone - Sun 12:15 PM</h6>
															<p>Chrome Browser - Parkway, USA</p>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<div class="accordion-button">
														<div>
															<h6>Android - Fri 11:25 AM</h6>
															<p>Chrome Browser - Parkway, USA</p>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item accordion-text">
												<div class="accordion-header">
													<a href="#" class="accordion-button">
														<div>
															<h6>Clear All Sessions</h6>
															<p>Sign out from all devices</p>
														</div>
														<div class="icon">
															<i class="feather-log-out"></i>
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

					<div class="tab-pane help fade" id="pills-sm7" role="tabpanel" aria-labelledby="pills-sm-tab7"
						tabindex="0">
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
														data-bs-toggle="collapse" data-bs-target="#help-collapse1"
														aria-expanded="false" aria-controls="help-collapse1">
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
																		reader will be distracted by the readable
																		content of a page when looking at its
																		layout.
																	</p>
																</li>
																<li>
																	<h6>Do I need an account?</h6>
																	<p>
																		It is a long established fact that a
																		reader will be distracted by the readable
																		content of a page when looking at its
																		layout.
																	</p>
																</li>
																<li>
																	<h6>How to send friend invite?</h6>
																	<p>
																		It is a long established fact that a
																		reader will be distracted by the readable
																		content of a page when looking at its
																		layout.
																	</p>
																</li>
																<li>
																	<h6>How to create a group?</h6>
																	<p>
																		It is a long established fact that a
																		reader will be distracted by the readable
																		content of a page when looking at its
																		layout.
																	</p>
																</li>
																<li>
																	<h6>How to reset my password?</h6>
																	<p>
																		It is a long established fact that a
																		reader will be distracted by the readable
																		content of a page when looking at its
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
														data-bs-toggle="collapse" data-bs-target="#help-collapse2"
														aria-expanded="false" aria-controls="help-collapse2">
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
																	<textarea class="form-control" cols="30" rows="4"
																		placeholder="Your message"></textarea>
																</div>
																<div>
																	<button type="submit" class="theme-btn w-100">
																		<span class="feather-send"></span> Send
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
			<!-- //////////////   side-menu-tab ////////////////////// -->

			<!-- //////////////   layout-content ////////////////////// -->
			<?php

			$room = $_SESSION['room'];
			?>

			<script src="https://code.jquery.com/jquery-3.5.1.js"
				integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
			<div class="layout-content">
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
																<input type="text" class="form-control"
																	placeholder="Search Here..." />
																<span class="input-group-text"><i
																		class="feather-search"></i></span>
															</div>
														</form>
													</div>
												</div>
											</li>
											<li class="user-btn">
												<button type="button" class="action-btn" data-bs-toggle="offcanvas"
													data-bs-target="#chatUserMore" aria-controls="chatUserMore">
													<i class="feather-user"></i>
												</button>
											</li>
											<li class="audio-call">
												<button type="button" class="action-btn" data-bs-toggle="modal"
													data-bs-target="#audio-call">
													<i class="feather-phone"></i>
												</button>
											</li>
											<li class="video-call">
												<button type="button" class="action-btn" data-bs-toggle="modal"
													data-bs-target="#video-call">
													<i class="feather-video"></i>
												</button>
											</li>
											<li>
												<div class="dropdown">
													<button type="button" class="action-btn" data-bs-toggle="dropdown"
														aria-expanded="false">
														<i class="feather-more-vertical"></i>
													</button>
													<ul class="dropdown-menu dropdown-menu-end">
														<li>
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#chatUserMore"
																aria-controls="chatUserMore"><i
																	class="feather-user"></i>Profile Info</a>
														</li>
														<li>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#audio-call"><i
																	class="feather-phone"></i>Audio Call</a>
														</li>
														<li>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#video-call"><i
																	class="feather-video"></i>Video Call</a>
														</li>
														<li>
															<a class="dropdown-item" href="#"><i
																	class="feather-volume-x"></i>Mute
																Notifications</a>
														</li>
														<li>
															<a class="dropdown-item" href="#"><i
																	class="feather-trash-2"></i>Delete Chat</a>
														</li>
														<li>
															<hr class="dropdown-divider" />
														</li>
														<li>
															<a class="dropdown-item" href="#"><i
																	class="feather-slash"></i>Block User</a>
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
																class=" form-control" placeholder="Enter to send">
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

				<div class="chat-user-more offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
					tabindex="-1" id="chatUserMore" aria-labelledby="chatUserMoreLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="chatUserMoreLabel">Profile Info</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
							<i class="far fa-xmark"></i>
						</button>
					</div>
					<div class="offcanvas-body scrollbar-wrap">
						<div class="chat-user-info">
							<div class="profile-content">
								<div class="profile-top">
									<div class="avatar">
										<img src="assets/img/account/02.jpg" alt />
										<span class="status online"></span>
									</div>
									<h5>Brandi Ingles</h5>
									<p>I'm a professional graphic designer.</p>
								</div>
								<div class="profile-wrap">
									<div class="label">Profile Info</div>
									<div class="profile-info">
										<ul>
											<li class="item">
												<div class="info">
													<h6>Name</h6>
													<p>Brandi Ingles</p>
												</div>
												<div class="icon">
													<i class="feather-user"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Email</h6>
													<p>
														<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
															data-cfemail="5f313e323a1f3a273e322f333a713c3032">[email&#160;protected]</a>
													</p>
												</div>
												<div class="icon">
													<i class="feather-mail"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Phone</h6>
													<p>(+2) 123 456 7889</p>
												</div>
												<div class="icon">
													<i class="feather-phone-call"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Location</h6>
													<p>Parkway Drive, USA</p>
												</div>
												<div class="icon">
													<i class="feather-globe"></i>
												</div>
											</li>
											<li class="item">
												<div class="info">
													<h6>Join Date</h6>
													<p>Aug 21, 2024</p>
												</div>
												<div class="icon">
													<i class="feather-calendar"></i>
												</div>
											</li>
										</ul>
									</div>
									<div class="label">Share Photos & Files</div>
									<div class="chat-user-file">
										<div class="chat-user-item">
											<div class="accordion accordion-flush" id="chatUserFile">
												<div class="accordion-item">
													<h2 class="accordion-header">
														<a href="#" class="accordion-button collapsed"
															data-bs-toggle="collapse"
															data-bs-target="#chatuser-collapse1" aria-expanded="false"
															aria-controls="chatuser-collapse1">
															<div>
																<h6>Share Photo Gallery</h6>
																<p>Both your share photos</p>
															</div>
														</a>
													</h2>
													<div id="chatuser-collapse1" class="accordion-collapse collapse"
														data-bs-parent="#chatUserFile">
														<div class="accordion-body">
															<div class="chat-user-photo">
																<div class="message-img popup-gallery">
																	<div class="img-item">
																		<img src="assets/img/message/01.jpg" alt />
																		<div class="overlay">
																			<a class="popup-img"
																				href="assets/img/message/01.jpg"
																				title="Demo 01"><i
																					class="feather-eye"></i></a>
																			<a class="download" href="#"><i
																					class="feather-download"></i></a>
																		</div>
																	</div>
																	<div class="img-item">
																		<img src="assets/img/message/02.jpg" alt />
																		<div class="overlay">
																			<a class="popup-img"
																				href="assets/img/message/02.jpg"
																				title="Demo 02"><i
																					class="feather-eye"></i></a>
																			<a class="download" href="#"><i
																					class="feather-download"></i></a>
																		</div>
																	</div>
																	<div class="img-item">
																		<img src="assets/img/message/03.jpg" alt />
																		<div class="overlay">
																			<a class="popup-img"
																				href="assets/img/message/03.jpg"
																				title="Demo 03"><i
																					class="feather-eye"></i></a>
																			<a class="download" href="#"><i
																					class="feather-download"></i></a>
																		</div>
																	</div>
																	<div class="img-item">
																		<img src="assets/img/message/04.jpg" alt />
																		<div class="overlay">
																			<a class="popup-img"
																				href="assets/img/message/04.jpg"
																				title="Demo 04"><i
																					class="feather-eye"></i></a>
																			<a class="download" href="#"><i
																					class="feather-download"></i></a>
																		</div>
																	</div>
																	<div class="img-item">
																		<img src="assets/img/message/05.jpg" alt />
																		<div class="overlay">
																			<a class="popup-img"
																				href="assets/img/message/05.jpg"
																				title="Demo 05"><i
																					class="feather-eye"></i></a>
																			<a class="download" href="#"><i
																					class="feather-download"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header">
														<a href="#" class="accordion-button collapsed"
															data-bs-toggle="collapse"
															data-bs-target="#chatuser-collapse2" aria-expanded="false"
															aria-controls="chatuser-collapse2">
															<div>
																<h6>Share All Files</h6>
																<p>Both your share all media & files</p>
															</div>
														</a>
													</h2>
													<div id="chatuser-collapse2" class="accordion-collapse collapse"
														data-bs-parent="#chatUserFile">
														<div class="accordion-body">
															<div class="chat-user-file">
																<ul class="file-list">
																	<li class="file-item">
																		<div class="avatar">
																			<img src="assets/img/message/01.jpg" alt />
																		</div>
																		<div class="file-info">
																			<h6>image-1.jpg</h6>
																			<span>3.25 MB image file</span>
																		</div>
																		<div class="file-action">
																			<div class="dropdown">
																				<button type="button"
																					data-bs-toggle="dropdown"
																					aria-expanded="false">
																					<i
																						class="feather-more-vertical"></i>
																				</button>
																				<ul
																					class="dropdown-menu dropdown-menu-end">
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-download"></i>Download</a>
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-share-2"></i>Share</a>
																					</li>
																					<li>
																						<hr class="dropdown-divider" />
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-trash-2"></i>Delete</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</li>
																	<li class="file-item">
																		<div class="avatar">
																			<span class="avatar-text"><i
																					class="far fa-file-zipper"></i></span>
																		</div>
																		<div class="file-info">
																			<h6>example.zip</h6>
																			<span>10.25 MB zip file</span>
																		</div>
																		<div class="file-action">
																			<div class="dropdown">
																				<button type="button"
																					data-bs-toggle="dropdown"
																					aria-expanded="false">
																					<i
																						class="feather-more-vertical"></i>
																				</button>
																				<ul
																					class="dropdown-menu dropdown-menu-end">
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-download"></i>Download</a>
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-share-2"></i>Share</a>
																					</li>
																					<li>
																						<hr class="dropdown-divider" />
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-trash-2"></i>Delete</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</li>
																	<li class="file-item">
																		<div class="avatar">
																			<span
																				class="avatar-text theme-bg-primary"><i
																					class="far fa-video"></i></span>
																		</div>
																		<div class="file-info">
																			<h6>video-1.mp4</h6>
																			<span>20.50 MB video file</span>
																		</div>
																		<div class="file-action">
																			<div class="dropdown">
																				<button type="button"
																					data-bs-toggle="dropdown"
																					aria-expanded="false">
																					<i
																						class="feather-more-vertical"></i>
																				</button>
																				<ul
																					class="dropdown-menu dropdown-menu-end">
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-download"></i>Download</a>
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-share-2"></i>Share</a>
																					</li>
																					<li>
																						<hr class="dropdown-divider" />
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-trash-2"></i>Delete</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</li>
																	<li class="file-item">
																		<div class="avatar">
																			<span class="avatar-text theme-bg-danger"><i
																					class="far fa-music"></i></span>
																		</div>
																		<div class="file-info">
																			<h6>audio-1.mp3</h6>
																			<span>6.25 MB audio file</span>
																		</div>
																		<div class="file-action">
																			<div class="dropdown">
																				<button type="button"
																					data-bs-toggle="dropdown"
																					aria-expanded="false">
																					<i
																						class="feather-more-vertical"></i>
																				</button>
																				<ul
																					class="dropdown-menu dropdown-menu-end">
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-download"></i>Download</a>
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-share-2"></i>Share</a>
																					</li>
																					<li>
																						<hr class="dropdown-divider" />
																					</li>
																					<li>
																						<a class="dropdown-item"
																							href="#"><i
																								class="feather-trash-2"></i>Delete</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</li>
																</ul>
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
			</div>
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

	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>