<div id="allow_create_request" class="row d-none">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">New Request</h5>
            </div>
            <div class="card-body">
                <form id="createRequestForm" class="needs-validation" novalidate>
                    <div class="row g-0">
                        <div class="alert alert-info" role="alert">
                            <h5 class="alert-heading"><i class="mdi mdi-information"></i> Advisory</h5>
                            If you shifted to another course, and it is not yet reflected on the Program/Course displayed below, please contact myPUPQC Admin at <u>mypupqc.odrs@pup.edu.ph</u>.
                        </div>


                        <div class="col-lg-12">
                            <label for="course_when_admitted" class="form-label">Program / Course <span class="text-danger">*</span></label>
                            <select class="form-control" value="" id="course_when_admitted" name="course_when_admitted" disabled>
                                <option id="course" selected></option>
                            </select>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12 mt-4">
                            <label for="document_type" class="form-label">Type of Document: (Choose at least 1)</label>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-custom-outline nav-primary mb-1" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tor" role="tab">Transcript of Records</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#certificates" role="tab">Certifications</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#unclaimed" role="tab">Unclaimed</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#cav" role="tab">CAV (CHED/DFA/WES/CES)</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content " id="tabpanes">
                            </div>
                        </div>
                        <!--end col-->
                        <div id="not-visible" class="d-none">
                            <div class="col-lg-12">
                                <label for="purpose" class="form-label">Purpose of Request <span class="text-danger">*</span></label>
                                <textarea class="form-control mt-3" id="purpose" rows="3" placeholder="Readmission, Employment, Transfer to other school, Board / Licensure Examination, Further Studies, Scholarship or Other Purpose" required></textarea>
                                <div class="invalid-feedback">
                                    Please provide the Purpose of Request.
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12 mt-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the Office of the University Registrar's <a href="https://odrs.pup.edu.ph/Resources/TermsConditions.pdf" target="new">Terms and Conditions</a>
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree to the Terms and Conditions before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notice" required>
                                    <label class="form-check-label" for="notice">
                                        I checked ALL the documents I need to request (One transaction per client only. Kindly check ALL the documents you need before clicking "Submit")
                                    </label>
                                    <div class="invalid-feedback">
                                        You must confirm that you checked ALL the documents that you need to request.
                                    </div>
                                </div>
                            </div>
                            <div id="checkDataPrivacy"></div>
                            <div class="col-lg-12 mt-4">
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary bg-gradient" id="addNewRequestButton">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>

<div id="decline_create_request" class="row my-5 py-5 d-none">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/yrgzpquj.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">Existing Request is Found!</h4>

        <p class="fs-15">If you want to create a New Request and the status of your request is currently <b>Pending For Clearance</b> and <b>For Clearance</b>, you must cancel your Existing Request first. <br> You can cancel the request by going to the <span class="fw-medium">Request</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Request</button> button. Otherwise, wait for your request to be Released before creating a New Request.</p>
        <span class="fs-12 mb-3 badge text-dark bg-warning">You can only cancel your existing request if the status of your request is <b>Pending For Clearance</b> and <b>For Clearance</b> only.</span>

        <a href="http://localhost/myPUPQC/student/odrs/request" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Request Page</a>
    </div>
</div>