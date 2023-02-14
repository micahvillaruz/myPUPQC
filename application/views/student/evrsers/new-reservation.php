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
                                <button class="nav-link active" id="datetime-selection-tab" data-bs-toggle="pill" data-bs-target="#datetime-selection" type="button" role="tab" aria-controls="datetime-selection" aria-selected="false" style="pointer-events: none;">
                                    Date and Time Selection
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="venue-selection-tab" data-bs-toggle="pill" data-bs-target="#venue-selection" type="button" role="tab" aria-controls="venue-selection" aria-selected="false" style="pointer-events: none;">
                                    Venue Selection
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="event-details-tab" data-bs-toggle="pill" data-bs-target="#event-details" type="button" role="tab" aria-controls="event-details" aria-selected="false" style="pointer-events: none;">
                                    Event Details
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active row" id="datetime-selection" role="tabpanel" aria-labelledby="datetime-selection-tab">
                            <diV class="d-flex">
                                <div class="col-lg mx-4 mb-2">
                                    <div class="mb-3">
                                        <p class="text-muted fw-medium fs-9">Reserve Date</p>
                                        <input type="text" id="reserveDatefloatingInput" name="reserveDatefloatingInput" class="form-control mb-3 d-none" />
                                    </div>
                                </div>
                                <div class="col-lg vstack gap-3 align-middle justify-content-center">
                                    <div class="mb-2">
                                        <!-- <p class="text-muted fw-medium fs-9 mx-4">Reserve Time</p> -->
                                        <div class="form-floating w-75 mx-auto">
                                            <select class="form-select" id="timeFromfloatingInput" name="timeFromfloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Time -</option>
                                                <option value="8:00AM">8:00 AM</option>
                                                <option value="9:00AM">9:00 AM</option>
                                                <option value="10:00AM">10:00 AM</option>
                                                <option value="11:00AM">11:00 AM</option>
                                                <option value="1:00PM">1:00 PM</option>
                                                <option value="2:00PM">2:00 PM</option>
                                                <option value="3:00PM">3:00 PM</option>
                                                <option value="4:00PM">4:00 PM</option>
                                                <option value="5:00PM">5:00 PM</option>
                                                <option value="6:00PM">6:00 PM</option>
                                                <option value="7:00PM">7:00 PM</option>
                                                <option value="8:00PM">8:00 PM</option>
                                            </select>
                                            <label for="timeFromfloatingInput">Time From</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-floating w-75 mx-auto">
                                            <select class="form-select" id="timeTofloatingInput" name="timeTofloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Time -</option>
                                                <option value="9:00AM">9:00 AM</option>
                                                <option value="10:00AM">10:00 AM</option>
                                                <option value="11:00AM">11:00 AM</option>
                                                <option value="1:00PM">1:00 PM</option>
                                                <option value="2:00PM">2:00 PM</option>
                                                <option value="3:00PM">3:00 PM</option>
                                                <option value="4:00PM">4:00 PM</option>
                                                <option value="5:00PM">5:00 PM</option>
                                                <option value="6:00PM">6:00 PM</option>
                                                <option value="7:00PM">7:00 PM</option>
                                                <option value="8:00PM">8:00 PM</option>
                                                <option value="9:00PM">9:00 PM</option>
                                            </select>
                                            <label for="timeTofloatingInput">Time To</label>
                                        </div>
                                    </div>
                                </div>
                            </diV>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button id="nextBtn1" type="button" class="btn btn-success btn-label right ms-auto nexttab" data-nexttab="venue-selection-tab" disabled>
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="venue-selection" role="tabpanel" aria-labelledby="venue-selection-tab">
                            <div>
                                <p class="text-dark fw-medium fs-6">Please choose your venue.</p>
                                <div class="row row-cols g-3" id="facilities">
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-light btn-label previestab" data-previous="datetime-selection-tab">
                                    <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                    Back to Date & Time Selection
                                </button>
                                <button id="nextBtn" type="button" class="btn btn-success btn-label right ms-auto nexttab" data-nexttab="event-details-tab" disabled>
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="event-details" role="tabpanel" aria-labelledby="event-details-tab">
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
                                            <select class="form-select fs-6" id="orgfloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Organization -</option>
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
                                    <!-- Add objectives textarea -->
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Add Objectives" id="objectivesfloatingInput" style="height: 90px" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="This should answer your event's timeliness & relevance. Separate each objective with a new line beginning with a hyphen '-'."></textarea>
                                            <label for="objectivesfloatingInput">Objectives</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select fs-5" id="pillarsfloatingInput" placeholder="" style="height: 90px" required>
                                                <option selected disabled>- Select a PUP Pillar that gives relevance to your event -</option>
                                                <option value="Pillar1">Pillar 1: Dynamic, Transformational and Responsible Leadership.</option>
                                                <option value="Pillar2">Pillar 2: Responsive and Innovative Curricula and Instruction.</option>
                                                <option value="Pillar3">Pillar 3: Enabling and Productive Learning Environment.</option>
                                                <option value="Pillar4">Pillar 4: Holistic Student Development and Engagement.</option>
                                                <option value="Pillar5">Pillar 5: Empowered Faculty Members and Employees.</option>
                                                <option value="Pillar6">Pillar 6: Vigorous Research Production and Utilization.</option>
                                                <option value="Pillar7">Pillar 7: Global Academic Standards and Excellence.</option>
                                                <option value="Pillar8">Pillar 8: Synergistic, Productive, Strategic Networks and Partnerships.</option>
                                                <option value="Pillar9">Pillar 9: Active and Sustained Stakeholders' Engagement</option>
                                                <option value="Pillar10">Pillar 10: Sustainable Social Development Programs and Projects.</option>
                                            </select>
                                            <label for="pillarsfloatingInput">PUP Pillars</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="card border card-border-primary">
                                            <div class="card-header hstack">
                                                <h4 class="card-title text-dark mb-0">Relevant Attachments</h4>
                                                <button type="button" class="btn btn-icon btn-info btn-sm rounded-pill ms-auto" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-question-mark"></i></button>
                                            </div>
                                            <!-- end card header -->
                                            <div class="card-body">
                                                <input id="attachments" type="file" class="filepond filepond-input-multiple" multiple name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="2" />
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 mt-0 mb-3">
                                        <div class="card border card-border-primary">
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
                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="venue-selection-tab">
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
        <p class="fs-15">If you want to create a New Reservation and the status of your request is currently <b class="text-secondary">Pending</b> you must cancel your Existing Reservation first. <br> You can cancel the request by going to the <span class="fw-bold">Reservations</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Reservation</button> button.<br> Otherwise, wait for your reservation to be Done or Cancelled before creating a New Request.</p>
        <span class="fs-13 mb-3 badge text-dark bg-warning">You can only cancel your existing reservation if the status of your reservation is <b>Pending For Approval</b> only.</span>
        <a href="http://localhost/myPUPQC/student/evrsers/view-reservation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Reservation Page</a>
    </div>
</div>