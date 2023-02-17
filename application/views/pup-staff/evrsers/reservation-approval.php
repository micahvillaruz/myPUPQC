<div id="has_signatory_requests" class="row">
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <h5 class="card-title align-middle mb-2">Reservations For Approval</h5>
                </div>
                <div class="card-body">
                    <div class="flex-shrink-0">
                        <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified gap-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#for-sign-eval" role="tab">
                                    For Evaluation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#for-sign-rev" role="tab">
                                    Revisions
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="for-sign-eval" role="tabpanel">
                            <div>
                                <div class="flex-grow-1 ms-2">
                                    <table id="reservations-approval-table" class="table table-responsive table-striped dt-responsive align-middle text-center" style="width: 100%">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Reservation Control #</th>
                                                <th>Event Title</th>
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
                        <div class="tab-pane" id="for-sign-rev" role="tabpanel">
                            <div>
                                <div class="flex-grow-1 ms-2">
                                    <table id="revisions-table" class="table table-responsive dt-responsive table-striped align-middle text-center" style="width: 100%">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Reservation Control #</th>
                                                <th>Event Title</th>
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
    </div>
</div>

<div id="has_no_signatory_requests" class="row d-none my-5 py-5">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/kdookkse.json" trigger="loop-on-hover" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">No Reservations To Sign</h4>
        <p class="fs-15">You currently have no reservations to sign. <br> Please contact EVRSERS support if you think this is a mistake
            <?php if (strpos($this->session->userdata('user_roles'), 'Organizer') !== false) { ?>
                <span>
                    or click <span class="fw-medium">"View Reservations"</span> button below.
        </p>
        <a href="<?= base_url() ?>pupstaff/evrsers/manage-reservations" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">View Reservations</a>
        </span>
    <?php } ?>
    </div>
</div>