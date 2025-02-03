<?php
			if (isset($_SESSION['room'])) {
					$room = $_SESSION['room'];
					$readSql = "SELECT * FROM `$room`";
					$readResult = mysqli_query($conn, $readSql);
					?>
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
												<img src="assets/img/account/02.jpg" alt />
												<span class="status online"></span>
											</div>

											<div class="info">
												<h6>Brandi Ingles</h6>
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
												<?php
												if (mysqli_num_rows($readResult) > 0) {
													while ($data = mysqli_fetch_assoc($readResult)) {
														$getUsername = $data['username'];
														$getDate = substr($data['date'], 0, -3);
														$getImg = "SELECT * FROM `dp` WHERE `username` = '$getUsername';";
														$imgResult = mysqli_query($conn, $getImg);
														if (mysqli_num_rows($imgResult) > 0) {
															$imgData = mysqli_fetch_array($imgResult);
															$folder = $imgData['folder'];
														} else {
															$folder = "asset/user.png";
														}
														if ($getUsername != $username) {
															?>
															<div class="message-item">
																<div class="message-user">
																	<div class="avatar">
																		<img src="$folder" alt />
																	</div>
																</div>
																<div class="message-wrap">
																	<div class="message-content">
																		<div class="message-info">
																			<div class="message-text">
																				<div class="message-time">
																					<i class="far fa-check-double success"></i>
																					<?php echo $data['msg']; ?>
																				</div>
																				<p style="width: 100px; ">
																					<?php echo $getDate; ?>
																				</p>
																			</div>
																			<div class="message-action">
																				<div class="dropdown">
																					<button type="button" data-bs-toggle="dropdown"
																						aria-expanded="false">
																						<i class="feather-more-vertical"></i>
																					</button>
																					<ul class="dropdown-menu dropdown-menu-end">
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-copy"></i>Copy</a>
																						</li>
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-corner-up-right"></i>Forward</a>
																						</li>
																						<li>
																							<hr class="dropdown-divider" />
																						</li>
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-trash-2"></i>Remove</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<?php
														} else {
															$getUsername = "You";
															?>
															<div class="message-item message-self">
																<div class="message-user">
																	<div class="avatar">
																		<img src="<?php echo $folder; ?>" alt />
																	</div>
																</div>
																<div class="message-wrap">
																	<div class="message-content">
																		<div class="message-info">
																			<div class="message-text">
																				<div class="message-time">
																					<i class="far fa-check-double"></i>
																					<?php echo $getDate; ?>
																				</div>
																				<p>
																					<?php echo $data['msg']; ?>
																				</p>
																			</div>
																			<div class="message-action">
																				<div class="dropdown">
																					<button type="button" data-bs-toggle="dropdown"
																						aria-expanded="false">
																						<i class="feather-more-vertical"></i>
																					</button>
																					<ul class="dropdown-menu">
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-copy"></i>Copy</a>
																						</li>
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-corner-up-right"></i>Forward</a>
																						</li>
																						<li>
																							<hr class="dropdown-divider" />
																						</li>
																						<li>
																							<a class="dropdown-item" href="#"><i
																									class="feather-trash-2"></i>Remove</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<?php
														}
													}
												}
			}
			?>
										</div>
									</div>
								</div>

								<div class="chat-bottom">
									<div class="chat-form">
										<form action="#">
											<div class="chat-form-wrap">
												<div class="microphone">
													<button type="button">
														<i class="feather-mic"></i>
													</button>
												</div>
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Type your message..." />
												</div>
												<div class="emoji">
													<button type="button">
														<i class="feather-smile"></i>
													</button>
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
												</div>
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