<div id="existing_request" class="row d-none">
  <div id="first_col" class="col-xl-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-center">
          <h5 id="control_no" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive table-card">
          <table class="table table-nowrap align-middle table-borderless mb-0">
            <thead class="table-light text-muted">
              <tr>
                <th colspan="3" class="bg-soft-primary text-dark">Requested Document/s:</th>
              </tr>
              <tr>
                <th scope="col">Document</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody id="documents">
            </tbody>
          </table>
          <div class="mt-4 mx-3">
            <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
            <div class="bg-soft-secondary ms-1 text-wrap">
              <p id="purpose_of_request" class="p-2 fw-medium"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end card-->
    <div id="request_status" class="card mb-0">
      <div class="card-header">
        <div class="d-sm-flex align-items-center">
          <h5 class="card-title flex-grow-1 mb-0">Request Status</h5>
          <div id="cancel_button" class="flex-shrink-0 mt-2 mt-sm-0">
            <button type="button" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0" onclick="cancelRequest()"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Request</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="profile-timeline">
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
            <div id="for_clearance" class="accordion-item border-0">
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
    </div>
    <!--end card-->
    <div id="remarks" class="card">
    </div>
    <!--end card-->
  </div>
  <!--end col-->
  <div id="second_col" class="col-xl-3 d-none">
    <div class="card">
      <div class="card-header">
        <div class="d-flex">
          <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-file-document-multiple-outline align-middle me-1 text-muted"></i> Requirements</h5>
          <div id="statusReq" class="flex-shrink-0">
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="alert alert-info alert_reqs" role="alert">
          Submit hard copy of the requirement/s to the <strong> Records Section - OIC Student Records</strong>.
        </div>

        <div id="requirements" class="list-group col nested-list nested-sortable">
        </div>

        <div class="alert alert-warning alert-border-left alert-dismissible alert_reqs fade show mt-4 mb-0" style="padding-right: 16px;" role="alert">
          <i class="ri-error-warning-line me-3 align-middle"></i> <strong>Notice</strong> - Only requests with complete requirements shall be processed. <br>
          <small class="fst-italic">Please contact Hernando DR. Liberato if you have any questions about the requirements.</small>
        </div>
      </div>
      <!-- end card body -->
    </div>
    <!--end card-->

    <div class="card">
      <div class="card-header align-items-center d-flex border-bottom-dashed">
        <h4 class="card-title mb-0 flex-grow-1"><i class="mdi mdi-download-box-outline align-middle me-1 text-muted"></i> Attachment/s</h4>
      </div>

      <div class="card-body">
        <div class="vstack gap-2">
          <div id="ched-letter" class="border rounded border-dashed p-2 d-none">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm">
                  <div class="avatar-title bg-light text-info rounded fs-24">
                    <i class="ri-file-word-2-fill"></i>
                  </div>
                </div>
              </div>
              <div class="flex-grow-1 overflow-hidden">
                <h5 class="fs-13 mb-1"> <a href="<?= base_url() ?>public/file/Letter-Format-for-CHED.docx" download="Letter-Format-for-CHED" class="text-body text-truncate d-block">Letter for CHED.docx</a></h5>
                <div>17KB</div>
              </div>
              <div class="flex-shrink-0 ms-2">
                <div class="d-flex gap-1">
                  <a href="<?= base_url() ?>public/file/Letter-Format-for-CHED.docx" download="Letter-Format-for-CHED" type="button" class="btn btn-icon text-muted btn-sm fs-18">
                    <i class="ri-download-2-line"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
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
                <h5 class="fs-13 mb-1"><a href="<?= base_url() ?>public/file/Request-Form.pdf" download="Request Form" class="text-body text-truncate d-block">Request Form.pdf</a></h5>
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
        <div class="mt-4 mb-0 alert alert-info alert-dismissible alert_reqs alert-additional fade show" role="alert">
          <div class="alert-body">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i class="ri-information-line fs-16 align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <p class="mb-0"> <b>Download</b> the file attachment/s, and <b>bring it with the requirements</b> specified for each of the documents included in this request. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->

    <div class="card">
      <div class="card-header">
        <div class="d-flex">
          <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-cash align-middle me-1 text-muted"></i> Payment Details</h5>
        </div>
      </div>
      <div class="card-body">
        <div id="payment" class="d-flex flex-column justify-content-center align-items-center">
        </div>
      </div>
    </div>
    <!--end card-->
  </div>
  <!--end col-->
</div>

<div id="no_request" class="row my-5 py-5 d-none">
  <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
    <lord-icon src="https://cdn.lordicon.com/kdookkse.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
    <h4 class="fw-bold">No Existing Request Found!</h4>
    <p class="fs-15">You have no Ongoing Document Request as of the moment. <br> Please create a New Request first by clicking the <spam class="fw-medium">"New Request"</spam> button below.</p>
    <a href="<?= base_url() ?>student/odrs/new-request" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">New Request</a>
  </div>
</div>