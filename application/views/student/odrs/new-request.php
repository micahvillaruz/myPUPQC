<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">New Request</h5>
      </div>
      <div class="card-body">
        <form id="createRequestForm" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-lg-12">
              <label for="course_when_admitted" class="form-label">Program / Course</label>
              <div class="input-group has-validation">
                <select class="form-select" value="" id="course_when_admitted" name="course_when_admitted" disabled>
                  <option id="course" selected></option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
                <div class="invalid-feedback">
                  Please select your Program/Course.
                </div>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <label for="education_status" class="form-label">Documents for</label>
              <div class="input-group has-validation">
                <select class="form-select" value="" id="education_status" name="education_status" disabled required>
                  <option value="1" id="educ_status" selected></option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
                <div class="invalid-feedback">
                  Please select your Education Status.
                </div>
              </div>
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
              <div class="tab-content text-muted" id="tabpanes">
              </div>
            </div>
            <!--end col-->
            <div id="not-visible" class="d-none">
              <div class="col-lg-12">
                <label for="purpose" class="form-label">Purpose of Request</label>
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
<!--end row-->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->