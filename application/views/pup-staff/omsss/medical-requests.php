<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between pb-0 pe-0">
                <h5 class="card-title mb-0 flex-grow-1">MEDICAL CONSULTATION</h5>
                <div class="flex-shrink-0">
                    <ul class="nav nav-pills nav-customs nav-danger" role="tablist">
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
                <div class="tab-content">
                    <div class="tab-pane active" id="pending" role="tabpanel">
                        <table id="pending_medical_consultation_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="approved" role="tabpanel">
                        <table id="approved_medical_consultation_table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Appointment Code</th>
                                    <th>Student Name</th>
                                    <th>Status</th>
                                    <th>Appointment Date</th>
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