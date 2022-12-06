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
					<img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" alt="user-img" class="rounded-circle avatar-xl img-thumbnail user-profile-image" />
						<div class="avatar-xs p-0 rounded-circle profile-photo-edit">
							<input id="profile-img-file-input" type="file" class="profile-img-file-input" />
							<label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
								<span class="avatar-title rounded-circle bg-light text-body">
									<i class="ri-camera-fill"></i>
								</span>
							</label>
						</div>
					</div>
					<h5 class="fs-16 mb-1" id="view_full_name"></h5>
					<span><h5 class="text-muted mb-0">STUDENT</h5></span>
					<br>
					<li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-5">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark" >Student Name: </a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_student_name"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-5">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark" >Student Number: </a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_student_number"></div>
                </div>
              </div>
            </li>
          </ul>
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
						<form action="javascript:void(0);" id="patientInformationForm">
						<!-- <div class="row mb-3">
        			<div class="col-lg-3">
            		<label for="disabledInput" class="form-label">Primary Contact No.</label>
        					</div>
									<div class="col-lg-9">
            				<input type="number" class="form-control" id="primary_contact_no" placeholder="Enter your primary contact No." disabled>
        					</div>
    						</div>
    					<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="disabledInput" class="form-label">Email</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="email" class="form-control" id="primary_email" placeholder="Enter your email" disabled>
        			</div>
    				</div>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="fbInput" class="form-label">Facebook Username</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="facebook" class="form-control" id="facebook_username" name="facebook_username" placeholder="Enter your facebook username">
        			</div>
    				</div>
								<br> -->
								<h4 class="fw-bold text-primary">Emergency Contact Information</h4></br>
    					<div class="row mb-3">
        			<div class="col-lg-3">
            		<label for="contactpersonNumber" class="form-label">Contact Person</label>
        					</div>
									<div class="col-lg-9">
            				<input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" placeholder="Enter your contact person">
        					</div>
    						</div>
								<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="contactNumber" class="form-label">Primary Contact No.</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="number" class="form-control" id="emergency_contact_number" name="emergency_contact_number" placeholder="Enter primary contact no.">
        			</div>
    				</div>
								<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="emailInput" class="form-label">Email</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="email" class="form-control" id="emergency_contact_email" name="emergency_contact_email" placeholder="Enter email">
        			</div>
    				</div>
						<!-- Base Example -->
						<div class="form-check mb-2">
    					<input class="form-check-input" type="checkbox" id="formCheck1" checked="true">
    					<label class="form-check-label" for="formCheck1">Is the Address the same as your address?</label>
						</div>
						<input type="text" class="form-control" id="emergency_contact_address" name="emergency_contact_address" placeholder="Enter Address">
						<br>
						<h4 class="fw-bold text-primary"> PhilHealth Information</h4></br>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="philHealthInput" class="form-label">PhilHealth No.</label>
        		</div>
        			<div class="col-lg-9">
            		<input type="text" class="form-control" id="philhealth_number" name="philHealth_number" placeholder="If none, please leave it blank">
        			</div>
    				</div>
						<div class="row mb-3">
        				<div class="col-lg-3">
            		<label for="uploadphilHealthInput" class="form-label">Upload PhilHealth ID / Member Data Record (MDR)</label>
        		</div>
        			<div class="col-lg-9">
							<input class="form-control form-control-sm" id="philhealth_id_image'" name="philHealth_id_image" type="file">
        			</div>
    				</div>
							<div class="col-lg-12 mt-4">
                  <div class="text-center d-grid">
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