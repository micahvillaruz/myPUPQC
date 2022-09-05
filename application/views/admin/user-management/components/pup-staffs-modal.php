<!-- Add PUP Staff modal -->
<div id="addStaffModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Add PUP Staff Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="addPUPStaffForm" class="needs-validation" novalidate>
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
            <label for="user_no" class="form-label">Faculty/Staff Number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="user_no" name="user_no" placeholder="Enter Faculty/Staff Number" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required />
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
            <label for="house_street" class="form-label">Street <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="house_street" name="house_street" placeholder="Enter Street Number or Street Name" required>
          </div>
          <div class="mb-3">
            <label for="barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" required>
          </div>
          <div class="mb-3">
            <label for="municipality" class="form-label">Municipality <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter Municipality" required>
          </div>
          <div class="mb-3">
            <label for="province" class="form-label">Province <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="province" name="province" placeholder="Enter Province" required>
          </div>
          <div class="mb-3">
            <label for="region" class="form-label">Region <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="region" name="region" placeholder="Enter Region" required>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add PUP Staff</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- View Staff modal -->
<div class="modal fade" id="viewStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Staff Information
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
                  <h5 class="fs-13 mb-1 fw-medium">Staff No</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_staff_no"></div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_staff_name"></div>
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

<!-- Update Staff modal -->
<div id="updateStaffModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Update Staff Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="updateStaffForm" class="needs-validation" novalidate>
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
            <label for="stud_num" class="form-label">Staff Number <span class="text-danger">*</span></label>
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
            <button type="submit" class="btn btn-primary">Update Staff</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>