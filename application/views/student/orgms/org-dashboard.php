<div class="row">
    <div class="col-xl-4 col-md-12">
        <div class="card card-height-100 card-animate overflow-hidden">
            <div class="position-absolute start-0" style="z-index: 0;">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="250" height="125">
                    <style>
                        .s0 {
                            opacity: .05;
                            fill: var(--vz-success)
                        }
                    </style>
                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                </svg>
            </div>
            <div class="card-body" style="z-index: 1;">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                            <i class="ri-team-line"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Organization Officers</p>
                        <h4 class="fs-4 mb-3"><span id="released_analytics" class="counter-value" data-target="12">0</span></h4>
                        <!-- <p class="text-muted mb-0">From 9530 last month</p> -->
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-12">
        <div class="card card-height-100 card-animate overflow-hidden">
            <div class="position-absolute start-0" style="z-index: 0;">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="250" height="125">
                    <style>
                        .s0 {
                            opacity: .05;
                            fill: var(--vz-success)
                        }
                    </style>
                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                </svg>
            </div>
            <div class="card-body" style="z-index: 1;">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                            <i class="mdi mdi-archive-check-outline"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Approved Events</p>
                        <h4 class="fs-4 mb-3"><span id="cancelled_student_analytics" class="counter-value" data-target="26">0</span></h4>
                        <!-- <p class="text-muted mb-0">From 1930 last month</p> -->
                    </div>
                    <!-- <div class="flex-shrink-0 align-self-center">
                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-right-up-line fs-13 align-middle"></i> +6.11 %<span></span></span>
                    </div> -->
                </div>
            </div><!-- end card body -->
        </div>
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-12">
        <div class="card card-height-100 card-animate overflow-hidden">
            <div class="position-absolute start-0" style="z-index: 0;">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="250" height="125">
                    <style>
                        .s0 {
                            opacity: .05;
                            fill: var(--vz-success)
                        }
                    </style>
                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                </svg>
            </div>
            <div class="card-body" style="z-index: 1;">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-danger text-danger rounded-2 fs-2">
                            <i class="mdi mdi-archive-cancel-outline"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Cancelled Events</p>
                        <h4 class="fs-4 mb-3"><span id="cancelled_staff_analytics" class="counter-value" data-target="7">0</span></h4>
                        <!-- <p class="text-muted mb-0">From 308 last month</p> -->
                    </div>
                    <!-- <div class="flex-shrink-0 align-self-center">
                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.31 %<span></span></span>
                    </div> -->
                </div>
            </div><!-- end card body -->
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Organization Events</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="line_chart_basic" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col-->

    <div class="col-xl-5">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Events This Year</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="user_device_pie_charts" data-colors='["--vz-primary", "--vz-warning", "--vz-info"]' class="apex-charts" dir="ltr"></div>

                <div class="table-responsive mt-3">
                    <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-0">
                        <tbody class="border-0">
                            <tr>
                                <td>
                                    <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>On-Campus</h4>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">57%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-warning me-2"></i>Online</h4>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">30%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-info me-2"></i>Hybrid</h4>
                                </td>
                                <td>
                                    <p class="text-muted mb-0">13%</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->

<div class="row h-50">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Organization Event History</h5>
                <div>
                    <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">Add Faculty/Staff</button> -->
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#done" role="tab">
                            Done
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_staff" role="tab">
                            Cancelled by Staff
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_student" role="tab">
                            Cancelled by Student
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="done" role="tabpanel">
                        <table id="done_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Reservation Control #</th>
                                    <th>Event Title</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_staff" role="tabpanel">
                        <table id="cancelled_by_staff_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Reservation Control #</th>
                                    <th>Event Title</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_student" role="tabpanel">
                        <table id="cancelled_by_student_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Reservation Control #</th>
                                    <th>Event Title</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->