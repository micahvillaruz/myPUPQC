<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-xl-center d-xl-flex">
                <h5 class="card-title mb-0 flex-grow-1">History</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#released" role="tab">
                            Released
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled" role="tab">
                            Cancelled
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#deleted" role="tab">
                            Deleted
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="released" role="tabpanel">
                        <table id="example" class="display dt-responsive table align-middle" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Control Number</th>
                                    <th>Student</th>
                                    <th>Date Filed</th>
                                    <th>Details</th>
                                    <th>Request Status</th>
                                    <th>Date Released</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20225960-2346</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Albert Angelo P. Lupo</span>
                                                <i class="mdi mdi-gender-male text-info"></i>
                                                <small>Male</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">11 Nov, 2022<small class="text-muted ms-1">02:00 PM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Scholarship</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
                                            <i class="m-2 ri-checkbox-circle-line fs-13"></i>
                                            <span class="pb-2 text-uppercase">Released</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">13 Nov, 2022<small class="text-muted ms-1">09:00 AM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReleasedRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="sa-warning" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20224955-0392</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
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
                                            <span class="ms-2">28 Nov, 2022<small class="text-muted ms-1">04:30 PM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN BUSINESS TEACHER'S EDUCATION</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Transfer to Another School</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
                                            <i class="m-2 ri-checkbox-circle-line fs-13"></i>
                                            <span class="pb-2 text-uppercase">Released</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">29 Nov, 2022<small class="text-muted ms-1">07:45 AM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReleasedRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="sa-params" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20224935-0293</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-6.png" class="avatar-xs rounded-circle me-2">
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
                                            <span class="ms-2">05 Dec, 2022<small class="text-muted ms-1">10:27 AM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN ENTREPRENEURSHIP</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>For Employment</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
                                            <i class="m-2 ri-checkbox-circle-line fs-13"></i>
                                            <span class="pb-2 text-uppercase">Released</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">11 Dec, 2022<small class="text-muted ms-1">01:33 PM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReleasedRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="custom-sa-warning" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled" role="tabpanel">
                        <table id="fixed-header" class="display dt-responsive table align-middle" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Control Number</th>
                                    <th>Student</th>
                                    <th>Date Filed</th>
                                    <th>Details</th>
                                    <th>Request Status</th>
                                    <th>Date Cancelled</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20222940-1928</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-9.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Amora Elyse Ledezma</span>
                                                <i class="mdi mdi-gender-female text-danger"></i>
                                                <small>Female</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">11 Oct, 2022<small class="text-muted ms-1">01:20 PM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE DEVELOPMENT MANAGEMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Further Studies</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
                                            <i class="m-2 mdi mdi-cancel fs-13"></i>
                                            <span class="pb-2 text-uppercase">Cancelled by Student</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">15 Oct, 2022<small class="text-muted ms-1">08:15 AM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewCancelledRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="sa-warning" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20229039-1920</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Avrielle Haven Fernandez</span>
                                                <i class="mdi mdi-gender-female text-danger"></i>
                                                <small>Female</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">18 Nov, 2022<small class="text-muted ms-1">03:00 PM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF PUBLIC ADMINISTRATION MAJOR IN PUBLIC FINANCIAL MANAGEMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Civil Service Exam</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
                                            <i class="m-2 mdi mdi-cancel fs-13"></i>
                                            <span class="pb-2 text-uppercase">Cancelled by Staff</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">19 Nov, 2022<small class="text-muted ms-1">10:00 AM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewCancelledRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="sa-params" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20223943-3942</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-3.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Samantha Maureen Vera</span>
                                                <i class="mdi mdi-gender-female text-danger"></i>
                                                <small>Female</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">13 Dec, 2022<small class="text-muted ms-1">03:15 PM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN BUSINEESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Scholarship</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
                                            <i class="m-2 mdi mdi-cancel fs-13"></i>
                                            <span class="pb-2 text-uppercase">Cancelled by Staff</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">17 Dec, 2022<small class="text-muted ms-1">12:45 PM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewCancelledRequest"><i class="ri-eye-fill"></i></button>
                                            <button type="button" id="custom-sa-warning" class="btn btn-danger btn-icon waves-effect waves-light"><i class="bx bx-trash fs-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="deleted" role="tabpanel">
                        <table id="model-datatables" class="display dt-responsive table align-middle" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Control Number</th>
                                    <th>Student</th>
                                    <th>Date Filed</th>
                                    <th>Details</th>
                                    <th>Request Status</th>
                                    <th>Date Deleted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20224595-4563</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-woman-3.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Louisse Natasha Valeria</span>
                                                <i class="mdi mdi-gender-female text-danger"></i>
                                                <small>Female</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">09 Dec, 2022<small class="text-muted ms-1">08:30 AM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Further Studies</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid badge badge-soft-dark position-relative">
                                            <i class="m-2 mdi mdi-trash-can-outline fs-13"></i>
                                            <span class="pb-2 text-uppercase">Deleted</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">10 Dec, 2022<small class="text-muted ms-1">09:00 AM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center" width="10%">
                                        <button type="button" class="btn btn-info btn-label waves-effect waves-light"><i class="mdi mdi-eye-outline label-icon align-middle fs-16 me-2"></i> View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20225634-7542</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-4.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Larkin Olivier Sanchez</span>
                                                <i class="mdi mdi-gender-male text-info"></i>
                                                <small>Male</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">12 Dec, 2022<small class="text-muted ms-1">07:15 AM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF PUBLIC ADMINISTRATION MAJOR IN PUBLIC FINANCIAL MANAGEMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>Scholarship</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid badge badge-soft-dark position-relative">
                                            <i class="m-2 mdi mdi-trash-can-outline fs-13"></i>
                                            <span class="pb-2 text-uppercase">Deleted</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">14 Dec, 2022<small class="text-muted ms-1">04:37 PM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center" width="10%">
                                        <button type="button" class="btn btn-info btn-label waves-effect waves-light"><i class="mdi mdi-eye-outline label-icon align-middle fs-16 me-2"></i> View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-primary fw-medium">20222345-3456</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center fw-medium">
                                            <img src="<?= base_url() ?>public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <span class="d-block fw-medium">Sebastian Vincent Camero</span>
                                                <i class="mdi mdi-gender-male text-info"></i>
                                                <small>Male</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">13 Dec, 2022<small class="text-muted ms-1">09:17 AM</small></span>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary">Course: </span>
                                                    </td>
                                                    <td>BACHELOR OF SCIENCE IN BUSINESS TEACHER'S EDUCATION</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium badge bg-primary me-3">Purpose: </span>
                                                    </td>
                                                    <td>For Employment</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="10%">
                                        <div class="mt-2 d-grid badge badge-soft-dark position-relative">
                                            <i class="m-2 mdi mdi-trash-can-outline fs-13"></i>
                                            <span class="pb-2 text-uppercase">Deleted</span>
                                            <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ri-calendar-todo-fill text-primary"></i>
                                            <span class="ms-2">14 Dec, 2022<small class="text-muted ms-1">06:00 PM</small></span>
                                        </div>
                                    </td>
                                    <td class="text-center" width="10%">
                                        <button type="button" class="btn btn-info btn-label waves-effect waves-light"><i class="mdi mdi-eye-outline label-icon align-middle fs-16 me-2"></i> View</button>
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