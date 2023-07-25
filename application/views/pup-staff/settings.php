<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="<?= base_url() ?>public/images/pupqc-bg.jpg" class="profile-wid-img" alt="" />
                    <div class="overlay-content">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i> Personal Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                        <i class="far fa-user"></i> Change Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form id="profileSettingsForm" class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required disabled />
                                                    <div class="invalid-feedback">
                                                        Please enter your First Name.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter your middle name" disabled />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label></label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" required disabled />
                                                    <div class="invalid-feedback">
                                                        Please enter your Last Name.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="extension_name" class="form-label">Extension Name</label>
                                                    <input type="text" class="form-control" id="extension_name" name="extension_name" placeholder="Enter your extension name" disabled />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="birth_date" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="birth_date" name="birth_date" required readonly="readonly" disabled />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="civil_status" class="form-label">Civil Status <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="civil_status" name="civil_status" required>
                                                        <option value="" selected disabled>Choose Civil Status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Widowed">Widowed</option>
                                                        <option value="Separated">Separated</option>
                                                        <option value="Divorced">Divorced</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select your Civil Status.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="citizenship" class="form-label">Citizenship <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Enter your Citizenship" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your Citizenship.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="religion" class="form-label">Religion <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter your Religion" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your Religion.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="gender" name="gender" required>
                                                        <option value="" selected disabled>Choose Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select your Gender.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="email_address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter your Email Address" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your Email Address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter your Contact Number" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your Contact Number.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg">
                                                <div class="alert alert-info" role="alert">
                                                    <h4 class="alert-heading">Address Information</h4>
                                                    <p>The following address are assigned to you: </p>
                                                    <p class="mb-0" id="region_detail"></p>
                                                    <p class="mb-0" id="province_detail"></p>
                                                    <p class="mb-0" id="municipality_detail"></p>
                                                    <p id="barangay_detail"></p>
                                                    <p class="mb-0">If you want to change the details for this data, fill the input field below. Otherwise, click Update Student.</p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="region" class="form-label">Region</label>
                                                <select id="region" class="form-control" name="region">
                                                    <option selected disabled value="">Select Region</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="province" class="form-label">Province</label>
                                                <select id="province" class="form-control" name="province">
                                                    <option selected disabled value="">Select Province</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="municipality" class="form-label">City/Municipality</label>
                                                <select id="municipality" class="form-control" name="municipality">
                                                    <option selected disabled value="">Select City/Municipality</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="barangay" class="form-label">Barangay</label>
                                                <select id="barangay" class="form-control" name="barangay">
                                                    <option selected disabled value="">Select Barangay</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="house_street" class="form-label">Street <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="house_street" name="house_street" placeholder="Enter Street Number or Street Name" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-center">
                                                    <a role="button" href="<?= base_url() ?>student/profile" class="btn btn-ghost-primary waves-effect waves-light w-100">Cancel</a>
                                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <form id="changePasswordForm" class="needs-validation" novalidate>
                                        <div class="row g-2 mb-2">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Old Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="old-password-input" name="current_password" placeholder="Enter current password" required />
                                                    <div class="invalid-feedback">
                                                        Incorrect password
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-2">
                                            <!-- end col -->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label">New Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password-input" name='new_password' placeholder="Enter new password" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a password that meets the requirements
                                                    </div>
                                                </div>
                                                <!-- Password validation -->
                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13"><b>Password must contain:</b></h5>
                                                    <p id="pass-length-min" class="invalid fs-12 mb-2"><b>Minimum 8 characters</b></p>
                                                    <p id="pass-length-max" class="invalid fs-12 mb-2"><b>Maximum 24 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2"><b>At least one lowercase letter (a-z)</b></p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2"><b>At least one uppercase letter (A-Z)</b></p>
                                                    <p id="pass-number" class="invalid fs-12 mb-2"><b>At least one number (0-9)</b></p>
                                                    <p id="pass-special" class="invalid fs-12 mb-0"><b>At least one special character (!@#$%^&-)</b></p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <div class="row g-2 mb-2">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="confirmpasswordInput" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="confirm-password-input" name='confirm_password' placeholder="Confirm password" required />
                                                    <div class="invalid-feedback">
                                                        Password don't match
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                        <!--end row-->
                                    </form>
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