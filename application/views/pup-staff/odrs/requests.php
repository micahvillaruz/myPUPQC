<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header align-items-xl-center d-xl-flex">
        <h5 class="card-title mb-0 flex-grow-1">Requests</h5>
        <div class="flex-shrink-0">
          <ul class="nav nav-pills card-header-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab">
                Pending
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#approved" role="tab">
                Approved
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <!-- Tab panes -->
        <div class="tab-content text-muted">
          <div class="tab-pane active" id="pending" role="tabpanel">
            <table id="model-datatables" class="display dt-responsive table align-middle" style="width: 100%">
              <thead class="bg-light">
                <tr>
                  <th>Control Number</th>
                  <th>Student</th>
                  <th>Date Filed</th>
                  <th>Details</th>
                  <th>Request Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220637-0029</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-1.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">Shane Jean A. Razal</span>
                        <i class="mdi mdi-gender-female text-danger"></i>
                        <small>Female</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">09 Sep, 2022<small class="text-muted ms-1">11:00 AM</small></span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Clearance: </span>
                          </td>
                          <td>Undergraduate Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Purpose: </span>
                          </td>
                          <td>Employment</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-3 d-flex flex-column justify-content-end">
                      <button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequest">View Details</button>
                      <small class="d-block fst-italic text-center">Always "View Details" for more information</small>
                    </div>
                  </td>
                  <td>
                    <div class="mt-2 d-grid fw-bolder badge badge-soft-warning position-relative">
                      <i class="m-2 mdi mdi-clock fs-13"></i>
                      <span class="pb-2 text-uppercase">Pending For Clearance</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="approveRequest()"><i class="ri-check-fill fs-5 fw-bold"></i></button>
                      <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelRequest()">
                        <i class="ri-close-fill fs-5 fw-bold"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220668-0097</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-3.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">Kim John C. Defiesta</span>
                        <i class="mdi mdi-gender-male text-info"></i>
                        <small>Male</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">08 Sep, 2022<small class="text-muted ms-1">09:00 PM</small></span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Clearance: </span>
                          </td>
                          <td>Undergraduate Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Purpose: </span>
                          </td>
                          <td>Readmission</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-3 d-flex flex-column justify-content-end">
                      <button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequest">View Details</button>
                      <small class="d-block fst-italic text-center">Always "View Details" for more information</small>
                    </div>
                  </td>
                  <td>
                    <div class="mt-2 d-grid fw-bolder badge badge-soft-warning position-relative">
                      <i class="m-2 mdi mdi-clock fs-13"></i>
                      <span class="pb-2 text-uppercase">Pending For Clearance</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="approveRequest()"><i class="ri-check-fill fs-5 fw-bold"></i></button>
                      <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelRequest()">
                        <i class="ri-close-fill fs-5 fw-bold"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220815-0051</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-1.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">Albert Angelo C. Lupo</span>
                        <i class="mdi mdi-gender-male text-info"></i>
                        <small>Male</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">07 Sep, 2022<small class="text-muted ms-1">04:30 PM</small></span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Clearance: </span>
                          </td>
                          <td>Undergraduate Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="fw-medium badge bg-dark me-1">Purpose: </span>
                          </td>
                          <td>Scholarship</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-3 d-flex flex-column justify-content-end">
                      <button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequest">View Details</button>
                      <small class="d-block fst-italic text-center">Always "View Details" for more information</small>
                    </div>
                  </td>
                  <td>
                    <div class="mt-2 d-grid fw-bolder badge badge-soft-warning position-relative">
                      <i class="m-2 mdi mdi-clock fs-13"></i>
                      <span class="pb-2 text-uppercase">Pending For Clearance</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="approveRequest()"><i class="ri-check-fill fs-5 fw-bold"></i></button>
                      <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelRequest()">
                        <i class="ri-close-fill fs-5 fw-bold"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="approved" role="tabpanel">
            <table id="buttons-datatables" class="display dt-responsive table align-middle" style="width: 100%">
              <thead class="bg-light">
                <tr>
                  <th>Control Number</th>
                  <th>Student</th>
                  <th>Date Filed</th>
                  <th>Payment Status</th>
                  <th>Details</th>
                  <th>Request Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220770-0043</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-7.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">Zsyrhill Anne C. Soria</span>
                        <i class="mdi mdi-gender-female text-danger"></i>
                        <small>Female</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">08 Sep, 2022<small class="text-muted ms-1">06:15 PM</small></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-block badge badge-soft-warning align-items-center">
                      <i class="me-2 mdi mdi-cash-fast fs-13"></i>
                      <span class="text-uppercase">Pending</span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Clearance: </span>
                          </td>
                          <td>Graduated Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Purpose: </span>
                          </td>
                          <td>Further Studies</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td>
                    <div class="mt-2 d-grid badge badge-soft-danger position-relative">
                      <i class="m-2 mdi mdi-nfc-search-variant fs-13"></i>
                      <span class="pb-2 text-uppercase">For Clearance</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="ri-eye-fill"></i></button>
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateRequestStatus">
                        <i class="ri-edit-2-fill fs-5"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220829-0067</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">James Paul L. Tulod</span>
                        <i class="mdi mdi-gender-male text-info"></i>
                        <small>Male</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">01 Sep, 2022<small class="text-muted ms-1">03:00 PM</small></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-block badge badge-soft-success align-items-center">
                      <i class="me-2 mdi mdi-cash-check fs-13"></i>
                      <span class="text-uppercase">Paid</span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Clearance: </span>
                          </td>
                          <td>Undergraduate Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Purpose: </span>
                          </td>
                          <td>Scholarship</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td>
                    <div class="mt-2 d-grid badge badge-soft-info position-relative">
                      <i class="m-2 mdi mdi-file-sign fs-13"></i>
                      <span class="pb-2 text-uppercase">For Evaluation / Processing</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="ri-eye-fill"></i></button>
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateRequestStatus">
                        <i class="ri-edit-2-fill fs-5"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-primary fw-medium">20220903-0088</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center fw-medium">
                      <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-6.png" class="avatar-xs rounded-circle me-2">
                      <div>
                        <span class="d-block fw-medium">Micah M. Villaruz</span>
                        <i class="mdi mdi-gender-female text-danger"></i>
                        <small>Female</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="ri-calendar-todo-fill text-primary"></i>
                      <span class="ms-2">28 Aug, 2022<small class="text-muted ms-1">08:00 AM</small></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-block badge badge-soft-success align-items-center">
                      <i class="me-2 mdi mdi-cash-check fs-13"></i>
                      <span class="text-uppercase">Paid</span>
                    </div>
                  </td>
                  <td>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Clearance: </span>
                          </td>
                          <td>Undergraduate Student</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Course: </span>
                          </td>
                          <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge badge-outline-primary fw-bolder me-3 fs-11">Purpose: </span>
                          </td>
                          <td>Transfer to another school</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td>
                    <div class="mt-2 d-grid badge badge-soft-dark position-relative">
                      <i class="m-2 ri-user-received-2-line fs-13"></i>
                      <span class="pb-2 text-uppercase">Ready for Pickup</span>
                      <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="ri-eye-fill"></i></button>
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateRequestStatus">
                        <i class="ri-edit-2-fill fs-5"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end row-->