<div id="viewProcessStatusFlow" class="modal fade" tabindex="-1" aria-labelledby="processStatusFlowLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="processStatusFlowLabel">Process Status Flow</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <h6 class="mb-3">
                    For Approved Requests
                </h6>
                <ul class="list-group">
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">1</span></b>
                        <div class="badge badge-soft-warning">
                            <i class="me-2 mdi mdi-progress-clock fs-13"></i>
                            <span class="text-uppercase">Pending for Clearance</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The request created by the student is pending for approval by the Officer-in-Charge of Student Records. The OIC (Sir Nandy) will have the option to approve or cancel the request.
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
                        <div class="badge badge-soft-danger">
                            <i class="me-2 mdi mdi-nfc-search-variant fs-13"></i>
                            <span class="text-uppercase">For Clearance</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The request is approved and the student can now go to PUP QC for submission of requirements, and payment of requested documents.
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">3</span></b>
                        <div class="badge badge-soft-info">
                            <i class="me-2 mdi mdi-file-sign fs-13"></i>
                            <span class="text-uppercase">For Evaluation / Processing</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            Evaluation and Processing of records and required documents for releasing. Sir Nandy prints the documents, and gives it to the authorized personnel for signature.
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">4</span></b>
                        <div class="badge badge-soft-dark">
                            <i class="me-2 ri-user-received-2-line fs-13"></i>
                            <span class="text-uppercase">Ready for Pickup</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The requested document/s is/are already available for pickup at the releasing section of student records. The student must present the claim stub before receiving the documents requested at PUP QC.
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">5</span></b>
                        <div class="badge badge-soft-success">
                            <i class="me-2 ri-checkbox-circle-line fs-13"></i>
                            <span class="text-uppercase">Released </span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The requested document/s was/were successfully claimed by the student.
                        </span>
                    </li>
                </ul>
                <h6 class="mb-3 mt-4">
                    For Cancelled Requests
                </h6>
                <ul class="list-group">
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">1</span></b>
                        <div class="badge badge-soft-warning">
                            <i class="me-2 mdi mdi-progress-clock fs-13"></i>
                            <span class="text-uppercase">Pending for Clearance</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The document request is pending for approval by the Officer-in-Charge of Student Records. The OIC (Sir Nandy) will have the option to approve or cancel the request.
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
                        <div class="badge badge-soft-danger">
                            <i class="me-2 mdi mdi-cancel fs-13"></i>
                            <span class="text-uppercase">Cancelled by Staff</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The document request was cancelled by Sir Nandy. The reason for cancelling is indicated in the remarks sent to the student. The student can comply with the requirements and request again.
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
                        <div class="badge badge-soft-danger">
                            <i class="me-2 mdi mdi-cancel fs-13"></i>
                            <span class="text-uppercase">Cancelled by Student</span>
                        </div>
                        <br>
                        <span class="mt-2 fs-12">
                            The document request was cancelled by the Student. The student can only cancel if request is still <i>Pending for Clearance</i> or <i>For Clearance</i>. The student must create a new request if requesting the same or different type of documents.
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <div class="hstack flex-wrap gap-2 mb-3 mb-lg-0">
                    <button type="button" class="btn btn-primary btn-animation waves-effect waves-light" data-bs-dismiss="modal" data-text="Close"><span>Close</span></button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div id="viewforApprovalRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewforApprovalRequest" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h6 class="mt-3 mb-3 text-primary">Request Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Request Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="fw-medium mb-0">20220770-0043</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Date Filed</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">08 Sep, 2022<small class="ms-1">06:15 PM</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Purpose of Request</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">For Internship/OJT</p>
                            </div>
                        </div>
                    </li>
                    <!-- end list item -->
                </ul>
                <div class="ms-3">
                    <h6 class="mt-3 mb-3 text-dark">Document/s Requested</h6>
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/images/documents.png" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="card-text fw-medium">Informative Copy of Grades</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="link-dark">Quantity : 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-2 mb-4 text-dark">Signatories in this approval workflow</h6>
                    <div class="profile-timeline mb-3">
                        <div class="accordion accordion-flush" id="todayExample">
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Cleotilde B. Servigon
                                                </h6>
                                                <small class="text-muted">Registrar</small> <br>
                                                <span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-line text-warning"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Assoc. Prof. Jaime P. Gutierrez Jr.
                                                </h6>
                                                <small class="text-muted">Director</small> <br>
                                                <span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <h6 class="mt-2 mb-3 text-dark">Other documents included in this request</h6>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-soft-info text-info rounded">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <h6 class="mb-0">WES Form, ICES Form, IQAS Form</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <span>Qty: 2</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-soft-info text-info rounded">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <h6 class="mb-0">Certificate of Transfer Credential (Honorable Dismissal)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <span>Qty: 3</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h6 class="mt-3 mb-3 text-primary">Student Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">2019-000001-CM-0</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Name</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Zsyrhill Anne C. Soria</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Course</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Bachelor of Science in Information Technology</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Email Address</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">zacsoria@gmail.com</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Mobile Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">09372819876</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6 class="mt-3 mb-3 text-primary">Request Status</h6>
                <div class="ms-3 profile-timeline">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingOne">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-warning bg-gradient rounded-circle">
                                                <i class="mdi mdi-progress-clock"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                Pending for Clearance -
                                                <span class="fw-normal">Thu, 08, Sep. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is Pending for Approval and is being reviewed by the Officer-in-Charge, Student Records.</p>
                                    <p class="mb-0">Thu, 08, Sep. 2022 - 06:15 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingTwo">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                                <i class="mdi mdi-nfc-search-variant"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                For Clearance -
                                                <span class="fw-normal">Fri, 09, Sep. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</p>
                                    <p class="mb-0">Fri, 09, Sep. 2022 - 07:00 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingThree">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-info bg-gradient rounded-circle">
                                                <i class="mdi mdi-file-sign"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">
                                                For Evaluation / Processing -
                                                <span class="fw-normal">Sat, 10, Sep. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document/s are Paid and the Request is now being Processed for signature, documentary stamp and school dry seal.</p>
                                    <p class="mb-0">Sat, 10, Sep. 2022 - 03:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFour">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-light text-dark rounded-circle">
                                                <i class="ri-user-received-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">Ready for Pickup</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFive">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                <i class="ri-checkbox-circle-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">Released</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end accordion-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="viewApprovedRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewApprovedRequest" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h6 class="mt-3 mb-3 text-primary">Request Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Request Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="fw-medium mb-0">20224955-0392</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Date Filed</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">27 Nov, 2022<small class="ms-1">10:15 AM</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Purpose of Request</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Transfer to Another School</p>
                            </div>
                        </div>
                    </li>
                    <!-- end list item -->
                </ul>
                <div class="ms-3">
                    <h6 class="mt-3 mb-3 text-dark">Document/s Requested</h6>
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/images/documents.png" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="card-text fw-medium">Informative Copy of Grades</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="link-dark">Quantity : 1</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-2 mb-4 text-dark">Signatories in this approval workflow</h6>
                    <div class="profile-timeline mb-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-0">
                                                    Cleotilde B. Servigon
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 29 Nov. 2022, 07:45 AM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Assoc. Prof. Jaime P. Gutierrez Jr.
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 29 Nov. 2022, 01:40 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/images/documents.png" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="card-text fw-medium">Certificate of Good Moral Character</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="link-dark">Quantity : 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-2 mb-4 text-dark">Signatories in this approval workflow</h6>
                    <div class="profile-timeline mb-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-2.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Demelyn E. Monzon
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 29 Nov. 2022, 06:30 AM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button ps-3 mt-3 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Cleotilde B. Servigon
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 29 Nov. 2022, 07:45 AM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingThree">
                                    <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Assoc. Prof. Jaime P. Gutierrez Jr.
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 29 Nov. 2022, 01:40 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <h6 class="mt-2 mb-3 text-dark">Other documents included in this request</h6>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-soft-info text-info rounded">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <h6 class="mb-0">Certification of Non-Issuance of Special Order (S.O.)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <span>Qty: 1</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h6 class="mt-3 mb-3 text-primary">Student Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">2019-000002-CM-0</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Name</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Kim John C. Defiesta</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Course</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Bachelor of Science in Information Technology</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Email Address</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">kjdfiesta@outlook.com</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Mobile Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">09483829839</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6 class="mt-3 mb-3 text-primary">Request Status</h6>
                <div class="ms-3 profile-timeline">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingOne">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-warning bg-gradient rounded-circle">
                                                <i class="mdi mdi-progress-clock"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                Pending for Clearance -
                                                <span class="fw-normal">Sun, 27, Nov. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is Pending for Approval and is being reviewed by the Officer-in-Charge, Student Records.</p>
                                    <p class="mb-0">Sun, 27, Nov. 2022 - 10:15 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingTwo">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                                <i class="mdi mdi-nfc-search-variant"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                For Clearance -
                                                <span class="fw-normal">Mon, 28, Nov. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</p>
                                    <p class="mb-0">Mon, 28, Nov. 2022 - 02:35 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingThree">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-info bg-gradient rounded-circle">
                                                <i class="mdi mdi-file-sign"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">
                                                For Evaluation / Processing -
                                                <span class="fw-normal">Tue, 29, Nov. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document/s are Paid and the Request is now being Processed for signature, documentary stamp and school dry seal.</p>
                                    <p class="mb-0">Tue, 29, Nov. 2022 - 07:45 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFour">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-dark bg-gradient rounded-circle">
                                                <i class="ri-user-received-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">
                                                Ready for Pickup -
                                                <span class="fw-normal">Wed, 30, Nov. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Requested Document/s can now be claimed at PUP QC. The student must bring the claim stub and other requirements, if necessary.</p>
                                    <p class="mb-0">Wed, 30, Nov. 2022 - 08:30 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFive">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-success bg-gradient rounded-circle">
                                                <i class="ri-checkbox-circle-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">
                                                Released -
                                                <span class="fw-normal">Thu, 01, Dec. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The requested documents has been successfully claimed by the student.</p>
                                    <p class="mb-0">Thu, 01, Dec. 2022 - 06:48 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end accordion-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="viewOnHoldRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewOnHoldRequest" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h6 class="mt-3 mb-3 text-primary">Request Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Request Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="fw-medium mb-0">20225634-7542</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Date Filed</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">12 Dec, 2022<small class="ms-1">05:11 PM</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Purpose of Request</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Scholarship</p>
                            </div>
                        </div>
                    </li>
                    <!-- end list item -->
                </ul>
                <div class="ms-3">
                    <h6 class="mt-3 mb-3 text-dark">Document/s Requested</h6>
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/images/documents.png" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="card-text fw-medium">Transcript of Records - For evaluation/reference (Undergraduate) 1st Year</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="link-dark">Quantity : 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-2 mb-4 text-dark">Signatories in this approval workflow</h6>
                    <div class="profile-timeline mb-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-7.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Cherryln P. Esparagoza, MPA
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 14 Dec. 2022, 09:30 AM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button ps-3 mt-3 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-4.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Alma C. Fernandez, MIT
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 14 Dec. 2022, 10:27 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingThree">
                                    <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Cleotilde B. Servigon
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 14 Dec. 2022, 03:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="card card-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/images/documents.png" alt="" class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <p class="card-text fw-medium">Informative Copy of Grades</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="link-dark">Quantity : 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-2 mb-4 text-dark">Signatories in this approval workflow</h6>
                    <div class="profile-timeline mb-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Cleotilde B. Servigon
                                                </h6>
                                                <span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
                                                <div class="d-flex align-items-center text-muted mt-1 gap-2">
                                                    <i class="ri-calendar-todo-fill text-primary"></i>
                                                    <small> 14 Dec. 2022, 03:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingTwo">
                                    <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <i class="h5 ri-checkbox-blank-circle-line text-warning"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1">
                                                    Assoc. Prof. Jaime P. Gutierrez Jr.
                                                </h6>
                                                <small class="text-muted">Director</small> <br>
                                                <span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <h6 class="mt-2 mb-3 text-dark">Other documents included in this request</h6>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-soft-info text-info rounded">
                                                <i class="ri-file-text-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <h6 class="mb-0">Certification of English as Medium Of instruction for Japan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <span>Qty: 1</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h6 class="mt-3 mb-3 text-primary">Student Details</h6>
                <ul class="list list-group list-group-flush mb-0">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">2019-000003-CM-0</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Student Name</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Larkin Olivier Sanchez</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Course</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Bachelor of Public Administration Major in Public Financial Management</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Email Address</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">larkinsanchez@yahoo.com</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fs-13 mb-1 text-dark">Mobile Number</h5>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">09473849278</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6 class="mt-3 mb-3 text-primary">Request Status</h6>
                <div class="ms-3 profile-timeline">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingOne">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-warning bg-gradient rounded-circle">
                                                <i class="mdi mdi-progress-clock"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                Pending for Clearance -
                                                <span class="fw-normal">Mon, 12, Dec. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is Pending for Approval and is being reviewed by the Officer-in-Charge, Student Records.</p>
                                    <p class="mb-0">Mon, 12, Dec. 2022 - 11:57 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingTwo">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                                <i class="mdi mdi-nfc-search-variant"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">
                                                For Clearance -
                                                <span class="fw-normal">Tue, 13, Dec. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</p>
                                    <p class="mb-0">Tue, 13, Dec. 2022 - 04:29 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingThree">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-info bg-gradient rounded-circle">
                                                <i class="mdi mdi-file-sign"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">
                                                For Evaluation / Processing -
                                                <span class="fw-normal">Wed, 14, Dec. 2022</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body ms-2 ps-5 pt-0">
                                    <p class="mb-1 text-dark">The Document/s are Paid and the Request is now being Processed for signature, documentary stamp and school dry seal.</p>
                                    <p class="mb-0">Wed, 14, Dec. 2022 - 09:12 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFour">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-light text-dark rounded-circle">
                                                <i class="ri-user-received-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-1 fw-semibold text-dark">Ready for Pickup</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <div class="accordion-header" id="headingFive">
                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-xs">
                                            <div class="avatar-title bg-light text-success rounded-circle">
                                                <i class="ri-checkbox-circle-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0 fw-semibold text-dark">Released</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end accordion-->
                </div>
                <h6 class="mt-3 mb-3 text-primary">Remarks</h6>
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">
                        <div class="d-flex mb-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle" />
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="list-title mb-1">Cleotilde B. Servigon</h6>
                                <p class="list-text mb-0 fs-12">Registrar</p>
                            </div>
                        </div>
                        <p>Good Day! Please be advised that the Transcript of Records and the Informative Copy of Grades must be printed in a long bond paper with documentary stamp and school dry seal before handing it for signature. Kindly comply with this requirements so that the processing of the document/s will be started right away.</p>
                        <p class="d-flex fw-medium align-items-center">
                            <i class="ri-error-warning-fill me-2 fs-4 text-warning"></i>
                            <span class="text-danger">Reminder: If you have further questions regarding the on hold document/s, please call us at <b>8-287-82-04</b>.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="approveRequestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/ncouatyu.json" trigger="loop" colors="primary:#000000,secondary:#fad3d1" style="width:130px;height:130px">
                </lord-icon>

                <div class="mt-2">
                    <h4 class="mb-3 fw-semibold">Approve Informative Copy of Grades?</h4>
                    <p class="text-muted mb-4">If yes, enter any comment you have regarding this document. Please ba advised that the remarks is optional and you can use it to enter instructions for the OIC, Student Records. Lastly, make sure to click the Approve button. Otherwise, click the Dismiss button.</p>

                    <form id="approveRequestForm" class="needs-validation" novalidate>
                        <input type="hidden" id="approve_request_id">
                        <div class="vstack gap-2 mb-4">
                            <div class="form-check card-checkbox shadow">
                                <input id="approveDocument" name="approveDocument" class="form-check-input">
                                <label class="form-check-label" for="approveDocument" style="background-color: #fff5da">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-primary text-white fs-18 rounded">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 fw-semibold">Informative Copy of Grades</h6>
                                            <p class="text-muted mb-0">Type: Certifications</p>
                                        </div>
                                        <div class="flex-shrink-0 align-self-center">
                                            <span class="badge bg-dark"></i>QTY: 2<span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="text-start card mt-3 card-height-100 border shadow">
                            <div class="card-body p-0">
                                <div class="alert alert-danger border-0 rounded-top alert-solid alert-label-icon rounded-0 m-0 d-flex align-items-center" style="background-color: #4b38b3!important" role="alert">
                                    <i class="mdi mdi-file-sign label-icon"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        Signatories in this approval workflow
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="acitivity-timeline acitivity-main">
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Cleotilde B. Servigon</h6>
                                                <p class="text-muted mb-1">Registrar</p>
                                                <span class="mb-4 badge badge-soft-info text-uppercase">Ongoing</span>
                                            </div>
                                        </div>
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Assoc. Prof. Jaime P. Gutierrez Jr.</h6>
                                                <p class="text-muted mb-1">Director</p>
                                                <span class="badge badge-soft-warning text-uppercase">Pending</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <div class="my-4">
                            <label for="remarks" class="h5 form-label">Remarks for Informative Copy of Grades</label>
                            <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="If you have additional remarks for the OIC, Student Records regarding this document, feel free to indicate it here. You can also set this document for approval with changes by indicating what needs to be revised in the document."></textarea>
                        </div>

                        <div class="justify-content-center">
                            <button type="submit" class="w-100 btn btn-success bg-gradient fw-medium waves-effect waves-light">Yes, Approve It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="onHoldRequestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="holdRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/wwneckwc.json" trigger="loop" style="width:130px;height:130px">
                </lord-icon>

                <div class="mt-2">
                    <h4 class="mb-3 fw-semibold">Hold Informative Copy of Grades?</h4>
                    <p class="text-muted mb-4">If yes, input on the remarks the reason for puting this document on hold and the steps the OIC, Student Records must follow for the document's next round of evaluation. Lastly, make sure to click the Hold button. Otherwise, click the Dismiss button.</p>

                    <form id="holdRequestForm" class="needs-validation" novalidate>
                        <input type="hidden" id="hold_request_id">
                        <div class="vstack gap-2 mb-4">
                            <div class="form-check card-checkbox shadow">
                                <input id="holdDocument" name="holdDocument" class="form-check-input">
                                <label class="form-check-label" for="holdDocument" style="background-color: #fff5da">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-primary text-white fs-18 rounded">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1 fw-semibold">Informative Copy of Grades</h6>
                                            <p class="text-muted mb-0">Type: Certifications</p>
                                        </div>
                                        <div class="flex-shrink-0 align-self-center">
                                            <span class="badge bg-dark"></i>QTY: 2<span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="text-start card mt-3 card-height-100 border shadow">
                            <div class="card-body p-0">
                                <div class="alert alert-danger border-0 rounded-top alert-solid alert-label-icon rounded-0 m-0 d-flex align-items-center" style="background-color: #4b38b3!important" role="alert">
                                    <i class="mdi mdi-file-sign label-icon"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        Signatories in this approval workflow
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="acitivity-timeline acitivity-main">
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Cleotilde B. Servigon</h6>
                                                <p class="text-muted mb-1">Registrar</p>
                                                <span class="mb-4 badge badge-soft-info text-uppercase">Ongoing</span>
                                            </div>
                                        </div>
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Assoc. Prof. Jaime P. Gutierrez Jr.</h6>
                                                <p class="text-muted mb-1">Director</p>
                                                <span class="badge badge-soft-warning text-uppercase">Pending</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <div class="my-4" id="showHoldRemarksDoc1">
                            <label for="remarks" class="h5 form-label">Remarks for Informative Copy of Grades <span class="text-danger">*</span></label>
                            <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="Enter the reason why you are holding the processing of this document and the instructions that the OIC, Student Records must comply with for the smooth facilitation of request. Be sure to indicate revisions that must be done in the document." required></textarea>
                            <div class="invalid-feedback">
                                Please indicate your reason for holding this document.
                            </div>
                        </div>
                        <div class="justify-content-center">
                            <button type="submit" class="w-100 btn btn-danger bg-gradient fw-medium waves-effect waves-light">Yes, Hold It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="revertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="revertRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/avdqoblt.json" trigger="loop" style="width:100px;height:100px">
                </lord-icon>

                <div class="mt-4">
                    <h4 class="mb-3 fw-semibold">Is the Remarks already Resolved?</h4>
                    <p class="text-muted mb-4">If yes, tick the checkbox and click the Yes, It is! button. The On Hold Document/s will be subjected again for your approval and moved on the "Requests for Approval" tab. Otherwise, click the Dismiss button.</p>
                    <!-- Warning Alert -->
                    <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
                        <div class="mb-2 d-flex align-items-center justify-content-center">
                            <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
                        </div>
                        <span>Please make sure that the OIC, Student Records has complied with all the <span class="fw-medium">REMARKS</span> indicated especifically for the <span class="fw-medium">ON HOLD DOCUMENT/S</span> before you set its status back to For Approval.</span>
                    </div>

                    <form id="revertRequestForm" class="needs-validation" novalidate>
                        <input type="hidden" id="revertt_request_id">
                        <div class="mt-4 form-check form-check-success mb-3">
                            <input class="form-check-input" type="checkbox" id="validateRevert" required>
                            <label class="form-check-label" for="validateRevert">
                                I hereby certify that the remarks I stated for holding the document/s has been resolved by the OIC, Student Records.
                            </label>
                            <div class="invalid-feedback">
                                You must agree that the OIC, Student Records complied with the remarks for the processing of the On Hold Document/s.
                            </div>
                        </div>
                        <div class="mt-4 justify-content-center">
                            <button type="submit" class="w-100 btn btn-success bg-gradient fw-medium waves-effect waves-light">Yes, It is!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>