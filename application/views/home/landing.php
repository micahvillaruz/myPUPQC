<body data-bs-spy="scroll" data-bs-target="#navbar-example">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="KOSJDxRE"></script>
	<!-- Begin page -->
	<div class="layout-wrapper landing">
		<nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-dark" alt="myPUPQC logo" height="25">
				</a>
				<button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="mdi mdi-menu"></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
						<li class="nav-item">
							<a class="nav-link active" href="#hero">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#wallet">About PUP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#marketplace">Academic</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#categories">Students</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#creators">Research</a>
						</li>
					</ul>

					<div class="">
						<a href="apps-nft-wallet.html" class="btn btn-primary">Contact Us</a>
					</div>
				</div>

			</div>
		</nav>
		<div class="bg-overlay bg-overlay-pattern"></div>
		<!-- end navbar -->

		<!-- start hero section -->
		<section class="section pup-hero" id="hero">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid mx-auto landing-img" src="<?= base_url() ?>public/images/landing/landing-1.jpg">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section><!-- end hero section -->

		<!-- start client section -->
		<div class="pt-5 mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center mt-5">
							<div class="row">
								<div class="col-3">
									<a href=""><i class="bx bx-edit border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Enroll Now</span>
								</div>
								<div class="col-3">
									<a href=""><i class="bx bx-calendar-event border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Attend an Event</span>
								</div>
								<div class="col-3">
									<a href=""><i class="bx bx-file border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Request Document</span>
								</div>
								<div class="col-3">
									<a href=""><i class="bx bxs-school border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Schedule Appointment</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</div>
		<!-- end client section -->

		<!-- start services -->
		<section class="section" id="services">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-xl-4 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0 fw-medium text-primary">Announcements and Advisories</h4>
							</div><!-- end card header -->

							<div class="card-body">
								<div class="mx-n3">
									<div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="primary" style="max-height: 340px;">
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Dengue Prevention Advisory</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">10 Aug, 2022,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item active">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">General Guidelines in Borrowing, Returning, and Renewal of Library Materials Under Alert Level 1 Classification</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">18 Apr, 2022,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Internal Guidelines for Opt-Out and Voluntary Contribution of Students under Republic Act 10931</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">04 Apr, 2022,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Resolution No. 2022-01 (PESDI), Internal Rules and Forms</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">27 May, 2022,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Revised Alternative Payment Procedure</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">17 Aug, 2021,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Revised Alternative Payment Procedure</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">17 Aug, 2021,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="#!" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Revised Alternative Payment Procedure</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">17 Aug, 2021,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<div class="text-center my-2">
											<a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
										</div>
									</div>
								</div>
							</div><!-- end card-body -->
						</div><!-- end card -->
					</div>
					<!-- end col -->
					<div class="col-xl-4 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0 fw-medium text-primary">Latest News from the University</h4>
							</div><!-- end card header -->
							<div class="card-body">
								<!-- Swiper -->
								<div class="swiper navigation-swiper rounded">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<img src="<?= base_url() ?>public/images/news/img-1.jpg" alt="" class="img-fluid mb-4" />
											<h5 class="text-wrap fs-14 mb-1 text-primary">PUP President Muhi announces face-to-face recognition and graduation rites</h5>
											<span class="fs-13">1 Aug, 2022,</span>
											<small class="text-muted">09:48 AM</small>
										</div>
										<div class="swiper-slide">
											<img src="<?= base_url() ?>public/images/news/img-2.jpg" alt="" class="img-fluid mb-4" />
											<h5 class="text-wrap fs-14 mb-1 text-primary">Succession of new PUPQC Aministration Announced for Academic Year 22-23</h5>
											<span class="fs-13">13 Jul, 2022,</span>
											<small class="text-muted">02:15 PM</small>
										</div>
										<div class="swiper-slide">
											<img src="<?= base_url() ?>public/images/news/img-3.jpg" alt="" class="img-fluid mb-4" />
											<h5 class="text-wrap fs-14 mb-1 text-primary">PUPQC Heralds its New Set of Leaders</h5>
											<span class="fs-13">17 Jul, 2022,</span>
											<small class="text-muted">03:29 PM</small>
										</div>

									</div>
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
									<div class="swiper-pagination"></div>
								</div>
							</div><!-- end card-body -->
						</div><!-- end card -->
					</div>
					<!--end col-->
					<div class="col-xl-2 col-lg-6">
						<div class="mb-2">
							<a href="">
								<img class="rounded" alt="200x200" width="200" src="<?= base_url() ?>public/images/links/PUP Appointment.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="">
								<img class="rounded" alt="200x200" width="200" src="<?= base_url() ?>public/images/links/PUP iApply.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="">
								<img class="rounded" alt="200x200" width="200" src="<?= base_url() ?>public/images/links/PUPSIS.jpg">
							</a>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>
		<!-- end services -->

		<!-- start plan -->
		<section class="section bg-light" id="plans">
			<div class="bg-overlay bg-overlay-pattern"></div>
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-6">
						<div class="fb-page" data-href="https://www.facebook.com/sscpupquezoncity" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/sscpupquezoncity" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sscpupquezoncity">PUPQC Supreme Student Council</a></blockquote>
						</div>
					</div>
					<!--end col-->
					<div class="col-lg-6">
						<div class="row gap-4">
							<div class="col-lg-12">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/NPKPqbmXPaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="col-lg-12">
								<iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6x7hlv9qZX8VpwMIRAAiRb?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
							</div>
						</div>
					</div>
					<!--end col-->
				</div>
				<!--end row-->
			</div>
			<!-- end container -->
		</section>
		<!-- end plan -->

		<!-- start contact -->
		<section class="section" id="contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="text-center mb-5">
							<h3 class="mb-3 fw-semibold">Get In Touch</h3>
							<p class="text-muted mb-4 ff-secondary">
								When you contact the University through this Website, your submission is reviewed and then routed to the office/department concerned that can best attend to your needs. We are committed in listening to you and improving our services based upon your wishes. Your suggestion(s) will be reviewed by the department that implements those changes.
							</p>
						</div>
					</div>
				</div>
				<!-- end row -->

				<div class="row gy-4">
					<div class="col-lg-4">
						<div>
							<div class="mt-4">
								<h5 class="fs-13 text-muted text-uppercase">School Address:</h5>
								<div class="ff-secondary fw-semibold">Don Fabian St., Commonwealth, <br />Quezon City, Philippines</div>
							</div>
							<div class="mt-4">
								<h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
								<div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
							</div>
							<div class="mt-4">
								<h5 class="fs-13 text-muted text-uppercase">Telephone:</h5>
								<div class="ff-secondary fw-semibold">8-287-82-04</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-8">
						<div>
							<form>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="name" class="form-label fs-13">Name</label>
											<input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your name*" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="email" class="form-label fs-13">Email</label>
											<input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email*" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-4">
											<label for="subject" class="form-label fs-13">Subject</label>
											<input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Your Subject.." />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label for="comments" class="form-label fs-13">Message</label>
											<textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message..."></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 text-end">
										<input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>
		<!-- end contact -->

		<!-- Start footer -->
		<footer class="custom-footer bg-dark py-5 position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 ms-lg-auto">
						<div class="row">
							<div class="col-sm-6 mt-4">
								<h5 class="text-white text-uppercase mb-0">Online Services</h5>
								<div class="text-muted mt-3">
									<ul class="list-unstyled ff-secondary footer-list">
										<li><a href="#">PUP WebMail</a></li>
										<li><a href="#">PUP iApply</a></li>
										<li><a href="#">Student Information System</a></li>
										<li><a href="#">OSSSAC</a></li>
										<li><a href="#">PUP Appointment System</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 mt-4">
								<h5 class="text-white mb-0 text-uppercase">Quick Links</h5>
								<div class="text-muted mt-3">
									<ul class="list-unstyled ff-secondary footer-list">
										<li><a href="#">About PUP</a></li>
										<li><a href="#">Admission Information</a></li>
										<li><a href="#">Academic Programs</a></li>
										<li><a href="#">Transparency Seal</a></li>
										<li><a href="#">Bid Notices and Invitation</a></li>
										<li><a href="#">International Affairs</a></li>
										<li><a href="#">Jobs for PUPians</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-4">
						<div>
							<h5 class="text-white mb-3 text-uppercase">Keep in touch</h5>
							<div class="mt-sm-0">
								<ul class="list-inline mb-0 footer-social-link">
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="avatar-xs d-block">
											<div class="avatar-title rounded-circle">
												<i class="ri-facebook-fill"></i>
											</div>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="avatar-xs d-block">
											<div class="avatar-title rounded-circle">
												<i class="ri-github-fill"></i>
											</div>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="avatar-xs d-block">
											<div class="avatar-title rounded-circle">
												<i class="ri-linkedin-fill"></i>
											</div>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="avatar-xs d-block">
											<div class="avatar-title rounded-circle">
												<i class="ri-google-fill"></i>
											</div>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="avatar-xs d-block">
											<div class="avatar-title rounded-circle">
												<i class="ri-dribbble-line"></i>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="mt-4">
								<h5 class="text-white mb-0 text-uppercase">Contact Us</h5>
								<div class="mt-3">
									<p>Phone: 8-287-82-04 or 5335-1777</p>
									<p>Email: inquire@pup.edu.ph</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row text-center text-sm-center align-items-center mt-5">
					<div class="col-sm-12">
						<div>
							<p class="copy-rights mb-0 text-uppercase">
								<script>
									document.write(new Date().getFullYear())
								</script>
								© Polytechnic University of the Philippines - Quezon City Branch
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</div>
	<!-- end layout wrapper -->