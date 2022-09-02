<!DOCTYPE html>
			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="main-content">
				<div class="page-content">
					<div class="container-fluid">
						<div class="position-relative mx-n4 mt-n4">
							<div class="profile-wid-bg profile-setting-img">
								<div class="overlay-content">
									<div class="text-end p-3">
										<div class="p-0 ms-auto rounded-circle profile-photo-edit">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xxl-3">
								<div class="card mt-n5">
									<div class="card-body p-4">
										<div class="text-center">
											<div class="profile-user position-relative d-inline-block mx-auto mb-4">
												<img
													src="<?= base_url() ?>public/images/user-illustarator-2.png"
													class="rounded-circle avatar-xl img-thumbnail user-profile-image"
													alt="user-profile-image" />
												<div class="avatar-xs p-0 rounded-circle profile-photo-edit">
													<input
														id="profile-img-file-input"
														type="file"
														class="profile-img-file-input" />
													<label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
														<span class="avatar-title rounded-circle bg-light text-body">
															<i class="ri-camera-fill"></i>
														</span>
													</label>
												</div>
											</div>
											<h5 class="fs-16 mb-1">Grace Coles</h5>
											<p class="text-muted mb-0">STUDENT</p>
										</div>
									</div>
								</div>
								<!--end card-->
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-4">
											<div class="flex-grow-1">
												<h5 class="card-title mb-0">Portfolio</h5>
											</div>
											<div class="flex-shrink-0">
												<a href="javascript:void(0);" class="badge bg-light text-primary fs-12"
													><i class="ri-add-fill align-bottom me-1"></i> Add</a
												>
											</div>
										</div>
										<div class="mb-3 d-flex">
											<div class="avatar-xs d-block flex-shrink-0 me-3">
												<span class="avatar-title rounded-circle fs-16 bg-dark text-light">
													<i class="ri-facebook-fill"></i>
												</span>
											</div>
											<input
												type="username"
												class="form-control"
												id="facebookUsername"
												placeholder="Username"
												value="Grace Coles" />
										</div>
									</div>
								</div>
								<!--end card-->
							</div>
							<!--end col-->
              <div class="col-xxl-9">
								<div class="card mt-xxl-n5">
									<div class="card-header">
										<ul
											class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
											role="tablist">
											<li class="nav-item">
												<a
													class="nav-link active"
													data-bs-toggle="tab"
													href="#personalDetails"
													role="tab">
													<i class="fas fa-home"></i> Personal Details
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#emergency" role="tab">
													<i class="far fa-envelope"></i> Emergency Contact Information
												</a>
											</li>
										</ul>
									</div>
									<div class="card-body p-4">
										<div class="tab-content">
											<div class="tab-pane active" id="personalDetails" role="tabpanel">
												<form action="javascript:void(0);">
													<div class="row">
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="firstnameInput" class="form-label">First Name</label>
																<input
																	type="text"
																	class="form-control"
																	id="firstnameInput"
																	placeholder="Enter your firstname"
																	value="Grace" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="lastnameInput" class="form-label">Last Name</label>
																<input
																	type="text"
																	class="form-control"
																	id="lastnameInput"
																	placeholder="Enter your lastname"
																	value="Coles" />
															</div>
														</div>
                            <!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="sexInput" class="form-label"
																	>Sex</label
																>
																<input
																	type="text"
																	class="form-control"
																	id="sexInput"
																	placeholder="Enter your Sex"
																	value="Female" />
															</div>
														</div>
                            <!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="ageInput" class="form-label"
																	>Age</label
																>
																<input
																	type="text"
																	class="form-control"
																	id="ageInput"
																	placeholder="Enter your Age"
																	value="21" />
															</div>
														</div>
                            <!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="college/departmentInput" class="form-label"
																	>College/Department</label
																>
																<input
																	type="text"
																	class="form-control"
																	id="college/departmentInput"
																	placeholder="Enter your College/Department"
																	value="Bachelor of Science" />
															</div>
														</div>
														<!--end col-->
                            <div class="col-lg-6">
															<div class="mb-3">
																<label for="programInput" class="form-label"
																	>Program</label
																>
																<input
																	type="text"
																	class="form-control"
																	id="programInput"
																	placeholder="Enter your Program"
																	value="Information Technology" />
															</div>
														</div>
                            <!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="phonenumberInput" class="form-label"
																	>Phone Number</label
																>
																<input
																	type="text"
																	class="form-control"
																	id="phonenumberInput"
																	placeholder="Enter your phone number"
																	value="09123456789" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="emailInput" class="form-label">Email Address</label>
																<input
																	type="email"
																	class="form-control"
																	id="emailInput"
																	placeholder="Enter your email"
																	value="bladejatzas@iskolarngbayan.pup.edu.ph" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="civilstatusInput" class="form-label">Civil Status</label>
																<input
																	type="text"
																	class="form-control"
																	id="civilstatusInput"
																	placeholder="Enter your civil status"
																	value="Single" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="citizenshipInput" class="form-label">Citizenship</label>
																<input
																	type="text"
																	class="form-control"
																	id="citizenshipInput"
																	placeholder="Enter your citizenship"
																	value="Filipino" />
															</div>
														</div>
														<!--end col-->
                            <div class="col-lg-12">
															<div class="mb-3">
																<label for="addressInput" class="form-label">Address</label>
																<input
																	type="text"
																	class="form-control"
																	id="addressInput"
																	placeholder="Enter your address"
																	value="" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-12">
															<div class="hstack gap-2 justify-content-end">
																<button type="submit" class="btn btn-primary">Updates</button>
																<button type="button" class="btn btn-soft-success">Cancel</button>
															</div>
														</div>
														<!--end col-->
													</div>
													<!--end row-->
												</form>
											</div>
											<!--end tab-pane-->
											<div class="tab-pane" id="emergency" role="tabpanel">
												<form>
													<div id="newlink">
														<div id="1">
															<div class="row">
                              <h5 class="mb-3 text-primary"> Contact Person</h5>
                              <p>Specify the contact person to be contacted in case you have an emergency</p>
																<div class="col-lg-6">
                                <div class="mb-3">
																<label for="firstnameInput" class="form-label">First Name</label>
																<input
																	type="text"
																	class="form-control"
																	id="firstnameInput"
																	placeholder="Enter your firstname"
																	value="" />
															</div>
														</div>
														<!--end col-->
														<div class="col-lg-6">
															<div class="mb-3">
																<label for="lastnameInput" class="form-label">Last Name</label>
																<input
																	type="text"
																	class="form-control"
																	id="lastnameInput"
																	placeholder="Enter your lastname"
																	value="" />
															</div>
														</div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div class="mb-3">
																<label for="contactpersonInput" class="form-label">Relationship to Contact Person</label>
																<input
																	type="text"
																	class="form-control"
																	id="contactpersonInput"
																	placeholder="Enter your Relationship to Contact Peson"
																	value="" />
															</div>
														</div>
																<!--end col-->
                                <div class="col-lg-6">
															<div class="mb-3">
																<label for="contactNoInput" class="form-label">Primary Contact No.</label>
																<input
																	type="text"
																	class="form-control"
																	id="contactNoInput"
																	placeholder="Enter Primary Contact No."
																	value="" />
															</div>
														</div>
                            <!--end col-->
																<div class="col-lg-12">
																	<div class="mb-3">
																		<label for="contactaddressInput" class="form-label">Address</label>
																		<input
																			type="text"
																			class="form-control"
																			id="contactaddressInput"
																			placeholder="Enter Address"
																			value="" />
																	</div>
																</div>
																<!--end col-->
                                <div class="col-lg-12">
															<div class="hstack gap-2 justify-content-end">
																<button type="submit" class="btn btn-primary">Updates</button>
																<button type="button" class="btn btn-soft-success">Cancel</button>
															</div>
														</div>
														<!--end col-->
													</div>
												</div>
											</div>
											<!--end tab-pane-->
										</div>
									</div>
								</div>
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</div>
					<!-- container-fluid -->
				</div>
				<!-- End Page-content -->

				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<script>
									document.write(new Date().getFullYear())
								</script>
								© Velzon.
							</div>
							<div class="col-sm-6">
								<div class="text-sm-end d-none d-sm-block">Design & Develop by Themesbrand</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- end main content-->
		</div>
		<!-- END layout-wrapper -->

		<!--start back-to-top-->
		<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
			<i class="ri-arrow-up-line"></i>
		</button>
		<!--end back-to-top-->

		<div class="customizer-setting d-none d-md-block">
			<div
				class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2"
				data-bs-toggle="offcanvas"
				data-bs-target="#theme-settings-offcanvas"
				aria-controls="theme-settings-offcanvas">
				<i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
			</div>
		</div>

		<!-- Theme Settings -->
		<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
			<div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
				<h5 class="m-0 me-2 text-white">Theme Customizer</h5>

				<button
					type="button"
					class="btn-close btn-close-white ms-auto"
					data-bs-dismiss="offcanvas"
					aria-label="Close"></button>
			</div>
			<div class="offcanvas-body p-0">
				<div data-simplebar class="h-100">
					<div class="p-4">
						<h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
						<p class="text-muted">Choose your layout</p>

						<div class="row">
							<div class="col-4">
								<div class="form-check card-radio">
									<input
										id="customizer-layout01"
										name="data-layout"
										type="radio"
										value="vertical"
										class="form-check-input" />
									<label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
										<span class="d-flex gap-1 h-100">
											<span class="flex-shrink-0">
												<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
													<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
												</span>
											</span>
											<span class="flex-grow-1">
												<span class="d-flex h-100 flex-column">
													<span class="bg-light d-block p-1"></span>
													<span class="bg-light d-block p-1 mt-auto"></span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<h5 class="fs-13 text-center mt-2">Vertical</h5>
							</div>
							<div class="col-4">
								<div class="form-check card-radio">
									<input
										id="customizer-layout02"
										name="data-layout"
										type="radio"
										value="horizontal"
										class="form-check-input" />
									<label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
										<span class="d-flex h-100 flex-column gap-1">
											<span class="bg-light d-flex p-1 gap-1 align-items-center">
												<span class="d-block p-1 bg-soft-primary rounded me-1"></span>
												<span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
												<span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
											</span>
											<span class="bg-light d-block p-1"></span>
											<span class="bg-light d-block p-1 mt-auto"></span>
										</span>
									</label>
								</div>
								<h5 class="fs-13 text-center mt-2">Horizontal</h5>
							</div>
							<div class="col-4">
								<div class="form-check card-radio">
									<input
										id="customizer-layout03"
										name="data-layout"
										type="radio"
										value="twocolumn"
										class="form-check-input" />
									<label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
										<span class="d-flex gap-1 h-100">
											<span class="flex-shrink-0">
												<span class="bg-light d-flex h-100 flex-column gap-1">
													<span class="d-block p-1 bg-soft-primary mb-2"></span>
													<span class="d-block p-1 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 pb-0 bg-soft-primary"></span>
												</span>
											</span>
											<span class="flex-shrink-0">
												<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
												</span>
											</span>
											<span class="flex-grow-1">
												<span class="d-flex h-100 flex-column">
													<span class="bg-light d-block p-1"></span>
													<span class="bg-light d-block p-1 mt-auto"></span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<h5 class="fs-13 text-center mt-2">Two Column</h5>
							</div>
							<!-- end col -->
						</div>

						<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
						<p class="text-muted">Choose Light or Dark Scheme.</p>

						<div class="colorscheme-cardradio">
							<div class="row">
								<div class="col-4">
									<div class="form-check card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-mode"
											id="layout-mode-light"
											value="light" />
										<label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Light</h5>
								</div>

								<div class="col-4">
									<div class="form-check card-radio dark">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-mode"
											id="layout-mode-dark"
											value="dark" />
										<label
											class="form-check-label p-0 avatar-md w-100 bg-dark"
											for="layout-mode-dark">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-soft-light d-block p-1"></span>
														<span class="bg-soft-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Dark</h5>
								</div>
							</div>
						</div>

						<div id="layout-width">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
							<p class="text-muted">Choose Fluid or Boxed layout.</p>

							<div class="row">
								<div class="col-4">
									<div class="form-check card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-width"
											id="layout-width-fluid"
											value="fluid" />
										<label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Fluid</h5>
								</div>
								<div class="col-4">
									<div class="form-check card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-width"
											id="layout-width-boxed"
											value="boxed" />
										<label
											class="form-check-label p-0 avatar-md w-100 px-2"
											for="layout-width-boxed">
											<span class="d-flex gap-1 h-100 border-start border-end">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Boxed</h5>
								</div>
							</div>
						</div>

						<div id="layout-position">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
							<p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

							<div class="btn-group radio" role="group">
								<input
									type="radio"
									class="btn-check"
									name="data-layout-position"
									id="layout-position-fixed"
									value="fixed" />
								<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

								<input
									type="radio"
									class="btn-check"
									name="data-layout-position"
									id="layout-position-scrollable"
									value="scrollable" />
								<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable"
									>Scrollable</label
								>
							</div>
						</div>
						<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
						<p class="text-muted">Choose Light or Dark Topbar Color.</p>

						<div class="row">
							<div class="col-4">
								<div class="form-check card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-topbar"
										id="topbar-color-light"
										value="light" />
									<label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
										<span class="d-flex gap-1 h-100">
											<span class="flex-shrink-0">
												<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
													<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
												</span>
											</span>
											<span class="flex-grow-1">
												<span class="d-flex h-100 flex-column">
													<span class="bg-light d-block p-1"></span>
													<span class="bg-light d-block p-1 mt-auto"></span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<h5 class="fs-13 text-center mt-2">Light</h5>
							</div>
							<div class="col-4">
								<div class="form-check card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-topbar"
										id="topbar-color-dark"
										value="dark" />
									<label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
										<span class="d-flex gap-1 h-100">
											<span class="flex-shrink-0">
												<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
													<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
												</span>
											</span>
											<span class="flex-grow-1">
												<span class="d-flex h-100 flex-column">
													<span class="bg-primary d-block p-1"></span>
													<span class="bg-light d-block p-1 mt-auto"></span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<h5 class="fs-13 text-center mt-2">Dark</h5>
							</div>
						</div>

						<div id="sidebar-size">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
							<p class="text-muted">Choose a size of Sidebar.</p>

							<div class="row">
								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar-size"
											id="sidebar-size-default"
											value="lg" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Default</h5>
								</div>

								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar-size"
											id="sidebar-size-compact"
											value="md" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Compact</h5>
								</div>

								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar-size"
											id="sidebar-size-small"
											value="sm" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1">
														<span class="d-block p-1 bg-soft-primary mb-2"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
								</div>

								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar-size"
											id="sidebar-size-small-hover"
											value="sm-hover" />
										<label
											class="form-check-label p-0 avatar-md w-100"
											for="sidebar-size-small-hover">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1">
														<span class="d-block p-1 bg-soft-primary mb-2"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Small Hover View</h5>
								</div>
							</div>
						</div>

						<div id="sidebar-view">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
							<p class="text-muted">Choose Default or Detached Sidebar view.</p>

							<div class="row">
								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-style"
											id="sidebar-view-default"
											value="default" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Default</h5>
								</div>
								<div class="col-4">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-layout-style"
											id="sidebar-view-detached"
											value="detached" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
											<span class="d-flex h-100 flex-column">
												<span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
													<span class="d-block p-1 bg-soft-primary rounded me-1"></span>
													<span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
													<span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
												</span>
												<span class="d-flex gap-1 h-100 p-1 px-2">
													<span class="flex-shrink-0">
														<span class="bg-light d-flex h-100 flex-column gap-1 p-1">
															<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
															<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
															<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														</span>
													</span>
												</span>
												<span class="bg-light d-block p-1 mt-auto px-2"></span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Detached</h5>
								</div>
							</div>
						</div>
						<div id="sidebar-color">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
							<p class="text-muted">Choose a color of Sidebar.</p>

							<div class="row">
								<div class="col-4">
									<div
										class="form-check sidebar-setting card-radio"
										data-bs-toggle="collapse"
										data-bs-target="#collapseBgGradient.show">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-light"
											value="light" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Light</h5>
								</div>
								<div class="col-4">
									<div
										class="form-check sidebar-setting card-radio"
										data-bs-toggle="collapse"
										data-bs-target="#collapseBgGradient.show">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-dark"
											value="dark" />
										<label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
											<span class="d-flex gap-1 h-100">
												<span class="flex-shrink-0">
													<span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
														<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
														<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
													</span>
												</span>
												<span class="flex-grow-1">
													<span class="d-flex h-100 flex-column">
														<span class="bg-light d-block p-1"></span>
														<span class="bg-light d-block p-1 mt-auto"></span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<h5 class="fs-13 text-center mt-2">Dark</h5>
								</div>
								<div class="col-4">
									<button
										class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#collapseBgGradient"
										aria-expanded="false"
										aria-controls="collapseBgGradient">
										<span class="d-flex gap-1 h-100">
											<span class="flex-shrink-0">
												<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
													<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
												</span>
											</span>
											<span class="flex-grow-1">
												<span class="d-flex h-100 flex-column">
													<span class="bg-light d-block p-1"></span>
													<span class="bg-light d-block p-1 mt-auto"></span>
												</span>
											</span>
										</span>
									</button>
									<h5 class="fs-13 text-center mt-2">Gradient</h5>
								</div>
							</div>
							<!-- end row -->

							<div class="collapse" id="collapseBgGradient">
								<div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-gradient"
											value="gradient" />
										<label
											class="form-check-label p-0 avatar-xs rounded-circle"
											for="sidebar-color-gradient">
											<span class="avatar-title rounded-circle bg-vertical-gradient"></span>
										</label>
									</div>
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-gradient-2"
											value="gradient-2" />
										<label
											class="form-check-label p-0 avatar-xs rounded-circle"
											for="sidebar-color-gradient-2">
											<span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
										</label>
									</div>
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-gradient-3"
											value="gradient-3" />
										<label
											class="form-check-label p-0 avatar-xs rounded-circle"
											for="sidebar-color-gradient-3">
											<span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
										</label>
									</div>
									<div class="form-check sidebar-setting card-radio">
										<input
											class="form-check-input"
											type="radio"
											name="data-sidebar"
											id="sidebar-color-gradient-4"
											value="gradient-4" />
										<label
											class="form-check-label p-0 avatar-xs rounded-circle"
											for="sidebar-color-gradient-4">
											<span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
										</label>
									</div>
								</div>
							</div>
						</div>

						<div id="sidebar-img">
							<h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
							<p class="text-muted">Choose a image of Sidebar.</p>

							<div class="d-flex gap-2 flex-wrap img-switch">
								<div class="form-check sidebar-setting card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-sidebar-image"
										id="sidebarimg-none"
										value="none" />
									<label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
										<span
											class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
											<i class="ri-close-fill fs-20"></i>
										</span>
									</label>
								</div>

								<div class="form-check sidebar-setting card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-sidebar-image"
										id="sidebarimg-01"
										value="img-1" />
									<label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
										<img
											src="../../public/images/sidebar/img-1.jpg"
											alt=""
											class="avatar-md w-auto object-cover" />
									</label>
								</div>

								<div class="form-check sidebar-setting card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-sidebar-image"
										id="sidebarimg-02"
										value="img-2" />
									<label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
										<img
											src="../../public/images/sidebar/img-2.jpg"
											alt=""
											class="avatar-md w-auto object-cover" />
									</label>
								</div>
								<div class="form-check sidebar-setting card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-sidebar-image"
										id="sidebarimg-03"
										value="img-3" />
									<label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
										<img
											src="../../public/images/sidebar/img-3.jpg"
											alt=""
											class="avatar-md w-auto object-cover" />
									</label>
								</div>
								<div class="form-check sidebar-setting card-radio">
									<input
										class="form-check-input"
										type="radio"
										name="data-sidebar-image"
										id="sidebarimg-04"
										value="img-4" />
									<label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
										<img
											src="../../public/images/sidebar/img-4.jpg"
											alt=""
											class="avatar-md w-auto object-cover" />
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="offcanvas-footer border-top p-3 text-center">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
					</div>
					<div class="col-6">
						<a
							href="https://1.envato.market/velzon-admin"
							target="_blank"
							class="btn btn-primary w-100"
							>Buy Now</a
						>
					</div>
				</div>
			</div>
		</div>

		<!-- JAVASCRIPT -->
		<script src="../../public/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../../public/libs/simplebar/simplebar.min.js"></script>
		<script src="../../public/libs/node-waves/waves.min.js"></script>
		<script src="../../public/libs/feather-icons/feather.min.js"></script>
		<script src="../../public/js/pages/plugins/lord-icon-2.1.0.js"></script>
		<script src="../../public/js/plugins.js"></script>

		<!-- profile-setting init js -->
		<script src="../../public/js/pages/profile-setting.init.js"></script>

		<!-- App js -->
		<script src="../../public/js/app.js"></script>
	</body>
</html>
