	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="KOSJDxRE"></script>
	<!-- Begin page -->
	<div class="layout-wrapper landing">
		<nav class="navbar navbar-expand-lg navbar-landing" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url() ?>">
					<img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-dark" alt="myPUPQC logo" height="25">
					<img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-light" alt="myPUPQC logo" height="25">
				</a>
				<button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="mdi mdi-menu"></i>
				</button>

				<div class="collapse navbar-collapse align-middle" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mt-2 mt-lg-0 text-primary" id="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-expanded="false" href="<?= base_url() ?>"><i class="bx bxs-home me-2"></i><span>Home</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link collapsed" href="#navAboutPUP" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navAboutPUP">
								<i class=" bx bxs-school me-2"></i><span>About PUP</span>
							</a>
							<div id="navAboutPUP" class="nav-links collapse menu-dropdown">
								<ul class="nav nav-sm flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about"><i class="ri-arrow-right-s-line"></i> University Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/vm"><i class="ri-arrow-right-s-line"></i> Vision and Mission</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/history"><i class="ri-arrow-right-s-line"></i> History</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/logo-and-symbols"><i class="ri-arrow-right-s-line"></i> Logo and Symbols</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/hymn"><i class="ri-arrow-right-s-line"></i> Hymn</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/annual-reports"><i class="ri-arrow-right-s-line"></i> Annual Reports</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/contact-us"><i class="ri-arrow-right-s-line"></i> Contact us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/maps"><i class="ri-arrow-right-s-line"></i> Maps</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/code"><i class="ri-arrow-right-s-line"></i> University Code</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/memorandum-orders"><i class="ri-arrow-right-s-line"></i> Memorandum Orders</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/executive-orders"><i class="ri-arrow-right-s-line"></i> Executive Orders</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/codi-manual"><i class="ri-arrow-right-s-line"></i> CODI Manual</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>about/citizens-charter"><i class="ri-arrow-right-s-line"></i> Citizens Charter</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link collapsed" href="#navAcademic" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navAcademic">
								<i class="bx bxs-book me-2"></i><span>Academic</span>
							</a>
							<div id="navAcademic" class="nav-links collapse menu-dropdown">
								<ul class="nav nav-sm flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>academic/programs"><i class="ri-arrow-right-s-line"></i> Academic Programs</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>academic/ous"><i class="ri-arrow-right-s-line"></i> Open University System</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://www.pup.edu.ph/nallrc/" target="_blank"><i class="ri-arrow-right-s-line"></i> Library Services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>academic/ovpaa"><i class="ri-arrow-right-s-line"></i> OVPAA Advisories</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link collapsed" href="#navStudents" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navStudents">
								<i class="bx bxs-graduation me-2"></i><span>Students</span>
							</a>
							<div id="navStudents" class="nav-links collapse menu-dropdown">
								<ul class="nav nav-sm flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>#student-services"><i class="ri-arrow-right-s-line"></i> Student Services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>student/organizations"><i class="ri-arrow-right-s-line"></i> Student Organizations</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>student/council"><i class="ri-arrow-right-s-line"></i> Student Council</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>student/handbook"><i class="ri-arrow-right-s-line"></i> Student Handbook</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://sisstudents.pup.edu.ph/"><i class="ri-arrow-right-s-line"></i> PUP Student Information System</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://odrs.pup.edu.ph/"><i class="ri-arrow-right-s-line"></i> PUP Online Document Request System</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://apps.pup.edu.ph/books/"><i class="ri-arrow-right-s-line"></i> PUP Bookstore</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>student/downloads"><i class="ri-arrow-right-s-line"></i> Downloadable Forms</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link menu-link collapsed" href="#navResearch" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navResearch">
								<i class="bx bxs-search me-2"></i><span>Research</span>
							</a>
							<div id="navResearch" class="nav-links collapse menu-dropdown">
								<ul class="nav nav-sm flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>research/researches"><i class="ri-arrow-right-s-line"></i> Researches</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>research/extensions"><i class="ri-arrow-right-s-line"></i> Extensions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>research/research-ethics"><i class="ri-arrow-right-s-line"></i> Research Ethics</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>research/intellectual-property"><i class="ri-arrow-right-s-line"></i> Intellectual Property</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://apps.pup.edu.ph/ojs/"><i class="ri-arrow-right-s-line"></i> PUP Online Journal System</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://drive.google.com/open?id=0B1BuDAuN0r8SMFpBYWNGckhUWkE"><i class="ri-arrow-right-s-line"></i> University Thesis and Dissertation Manual</a>
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
		<!-- <div class="bg-overlay bg-overlay-pattern"></div> -->
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

		<section class="section">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<div class="text-center">
							<div class="row">
								<div class="col-3">
									<a href="<?= base_url() ?>applicants"><i class="bx bx-edit border border-primary border-3 rounded-circle h1 p-3 text-primary mb-3"></i></a>
									<span class="d-block text-primary fw-semibold">Enroll Now</span>
								</div>
								<div class="col-3">
									<a href="<?= base_url() ?>events"><i class="bx bx-calendar-event border border-primary border-3 rounded-circle h1 p-3 text-primary mb-3"></i></a>
									<span class="d-block text-primary fw-semibold">Attend an Event</span>
								</div>
								<div class="col-3">
									<a href="<?= base_url() ?>docu-request"><i class="bx bx-file border border-primary border-3 rounded-circle h1 p-3 text-primary mb-3"></i></a>
									<span class="d-block text-primary fw-semibold">Request Document</span>
								</div>
								<div class="col-3">
									<a href="https://apps.pup.edu.ph/appointment/"><i class="bx bxs-school border border-primary border-3 rounded-circle h1 p-3 text-primary mb-3"></i></a>
									<span class="d-block text-primary fw-semibold">Schedule Appointment</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>

		<section class="section bg-light" id="student-services">
			<div class="container">
				<div class="row hstack gap-1">
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-1.jpg" alt="Card image"></a>
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="https://sisstudents.pup.edu.ph/">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">Portal for PUP Students, view class schedule and grades</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">PUP Student Portal</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-2.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>scholarships">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">Access to educational opportunities in terms of scholarship and financial assistance to students</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">Scholarships</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-3.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>docu-request">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">Transcript of record, certification, clearance, honorable dismissal and diploma</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">Documents Processing</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-4.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>student/organizations">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">Get to know different student organizations</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">Student Organizations</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-5.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="https://osssac.pup.edu.ph">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">Online service dedicated to answer queries and reports of the students concerning admission, enrollment, library processes and more</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">Student Support</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-services px-0">
						<div class="card card-overlay menu-row card-animate mb-0">
							<div class="menu-overlay"></div>
							<img class="card-img img-fluid landing-img" src="<?= base_url() ?>public/images/menu/img-6.jpg" alt="Card image">
							<div class="card-img-overlay card-bottom-overlay p-0" style="top:auto;">
								<a href="<?= base_url() ?>calendar">
									<div class="more-info">
										<p class="text-white fw-normal text-center mt-3 mx-3 mb-0">University Calendar for Academic Year 2022-2023</p>
										<div class="d-grid">
											<button type="button" class="mx-2 my-3 btn btn-outline-light waves-effect waves-light text-uppercase fw-normal">More Info</button>
										</div>
									</div>
									<div class="card-body service-bottom">
										<h4 class="text-white fw-normal mb-0 text-center">Academic Calendar</h4>
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

		<section class="section" id="updates">
			<div class="container">
				<div class="row d-flex">
					<div class="col-xl-4 col-lg-4 col-xs-1">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0 fw-medium text-primary">Announcements and Advisories</h4>
							</div><!-- end card header -->

							<div class="card-body">
								<div class="mx-n3">
									<div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="primary" style="max-height: 536px;">
										<div class="list-group list-group-flush">
											<a href="https://www.facebook.com/sscpupquezoncity/videos/1919189238471683/" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">E-REPORT: Safe Space for PUPQC Students' Academic Issues & Concerns</h5>
														<p class="mb-0 fs-6">Posted: <span>23 Nov, 2021,</span>
															<small>02:21 AM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid0pJgkKFiqPrTVLvev4KCJk894vhgzipEJ1tccAySHAGoiYbKW5RmBnwjkY1rf1bB7l" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">A Resolution Recognizing the Newly Established Student Commission on Election (COMELEC)</h5>
														<p class="mb-0 fs-6">Posted: <span>13 Aug, 2022,</span>
															<small class="text-muted">02:36 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02wRAw94xJTYpbSXkT72qoTiqaCoyPUZ6xhRA8zjHqu742KjWCEYNe37Fpf2CWLBywl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">A Resolution Adopting the Amendments to the Constitution and By-Laws of the SSC</h5>
														<p class="mb-0 fs-6">Posted: <span>04 Apr, 2022,</span>
															<small class="text-muted">02:21 AM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0EMX2xx6XxvW2JZ9Cf9rxDRoYsnVCVr5ACieVxtYsmFjSsZRViD7X4YUTTagRWcuXl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">Printing of Certificate of Candidacy (COC) will end on August 15, 2022</h5>
														<p class="mb-0 fs-6">Posted: <span>11 Aug, 2022,</span>
															<small class="text-muted">10:52 AM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0riNCN2XSpZV67VN4ynkr6JvAPJLPShndGJmy8vQvXVCHdzBt9e9o9GAyfxjYWozul" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">Freshmen Students, submission of credentials is extended until August 31, 2022.</h5>
														<p class="mb-0 fs-6">Posted: <span>17 Aug, 2022,</span>
															<small class="text-muted">02:43 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid02v1vGtiw7i41YvzqwqhhiVwzwkdmYbzvhY76TRni8v5QKBLy6VsHVoVLwTgtfiQmBl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">BREAKING: CAEPUPQC results set to release today through iApply</h5>
														<p class="mb-0 fs-6">Posted: <span>24 Jun, 2022,</span>
															<small class="text-muted">05:18 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid02GuwAAiNxECZY5orgSMBcHBLjmbqJxk4U2qUAmxDmyRaxATWi1q7n9nqx15Je8XFrl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">Re-opening of the Application for Year-End Graduation AY 2021-2022</h5>
														<p class="mb-0 fs-6">Posted: <span>08 Jun, 2022,</span>
															<small class="text-muted">03:19 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02SCZLiiEYuLVwMz3pRe6yPd66H88DsW8uoVWPXqKtbXZtYgFdLqrEggD1NSmqJP5Pl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">The application for graduation is extended until June 15, 2022</h5>
														<p class="mb-0 fs-6">Posted: <span>02 Jun, 2022,</span>
															<small class="text-muted">03:35 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0QYZehnipJMkCkhBT7eVr2zgxCe3nmdTBLq19cdGJxia8uh5xYwDieAuehqPTeV6nl" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">F2F Graduation in PUPQC for Academic Year 2021-2022 in Talks</h5>
														<p class="mb-0 fs-6">Posted: <span>19 May, 2022,</span>
															<small class="text-muted">12:35 PM</small>
														</p>
													</div>
												</div>
											</a>
											<a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0Rm1E452K9BacxHKmUrBkPoBUvvQYxeDb9bj2mCQJtBVFgCCaz3S2JssVsjiXx9kml" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
												<div class="d-flex align-items-start">
													<div class="flex-grow-1 overflow-hidden">
														<h5 class="fw-normal mb-1 text-primary">PUPQC Admin Releases Graduating Students' Schedule for Second Semester</h5>
														<p class="mb-0 fs-6">Posted: <span class="fs-13">05 May, 2022,</span>
															<small class="text-muted">02:18 PM</small>
														</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div><!-- end card-body -->
						</div><!-- end card -->
					</div>
					<!-- end col -->
					<div class="col-xl-6 col-lg-5 col-xs-1">
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
												<img src="<?= base_url() ?>public/images/news/img-1.jpg" class="img-fluid news-img" />
												<h5 class="text-wrap mb-3 mt-4 text-primary">PUP President Muhi announces face-to-face recognition and graduation rites</h5>
											</a>
											<span class="h5 fw-light">1 Aug, 2022,</span>
											<small class="text-muted">09:48 AM</small>
										</div>
										<div class="swiper-slide">
											<a href="https://www.facebook.com/361074807312478/posts/5308009152618994/" target="_blank">
												<img src="<?= base_url() ?>public/images/news/img-2.jpg" class="img-fluid news-img" />
												<h5 class="text-wrap mb-3 mt-4 text-primary">Succession of new PUPQC Aministration Announced for Academic Year 22-23</h5>
											</a>
											<span class="h5 fw-light">13 Jul, 2022,</span>
											<small class="text-muted">02:15 PM</small>
										</div>
										<div class="swiper-slide">
											<a href="https://www.facebook.com/361074807312478/posts/5320818454671397/" target="_blank">
												<img src="<?= base_url() ?>public/images/news/img-3.jpg" class="img-fluid news-img" />
												<h5 class="text-wrap mb-3 mt-4 text-primary">PUPQC Heralds its New Set of Leaders</h5>
											</a>
											<span class="h5 fw-light">17 Jul, 2022,</span>
											<small class="text-muted">03:29 PM</small>
										</div>
									</div>
									<div class="swiper-pagination dynamic-pagination"></div>
								</div>
							</div><!-- end card-body -->
						</div><!-- end card -->
					</div>
					<!--end col-->
					<div class="col-xl-2 col-lg-3 col-xs-1 links">
						<div class="mb-2">
							<a href="https://www.pup.edu.ph/goodgovernance/transparency/2022/" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-1.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="https://www.foi.gov.ph/requests?agency=PUP" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-2.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="https://drive.google.com/file/d/1l4EAMMYbtJXTT2SilRas9LT_N8E39d4j/view?usp=sharing" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-3.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="https://www.pup.edu.ph/gad/" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-4.jpg">
							</a>
						</div>
						<div class="mb-2">
							<a href="https://drive.google.com/open?id=14z_gxp97PYh7eLIAC6k4LqlGXNY_5xNa" target="_blank">
								<img class="rounded-3" width="200" src="<?= base_url() ?>public/images/links/img-5.jpg">
							</a>
						</div>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>

		<section class="section " id="events">
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

		<section class="section bg-light" id="sns">
			<div class="bg-overlay bg-overlay-pattern"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7 col-lg-6 overflow-auto">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FThePUPQCBranchOfficial&show_posts=true&width=500&height=575&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="575" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
					<!--end col-->
					<div class="col-xs-12 col-md-5 col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<iframe width="100%" height="340" src="https://www.youtube.com/embed/NPKPqbmXPaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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