<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
          <img src="<?= base_url() ?>public/images/pupqc-bg.jpg" alt="" class="profile-wid-img" />
        </div>
      </div>
      <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
          <div class="col-auto">
            <div class="avatar-lg">
              <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-6.png" alt="user-img" class="img-thumbnail rounded-circle" />
            </div>
          </div>
          <!--end col-->
          <div class="col">
            <div class="p-2">
              <h3 class="text-white mb-1" id="view_full_name">Micah M. Villaruz</h3>
              <p class="text-white-75">Student</p>
              <div class="hstack text-white-50 gap-1">
                <div class="me-2">
                  <i class="bx bxs-school me-3 text-white-75 fs-16 align-middle"></i>Role
                </div>
              </div>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
        <div class="mt-5 d-flex justify-content-end">
          <div class="row">
            <div class="col-12 col-lg-auto text-end order-lg-0">
              <div class="row text text-white-50 text-center">
                <div class="col-12">
                  <div class="p-2">
                    <a href="<?= base_url() ?>student/profile/settings" class="btn btn-secondary"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end col-->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-3">Personal Data</h5>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-profile-line"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">User Number :</p>
                        <h6 class="text-truncate mb-0" id="view_user_no"></h6>
                      </div>
                    </div>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-user-2-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">Full Name :</p>
                        <h6 class="text-truncate mb-0" id="view_name"></h6>
                      </div>
                    </div>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-phone-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">Contact Number :</p>
                        <h6 class="text-truncate mb-0" id="view_contact"></h6>
                      </div>
                    </div>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-calendar-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">Birth Date :</p>
                        <h6 class="text-truncate mb-0" id="view_bday"></h6>
                      </div>
                    </div>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-genderless-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">Gender :</p>
                        <h6 class="text-truncate mb-0" id="view_gender"></h6>
                      </div>
                    </div>
                    <div class="d-flex mt-4">
                      <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                        <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                          <i class="ri-home-4-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1 text-primary fw-medium">Address :</p>
                        <h6 class="text-truncate mb-0" id="view_full_address"></h6>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!-- end card -->
              </div>
              <!--end col-->
            </div>
            <!--end tab-content-->
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->