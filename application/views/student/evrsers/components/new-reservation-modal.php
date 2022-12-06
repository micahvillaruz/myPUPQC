<!-- Add Reservations modal -->
<div id="newReservation" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Add New Reservation</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="addNewReservation" class="needs-validation" novalidate>
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