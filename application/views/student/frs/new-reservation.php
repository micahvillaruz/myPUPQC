<div id="allow_create_reservation" class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">New Facility Reservation</h4>
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
                                <button class="nav-link" id="event-details-tab" data-bs-toggle="pill" data-bs-target="#event-details" type="button" role="tab" aria-controls="event-details" aria-selected="false" style="pointer-events: none;">
                                    Reservation Details
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
                                            </select>
                                            <label for="timeTofloatingInput">Time To</label>
                                        </div>
                                    </div>
                                </div>
                            </diV>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button id="nextBtn1" type="button" class="btn btn-success btn-label right ms-auto nexttab" data-nexttab="event-details-tab" disabled>
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <!-- end tab pane -->

                        <div class="tab-pane fade" id="event-details" role="tabpanel" aria-labelledby="event-details-tab">
                            <div class="mb-3">
                                <p class="text-dark fw-medium fs-6">Please choose your venue.</p>
                                <div class="row row-cols g-3" id="facilities">
                                </div>
                                <!-- end row -->
                                <hr>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="eventTitlefloatingInput" placeholder="Number of Participants" required>
                                            <label for="eventTitlefloatingInput">Number of Participants</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="eventDetailsfloatingInput" placeholder="Purpose" required>
                                            <label for="eventDetailsfloatingInput">Purpose</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="row">
                                    <div class="col-lg mb-3">
                                        <div class="form-floating">
                                            <select class="form-select fs-6" id="orgfloatingInput" placeholder="" required>
                                                <option selected disabled>- Select Organization -</option>
                                            </select>
                                            <label for="orgfloatingInput">Organization</label>
                                        </div>
                                    </div>
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
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-light btn-label previestab" data-previous="datetime-selection-tab">
                                    <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                    Back to Date & Time Selection
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