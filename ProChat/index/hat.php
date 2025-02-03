<?php
error_reporting(0);

include "conn.php";
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
	$room = $_SESSION['room'];
	$readSql = "SELECT * FROM `$room`";
	$readResult = mysqli_query($conn, $readSql);
	if (mysqli_num_rows($readResult) > 0) {
		while ($data = mysqli_fetch_assoc($readResult)) {
			$getUsername = $data['username'];
			$getImg = "SELECT `name` FROM `dp` WHERE `username` = '$getUsername';";
			$imgResult = mysqli_query($conn, $getImg);
			if (mysqli_num_rows($imgResult) > 0) {
				$imgData = mysqli_fetch_array($imgResult);
				$folder = $imgData['name'];  // Assuming 'name' is the column with the image path or file name
			} else {
				$folder = "asset/user.png";
			}
			if ($getUsername != $username) {
				echo "
                <div class='message-item'>
																<div class='message-user'>
																	<div class='avatar'>
																		<img src='" . $folder . "' alt />
																	</div>
																</div>
																<div class='message-wrap'>
																	<div class='message-content'>
																			<div class='message-info'>
																			<div class='message-text'>
																				<div class='message-time'>
																					<i class='far fa-check-double success'></i>
																					" . $data['date'] . "
																				</div>
																				<p style='width: 100px; '>
																					" . $data['msg'] . "
																				</p>
																			</div>
																			<div class='message-action'>
																				<div class='dropdown'>
																					<button type='button' data-bs-toggle='dropdown'
																						aria-expanded='false'>
																						<i class='feather-more-vertical'></i>
																					</button>
																					<ul class='dropdown-menu dropdown-menu-end'>
																						<li>
																							<a class='dropdown-item' href='#'><i
																									class='feather-copy'></i>Copy</a>
																						</li>
																						<li>
																							<a class='dropdown-item' href='#'><i
																									class='feather-corner-up-right'></i>Forward</a>
																						</li>
																						<li>
																							<hr class='dropdown-divider' />
																						</li>
																						<li>
																							<a class='dropdown-item' href='#'><i
																									class='feather-trash-2'></i>Remove</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>";
			} else {
				$folder = "asset/user.png";
				$getUsername = "You";
				echo "
                <div class='message-item message-self'>
					<div class='message-user'>
						<div class='avatar'>
							<img src='" . $folder . "' alt />
						</div>
					</div>
					<div class='message-wrap'>
						<div class='message-content'>
							<div class='message-info'>
								<div class='message-text'>
									<div class='message-time'>
										<i class='far fa-check-double'></i>
											" . $data['date'] . "
									</div>
									<p>
										" . $data['msg'] . "
									</p>
								</div>
								<div class='message-action'>
									<div class='dropdown'>
										<button type='button' data-bs-toggle='dropdown'
										aria-expanded='false'>
											<i class='feather-more-vertical'></i>
										</button>
											<ul class='dropdown-menu'>
												<li>
													<a class='dropdown-item' href='#'><i
														class='feather-copy'></i>Copy</a>
												</li>
												<li>
													<a class='dropdown-item' href='#'><i
													class='feather-corner-up-right'></i>Forward</a>
												</li>
												<li>
																								<hr class='dropdown-divider' />
																							</li>
																							<li>
																								<a class='dropdown-item' href='#'><i
																										class='feather-trash-2'></i>Remove</a>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>";
			}

		}
	}
	?>
</body>

</html>
