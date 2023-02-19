<div id="allow_create_request" class="row d-none">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">New Request</h5>
      </div>
      <div class="card-body">
        <form id="createRequestForm" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="alert alert-info alert-border-left alert-dismissible fade show d-flex align-items-center" role="alert">
              <i class="ri-information-fill me-2 align-middle"></i> <strong>Advisory</strong> - If you shifted to another course, and it is not yet reflected on the Program/Course displayed below, please contact myPUPQC Admin at <u class="ms-1 fw-medium">mypupqc.odrs@pup.edu.ph</u>.
            </div>

            <div class="col-lg-12">
              <label for="course_when_admitted" class="form-label">Program / Course <span class="text-danger">*</span></label>
              <select class="form-select" value="" id="course_when_admitted" name="course_when_admitted" disabled>
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
              <div class="col-lg-12 mb-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                  <label class="form-check-label" for="privacy">
                    By clicking the Submit button, I understood and agree to PUP Online Document Request and Tracking System's
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
                          <p class="">PUP uses the data we collect for three (3) fundamental purposes:</p>
                          <ol class="">
                            <li>To operate as a higher education institution (HEI) and provide (including improving and customizing) the services we offer,</li>
                            <li>To send communication, including informative communication, and</li>
                            <li>Promote the University, whether in our Services or in third-party services supported by advertising.</li>
                          </ol>
                          <p class="">In carrying out these purposes, we combine data we collect to give you a more seamless, consistent and customized experience. However, to enhance privacy, we have safety measures designed to prevent certain data combinations. For example, when you are not yet authenticated (or not signed in), we store data we collect from you separately from any account information that directly identifies you (such as your name, email address or contact number).</p>

                          <h5 class="fs-15 text-primary">
                            Security of Personal Data
                          </h5>
                          <p class="">PUP is committed to protecting the security of your personal data. We use a variety of security technologies and procedures to help protect your personal data from unauthorized access, use or disclosure. For example, we store the personal data you provide on computer systems that have limited access and are in controlled facilities. When we transmit highly confidential data (such as your name or password) over the Internet, we protect it through the use of encryption.</p>

                          <h5 class="fs-15 text-primary">
                            Retention of Personal Data
                          </h5>
                          <p class="">The University retains personal data for as long as necessary to provide the services and fulfill the transactions you have requested or may request in the future, or for other essential purposes such as complying with our commitments, legal obligations, resolving disputes, and enforcing our agreements. Because these needs can vary for different data types in the context of different products, actual retention periods can vary significantly. The criteria used to determine the retention periods include:</p>
                          <ul class="">
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
                  <button class="btn btn-primary bg-gradient">Submit</button>
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