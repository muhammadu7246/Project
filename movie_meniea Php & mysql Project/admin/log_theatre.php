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
					<h2>theatre</h2>

					<span class="main__title-stat">? total</span>

					<div class="main__title-wrap">
						<!-- filter sort -->
						<div class="filter" id="filter__sort">
							<span class="filter__item-label">Sort by:</span>

							<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Date created">
								<span></span>
							</div>

							<ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
								aria-labelledby="filter-sort">
								<li>Date created</li>
								<li>Rating</li>
								<li>Views</li>
							</ul>
						</div>
						<!-- end filter sort -->

						<!-- search -->
						<form action="#" class="main__title-form">
							<input type="text" placeholder="Find movie / tv series..">
							<button type="button">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<circle cx="8.25998" cy="8.25995" r="7.48191" stroke="#2F80ED" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round"></circle>
									<path d="M13.4637 13.8523L16.3971 16.778" stroke="#2F80ED" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
						</form>
						<!-- end search -->
					</div>
				</div>
			</div>
			<!-- end main title -->

			<!-- users -->
			<div class="col-12">
				<div class="main__table-wrap">
					<table class="main__table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Email</th>
								<th>Password</th>
																
							</tr>
						</thead>

						<tbody>
							<?php include('msgbox.php'); ?>
							<?php
							$qry7 = mysqli_query($con, "SELECT * FROM tbl_login WHERE user_type = 1;");
							if (mysqli_num_rows($qry7)) {
								while ($c = mysqli_fetch_array($qry7)) {
									?>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $c['id']; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a href="#"><?php echo $c['username']; ?></a></div>
										</td>
										<td>
											<div class="main__table-text main__table-text--rate">
												<?php echo $c['password']; ?>
											</div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $c['user_type']; ?></div>
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
			<!-- end users -->

			<!-- paginator -->
			<div class="col-12">
				<div class="paginator">
					<span class="paginator__pages">10 from 14 452</span>

					<ul class="paginator__paginator">
						<li>
							<a href="#">
								<svg width="14" height="11" viewBox="0 0 14 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2"
										stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li>
							<a href="#">
								<svg width="14" height="11" viewBox="0 0 14 11" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2"
										stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- end paginator -->
		</div>
	</div>
</main>
<!-- end main content -->

<!-- modal status -->
<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Status change</h6>

	<p class="modal__text">Are you sure about immediately change status?</p>

	<div class="modal__btns">
		<button class="modal__btn modal__btn--apply" type="button">Apply</button>
		<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
	</div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Item delete</h6>

	<p class="modal__text">Are you sure to permanently delete this item?</p>

	<div class="modal__btns">
		<button class="modal__btn modal__btn--apply" type="button">Delete</button>
		<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
	</div>
</div>
<!-- end modal delete -->

<?php
include('header.php');
?>