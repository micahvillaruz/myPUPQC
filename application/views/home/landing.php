	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="KOSJDxRE"></script>
	<!-- Begin page -->
	<div class="layout-wrapper landing">
		<nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url() ?>">
					<img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-dark" alt="myPUPQC logo" height="25">
					<img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-light" alt="myPUPQC logo" height="25">
				</a>
				<button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="mdi mdi-menu"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mt-2 mt-lg-0 dropdown" id="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" href="<?= base_url() ?>">Home</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
									About PUP
								</a>
								<ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about">University Profile</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/vm">Vision and Mission</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/history">History</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/logo-and-symbols">Logo and Symbols</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/hymn">Hymn</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/annual-reports">Annual Reports</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/contact-us">Contact us</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/maps">Maps</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/code">University Code</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/memorandum-orders">Memorandum Orders</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/executive-orders">Executive Orders</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/codi-manual">CODI Manual</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>about/citizens-charter">Citizens Charter</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
									Academic
								</a>
								<ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>academic/programs">Academic Programs</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>academic/ous">Open University System</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://www.pup.edu.ph/nallrc/" target="_blank">Library Services</a>
										<!-- <a class="" href="<?= base_url() ?>academic/library">Library Services</a> -->
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>academic/ovpaa">OVPAA Advisories</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
									Students
								</a>
								<ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>#student-services">Student Services</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>student/organizations">Student Organizations</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>student/publications">Student Publications</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>student/council">Student Council</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>student/handbook">Student Handbook</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://sisstudents.pup.edu.ph/">PUP Student Information System</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://odrs.pup.edu.ph/">PUP Online Document Request System</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://apps.pup.edu.ph/books/">PUP Bookstore</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>student/downloads">Downloadable Forms</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
									Research
								</a>
								<ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>research/researches">Researches</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>research/extensions">Extensions</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>research/research-ethics">Research Ethics</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="<?= base_url() ?>research/intellectual-property">Intellectual Property</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://apps.pup.edu.ph/ojs/">PUP Online Journal System</a>
									</li>
									<li class="list-group-item dropdown-item">
										<a class="" href="https://drive.google.com/open?id=0B1BuDAuN0r8SMFpBYWNGckhUWkE">University Thesis and Dissertation Manual</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>

					<div class="">
						<a href="<?= base_url() ?>signin" class="btn btn-primary">Log In</a>
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
					<div class="carousel-item">
						<img class="d-block img-fluid mx-auto landing-img" src="<?= base_url() ?>public/images/landing/landing-2.png">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid mx-auto landing-img" src="<?= base_url() ?>public/images/landing/landing-3.png">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid mx-auto landing-img" src="<?= base_url() ?>public/images/landing/landing-4.png">
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

		<!-- start Work Process -->
		<section class="section">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<div class="text-center mt-5">
							<div class="row">
								<div class="col-3">
									<a href="<?= base_url() ?>applicants"><i class="bx bx-edit border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Enroll Now</span>
								</div>
								<div class="col-3">
									<a href="<?= base_url() ?>events"><i class="bx bx-calendar-event border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Attend an Event</span>
								</div>
								<div class="col-3">
									<a href="<?= base_url() ?>docu-request"><i class="bx bx-file border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Request Document</span>
								</div>
								<div class="col-3">
									<a href="https://apps.pup.edu.ph/appointment/"><i class="bx bxs-school border border-primary border-3 rounded-circle h2 p-3 text-primary"></i></a>
									<span class="d-block text-primary fw-medium">Schedule Appointment</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>
		<!-- end Work Process -->

		<!-- start team -->
		<section class="section bg-light" id="student-services">
			<div class="container">
				<div class="row hstack gap-1">
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-1.jpg" alt="Card image"></a>
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="https://sisstudents.pup.edu.ph/">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">Portal for PUP Students, view class schedule and grades</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">PUP Student Portal</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-2.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>scholarships">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">Access to educational opportunities in terms of scholarship and financial assistance to students</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">Scholarships</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-3.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>docu-request">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">Transcript of record, certification, clearance, honorable dismissal and diploma</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">Documents Processing</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-4.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>student/organizations">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">Get to know different student organizations</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">Student Organizations</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-5.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="https://osssac.pup.edu.ph">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">Online service dedicated to answer queries and reports of the students concerning admission, enrollment, library processes and more</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">Student Support</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col px-0">
						<div class="card card-overlay menu-row card-animate">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-6.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>calendar">
									<div class="card-body px-1">
										<p class="card-text text-white text-center mb-2">University Calendar for Academic Year 2021-2022</p>
									</div>
									<div class="card-footer bg-transparent">
										<h4 class="card-title text-white mb-0 text-center">Academic Calendar</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<h5 class="text-center text-primary"><i class="ri-question-fill"></i> If you have questions, you can look at our <a href="https://osssac.pup.edu.ph/knowledgebase.php" class="text-primary text-decoration-underline" target="_blank">FAQs</a>. Or email us at <a href="mailto:osssac@pup.edu.ph" class="text-primary text-decoration-underline">osssac@pup.edu.ph</a></h5>
				</div>
			</div>
			<!-- end container -->
		</section>
		<!-- end team -->

		<!-- start services -->
		<section class="section" id="services">
			<div class="container">
				<div class="row d-flex">
					<div class="col-xl-4 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0 fw-medium text-primary">Announcements and Advisories</h4>
							</div><!-- end card header -->

							<div class="card-body">
								<div class="mx-n3">
									<div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="primary" style="max-height: 494px;">
										<a href="https://www.facebook.com/sscpupquezoncity/videos/1919189238471683/" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">E-REPORT: Safe Space for PUPQC Students' Academic Issues & Concerns</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">23 Nov, 2021,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid0pJgkKFiqPrTVLvev4KCJk894vhgzipEJ1tccAySHAGoiYbKW5RmBnwjkY1rf1bB7l" class="text-reset notification-item d-block dropdown-item active">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">A Resolution Recognizing the Newly Established Student Commission on Election (COMELEC) in the Polytechnic University of the Philippines Quezon City Branch</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">13 Aug, 2022,</span>
														<small class="text-muted">02:36 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02wRAw94xJTYpbSXkT72qoTiqaCoyPUZ6xhRA8zjHqu742KjWCEYNe37Fpf2CWLBywl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">A Resolution Adopting the Amendments to the Constitution and By-Laws of the PUP Quezon City Supreme Student Council</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">04 Apr, 2022,</span>
														<small class="text-muted">02:21 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0EMX2xx6XxvW2JZ9Cf9rxDRoYsnVCVr5ACieVxtYsmFjSsZRViD7X4YUTTagRWcuXl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary"> Printing of Certificate of Candidacy (COC) will end on August 15, 2022</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">11 Aug, 2022,</span>
														<small class="text-muted">10:52 AM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0riNCN2XSpZV67VN4ynkr6JvAPJLPShndGJmy8vQvXVCHdzBt9e9o9GAyfxjYWozul" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Freshmen Students, submission of credentials is extended until August 31, 2022.</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">17 Aug, 2022,</span>
														<small class="text-muted">02:43 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid02v1vGtiw7i41YvzqwqhhiVwzwkdmYbzvhY76TRni8v5QKBLy6VsHVoVLwTgtfiQmBl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">BREAKING: CAEPUPQC RESULTS SET TO RELEASE TODAY THROUGH iAPPLY</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">24 Jun, 2022,</span>
														<small class="text-muted">05:18 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid02GuwAAiNxECZY5orgSMBcHBLjmbqJxk4U2qUAmxDmyRaxATWi1q7n9nqx15Je8XFrl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">Re-opening of the Application for Year-End Graduation AY 2021-2022 for the Main Campus and Branches and Campuses</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">08 Jun, 2022,</span>
														<small class="text-muted">03:19 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02SCZLiiEYuLVwMz3pRe6yPd66H88DsW8uoVWPXqKtbXZtYgFdLqrEggD1NSmqJP5Pl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">The application for graduation is extended until June 15, 2022 as per Ms. Cherrylyn Esparagoza of Admission Office.</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">02 Jun, 2022,</span>
														<small class="text-muted">03:35 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0QYZehnipJMkCkhBT7eVr2zgxCe3nmdTBLq19cdGJxia8uh5xYwDieAuehqPTeV6nl" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">F2F Graduation in PUPQC for Academic Year 2021-2022 in Talks</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">19 May, 2022,</span>
														<small class="text-muted">12:35 PM</small>
													</p>
												</div>
											</div>
										</a>
										<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0Rm1E452K9BacxHKmUrBkPoBUvvQYxeDb9bj2mCQJtBVFgCCaz3S2JssVsjiXx9kml" class="text-reset notification-item d-block dropdown-item">
											<div class="d-flex align-items-start">
												<div class="flex-grow-1 overflow-hidden">
													<h5 class="text-truncate fs-14 mb-1 text-primary">PUPQC Admin Releases Graduating Students' Schedule for Second Semester</h5>
													<p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">05 May, 2022,</span>
														<small class="text-muted">02:18 PM</small>
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
					<div class="col-xl-6 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0 fw-medium text-primary">Latest News from the University</h4>
							</div><!-- end card header -->
							<div class="card-body">
								<!-- Swiper -->
								<div class="swiper pagination-dynamic-swiper rounded">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<a href="https://www.facebook.com/361074807312478/posts/5359676797452229/" target="_blank">
												<img src="<?= base_url() ?>public/images/news/img-1.jpg" alt="" class="img-fluid mb-4" />
												<h5 class="text-wrap fs-14 mb-1 text-primary">PUP President Muhi announces face-to-face recognition and graduation rites</h5>
											</a>
											<span class="fs-13">1 Aug, 2022,</span>
											<small class="text-muted">09:48 AM</small>
										</div>
										<div class="swiper-slide">
											<a href="https://www.facebook.com/361074807312478/posts/5308009152618994/" target="_blank">
												<img src="<?= base_url() ?>public/images/news/img-2.jpg" alt="" class="img-fluid mb-4" />
												<h5 class="text-wrap fs-14 mb-1 text-primary">Succession of new PUPQC Aministration Announced for Academic Year 22-23</h5>
											</a>
											<span class="fs-13">13 Jul, 2022,</span>
											<small class="text-muted">02:15 PM</small>
										</div>
										<div class="swiper-slide">
											<a href="https://www.facebook.com/361074807312478/posts/5320818454671397/" target="_blank">
												<img src="<?= base_url() ?>public/images/news/img-3.jpg" alt="" class="img-fluid mb-4" />
												<h5 class="text-wrap fs-14 mb-1 text-primary">PUPQC Heralds its New Set of Leaders</h5>
											</a>
											<span class="fs-13">17 Jul, 2022,</span>
											<small class="text-muted">03:29 PM</small>
										</div>
									</div>
									<div class="swiper-pagination dynamic-pagination"></div>
								</div>
							</div><!-- end card-body -->
						</div><!-- end card -->
					</div>
					<!--end col-->
					<div class="col-xl-2 col-lg-6">
						<div class="mb-4">
							<a href="https://www.pup.edu.ph/goodgovernance/transparency/2022/" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-1.jpg">
							</a>
						</div>
						<div class="mb-4">
							<a href="https://www.foi.gov.ph/requests?agency=PUP" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-2.jpg">
							</a>
						</div>
						<div class="mb-4">
							<a href="https://drive.google.com/file/d/1l4EAMMYbtJXTT2SilRas9LT_N8E39d4j/view?usp=sharing" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-3.jpg">
							</a>
						</div>
						<div class="mb-4">
							<a href="https://drive.google.com/open?id=14z_gxp97PYh7eLIAC6k4LqlGXNY_5xNa" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-4.jpg">
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

		<!-- start review -->
		<section class="section " id="reviews">
			<div class="bg-overlay bg-primary bg-overlay-pattern"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-12">
						<div class="swiper marketplace-swiper rounded gallery-light">
							<div class="d-flex pt-2 pb-4">
								<h4 class="card-title fw-medium text-primary">Events</h4>
							</div>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="card explore-box card-animate rounded">
										<div class="explore-place-bid-img">
											<img src="<?= base_url() ?>public/images/events/img-1.jpg" alt="" class="img-fluid card-img-top explore-img" />
											<div class="bg-overlay"></div>
										</div>
										<div class="card-body">
											<h5 class="mb-1">
												<a href="https://www.facebook.com/katagapupqc/posts/pfbid0cqADWCNFuofoQDA1Cp3uDPaAVLsbFN9itC4ktxr6RRpaenSMiJ4jLrKq26FJkqnSl">Online Recognition of TOP Achievers as well as the President's and Dean's Lister with the theme "INTELLIGENTES Meet 2022"</a>
											</h5>
											<span class="fs-13">10 Sept, 2022 : </span>
											<small class="text-muted">06:00 PM - 08:00 PM</small>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card explore-box card-animate rounded">
										<div class="explore-place-bid-img">
											<img src="<?= base_url() ?>public/images/events/img-2.jpg" alt="" class="img-fluid card-img-top explore-img" />
											<div class="bg-overlay"></div>
										</div>
										<div class="card-body">
											<h5 class="mb-1">
												<a href="https://www.facebook.com/YouthEntrepreneursSociety/posts/pfbid0MJcWtzpgaTspmz1UbuUDo5tpGY8pzdBVpYS3xY8nnTndKxWeptip7CnctbTXMRWtl">Cross Worlds Beginner's Guide Empowered by Youth Entrepreneur Society with a theme of "Mission Unlock: Dive Into Your New Career Path"</a>
											</h5>
											<span class="fs-13">06 Aug, 2022 : </span>
											<small class="text-muted">01:00 PM - 04:00 PM</small>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card explore-box card-animate rounded">
										<div class="explore-place-bid-img">
											<img src="<?= base_url() ?>public/images/events/img-3.jpg" alt="" class="img-fluid card-img-top explore-img" />
											<div class="bg-overlay"></div>
										</div>
										<div class="card-body">
											<h5 class="mb-1">
												<a href="https://www.facebook.com/PSCofficial19/posts/pfbid02ewuokLHe1VE8nrKTFnbobFzXCtBqWGcsX2bQWdvPXcKB6hi54MctLFjTski7Hmc5l">Championship Match for the MLBB Tournament Season 2 of PUPQC Sports Club entitled "SQUAD RIVALS: FIght for Glory"</a>
											</h5>
											<span class="fs-13">02 Aug, 2022 : </span>
											<small class="text-muted">01:00 PM</small>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card explore-box card-animate rounded">
										<div class="explore-place-bid-img">
											<img src="<?= base_url() ?>public/images/events/img-4.jpg" alt="" class="img-fluid card-img-top explore-img" />
											<div class="bg-overlay"></div>
										</div>
										<div class="card-body">
											<h5 class="mb-1">
												<a href="https://www.facebook.com/JMSPUPQC/posts/pfbid0mM7jvs2tveNKFCrewe3xwjrTjifaAwzi9c7RECAwMG4wwPwficvZmzdxDii2i2syl">The Marketing Senior's Virtual Event entitled "#UNFILTERED: Behind the Scenes of Content Creation in Social Media Marketing"</a>
											</h5>
											<span class="fs-13">15 Jul, 2022 : </span>
											<small class="text-muted">02:00 PM - 05:00 PM</small>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card explore-box card-animate rounded">
										<div class="explore-place-bid-img">
											<img src="<?= base_url() ?>public/images/events/img-5.jpg" alt="" class="img-fluid card-img-top explore-img" />
											<div class="bg-overlay"></div>
										</div>
										<div class="card-body">
											<h5 class="mb-1">
												<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid0YU7vzB9JvVB84KhPQFdpwaQat5aTbJDUNvTqY7ZNNs8pXqeJJ6AAYyGK3i2iDha8l">In-house Leadership Training and Capacity-Builing Program with the theme, "Building Foundational Leadership Inside Out"</a>
											</h5>
											<span class="fs-13">19 Jul, 2022 - 21 Jul, 2022 : </span>
											<small class="text-muted">01:00 PM</small>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>
		<!-- end review -->

		<!-- start plan -->
		<section class="section bg-light" id="plans">
			<div class="bg-overlay bg-overlay-pattern"></div>
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-6">
						<div class="fb-page" data-href="https://www.facebook.com/sscpupquezoncity" data-tabs="timeline" data-width="500" data-height="575" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/sscpupquezoncity" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sscpupquezoncity">PUPQC Supreme Student Council</a></blockquote>
						</div>
					</div>
					<!--end col-->
					<div class="col-lg-6">
						<div class="row gap-4">
							<div class="col-lg-12">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/NPKPqbmXPaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
								<div class="ff-secondary fw-semibold">10:00am to 6:00pm</div>
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
							<form id="contact_form" class="needs-validation" novalidate>
								<div class="row">
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="name" class="form-label fs-13">Name <span class="text-danger">*</span></label>
											<input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your Name" required />
											<div class="invalid-feedback">
												Please enter your Name
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="mb-4">
											<label for="email" class="form-label fs-13">Email <span class="text-danger">*</span></label>
											<input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email" required />
											<div class="invalid-feedback">
												Please enter your Email
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-4">
											<label for="subject" class="form-label fs-13">Subject <span class="text-danger">*</span></label>
											<input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Subject of your Message" required />
											<div class="invalid-feedback">
												Please enter the Subject of your Message
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label for="comments" class="form-label fs-13">Message <span class="text-danger">*</span></label>
											<textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message" required></textarea>
											<div class="invalid-feedback">
												Please Enter your Message
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 text-end">
										<input type="submit" id="submit" name="send" class="submitBtn btn btn-primary" value="Send Message" />
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