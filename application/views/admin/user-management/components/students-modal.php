<!-- Add Student modal -->
<div id="addStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content border-0 overflow-hidden">
			<div class="modal-header p-3">
				<h4 class="card-title mb-0">Enroll Student Form</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<form id="enrollStudentForm" class="needs-validation" novalidate>
					<div class="mb-3">
						<div class="text-center">
							<div class="profile-user position-relative d-inline-block mx-auto mb-2">
								<img src="<?= base_url() ?>public/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image" />
								<div class="avatar-xs p-0 rounded-circle profile-photo-edit">
									<input id="profile-img-file-input" type="file" class="profile-img-file-input" accept="image/png, image/jpeg" />
									<label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
										<span class="avatar-title rounded-circle bg-light text-body">
											<i class="ri-camera-fill"></i>
										</span>
									</label>
								</div>
							</div>
							<h6>Profile Picture</h6>
						</div>
					</div>
					<div class="mb-3">
						<label for="user_no" class="form-label">Student Number <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="user_no" name="user_no" placeholder="Enter Student Number" required />
					</div>
					<div class="mb-3">
						<label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
					</div>
					<div class="mb-3">
						<label for="middle_name" class="form-label">Middle Name</label>
						<input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
					</div>
					<div class="mb-3">
						<label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
					</div>
					<div class="mb-3">
						<label for="extension_name" class="form-label">Extension Name</label>
						<input type="text" class="form-control" id="extension_name" name="extension_name" placeholder="Enter Extension Name" />
					</div>
					<div class="mb-3">
						<label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required />
					</div>
					<div class="mb-3">
						<label for="contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required />
					</div>
					<div class="mb-3">
						<label for="birth_date" class="form-label">Birth Date <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="birth_date" name="birth_date" data-provider="flatpickr" data-date-format="F j, Y" placeholder="Pick a Birth Date" required>
					</div>
					<div class="mb-3">
						<label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
						<select class="form-select mb-3" id="gender" name="gender" required>
							<option selected disabled value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="region" class="form-label">Region <span class="text-danger">*</span></label>
						<select id="region" class="form-control" name="region" required>
							<option selected disabled value="">Select Region</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="province" class="form-label">Province <span class="text-danger">*</span></label>
						<select id="province" class="form-control" name="province" required>
							<option selected disabled value="">Select Province</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="municipality" class="form-label">City/Municipality <span class="text-danger">*</span></label>
						<select id="municipality" class="form-control" name="municipality" required>
							<option selected disabled value="">Select City/Municipality</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
						<select id="barangay" class="form-control" name="barangay" required>
							<option selected disabled value="">Select Barangay</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="house_street" class="form-label">Street <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="house_street" name="house_street" placeholder="Enter Street Number or Street Name" required>
					</div>
					<div class="mb-3">
						<label for="civil_status" class="form-label">Civil Status <span class="text-danger">*</span></label>
						<select class="form-select mb-3" id="civil_status" name="civil_status" required>
							<option selected disabled value="">Select Civil Status</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widowed">Widowed</option>
							<option value="Separated">Separated</option>
							<option value="Divorced">Divorced</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="citizenship" class="form-label">Citizenship <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Enter Citizenship" required>
					</div>
					<div class="mb-3">
						<label for="religion" class="form-label">Religion <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="religion" name="religion" placeholder="Enter Religion" required>
					</div>
					<div class="text-end">
						<button type="submit" class="btn btn-primary">Enroll Student</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- View Student modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">
					Student Information
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div data-simplebar class="mx-n3">
					<ul class="list list-group list-group-flush mb-0">
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="profile-user position-relative d-inline-block mx-auto mb-2">
									<img src="<?= base_url() ?>public/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image" />
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1 fw-medium">Student No</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_student_no"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1 fw-medium">Name</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_student_name"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1">Full Address</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_full_address"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1">Gender</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_gender"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1">Birthday</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_bday"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1">Contact Number</h5>
								</div>
								<div class="col-8">
									<div class="d-flex fs-13 fw-medium" id="view_contact_no"></div>
								</div>
							</div>
						</li>
						<!-- end list item -->
						<li class="list-group-item">
							<div class="d-flex align-items-center">
								<div class="col-4">
									<h5 class="fs-13 mb-1 fw-medium">Status</h5>
								</div>
								<div class="col-8" id="view_status">
								</div>
							</div>
						</li>
						<!-- end list item -->
					</ul>
					<!-- end ul list -->
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">
					Close
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- Update Student modal -->
<div id="updateStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content border-0 overflow-hidden">
			<div class="modal-header p-3">
				<h4 class="card-title mb-0">Update Student Form</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<form id="updateStudentForm" class="needs-validation" novalidate>
					<div class="mb-3">
						<input type="hidden" id="edit_user_id" name="edit_user_id">
					</div>
					<div class="mb-3">
						<div class="text-center">
							<div class="profile-user position-relative d-inline-block mx-auto mb-2">
								<img src="<?= base_url() ?>public/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image" />
								<div class="avatar-xs p-0 rounded-circle profile-photo-edit">
									<input id="edit_image" name="edit_image" type="file" class="profile-img-file-input" accept="image/png, image/jpeg" />
									<label for="edit_image" class="profile-photo-edit avatar-xs">
										<span class="avatar-title rounded-circle bg-light text-body">
											<i class="ri-camera-fill"></i>
										</span>
									</label>
								</div>
							</div>
							<h6>Profile Picture</h6>
						</div>
					</div>
					<div class="mb-3">
						<label for="stud_num" class="form-label">Student Number <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="stud_num" name="stud_num" required>
					</div>
					<div class="mb-3">
						<label for="edit_first_name" class="form-label">First Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_first_name" name="edit_first_name" placeholder="Enter First Name" required>
					</div>
					<div class="mb-3">
						<label for="edit_middle_name" class="form-label">Middle Name</label>
						<input type="text" class="form-control" id="edit_middle_name" name="edit_middle_name" placeholder="Enter Middle Name">
					</div>
					<div class="mb-3">
						<label for="edit_last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_last_name" name="edit_last_name" placeholder="Enter Last Name" required>
					</div>
					<div class="mb-3">
						<label for="edit_extension_name" class="form-label">Extension Name</label>
						<input type="text" class="form-control" id="edit_extension_name" name="edit_extension_name" placeholder="Enter Extension Name" />
					</div>
					<div class="mb-3">
						<label for="edit_contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_contact_number" name="edit_contact_number" placeholder="Enter Contact Number" required />
					</div>
					<div class="mb-3">
						<label for="edit_birth_date" class="form-label">Birth Date <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_birth_date" name="edit_birth_date" data-provider="flatpickr" data-date-format="F j, Y" placeholder="Pick a Birth Date" required>
					</div>
					<div class="mb-3">
						<label for="edit_gender" class="form-label">Gender <span class="text-danger">*</span></label>
						<select class="form-select mb-3" id="edit_gender" name="edit_gender" required>
							<option selected disabled value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="edit_house_street" class="form-label">Street <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_house_street" name="edit_house_street" placeholder="Enter Street Number or Street Name" required>
					</div>
					<div class="mb-3">
						<label for="edit_barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_barangay" name="edit_barangay" placeholder="Enter Barangay" required>
					</div>
					<div class="mb-3">
						<label for="edit_municipality" class="form-label">Municipality <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_municipality" name="edit_municipality" placeholder="Enter Municipality" required>
					</div>
					<div class="mb-3">
						<label for="edit_province" class="form-label">Province <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_province" name="edit_province" placeholder="Enter Province" required>
					</div>
					<div class="mb-3">
						<label for="edit_region" class="form-label">Region <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="edit_region" name="edit_region" placeholder="Enter Region" required>
					</div>
					<div class="text-end">
						<button type="submit" class="btn btn-primary">Update Student</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- Update Education Profile -->
<div id="updateEducationProfile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="updateEducationProfile" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content border-0 overflow-hidden">
			<div class="modal-header p-3">
				<i class="ri-information-line fs-3 text-info me-2"></i>
				<h4 class="modal-title d-flex align-items-center" id="overall_information_title">Update Education Profile</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
			</div>
			<div class="modal-body">
				<form id="updateEducationProfileForm" class="needs-validation" novalidate>
					<input type="hidden" id="hidden_user_id" />
					<p class="fs-5">Education Profile is the current scholastic performance of the student. Edit/Update this only if the student has changed their status in SIS.</p>
					<table class="table mb-0">
						<tbody>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> User Course <span class="text-danger">*</span></label></td>
								<td>
									<select class="form-select mb-3" id="user_course" name="user_course" required>
										<option selected>User Course</option>
										<option value="Bachelor of Public Administration Major in Public Financial Management Diploma in Office Management Technology">[DOMT] Diploma in Office Management Technology</option>
										<option value="Bachelor of Science in Business Administration Major in Entrepreneurship">[ENTREP] Bachelor of Science in Business Administration Major in Entrepreneurship</option>
										<option value="Bachelor of Science in Business Administration Major in Human Resource Development Management">[HRDM] Bachelor of Science in Business Administration Major in Human Resource Development Management</option>
										<option value="Bachelor of Science in Business Administration Major in Marketing Management">[MM] Bachelor of Science in Business Administration Major in Marketing Management</option>
										<option value="Bachelor of Science in Business Teacher's Education">[BTLED] Bachelor of Science in Business Teacher's Education</option>
										<option value="Bachelor of Science in Information Technology">[IT] Bachelor of Science in Information Technology</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> Admission Status <span class="text-danger">*</span></label></td>
								<td>
									<select class="form-select mb-3" id="admission_status" name="admission_status" required>
										<option selected>Admission Status</option>
										<option value="Freshman">Freshman</option>
										<option value="Continuing">Continuing</option>
										<option value="Transferee">Transferee</option>
										<option value="Readmission">Readmission</option>
										<option value="Dropped">Dropped</option>
										<option value="Graduated/Alumni">Graduated/Alumni</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> Scholastic Status <span class="text-danger">*</span></label></td>
								<td>
									<select class="form-select mb-3" id="scholastic_status" name="scholastic_status" required>
										<option selected>Scholastic Status</option>
										<option value="Regular">Regular</option>
										<option value="Returnee">Returnee</option>
										<option value="Irregular">Irregular</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> School Year Admitted <span class="text-danger">*</span></label></td>
								<td>
									<input type="number" class="form-control" id="school_year_admitted" name="school_year_admitted" placeholder="Enter School Year Admitted" required>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> Course When Admitted <span class="text-danger">*</span></label></td>
								<td>
									<input type="text" class="form-control" id="course_when_admitted" name="course_when_admitted" placeholder="Enter Course When Admitted" required>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> High School Graduated <span class="text-danger">*</span></label></td>
								<td>
									<input type="text" class="form-control" id="high_school_graduated" name="high_school_graduated" placeholder="Enter High School" required>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> High School Graduated Year <span class="text-danger">*</span></label></td>
								<td>
									<input type="text" class="form-control" id="high_school_graduated_year" name="high_school_graduated_year" placeholder="Enter High School Graduated Year" required>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> Elementary Graduated <span class="text-danger">*</span></label></td>
								<td>
									<input type="text" class="form-control" id="elementary_graduated" name="elementary_graduated" placeholder="Enter Elementary" required>
								</td>
							</tr>
							<tr>
								<td class="align-middle fw-medium"><label for="reasonInput" class="form-label"> Elementary Graduated Year <span class="text-danger">*</span></label></td>
								<td>
									<input type="text" class="form-control" id="elementary_graduated_year" name="elementary_graduated_year" placeholder="Enter Elementary Graduated Year" required>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="mt-4 justify-content-center">
						<button type="submit" class="w-100 btn btn-primary bg-gradient fw-medium waves-effect waves-light">Submit</button>
						<button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>