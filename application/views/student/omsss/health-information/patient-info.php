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
                        <h5 class="text-muted mb-0">STUDENT</h5>
                    </span>
                    <ul>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-5">
                                    <h5 class="fs-13 mb-1 fw-medium" class="link text-dark">Student Name: </a></h5>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex fs-13 fw-medium" id="view_student_name"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-5">
                                    <h5 class="fs-13 mb-1 fw-medium" class="link text-dark">Student Number: </a></h5>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex fs-13 fw-medium" id="view_student_number"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                                    <input type="number" class="form-control" id="emergency_contact_number" name="emergency_contact_number" placeholder="Enter primary contact no.">
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
                                    <label for="uploadphilHealthInput" class="form-label">Upload PhilHealth ID / Member Data Record (MDR)</label>
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
                            <div class=" col-lg-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        By clicking the Update button, I understood and agree to PUP Online Medical Service System's
                                        <a href="" data-bs-toggle="modal" data-bs-target="#dataPrivacy">Privacy Statement</a>.
                                    </label>
                                    <div id="dataPrivacy" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataPrivacyStatement" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title d-flex align-items-center" id="myModalLabel"> <i class="ri-information-line fs-3 text-info me-2"></i> Data Privacy Act of 2012</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="fs-15 text-primary">
                                                        Use of Personal Data
                                                    </h5>
                                                    <p class="text-muted">PUP uses the data we collect for three (3) fundamental purposes:</p>
                                                    <ol class="text-muted">
                                                        <li>To operate as a higher education institution (HEI) and provide (including improving and customizing) the services we offer,</li>
                                                        <li>To send communication, including informative communication, and</li>
                                                        <li>Promote the University, whether in our Services or in third-party services supported by advertising.</li>
                                                    </ol>
                                                    <p class="text-muted">In carrying out these purposes, we combine data we collect to give you a more seamless, consistent and customized experience. However, to enhance privacy, we have safety measures designed to prevent certain data combinations. For example, when you are not yet authenticated (or not signed in), we store data we collect from you separately from any account information that directly identifies you (such as your name, email address or contact number).</p>

                                                    <h5 class="fs-15 text-primary">
                                                        Security of Personal Data
                                                    </h5>
                                                    <p class="text-muted">PUP is committed to protecting the security of your personal data. We use a variety of security technologies and procedures to help protect your personal data from unauthorized access, use or disclosure. For example, we store the personal data you provide on computer systems that have limited access and are in controlled facilities. When we transmit highly confidential data (such as your name or password) over the Internet, we protect it through the use of encryption.</p>

                                                    <h5 class="fs-15 text-primary">
                                                        Retention of Personal Data
                                                    </h5>
                                                    <p class="text-muted">The University retains personal data for as long as necessary to provide the services and fulfill the transactions you have requested or may request in the future, or for other essential purposes such as complying with our commitments, legal obligations, resolving disputes, and enforcing our agreements. Because these needs can vary for different data types in the context of different products, actual retention periods can vary significantly. The criteria used to determine the retention periods include:</p>
                                                    <ul class="text-muted">
                                                        <li>
                                                            <b>How long is the personal data needed to provide the services operated by the University?</b>
                                                            This includes such things as maintaining and improving the performance of those services, keeping our systems secure, and maintaining appropriate academic, student, and financial records. This is the general rule that establishes the baseline for most data retention periods
                                                        </li>
                                                        <li>
                                                            <b>Is PUP subject to a legal, contractual, or similar obligation to retain the data?</b>
                                                            Examples can include mandatory data retention laws in the Philippines (or applicable jurisdiction for third-party providers), Government orders to preserve data relevant to an investigation, or data that must be retained for the purposes of due process.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        You must read and acknowledge the Data Privacy Statement as declared above.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary bg-gradient">Update</button>
                                </div>
                            </div>
                    </div>
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