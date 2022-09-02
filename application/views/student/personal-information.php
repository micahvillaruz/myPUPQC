<!DOCTYPE html>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

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
						<img src="<?= base_url() ?>public/images/user-illustarator-2.png" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image" />
						<div class="avatar-xs p-0 rounded-circle profile-photo-edit">
							<input id="profile-img-file-input" type="file" class="profile-img-file-input" />
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
						<h5 class="card-title mb-0">Socials</h5>
					</div>
					<div class="flex-shrink-0">
						<a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-add-fill align-bottom me-1"></i> Add</a>
					</div>
				</div>
				<div class="mb-3 d-flex">
					<div class="avatar-xs d-block flex-shrink-0 me-3">
						<span class="avatar-title rounded-circle fs-16 bg-dark text-light">
							<i class="ri-facebook-fill"></i>
						</span>
					</div>
					<input type="username" class="form-control" id="facebookUsername" placeholder="Username" value="Grace Coles" />
				</div>
			</div>
		</div>
		<!--end card-->
	</div>
	<!--end col-->
	<div class="col-xxl-9">
		<div class="card mt-xxl-n5">
			<div class="card-header">
				<ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
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
										<input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="Grace" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="lastnameInput" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="Coles" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="sexInput" class="form-label">Sex</label>
										<input type="text" class="form-control" id="sexInput" placeholder="Enter your Sex" value="Female" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="ageInput" class="form-label">Age</label>
										<input type="text" class="form-control" id="ageInput" placeholder="Enter your Age" value="21" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="college/departmentInput" class="form-label">College/Department</label>
										<input type="text" class="form-control" id="college/departmentInput" placeholder="Enter your College/Department" value="Bachelor of Science" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="programInput" class="form-label">Program</label>
										<input type="text" class="form-control" id="programInput" placeholder="Enter your Program" value="Information Technology" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="phonenumberInput" class="form-label">Phone Number</label>
										<input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="09123456789" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="emailInput" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="bladejatzas@iskolarngbayan.pup.edu.ph" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="civilstatusInput" class="form-label">Civil Status</label>
										<input type="text" class="form-control" id="civilstatusInput" placeholder="Enter your civil status" value="Single" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="citizenshipInput" class="form-label">Citizenship</label>
										<input type="text" class="form-control" id="citizenshipInput" placeholder="Enter your citizenship" value="Filipino" />
									</div>
								</div>
								<!--end col-->
								<div class="col-lg-12">
									<div class="mb-3">
										<label for="addressInput" class="form-label">Address</label>
										<input type="text" class="form-control" id="addressInput" placeholder="Enter your address" value="" />
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
												<input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="" />
											</div>
										</div>
										<!--end col-->
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="lastnameInput" class="form-label">Last Name</label>
												<input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="" />
											</div>
										</div>
										<!--end col-->
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="contactpersonInput" class="form-label">Relationship to Contact Person</label>
												<input type="text" class="form-control" id="contactpersonInput" placeholder="Enter your Relationship to Contact Peson" value="" />
											</div>
										</div>
										<!--end col-->
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="contactNoInput" class="form-label">Primary Contact No.</label>
												<input type="text" class="form-control" id="contactNoInput" placeholder="Enter Primary Contact No." value="" />
											</div>
										</div>
										<!--end col-->
										<div class="col-lg-12">
											<div class="mb-3">
												<label for="contactaddressInput" class="form-label">Address</label>
												<input type="text" class="form-control" id="contactaddressInput" placeholder="Enter Address" value="" />
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