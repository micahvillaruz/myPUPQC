<div id="viewProcessStatusFlow" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="myModalLabel">Process Status Flow</h5>
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

<div id="viewRequestDetails" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="myLargeModalLabel">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="control_no" class="badge badge-outline-primary text-center fw-bold">20220967-0103</span></h2>
        <table class="mt-4 table table-bordered nowrap align-middle" style="width: 100%">
          <thead>
            <tr class="bg-light">
              <th colspan="4" class="fst-italic">Requested Document/s:</th>
            </tr>
            <tr>
              <th>Document</th>
              <th>Quantity</th>
              <th>Payment Status</th>
              <th>Release Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Certificate of Good Moral Character</td>
              <td class="text-center">1</td>
              <td class="text-center"><span class="badge bg-success">Paid</span></td>
              <td><span class="ms-2">21 Jan, 2022<small class="text-muted ms-1">11:00 AM</small></span></td>
            </tr>
          </tbody>
        </table>
        <div class="mt-4">
          <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
          <div class="bg-soft-secondary ms-1 text-wrap">
            <p class="p-2 fw-medium">Scholarship</p>
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
                          <span class="fw-normal">Sat, 15 Jan 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is pending for approval and is being reviewed by the Administrative Staff.</h6>
                    <p class="text-muted mb-0">Sat, 15 Jan 2022 - 7:30AM</p>
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
                          <span class="fw-normal">Sun, 16 Jan 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is approved. The student must submit the requirements and pay the request fees at PUP QC.</h6>
                    <p class="text-muted mb-0">Sun, 16 Jan 2022 - 9:00AM</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingThree">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-info rounded-circle">
                          <i class="mdi mdi-file-sign"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                          For Evaluation / Processing -
                          <span class="fw-normal">Mon, 17 Jan 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The document request is now being processed by the Administrative Staff and signed by the signatories.</h6>
                    <p class="text-muted mb-0">Mon, 17 Jan 2022 - 4:37PM</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingFour">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-dark rounded-circle">
                          <i class="ri-user-received-2-line"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                          Ready for Pickup -
                          <span class="fw-normal">Thu, 20 Jan 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The requested documents is now ready for pickup. The student must claim the request at PUP QC.</h6>
                    <p class="text-muted mb-0">Thu, 20 Jan 2022 - 1:25PM</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item border-0">
                <div class="accordion-header" id="headingFive">
                  <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-success rounded-circle">
                          <i class="ri-checkbox-circle-fill"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                          Released -
                          <span class="fw-normal">Fri, 21 Jan 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFives" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The requested documents has been successfully claimed by the student.</h6>
                    <p class="text-muted mb-0">Fri, 21 Jan 2022 - 11:00AM</p>
                  </div>
                </div>
              </div>
            </div>
            <!--end accordion-->
          </div>
        </div>
        <div class="mt-4 mb-3">
          <div class="h6 fs-15 text-primary">Remarks</div>
          <div class="list-group">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex mb-2 align-items-center">
                <div class="flex-shrink-0">
                  <img src="<?= base_url() ?>public/images/officials/img-25.png" alt="" class="avatar-sm rounded-circle" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="list-title fs-15 mb-1">Hernando Liberato</h5>
                  <p class="list-text mb-0 fs-12">Administrative Staff</p>
                </div>
              </div>
              <p>Good Day! Please be informed that your requested credential/s is/are scheduled for pick-up and can now be claimed at the Records Section, Rothlener Building, PUP Quezon City. Please <b>Request an Appointment</b> on the <a href="https://apps.pup.edu.ph/appointment" class="link-primary fw-medium">Visitors Appointment Scheduling System (VASS)</a> for your desired date and time in claiming the documents. You are required to present your <b>Gate Pass</b> generated from <b>Approved Appointments</b> on VASS before being allowed to enter the PUP QC premises. If you are unable to come on your scheduled date, you will need to re-schedule another date on VAAS to pick-up your documents. Thank you.</p>
            </div>
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