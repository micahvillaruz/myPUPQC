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
                <div style="height:305px">
                    <div class="d-flex hstack gap-2">
                        <h5 class="fs-16 mb-3" id="">Add Organization Logo</h5>
                    </div>
                    <div class="pt-3 mt-5 m-3 filepond--image-preview-wrapper">
                        <input id="logo-file" type="file" class="filepond mt-3" name="filepond" data-allow-reorder="true" data-max-file-size="5MB" data-max-files="1" />
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
                        <a class="nav-link active" data-bs-toggle="tab" href="#organizationDetails" role="tab">
                            <i class="fas fa-home"></i> Organization Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#officerDetails" role="tab">
                            <i class="fas fa-home"></i> Organization Officers
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="organizationDetails" role="tabpanel">
                        <form id="orgRegisterForm" class="needs-validation" novalidate>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="org_name" class="form-label">Organization Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter your organization name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="org_details" class="form-label">Organization Details</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" placeholder="Add Details" id="orgdeetsfloatingInput" style="height: 90px" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="This should answer your organizations objectives"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="year_revalidated" class="form-label">Year Revalidated</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" placeholder="Enter Year" id="orgdeetsfloatingInput" value=""></input>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="philHealthInput" class="form-label">Adviser</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="philhealth_number" name="philhealth_number" placeholder="If none, please leave it blank">
                                </div>
                            </div>
                            <br>
                            <h4 class="fw-bold text-primary">Organization Contact Details</h4></br>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="emailInput" class="form-label">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="emergency_contact_email" name="emergency_contact_email" placeholder="Enter email">
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="mobileInput" class="form-label">Number</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="emergency_contact_mobile" name="emergency_contact_mobile" placeholder="Enter mobile number">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="officerDetails" role="tabpanel">
                        <form id="changePasswordForm" class="needs-validation" novalidate>
                            <div class="row g-2">
                                <h4 class="fw-bold text-primary">Members</h4></br>

                                <div class="ms-1 col-lg-5">
                                    <h5 class="form-label">Name</h5>
                                </div>
                                <div class="ms-1 col-lg-5">
                                    <h5 class="form-label">Position</h5>
                                </div>
                                <div id="officers-container">

                                </div>
                                <!-- Add Input Field Button -->
                                <div class="col-lg-12 mt-4">
                                    <div class="text-center d-grid">
                                        <input type="button" id="add-officer" class="btn btn-success bg-gradient" value="Add Field" onclick="addOfficerField()"/>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12 mt-4">
                                    <div class="text-center d-grid">
                                        <button type="submit" id="update_patient_information" class="btn btn-primary bg-gradient">Register Organization</button>
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