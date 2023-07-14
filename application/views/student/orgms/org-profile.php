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
                <div>
                    <div class="d-flex mb-3">
                        <h5 class="fs-16" id="">Organization Logo</h5>
                    </div>
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" alt="user-img" class="rounded-circle img-thumbnail user-profile-image"/>
                            <div class="avatar-xl p-0 rounded-circle profile-photo-edit">
                            </div>
                        </div>
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
                                    <input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter your organization name" value="Commonwealth Information Technology Society" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="org_name" class="form-label">Organization Abbreviation</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter your organization name" value="CommITS" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="org_details" class="form-label">Organization Details</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" placeholder="Add Details" id="orgdeetsfloatingInput" style="height: 90px" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="This should answer your organizations objectives" disabled>Organization of Information Technology Students who are willing to learn and share their knowledge to others.
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="year_revalidated" class="form-label">Year Revalidated</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" placeholder="Enter Year" id="orgdeetsfloatingInput" value="2023" disabled></input>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="philHealthInput" class="form-label">Adviser</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="philhealth_number" name="philhealth_number" placeholder="If none, please leave it blank" value="Inst. Robert Doromal" disabled>
                                </div>
                            </div>
                            <br>
                            <h4 class="fw-bold text-primary">Organization Contact Details</h4></br>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="emailInput" class="form-label">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="emergency_contact_email" name="emergency_contact_email" placeholder="Enter email" value="commits@iskolarngbayan.pup.edu.ph" disabled>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="mobileInput" class="form-label">Number</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="emergency_contact_mobile" name="emergency_contact_mobile" placeholder="Enter mobile number" value="09123456789" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="officerDetails" role="tabpanel">
                        <form id="changePasswordForm" class="needs-validation" novalidate>
                            <div class="row g-2">
                                <h4 class="fw-bold text-primary">Members</h4></br>

                                <div class="col-lg-6">
                                    <h5 class="form-label">Name</h5>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="form-label">Position</h5>
                                </div>
                                <div id="officers-container">
                                    <div class="row mb-3">
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Name" value="Zsyrhill Soria" disabled>
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Position" value="President" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Name" value="Mejela Gojol" disabled>
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Position" value="Vice President Internal" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Name" value="Rafael Parungao" disabled>
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="text" class="form-control" placeholder="Position" value="Vice President External" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="text-center d-grid">
                                        <button type="submit" id="update_patient_information" class="btn btn-warning bg-gradient" disabled>Edit Organization Details</button>
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