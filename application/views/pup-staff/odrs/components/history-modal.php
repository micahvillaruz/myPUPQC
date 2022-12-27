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

<div id="viewRequestDetails" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RequestDetails" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="RequestDetails">Request Details</h5>
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
                    <div id="course" class="badge rounded-pill badge-soft-danger fs-12 text-wrap py-2" style="width: 350px; line-height: 15px;"></div>
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
          <thead class="table-light text-muted">
            <tr>
              <th colspan="4" class="bg-soft-primary text-dark">Requested Document/s:</th>
            </tr>
            <tr>
              <th>Document</th>
              <th>Qty</th>
              <th>Payment Status</th>
              <th id="completion_date"></th>
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
          <div class="h6 fs-15 text-primary">Request Status</div>
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
              <div id="for_clearance" class="accordion-item border-0">
              </div>
              <div id="for_evaluation" class="accordion-item border-0">
              </div>
              <div id="ready_for_pickup" class="accordion-item border-0">
              </div>
              <div id="last" class="accordion-item border-0">
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