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

<div id="viewRequest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewRequest" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="myLargeModalLabel">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="control_no" class="badge badge-outline-primary text-center fw-bold">20220637-0029</span></h2>
        <div class="row mt-4">
          <div class="col-md">
            <div class="row align-items-center g-3">
              <div class="col-md-auto">
                <div class="avatar-md">
                  <div class="avatar-title bg-white rounded-circle">
                    <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-1.png" alt="" class="avatar-md" />
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div>
                  <h5>Razal, Shane Jean Artuz</h5>
                  <h6>2020-00501-CM-1</h6>
                  <div class="hstack gap-3 flex-wrap">
                    <div class="badge rounded-pill badge-soft-danger fs-12">BS Information Technology</div>
                    <div class="vr"></div>
                    <div class="d-flex align-items-center">
                      <i class="bx bxs-school align-bottom me-2"></i>
                      Undergraduate
                    </div>
                    <div class="vr"></div>
                    <div>
                      Email Address :
                      <span class="fw-medium">razalshane@gmail.com</span>
                    </div>
                    <div class="vr"></div>
                    <div>
                      Mobile Number:
                      <span class="fw-medium">09382918293</span>
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
          <tbody>
            <tr>
              <td>Certification of Subject Description</td>
              <td class="text-center">1</td>
            </tr>
            <tr>
              <td>Transcript of Records - Copy for (Undergraduate) 3rd and 4th Year</td>
              <td class="text-center">1</td>
            </tr>
            <tr>
              <td>Certification of Enrollment/Attendance</td>
              <td class="text-center">1</td>
            </tr>
          </tbody>
        </table>
        <div class="mt-4">
          <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
          <div class="bg-soft-secondary ms-1 text-wrap">
            <p class="p-2 fw-medium">Employment</p>
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
                          <span class="fw-normal">Fri, 09 Sep 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is pending for approval and is being reviewed by the PUP Staff.</h6>
                    <p class="text-muted mb-0">Fri, 09 Sep 2022 - 11:00AM</p>
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

<div id="viewRequestDetails" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="myLargeModalLabel">Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 class="text-center"><span id="control_no" class="badge badge-outline-primary text-center fw-bold">20220903-0043</span></h2>
        <div class="row mt-4">
          <div class="col-md">
            <div class="row align-items-center g-3">
              <div class="col-md-auto">
                <div class="avatar-md">
                  <div class="avatar-title bg-white rounded-circle">
                    <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-6.png" alt="" class="avatar-md" />
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div>
                  <h5>Villaruz, Micah Matorre</h5>
                  <h6>2019-00025-CM-0</h6>
                  <div class="hstack gap-3 flex-wrap">
                    <div class="badge rounded-pill badge-soft-danger fs-12">BS Information Technology</div>
                    <div class="vr"></div>
                    <div class="d-flex align-items-center">
                      <i class="bx bxs-school align-bottom me-2"></i>
                      Undergraduate
                    </div>
                    <div class="vr"></div>
                    <div>
                      Email Address :
                      <span class="fw-medium">micahmvillaruz@gmail.com</span>
                    </div>
                    <div class="vr"></div>
                    <div>
                      Mobile Number:
                      <span class="fw-medium">09561437674</span>
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
              <th>Qty</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Informative Copy of Grades / Certified Copy of Grades</td>
              <td class="text-center">1</td>
              <td class="text-center"><span class="badge bg-success">Paid</span></td>
            </tr>
            <tr>
              <td>Transcript of Records - For evaluation/reference (Undergraduate) 3rd and 4th Year</td>
              <td class="text-center">1</td>
              <td class="text-center"><span class="badge bg-success">Paid</span></td>
            </tr>
          </tbody>
        </table>
        <div class="mt-4">
          <span class="badge rounded-pill bg-primary fs-12">Purpose of Request</span>
          <div class="bg-soft-secondary ms-1 text-wrap">
            <p class="p-2 fw-medium">Transfer to another school</p>
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
                          <span class="fw-normal">Sun, 28 Aug 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is pending for approval and is being reviewed by the PUP Staff.</h6>
                    <p class="text-muted mb-0">Sun, 28 Aug 2022 - 8:00AM</p>
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
                          <span class="fw-normal">Mon, 29 Aug 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <div class="hstack gap-3 flex-wrap align-items-center">
                      <h6 class="fs-14">Schedule to Process Requirements at PUP QC</h6>
                      <h6 class="fs-13">-</h6>
                      <div class="d-flex">
                        <i class="bx bxs-calendar-minus text-success me-2"></i>
                        <h6 class="fs-14">August 30, 2022</h6>
                      </div>
                      <h6 class="vr"></h6>
                      <div class="d-flex">
                        <i class="bx bxs-time-five text-warning me-2"></i>
                        <h6 class="fs-14">8:00 AM - 12:00 AM</h6>
                      </div>
                    </div>
                    <h6 class="mb-1">The Document Request is approved. The student must submit the requirements and pay the request fees.</h6>
                    <p class="text-muted mb-0">Mon, 29 Aug 2022 - 10:20AM</p>
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
                          <span class="fw-normal">Wed, 31 Aug 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The document request is now being processed by the PUP Staff and signed by the signatories.</h6>
                    <p class="text-muted mb-0">Wed, 31 Aug 2022 - 5:48PM</p>
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
                          <span class="fw-normal">Thu, 01 Sep 2022</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </div>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body ms-2 ps-5 pt-0">
                    <div class="hstack gap-3 flex-wrap align-items-center">
                      <h6 class="fs-14">Schedule to Claim Documents at PUP QC</h6>
                      <h6 class="fs-13">-</h6>
                      <div class="d-flex">
                        <i class="bx bxs-calendar-minus text-success me-2"></i>
                        <h6 class="fs-14">September 02, 2022</h6>
                      </div>
                      <h6 class="vr"></h6>
                      <div class="d-flex">
                        <i class="bx bxs-time-five text-warning me-2"></i>
                        <h6 class="fs-14">8:00 AM - 12:00 AM</h6>
                      </div>
                    </div>
                    <h6 class="mb-1">The requested documents has been signed with school dry seal and documentary stamp, now available for pickup by the student.</h6>
                    <p class="text-muted mb-0">Thu, 01 Sep 2022 - 4.54PM</p>
                  </div>
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
        <div class="mt-4">
          <div class="h6 fs-15 text-primary">Remarks</div>
          <div class="list-group">
            <a href="javascript:void(0);" class="list-group-item list-group-item-action">
              <div class="d-flex mb-2 align-items-center">
                <div class="flex-shrink-0">
                  <img src="<?= base_url() ?>public/images/officials/img-25.png" alt="" class="avatar-sm rounded-circle" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="list-title fs-15 mb-1">Hernando Liberato</h5>
                  <p class="list-text mb-0 fs-12">PUP Staff</p>
                </div>
              </div>
              <p>The Document Request is now approved. You must download the Request form and bring it together with the requirements as listed below. Your schedule for processing of requirements at PUP QC is <b>August 30, 2022</b> from <b>8:00 AM to 12:00 AM</b>.</p>
              <p>Please bring the following requirements:</p>
              <ol class="list-group list-group-numbered">
                <li class="list-group-item">Photocopy of Student ID (Back to Back)</li>
                <li class="list-group-item">Documentary Stamp</li>
                <li class="list-group-item">Letter stating the purpose of the request</li>
              </ol>
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action">
              <div class="d-flex mb-2 align-items-center">
                <div class="flex-shrink-0">
                  <img src="<?= base_url() ?>public/images/officials/img-25.png" alt="" class="avatar-sm rounded-circle" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="list-title fs-15 mb-1">Hernando Liberato</h5>
                  <p class="list-text mb-0 fs-12">PUP Staff</p>
                </div>
              </div>
              <p>Good Day! Please be informed that your requested credential/s is/are scheduled for pick-up on <b>September 02, 2022</b>. Please claim the credential/s at the releasing section on your scheduled date only, from <b>8:00 AM to 4:00 PM</b>. If you are unable to come on your scheduled date, you will be re-scheduled at a later date. Thank you.</p>
            </a>
          </div>
        </div>
        <div class="pt-3 border-top border-top-dashed mt-4">
          <h6 class="mb-3 fw-semibold text-uppercase">Resources</h6>
          <div class="row g-3">
            <div class="col-xxl-4 col-lg-6">
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
                      <a href="#" class="text-body text-truncate d-block">Request Form.pdf</a>
                    </h5>
                    <div>2.2MB</div>
                  </div>
                  <div class="flex-shrink-0 ms-2">
                    <div class="d-flex gap-1">
                      <button type="button" class="btn btn-icon text-muted btn-sm fs-18">
                        <i class="ri-download-2-line"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
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
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="Enter the days and the time you are available for receiving of the requirements & accommodation of this request at PUP QC. You can also indicate when you are unavailable and when the student can file the request at the school." required></textarea>
              <div class="invalid-feedback">
                Please indicate your availability at the remarks above.
              </div>
            </div>
            <div class="mt-4 hstack gap-2 justify-content-center">
              <button class="btn btn-success fw-medium">Yes, Approve It!</button>
              <button class="btn btn-light fw-medium" data-bs-dismiss="modal">Dismiss</button>
            </div>
          </form>
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
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control mt-2" id="remarks" name="remarks" rows="5" placeholder="Enter the reason why you are cancelling the request and the instructions, if any, that the student must comply before requesting the document/s again." required></textarea>
              <div class="invalid-feedback">
                Please indicate your reason for cancelling.
              </div>
            </div>
            <div class="mt-4 hstack gap-2 justify-content-center">
              <button class="btn btn-danger fw-medium">Yes, Cancel It!</button>
              <button class="btn btn-light fw-medium" data-bs-dismiss="modal">Dismiss</button>
            </div>
          </form>
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
            <div class="mt-4">
              <label for="or_no" class="h5 form-label">O.R. Number <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="or_no" name="or_no" placeholder="Official Receipt No." required>
              <div class="invalid-feedback">
                Please enter the O.R. Number for this request.
              </div>
            </div>
            <div class="mt-4 hstack gap-2 justify-content-center">
              <button class="btn btn-info fw-medium">Yes, It is!</button>
              <button class="btn btn-light fw-medium" data-bs-dismiss="modal">Dismiss</button>
            </div>
          </form>
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
            <div class="mt-4">
              <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
              <textarea class="form-control" id="remarks" name="remarks" rows="5" placeholder="Enter the days and the time you are available to accomodate the claiming of this request at PUP QC. You can also indicate here if there are requirements that the student must bring upon receiving of the requested documents." required></textarea>
              <div class="invalid-feedback">
                Please indicate your availability at the remarks above.
              </div>
            </div>
            <div class="mt-4 hstack gap-2 justify-content-center">
              <button class="btn btn-dark fw-medium">Yes, It is!</button>
              <button class="btn btn-light fw-medium" data-bs-dismiss="modal">Dismiss</button>
            </div>
          </form>
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