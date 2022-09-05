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
	</div>
	<!--end col-->
	<div class="col-xxl-9">
		<div class="card mt-xxl-n5">
			<div class="card-header">
				<ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
							<i class="fas fa-home"></i> PATIENT INFORMATION
						</a>
					</li>
				</ul>
			</div>
			<div class="card-body p-4">
				<div class="tab-content">
					<div class="tab-pane active" id="personalDetails" role="tabpanel">
						<form action="javascript:void(0);">
						<form action="">
						<div class="row mb-3">
        			<div class="col-lg-3">
            		<label for="contactNumber" class="form-label">Primary Contact No.</label>
        					</div>
									<div class="col-lg-9">
            				<input type="number" class="form-control" id="contactInput" placeholder="Enter your primary contact No.">
        					</div>
    						</div>
    					<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="emailInput" class="form-label">Email</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
        			</div>
    				</div>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="fbInput" class="form-label">Facebook Username</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="facebook" class="form-control" id="fbInput" placeholder="Enter your facebook username">
        			</div>
    				</div>
								<br>
								<h4 class="fw-bold text-primary">Emergency Contact Information</h4></br>
    					<div class="row mb-3">
        			<div class="col-lg-3">
            		<label for="contactpersonNumber" class="form-label">Contact Person</label>
        					</div>
									<div class="col-lg-9">
            				<input type="text" class="form-control" id="contactpersonInput" placeholder="Enter your contact person">
        					</div>
    						</div>
								<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="contactNumber" class="form-label">Primary Contact No.</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="number" class="form-control" id="contactInput" placeholder="Enter primary contact no.">
        			</div>
    				</div>
								<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="emailInput" class="form-label">Email</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
        			</div>
    				</div>
						<!-- Base Example -->
						<div class="form-check mb-2">
    					<input class="form-check-input" type="checkbox" id="formCheck1">
    					<label class="form-check-label" for="formCheck1">Is the Address the same as your address?</label>
						</div>
						<input type="text" class="form-control" id="contactaddressInput" placeholder="Enter Address"/>
						<br>
						<h4 class="fw-bold text-primary"> PhilHealth Information</h4></br>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="philHealthInput" class="form-label">PhilHealth No.</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="text" class="form-control" id="philHealthInput" placeholder="If none, please leave it blank">
        			</div>
    				</div>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="uploadphilHealthInput" class="form-label">Upload PhilHealth ID / Member Data Record (MDR)</label>
        		</div>
        			<div class="col-lg-9">
							<input class="form-control form-control-sm" id="formFileSm" type="file">
        			</div>
    				</div>
    							<div class="text-end">
        							<button type="submit" class="btn btn-primary">Update</button>
    							</div>
								</form>
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