<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between pb-0 pe-0">
                <h5 class="card-title align-middle mb-2">Venue Reservation History</h5>
            </div>
            <div class="card-body">
                <div class="flex-shrink-0">
                    <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified gap-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#done" role="tab">
                                Done
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cancelled-by-staff" role="tab">
                                Cancelled by Staff
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cancelled-by-student" role="tab">
                                Cancelled by Student
                            </a>
                        </li>
                        </ul>
                </div>
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="done" role="tabpanel">
                            <div class="flex-grow-1 ms-2">
                                <table id="done-reservations-table" class="table table-responsive table-striped dt-responsive align-middle text-center" style="width: 100%">
                                    <thead class="bg-light">
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
                    <!-- End tab pane -->
                    <div class="tab-pane" id="cancelled-by-staff" role="tabpanel">
                        <div>
                            <div class="flex-grow-1 ms-2">
                                <table id="cancelled-staff-table" class="table table-responsive dt-responsive table-striped align-middle text-center" style="width: 100%">
                                    <thead class="bg-light">
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
                    <!-- End tab pane -->
                    <div class="tab-pane" id="cancelled-by-student" role="tabpanel">
                        <div>
                            <div class="flex-grow-1 ms-2">
                                <table id="cancelled-student-table" class="table table-responsive dt-responsive table-striped align-middle text-center" style="width: 100%">
                                    <thead class="bg-light">
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
                    <!-- End tab pane -->
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>