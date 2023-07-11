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
                      <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                          <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-9.png" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image" />
                          <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                              <span class="avatar-title rounded-circle bg-light text-body">
                                <i class="ri-camera-fill"></i>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
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
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter your Contact Number" required />
                          <div class="invalid-feedback">
                            Please enter your Contact Number.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="house_street" class="form-label">House, Block, Street <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="house_street" name="house_street" placeholder="Enter House No., Block, Street Name" required />
                          <div class="invalid-feedback">
                            Please enter your House No., Block, Street Name.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label for="barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" required />
                          <div class="invalid-feedback">
                            Please enter your Barangay.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="municipality" class="form-label">Municipality <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter Municipality" required />
                          <div class="invalid-feedback">
                            Please enter your Municipality.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="province" class="form-label">Province <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="province" name="province" placeholder="Enter Province" required />
                          <div class="invalid-feedback">
                            Please enter your Province.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label for="region" class="form-label">Region <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="region" name="region" placeholder="Enter Region" required />
                          <div class="invalid-feedback">
                            Please enter your Region.
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <button type="button" class="btn btn-ghost-primary waves-effect waves-light">Cancel</button>
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
                    <div class="row g-2">
                      <div class="col-lg-4">
                        <div>
                          <label for="oldpasswordInput" class="form-label">Old Password <span class="text-danger">*</span></label>
                          <input type="password" class="form-control" id="old-password-input" name="current_password" placeholder="Enter current password" required />
                          <div class="invalid-feedback">
                            Incorrect password
                          </div>
                        </div>
                      </div>
                      <!--end col-->
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
                          <p id="pass-length-min" class="invalid fs-12 mb-2"> <b>Minimum 8 characters</b></p>
                          <p id="pass-length-max" class="invalid fs-12 mb-2"><b>Maximum 24 characters</b></p>
                          <p id="pass-lower" class="invalid fs-12 mb-2"><b>At least one lowercase letter (a-z)</b></p>
                          <p id="pass-upper" class="invalid fs-12 mb-2"><b>At least one uppercase letter (A-Z)</b></p>
                          <p id="pass-number" class="invalid fs-12 mb-2"><b>At least one number (0-9)</b></p>
                          <p id="pass-special" class="invalid fs-12 mb-0"><b>At least one special character (!@#$%^&-)</b></p>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-4">
                        <div>
                          <label for="confirmpasswordInput" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                          <input type="password" class="form-control" id="confirm-password-input" placeholder="Confirm password" required />
                          <div class="invalid-feedback">
                            Password don't match
                          </div>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="mb-3">
                          <a href="<?= base_url() ?>/forgot-password" class="link-primary text-decoration-underline">Forgot Password ?</a>
                        </div>
                      </div>
                      <!--end col-->
                      <div class="col-lg-12">
                        <div class="text-end">
                          <button type="submit" class="btn btn-primary">
                            Change Password
                          </button>
                        </div>
                      </div>
                      <!--end col-->
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