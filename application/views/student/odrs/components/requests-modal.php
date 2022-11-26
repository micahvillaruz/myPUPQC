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
              The document request is pending for approval by the Administrative Staff. The Administrative Staff will have the option to approve or cancel the request.
            </span>
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
            <div class="badge badge-soft-danger">
              <i class="me-2 mdi mdi-nfc-search-variant fs-13"></i>
              <span class="text-uppercase">For Clearance</span>
            </div>
            <br>
            <span class="mt-2 fs-12">
              A schedule is released containing the day and time the student will go to PUP QC for submission of requirements, downloaded Request Form and payment of requested documents.
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">3</span></b>
            <div class="badge badge-soft-info">
              <i class="me-2 mdi mdi-file-sign fs-13"></i>
              <span class="text-uppercase">For Evaluation / Processing</span>
            </div>
            <br>
            <span class="mt-2 fs-12">
              Evaluation and Processing of records and required documents for releasing. The Administrative Staff prints the documents, and gives it to the authorized personnel for signature.
            </span>
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">4</span></b>
            <div class="badge badge-soft-dark">
              <i class="me-2 ri-user-received-2-line fs-13"></i>
              <span class="text-uppercase">Ready for Pickup</span>
            </div>
            <br>
            <span class="mt-2 fs-12">
              The requested document/s is/are already available for pickup at the releasing section of student records. A schedule is given to the student for claiming of documents requested at PUP QC.
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
              The document request is pending for approval by the Administrative Staff. The Administrative Staff will have the option to approve or cancel the request.
            </span>
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
            <div class="badge badge-soft-danger">
              <i class="me-2 mdi mdi-cancel fs-13"></i>
              <span class="text-uppercase">Cancelled</span>
            </div>
            <br>
            <span class="mt-2 fs-12">
              The document request was cancelled by the Administrative Staff. The reason for cancelling is indicated in the remarks sent to the student. The student can comply with the requirements and request again.
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">3</span></b>
            <div class="badge badge-soft-dark">
              <i class="me-2 mdi mdi-trash-can-outline fs-13"></i>
              <span class="text-uppercase">Deleted</span>
            </div>
            <br>
            <span class="mt-2 fs-12">
              The document request has been deleted and will not be visible on the student's and Administrative Staff's side.
            </span>
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

<div id="viewRequestDetails" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="requestDetailsLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="requestDetailsLabel">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="control_no" class="badge badge-outline-primary text-center fw-bold"></span></h2>
        <table class="mt-4 table dt-responsive table-bordered align-middle" style="width: 100%">
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
              <div id="pending_for_clearance" class="accordion-item border-0">
              </div>
              <div id="for_clearance" class="accordion-item border-0">
              </div>
              <div id="for_evaluation" class="accordion-item border-0">
              </div>
              <div id="ready_for_pickup" class="accordion-item border-0">
              </div>
              <div id="released" class="accordion-item border-0">
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

<div id="viewRequestRequirements" class="modal fade" tabindex="-1" aria-labelledby="requestRequirements" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="requestRequirements">Requirements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Submit hard copy of the requirement/s to the <strong> Records Section - OIC Student Records</strong>.
        </div>

        <!-- Table Head -->
        <table class="table align-middle dt-responsive mb-0">
          <thead class="table-light">
            <tr>
              <th scope="col">Request</th>
              <th scope="col">Requirement</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CAV-DFA/Apostille - Red Ribbon (For Undergrad)</td>
              <td>Photocopy of TOR (must capture the whole page including the signatories)</td>
            </tr>
            <tr>
              <td>CAV-CHED (Commission on Higher Education)</td>
              <td>Photocopy of TOR (must capture the whole page including the signatories)</td>
            </tr>
            <tr>
              <td>CAV-CHED (Commission on Higher Education)</td>
              <td>Photocopy of Diploma</td>
            </tr>
            <tr>
              <td>CAV-CHED (Commission on Higher Education)</td>
              <td>Letter format for CHED</td>
            </tr>
            <tr>
              <td>WES Form, ICES Form, IQAS Form</td>
              <td>Fully Accomplished WES/ICES/IQAS Form</td>
            </tr>
            <tr>
              <td>For Overall Request</td>
              <td>Request Form</td>
            </tr>
          </tbody>
        </table>
        <h6 class="mt-4 mb-2 fw-semibold text-uppercase">Download Attachment</h6>
        <div class="row">
          <div class="col-xxl-5 col-lg-6">
            <div class="border rounded border-dashed p-2">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-light text-danger rounded fs-24">
                      <i class="ri-file-pdf-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="fs-13 mb-1">
                    <a href="<?= base_url() ?>public/file/Request-Form.pdf" class="text-body text-truncate d-block">Request Form.pdf</a>
                  </h5>
                  <div>624KB</div>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="d-flex gap-1">
                    <a href="<?= base_url() ?>public/file/Request-Form.pdf" download="Request Form" type="button" class="btn btn-icon text-muted btn-sm fs-18">
                      <i class="ri-download-2-line"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="alert alert-danger alert-border-left alert-dismissible fade show mt-4" role="alert">
          <i class="ri-error-warning-line me-3 align-middle"></i> <strong>Notice</strong> - Only requests with complete requirements shall be processed. <br>
          <small class="fst-italic">Please contact Hernando DR. Liberato (Sir Nandy) if you have any questions about the requirements or if the request status hasn't changed after 3 days from submission of requirements.</small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->