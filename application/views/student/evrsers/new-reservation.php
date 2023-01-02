<div id="allow_create_reservation" class="row d-none">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">New Venue Reservation</h4>
            </div>
            <!-- end card header -->
            <div class="card-body form-steps">
                <form class="needs-validation" id="addNewReservation" method="POST" enctype="multipart/form-data">
                    <div class="step-arrow-nav mb-4">
                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false" style="pointer-events: none;">
                                    Venue Selection
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true" style="pointer-events: none;">
                                    Reservation Details
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                            <div>
                                <p class="text-dark fw-medium fs-6">Please choose your venue.</p>
                                <div class="row row-cols g-3" id="facilities">
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button id="nextBtn" type="button" class="btn btn-success btn-label right ms-auto nexttab" data-nexttab="steparrow-gen-info-tab" disabled>
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                            <div>
                                <div class="row">
                                    <div class="col-lg mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Student Full Name" id="full_name_floatinginput" name="full_name" value="" disabled>
                                            <label for="full_name_floatinginput">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="orgfloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Organization -</option>
                                                <option>SSC</option>
                                                <option>CHRS</option>
                                                <option>COL</option>
                                                <option>COMMITS</option>
                                                <option>DOMT.CS</option>
                                                <option>FBTO</option>
                                                <option>JMS</option>
                                                <option>KATAGA</option>
                                                <option>MUSA</option>
                                                <option>PSC</option>
                                                <option>SPAS</option>
                                                <option>Vox Nova</option>
                                                <option>YES</option>
                                                <option>Other</option>
                                            </select>
                                            <label for="orgfloatingInput">Organization</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="eventTitlefloatingInput" placeholder="Event Title" required>
                                            <label for="eventTitlefloatingInput">Event Title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="eventDetailsfloatingInput" placeholder="Event Details" required>
                                            <label for="eventDetailsfloatingInput">Event Details</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="reserveDatefloatingInput" placeholder="Reservation Date / Event Date" required>
                                            <label for="reserveDatefloatingInput">Reserve Date</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="timeFromfloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Time -</option>
                                                <option>8:00 AM</option>
                                                <option>9:00 AM</option>
                                                <option>10:00 AM</option>
                                                <option>11:00 AM</option>
                                                <option>1:00 PM</option>
                                                <option>2:00 PM</option>
                                                <option>3:00 PM</option>
                                                <option>4:00 PM</option>
                                                <option>5:00 PM</option>
                                                <option>6:00 PM</option>
                                                <option>7:00 PM</option>
                                                <option>8:00 PM</option>
                                            </select>
                                            <label for="timeFromfloatingInput">Time From</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="timeTofloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Time -</option>
                                                <option>9:00 AM</option>
                                                <option>10:00 AM</option>
                                                <option>11:00 AM</option>
                                                <option>1:00 PM</option>
                                                <option>2:00 PM</option>
                                                <option>3:00 PM</option>
                                                <option>4:00 PM</option>
                                                <option>5:00 PM</option>
                                                <option>6:00 PM</option>
                                                <option>7:00 PM</option>
                                                <option>8:00 PM</option>
                                                <option>9:00 PM</option>
                                            </select>
                                            <label for="timeTofloatingInput">Time To</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-control">
                                            <label for="attachfloatingInput">Relevant Attachments</label>
                                            <button type="button" class="btn btn-icon btn-info btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-question-mark"></i></button>
                                            <div class="input-group mt-2">
                                                <input type="file" name="inputGroupFile01" class="form-control" id="inputGroupFile01">
                                                <label class="input-group-text" for="inputGroupFile01">Event Request</label>
                                            </div>
                                            <div class="input-group mt-2">
                                                <input type="file" name="inputGroupFile02" class="form-control" id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02">Concept Paper</label>
                                            </div>
                                            <div class="input-group mt-2">
                                                <input type="file" name="inputGroupFile03" class="form-control" id="inputGroupFile03">
                                                <label class="input-group-text" for="inputGroupFile03">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="card border card-border-info">
                                            <div class="card-header">
                                                <h6 class="card-title text-dark mb-0">
                                                    Before proceeding...
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <span class="row form-check">
                                                    <div class="col-sm-1">
                                                        <input class="form-check-input" type="checkbox" value="" id="formCheck1" required>
                                                    </div>
                                                    <div class="col-lg">
                                                        <label class="form-check-label" for="formCheck1">
                                                            I assure that all information put in this form have been checked and accomplished at the best of my knowledge. In accordance with this, I agree to EVRSERS' <a href="<?= base_url() ?>student/evrsers/reservationpolicy/" id="reservation-policy">One Reservation Policy</a> and to PUP Quezon City's <a href="<?= base_url() ?>terms/" rel="noopener noreferrer">Terms</a> and <a href="<?= base_url() ?>privacy/" rel="noopener noreferrer">Privacy Statement.</a>
                                                        </label>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-description-info-tab">
                                        <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                        Back to Venue Selection
                                    </button>
                                    <button type="submit" class="btn btn-success btn-label right ms-auto" value="Submit">
                                    <i class="ri-check-line label-icon align-middle fs-16 ms-2"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div id="decline_create_reservation" class="row d-none px-5">
  <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
    <lord-icon src="https://cdn.lordicon.com/ckatldkn.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
    <h4 class="fw-bold">Existing Reservation is Found!</h4>
    <p class="fs-15">If you want to create a New Reservation and the status of your request is currently <b class="text-secondary">Pending</b> you must cancel your Existing Reservation first. <br> You can cancel the request by going to the <span class="fw-bold">Reservations</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Request</button> button.<br> Otherwise, wait for your reservation to be Done or Cancelled before creating a New Request.</p>
    <span class="fs-13 mb-3 badge text-dark bg-warning">You can only cancel your existing reservation if the status of your reservation is <b>Pending For Approval</b> only.</span>
    <a href="http://localhost/myPUPQC/student/evrsers/view-reservation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Reservation Page</a>
  </div>
</div>