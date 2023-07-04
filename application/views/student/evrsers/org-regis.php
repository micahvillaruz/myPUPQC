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
                    <h5 class="fs-16 mb-1" id=""></h5>
                    <span>
                        <h5 class=" mb-0">Upload Organization Logo</h5>
                    </span>
                    <div class="table-card mt-1">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Organization Number</td>
                                    <td id="sb_student_number"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Organization Name</td>
                                    <td id="sb_birthdate"></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
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
                            <i class="fas fa-home"></i> Organization Details
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
                                        Upload File
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
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                        <label for="emailInput" class="form-label">Org Description</label>
                                    </div>
                                <div class="col-lg-9">
                                
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Add Objectives" id="objectivesfloatingInput" style="height: 90px" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="This should answer your organizations objectives"></textarea>
                                                <label for="objectivesfloatingInput">Objectives</label>
                                            </div>
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
</div>
<!--end col-->
</div>
<!--end row-->
</div>