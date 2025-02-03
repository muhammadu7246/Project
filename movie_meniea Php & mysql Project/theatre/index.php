<?php
include('header.php');
include('slidebar.php');
?>
<!-- main content -->
<main class="main">
	<div class="container-fluid">
		<div class="row">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Dashboard</h2>

					<a href="add-item.html" class="main__title-link">add item</a>
				</div>
			</div>
			<!-- end main title -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>All Users</span>
					<!-- <p>647236</p> -->
					<?php
					$sql = "SELECT COUNT(*) as total_users FROM tbl_login";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						// Fetch the row
						$row = $result->fetch_assoc();
						?>
						<p>
							<?php
							echo $row['total_users'];
							?>
						</p>
						<?php
					} else {
						$total_users = 0;
						echo $total_users;
					}
					?>

					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
					</svg>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>All theater</span>
					<p><!-- <p>647236</p> -->
					<?php
					$sql = "SELECT COUNT(*) as total_users FROM tbl_theatre";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						// Fetch the row
						$row = $result->fetch_assoc();
						?>
						<p>
							<?php
							echo $row['total_users'];
							?>
						</p>
						<?php
					} else {
						$total_users = 0;
						echo $total_users;
					}
					?>
					</p>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M10,13H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,19H5V15H9ZM20,3H14a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM19,9H15V5h4Zm1,7H18V14a1,1,0,0,0-2,0v2H14a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V18h2a1,1,0,0,0,0-2ZM10,3H4A1,1,0,0,0,3,4v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,10,3ZM9,9H5V5H9Z" />
					</svg>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>All movies</span>
					<p><?php
					$sql = "SELECT COUNT(*) as total_users FROM tbl_movie";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						// Fetch the row
						$row = $result->fetch_assoc();
						?>
						<p>
							<?php
							echo $row['total_users'];
							?>
						</p>
						<?php
					} else {
						$total_users = 0;
						echo $total_users;
					}
					?>
					</p>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z" />
					</svg>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>All Bookings</span>
					<p><?php
					$sql = "SELECT COUNT(*) as total_users FROM tbl_bookings";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
						// Fetch the row
						$row = $result->fetch_assoc();
						?>
						<p>
							<?php
							echo $row['total_users'];
							?>
						</p>
						<?php
					} else {
						$total_users = 0;
						echo $total_users;
					}
					?></p>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
					</svg>
				</div>
			</div>
			<!-- end stats -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M12,6a1,1,0,0,0-1,1V17a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6ZM7,12a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V13A1,1,0,0,0,7,12Zm10-2a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V11A1,1,0,0,0,17,10Zm2-8H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
							</svg>New Show</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 24 24">
									<path
										d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>
							<a class="dashbox__more" href="catalog.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap dashbox__table-wrap--1">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>Movie</th>
									<th>Show Time</th>
									<th>Screen</th>
									<!-- <th>RATING</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								$qry8 = mysqli_query($con, "select * from tbl_shows where r_status=1 and theatre_id='" . $_SESSION['theatre'] . "'");
								$no = 1;
								while ($mn = mysqli_fetch_array($qry8)) {
									$qry9 = mysqli_query($con, "select * from tbl_movie where movie_id='" . $mn['movie_id'] . "'");
									$mov = mysqli_fetch_array($qry9);
									$qry10 = mysqli_query($con, "select * from tbl_show_time where st_id='" . $mn['st_id'] . "'");
									$scr = mysqli_fetch_array($qry10);
									$qry11 = mysqli_query($con, "select * from tbl_screens where screen_id='" . $scr['screen_id'] . "'");
									$scn = mysqli_fetch_array($qry11);
									?>

									<tr>
										<td>
											<div class="main__table-text"><?php echo $no; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a href="#"><?php echo $mov['movie_name']; ?></a>
											</div>
										</td>
										<td>
											<div class="main__table-text"><a href="#"><?php echo $scn['screen_name']; ?></a>
											</div>
										</td>
										<td>
											<div class="main__table-text"><a
													href="#"><?php echo $scr['start_time']; ?>(<?php echo $scr['name']; ?>)</a>
											</div>
										</td>
									</tr>
									<?php
									$no = $no + 1;

								}
								?>


							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z" />
							</svg>New Users</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 24 24">
									<path
										d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>
							<a class="dashbox__more" href="catalog.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap dashbox__table-wrap--2">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Age</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$qry71 = mysqli_query($con, "select * from tbl_registration  order BY name DESC LIMIT 10 
								 ");
								if (mysqli_num_rows($qry71)) {
									while ($d = mysqli_fetch_array($qry71)) {
										?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $d['user_id']; ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $d['name']; ?></a>
												</div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $d['email']; ?></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--green">
													<?php echo $d['age']; ?>
												</div>
											</td>
										</tr>
										<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
							</svg>Theatre</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 24 24">
									<path
										d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>
							<a class="dashbox__more" href="users.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap dashbox__table-wrap--3">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>Theatre Name</th>
									<th>Adress</th>
									<th>State</th>
								</tr>
							</thead>
							<tbody>
								<!-- ORDER BY  DESC LIMIT 10 -->
								<?php
								$qry71 = mysqli_query($con, "select * from tbl_theatre
								 ");
								if (mysqli_num_rows($qry71)) {
									while ($d = mysqli_fetch_array($qry71)) {
										?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $d['id']; ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $d['name']; ?></a></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--grey"><?php echo $d['place']; ?>
												</div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $d['state']; ?></div>
											</td>
										</tr>
										<?php
									}
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
							</svg> Latest Bookings</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 24 24">
									<path
										d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>
							<a class="dashbox__more" href="reviews.html">View All</a>
						</div>
					</div>

					<div class="dashbox__table-wrap dashbox__table-wrap--4">
						<table class="main__table main__table--dash">
							<thead>
								<tr>
									<th>ID</th>
									<th>Ticket ID</th>
									<th>Amount</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<!-- ORDER BY  DESC LIMIT 10 -->
								<?php
								$qry71 = mysqli_query($con, "select * from tbl_bookings
								 ");
								if (mysqli_num_rows($qry71)) {
									while ($d = mysqli_fetch_array($qry71)) {
										?>
										<tr>
											<td>
												<div class="main__table-text"><?php echo $d['book_id']; ?></div>
											</td>
											<td>
												<div class="main__table-text"><a href="#"><?php echo $d['ticket_id']; ?></a>
												</div>
											</td>
											<td>
												<div class="main__table-text"><?php echo $d['amount']; ?></div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><?php echo $d['date']; ?>
												</div>
											</td>
										</tr>

										<?php
									}
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->
		</div>
	</div>
</main>


<?php
include('header.php');
?>