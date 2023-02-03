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
                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" alt="user-img" class="img-thumbnail rounded-circle" />
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1" id="view_full_name"></h3>
                            <p id="course" class="text-white-75"></p>
                            <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i><span id="location"></span></div>
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
                                        <h5 class="card-title mb-3">Personal Information</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 align-middle">
                                                <tbody>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-team-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Last Name :</span>
                                                        </th>
                                                        <td id="view_last" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-user-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">First Name :</span>
                                                        </th>
                                                        <td id="view_first" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-contacts-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Middle Name :</span>
                                                        </th>
                                                        <td id="view_middle" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-genderless-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Gender :</span>
                                                        </th>
                                                        <td id="view_gender" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-calendar-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Date of Birth :</span>
                                                        </th>
                                                        <td id="view_bday" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-home-4-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Address :</span>
                                                        </th>
                                                        <td id="view_full_address" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-phone-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Contact Number :</span>
                                                        </th>
                                                        <td id="view_contact" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-mail-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Email Address :</span>
                                                        </th>
                                                        <td id="view_email" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-shield-user-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Civil Status :</span>
                                                        </th>
                                                        <td id="view_civil" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-profile-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Citizenship :</span>
                                                        </th>
                                                        <td id="view_citizenship" class="fw-medium"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="d-flex align-items-center" scope="row">
                                                            <div class="avatar-xs align-self-center me-3">
                                                                <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                    <i class="ri-ancient-gate-fill"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-primary">Religion :</span>
                                                        </th>
                                                        <td id="view_religion" class="fw-medium"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Educational Information</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0 align-middle">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-contacts-book-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Student Number :</p>
                                                                    <h6 class="mb-0" id="view_studno"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-calendar-todo-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">School Year admitted :</p>
                                                                    <h6 class="mb-0" id="view_schoolyr"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-user-heart-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Course: </p>
                                                                    <h6 class="mb-0" id="view_course"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-building-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Name of High School graduated from :</p>
                                                                    <h6 class="mb-0" id="view_hs"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-calendar-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Year Graduated :</p>
                                                                    <h6 class="mb-0" id="view_hsyear"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-building-4-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Name of Elementary graduated from :</p>
                                                                    <h6 class="mb-0" id="view_elem"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div class="avatar-title bg-primary rounded-circle fs-16 text-white">
                                                                        <i class="ri-calendar-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 text-primary">Year Graduated :</p>
                                                                    <h6 class="mb-0" id="view_elemyear"></h6>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
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