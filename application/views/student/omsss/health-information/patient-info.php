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
                    <span>
                        <h5 class=" mb-0">STUDENT</h5>
                    </span>
                    <div class="table-card mt-1">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Student Number</td>
                                    <td id="sb_student_number"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Birth Date</td>
                                    <td id="sb_birthdate"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Gender</td>
                                    <td id="sb_gender"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Religion</td>
                                    <td id="sb_religion"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Civil Status</td>
                                    <td id="sb_civil_status"></td>
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
                            <i class="fas fa-home"></i> PATIENT INFORMATION
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#immunizationTab" role="tab">
                            <i class="fas fa-home"></i> IMMUNIZATION
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <form id="patientInformationForm" enctype='multipart/form-data'>
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
                                    <input type="number" class="form-control" id="emergency_contact_number" name="emergency_contact_number" maxlength="11" placeholder="Enter primary contact no.">
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
                                    <input type="text" class="form-control" id="philhealth_number" name="philhealth_number" placeholder="If none, please leave it blank">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="uploadphilHealthInput" class="form-label">
                                        Upload PhilHealth ID / Member Data Record (MDR)
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

                            <!-- Privacy Statement -->
                            <div class=" col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        By clicking the Update button, I understood and agree to PUP Online Medical Service System's
                                        <a href="" data-bs-toggle="modal" data-bs-target="#dataPrivacy">Privacy Statement</a>.
                                    </label>
                                    <div class="invalid-feedback">
                                        You must read and acknowledge the Data Privacy Statement as declared above.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="text-center d-grid">
                                    <button type="submit" id="update_patient_information" class="btn btn-primary bg-gradient">Update Patient Information</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="immunizationTab" role="tabpanel">
                        <form id="immunizationForm" enctype='multipart/form-data'>
                            <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
                            <input type="hidden" name="action" value="validate_captcha">
                            <h4 class="fw-bold text-primary">Immunization: Protection Against Various Diseases</h4></br>
                            <h5 class="fw-bold text-primary">COVID-19</h5>
                            <ul>
                                <li> You can able to upload your COVID Vaccinination Card in this section.</li>
                                <li> You can
                                    <span class="fw-bold">upload</span>
                                    <span class="d-inline-block" id="vaccination_popover">
                                        <i class="ri-question-fill text-info text-gradient"></i>
                                    </span>
                                    your vaccination card by clicking
                                    <i class="ri-upload-2-line"></i>
                                    <span class="fw-bold">Drag and Drop you Files, </span>
                                    below and you may able to view and delete the vaccination card you have uploaded. PUP Guarantees that the Vaccination Card stored in the database will be deleted immediately from our servers.
                                </li>
                                <li>Only PDF and JPG/PNG are allowed to be uploaded.</li>
                            </ul>

                            <div class="row mb-3">
                                <div class="col-lg-12" id="vaxcard_content">
                                    <div class="row">
                                        <div class="col-xl w-100">
                                            <input type="file" class="filepond filepond-input-multiple" id="vaccination_card" multiple data-allow-reorder="true" data-max-files="1">
                                        </div>
                                        <div class="col-xl w-100 d-flex flex-column justify-content-center align-items-center" id="show_vaxcard_button">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-4">
                                <div class="text-center d-grid">
                                    <button type="submit" id="update_vax_card" class="btn btn-primary bg-gradient">Update Vaccination Card</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<!--end col-->
</div>
<!--end row-->
</div>