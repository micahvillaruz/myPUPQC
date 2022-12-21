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
                        <table id="released-requests" class="display dt-responsive table align-middle" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Control Number</th>
                                    <th>Student</th>
                                    <th>Date Filed</th>
                                    <th>Payment Status</th>
                                    <th>Details</th>
                                    <th>Date Released</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled" role="tabpanel">
                        <table id="cancelled-requests" class="display dt-responsive table align-middle" style="width: 100%">
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
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="deleted" role="tabpanel">
                        <table id="deleted-requests" class="display dt-responsive table align-middle" style="width: 100%">
                            <thead class="bg-light">
                                <tr>
                                    <th>Control Number</th>
                                    <th>Student</th>
                                    <th>Date Filed</th>
                                    <th>Payment Status</th>
                                    <th>Details</th>
                                    <th>Date Deleted</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->