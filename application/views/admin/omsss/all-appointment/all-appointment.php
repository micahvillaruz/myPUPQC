<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h2 class="card-title mb-0 flex-grow-1 fw-bold text-primary">ALL APPOINTMENTS</h2>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
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
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_student" role="tab">
                            Cancelled by Student
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_staff" role="tab">
                            Cancelled by Staff
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#deleted" role="tab">
                            Deleted
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pending" role="tabpanel">
                        <table id="all_pending_appointment_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="approved" role="tabpanel">
                        <table id="all_approved_appointment_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_student" role="tabpanel">
                        <table id="all_cancelled_student_appointment_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_staff" role="tabpanel">
                        <table id="all_cancelled_staff_appointment_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="deleted" role="tabpanel">
                        <table id="all_deleted_appointment_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>