<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Venue Reservations</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills animation-nav nav-justified mb-3 gap-3 px-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-top-home" role="tab" aria-selected="true">
                            Pending
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-profile" role="tab" aria-selected="false">
                            Approved
                        </a>
                    </li>
                </ul>
                <hr class="text-muted">
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="nav-border-top-home" role="tabpanel">
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-2">
                                <table id="pending-reservations" class="table table-bordered table-responsive dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
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
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav-border-top-profile" role="tabpanel">
                        <div class="d-flex">
                            <div class="flex-grow-1 ms-2">
                                <table id="approved-reservations" class="table table-bordered table-responsive dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
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
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>