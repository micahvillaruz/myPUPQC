<div class="row h-50">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Current Organization Events</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab">
                            Events Pending for Approval
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#approved" role="tab">
                            Approved Events
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="pending" role="tabpanel">
                        <table id="pending_events" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Reservation Control #</th>
                                    <th>Event Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="approved" role="tabpanel">
                        <table id="approved_events" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Reservation Control #</th>
                                    <th>Event Title</th>
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