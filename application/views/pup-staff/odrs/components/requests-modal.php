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

<div id="viewPendingRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewPendingRequest" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="viewPendingRequest">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="control_no" class="badge badge-outline-primary text-center fw-bold"></span></h2>
        <div class="row mt-4">
          <div class="col-md">
            <div class="row align-items-center g-3">
              <div class="col-md-auto">
                <div class="avatar-md">
                  <div id="image" class="avatar-title bg-white rounded-circle">
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div>
                  <h5 id="student_full_name"></h5>
                  <h6 id="user_no"></h6>
                  <div class="hstack gap-3 flex-wrap">
                    <div id="course" class="badge rounded-pill badge-soft-danger fs-12"></div>
                    <div class="vr"></div>
                    <div>
                      <i class="ri-mail-fill align-bottom text-info me-2"></i>
                      <span>Email Address :</span>
                      <span id="email_address" class="fw-medium"></span>
                    </div>
                    <div class="vr"></div>
                    <div>
                      <i class="ri-phone-fill align-bottom text-success me-2"></i>
                      <span>Mobile Number:</span>
                      <span id="contact_number" class="fw-medium"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <table class="mt-5 table table-bordered nowrap align-middle" style="width: 100%">
          <thead>
            <tr class="bg-light">
              <th colspan="2" class="fst-italic">Requested Document/s:</th>
            </tr>
            <tr>
              <th class="text-uppercase">Document</th>
              <th class="text-uppercase">Quantity</th>
            </tr>
          </thead>
          <tbody id="documents">
          </tbody>
        </table>
        <div class="mt-4">
          <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
          <div class="bg-soft-secondary ms-1 text-wrap">
            <p id="purpose_of_request" class="p-2 fw-medium"></p>
          </div>
        </div>
        <div class="m-2 mt-4 mb-3">
          <div class="h6 fs-15 text-primary">Status</div>
          <div class="profile-timeline">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingOne">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-warning rounded-circle">
                          <i class="mdi mdi-progress-clock"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-0 fw-semibold">
                          Pending for Clearance -
                          <span id="pending_for_clearance_date" class="fw-normal"></span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is Pending for Approval and is being reviewed by the Officer-in-Charge, Student Records.</h6>
                    <p id="pending_for_clearance_datetime" class="text-muted mb-0"></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingTwo">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-light text-danger rounded-circle">
                          <i class="mdi mdi-nfc-search-variant"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-0 fw-semibold">
                          For Clearance
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingThree">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-light text-info rounded-circle">
                          <i class="mdi mdi-file-sign"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                          For Evaluation / Processing
                        </h6>
                      </div>
                    </div>
                  </a>
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
                        <h6 class="fs-15 mb-1 fw-semibold">
                          Ready for Pickup
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingFive">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFile" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-light text-success rounded-circle">
                          <i class="ri-checkbox-circle-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-14 mb-0 fw-semibold">Released</h6>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!--end accordion-->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-animation waves-effect waves-light" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div id="viewApprovedRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewApprovedRequest" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="viewApprovedRequest">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="view_control_no" class="badge badge-outline-primary text-center fw-bold"></span></h2>
        <div class="row mt-4">
          <div class="col-md">
            <div class="row align-items-center g-3">
              <div class="col-md-auto">
                <div class="avatar-md">
                  <div id="view_picture" class="avatar-title bg-white rounded-circle">
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div>
                  <h5 id="view_student_name"></h5>
                  <h6 id="view_user_no"></h6>
                  <div class="hstack gap-3 flex-wrap">
                    <div id="view_course" class="badge rounded-pill badge-soft-danger fs-12"></div>
                    <div class="vr"></div>
                    <div>
                      <i class="ri-mail-fill align-bottom text-info me-2"></i>
                      <span>Email Address :</span>
                      <span id="view_email_address" class="fw-medium"></span>
                    </div>
                    <div class="vr"></div>
                    <div>
                      <i class="ri-phone-fill align-bottom text-success me-2"></i>
                      <span>Mobile Number:</span>
                      <span id="view_contact_number" class="fw-medium"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <table class="mt-5 table table-bordered nowrap align-middle" style="width: 100%">
          <thead>
            <tr class="bg-light">
              <th colspan="4" class="fst-italic">Requested Document/s:</th>
            </tr>
            <tr>
              <th>Document</th>
              <th>Quantity</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody id="view_documents">
          </tbody>
        </table>
        <div class="mt-4">
          <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
          <div class="bg-soft-secondary ms-1 text-wrap">
            <p id="view_purpose" class="p-2 fw-medium"></p>
          </div>
        </div>
        <div class="m-2 mt-4 mb-3">
          <div class="h6 fs-15 text-primary">Status</div>
          <div class="profile-timeline">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingOne">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-warning rounded-circle">
                          <i class="mdi mdi-progress-clock"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-0 fw-semibold">
                          Pending for Clearance -
                          <span id="pending_date" class="fw-normal"></span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is Pending for Approval and is being reviewed by the Officer-in-Charge, Student Records.</h6>
                    <p id="pending_datetime" class="text-muted mb-0"></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingTwo">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-danger rounded-circle">
                          <i class="mdi mdi-nfc-search-variant"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-0 fw-semibold">
                          For Clearance -
                          <span id="for_clearance_date" class="fw-normal"></span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</h6>
                    <p id="for_clearance_datetime" class="text-muted mb-0"></p>
                  </div>
                </div>
              </div>
              <div id="for_evaluation" class="accordion-item border-0">
              </div>
              <div id="ready_for_pickup" class="accordion-item border-0">
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingFive">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFile" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-light text-success rounded-circle">
                          <i class="ri-checkbox-circle-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-14 mb-0 fw-semibold">Released</h6>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!--end accordion-->
          </div>
        </div>
        <div id="remarks" class="mt-4 mb-3">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-animation waves-effect waves-light" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="approveRequestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveThisRequest" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center px-4">
        <lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
        </lord-icon>

        <div class="mt-4">
          <h4 class="mb-3 fw-semibold">Approve this Request?</h4>
          <p class="text-muted mb-4">If yes, indicate on the Remarks when you are available for the processing of this request at PUP QC. If not, click the Dismiss button.</p>
          <form id="approveRequestForm" class="needs-validation" novalidate>
            <input type="hidden" id="approve_request_id">
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="Enter the days and the time you are available for receiving of the requirements & accommodation of this request at PUP QC. You can also indicate when you are unavailable and when the student can file the request at the school." required></textarea>
              <div class="invalid-feedback">
                Please indicate your availability at the remarks above.
              </div>
            </div>
            <div class="mt-4 justify-content-center">
              <button type="submit" class="w-100 btn btn-success bg-gradient fw-medium waves-effect waves-light">Yes, Approve It!</button>
            </div>
          </form>
          <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cancelRequestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="cancelThisRequest" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center px-4">
        <lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
        </lord-icon>

        <div class="mt-4">
          <h4 class="mb-3 fw-semibold">Cancel this Request?</h4>
          <p class="text-muted mb-4">If yes, indicate on the Remarks the reason why you are cancelling this request. If not, click the Dismiss button.</p>
          <form id="cancelRequestForm" class="needs-validation" novalidate>
            <input type="hidden" id="cancel_request_id">
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="Enter the reason why you are cancelling the request and the instructions, if any, that the student must comply before requesting the document/s again." required></textarea>
              <div class="invalid-feedback">
                Please indicate your reason for cancelling.
              </div>
            </div>
            <div class="mt-4 justify-content-center">
              <button type="submit" class="w-100 btn btn-danger bg-gradient fw-medium waves-effect waves-light">Yes, Cancel It!</button>
            </div>
          </form>
          <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="forProcessingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="processThisRequest" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center px-4">
        <lord-icon src="https://cdn.lordicon.com/qrgbwxzp.json" trigger="loop" colors="outline:#121331,primary:#299cdb,secondary:#a7d2ed,tertiary:#ebe6ef" style="width:100px;height:100px">
        </lord-icon>

        <div class="mt-4">
          <h4 class="mb-3 fw-semibold">Is this Request for Evaluation/Processing?</h4>
          <p class="text-muted mb-4">If yes, enter the OR No., as a proof of payment of the student. If not, click the Dismiss button.</p>
          <!-- Warning Alert -->
          <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
            <div class="mb-2 d-flex align-items-center justify-content-center">
              <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
            </div>
            <span>Please make sure that the student has already <span class="fw-medium">PAID</span> the processing fee and presented the <span class="fw-medium">OFFICIAL RECEIPT</span> before you change the status of this request.</span>
          </div>
          <form id="forProcessingRequestForm" class="needs-validation" novalidate>
            <input type="hidden" id="process_request_id">
            <div class="mt-4">
              <label for="or_no" class="h5 form-label">O.R. Number <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="or_no" name="or_no" placeholder="Official Receipt No." required>
              <div class="invalid-feedback">
                Please enter the O.R. Number for this request.
              </div>
            </div>
            <div class="mt-4 justify-content-center">
              <button type="submit" class="w-100 btn btn-info bg-gradient fw-medium waves-effect waves-light">Yes, It is!</button>
            </div>
          </form>
          <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="readyforPickupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="pickupThisRequest" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center px-4">
        <lord-icon src="https://cdn.lordicon.com/ahzcowfh.json" trigger="loop" style="width:120px;height:120px">
        </lord-icon>

        <div class="mt-4">
          <h4 class="mb-3 fw-semibold">Is this Request Ready for Pickup?</h4>
          <p class="text-muted mb-4">If yes, indicate on the Remarks when you are available for assisting the claiming of this request at PUP QC. If not, click the Dismiss button.</p>
          <!-- Warning Alert -->
          <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
            <div class="mb-2 d-flex align-items-center justify-content-center">
              <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
            </div>
            <span>Please make sure that the document/s included in this request has already been <span class="fw-medium">SIGNED</span> by the intended signatories with <span class="fw-medium">SCHOOL DRY SEAL</span> and <span class="fw-medium">DOCUMENTARY STAMP</span> before you change the status of this request.</span>
          </div>
          <form id="readyForPickupRequestForm" class="needs-validation" novalidate>
            <input type="hidden" id="pickup_request_id">
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control" id="remarks" name="remarks" rows="5" placeholder="Enter the days and the time you are available to accomodate the claiming of this request at PUP QC. You can also indicate here if there are requirements that the student must bring upon receiving of the requested documents." required></textarea>
              <div class="invalid-feedback">
                Please indicate your availability at the remarks above.
              </div>
            </div>
            <div class="mt-4 justify-content-center">
              <button type="submit" class="w-100 btn btn-dark bg-gradient fw-medium waves-effect waves-light">Yes, It is!</button>
            </div>
          </form>
          <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="releasedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="releaseThisRequest" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center px-4">
        <lord-icon src="https://cdn.lordicon.com/wqwixhmt.json" trigger="loop" style="width:100px;height:100px">
        </lord-icon>

        <div class="mt-4">
          <h4 class="mb-3 fw-semibold">Is this Request already Released?</h4>
          <p class="text-muted mb-4">If yes, tick the checkbox and click the Yes, It is! button. If not, click the Dismiss button.</p>
          <!-- Warning Alert -->
          <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
            <div class="mb-2 d-flex align-items-center justify-content-center">
              <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
            </div>
            <span>Please make sure that the student has presented the <span class="fw-medium">CLAIM STUB</span> upon claiming of the request and has received all the <span class="fw-medium">REQUESTED DOCUMENT/S</span> before you set its status to Released.</span>
          </div>
          <form id="releasedRequestForm" class="needs-validation" novalidate>
            <div class="form-check form-check-success mb-3">
              <input class="form-check-input" type="checkbox" id="validateRelease" required>
              <label class="form-check-label" for="validateRelease">
                I hereby certify that all the documents included in this request has been released to the student.
              </label>
              <div class="invalid-feedback">
                You must first agree that you released ALL the requested documents.
              </div>
            </div>
            <div class="mt-4 hstack gap-2 justify-content-center">
              <button class="btn btn-success fw-medium">Yes, It is!</button>
              <button class="btn btn-light fw-medium" data-bs-dismiss="modal">Dismiss</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>