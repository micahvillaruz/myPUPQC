<div id="allow_create_reservation" class="row d-none">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Registration</h4>
            </div>
            <!-- end card header -->
            <div class="row">
    <!--end col-->
    <div class="row">
                <div class="col-xxl-12">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalInfo" role="tab">
                                        <i class="fas fa-home"></i> Organization Registration
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                        <i class="far fa-user"></i> Add Members
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalInfo" role="tabpanel">
                                    <form id="personalInfoForm" class="needs-validation" novalidate>
                                    <div class="row mb-3">
                            </div>
                            <h4 class="fw-bold text-primary">Organization</h4></br>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="contactpersonNumber" class="form-label">Organization Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter your contact person">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="uploadphilHealthInput" class="form-label">
                                        Upload Organization Logo
                                        <span class="d-inline-block" id="philhealth_popover">
                                            <i class="ri-question-fill text-info text-gradient"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-9" id="philhealth_id_content">
                                    <div class="row">
                                        <div class="col-xl w-100">
                                            <input type="file" class="filepond filepond-input-multiple" id="philhealth_id_image" multiple data-allow-reorder="true" data-max-files="1">
                                        </div>
                                        <div class="col-xl w-100 d-flex flex-column justify-content-center align-items-center" id="show_philhealth_button">
                                        </div>
                                    </div>
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
                            <br>
                            <h4 class="fw-bold text-primary"> Organization Head</h4></br>
                            <div class="row mb-3">
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="philHealthInput" class="form-label">Adviser</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="philhealth_number" name="philhealth_number" placeholder="If none, please leave it blank">
                                </div>
                            </div>
                            <!-- Privacy Statement -->
                            
                            <div class="col-lg-12 mt-4">
                                <div class="text-center d-grid">
                                    <button type="submit" id="update_patient_information" class="btn btn-primary bg-gradient">Register Organization</button>
                                </div>
                            </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <form id="changePasswordForm" class="needs-validation" novalidate>
                                        <div class="row g-2">
                                        <h4 class="fw-bold text-primary">Members</h4></br>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Student Head <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="old-password-input" name="current_password" placeholder="Enter Student Head" required />
                                                    
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label">Vice President <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password-input" name='new_password' placeholder="Enter Vice President" required />
                                                    
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="confirmpasswordInput" class="form-label">Secretary <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="confirm-password-input" placeholder="Enter Secretary" required />
                                                    
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
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
</div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div id="decline_create_reservation" class="row d-none px-5">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/ckatldkn.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">Existing Reservation is Found!</h4>
        <p class="fs-15">If you want to create a New Reservation and the status of your request is currently <b class="text-secondary">Pending</b> you must cancel your Existing Reservation first. <br> You can cancel the request by going to the <span class="fw-bold">Reservations</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Reservation</button> button.<br> Otherwise, wait for your reservation to be Done or Cancelled before creating a New Request.</p>
        <span class="fs-13 mb-3 badge text-dark bg-warning">You can only cancel your existing reservation if the status of your reservation is <b>Pending For Approval</b> only.</span>
        <a href="<?= base_url() ?>student/evrsers/view-reservation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Reservation Page</a>
    </div>
</div>