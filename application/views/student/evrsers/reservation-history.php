<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Venue Reservation History</h5>
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
                        <table id="done_history" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
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
                        <table id="cancelled_by_staff_history" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
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
                        <table id="cancelled_by_student_history" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
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