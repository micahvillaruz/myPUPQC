<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Add New Reservation</h5>
            </div>
            <div class="card-body form-steps">
                <form action="#">
                    <div class="step-arrow-nav mb-4">
                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="venue-selection" data-bs-toggle="pill" data-bs-target="#venue-selection-tab" type="button" role="tab" aria-controls="venue-selection-tab" aria-selected="true">
                                    Venue Selection
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reservation-details" data-bs-toggle="pill" data-bs-target="#reservation-details-tab" type="button" role="tab" aria-controls="reservation-details-tab" aria-selected="false" disabled>
                                    Reservation Details
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show active" id="venue-selection-tab" role="tabpanel" aria-labelledby="venue-selection">
                            <div>
                                <p class="text-muted">Please choose your venue.</p>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout01">
                                                <img src="../../public/images/facilities/img-5.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">PUPQC Gymnasium</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout02" name="data-layout" type="radio" value="" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout02">
                                                <img src="../../public/images/facilities/img-11.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">Computer Laboratory</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout03" name="data-layout" type="radio" value="" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout03">
                                                <img src="../../public/images/facilities/img-6.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">Audio Visual Room</h5>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout01" name="data-layout" type="radio" value="" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout01">
                                                <img src="../../public/images/facilities/img-8.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">Interfaith Chapel</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout02" name="data-layout" type="radio" value="" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout02">
                                                <img src="../../public/images/facilities/img-4.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">Library</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input id="customizer-layout03" name="data-layout" type="radio" value="" class="form-check-input" />
                                            <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout03">
                                                <img src="../../public/images/facilities/img-10.jpg" class="card-img-top" alt="...">
                                            </label>
                                        </div>
                                        <h5 class="fs-13 text-center mt-2">Momol Spot</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="venue-selection">
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                    <div class="tab-content">
                        <div class="tab-pane fade" id="reservation-details-tab" role="tabpanel" aria-labelledby="reservation-details">
                            <div>
                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Student Full Name" id="full_name_floatinginput" name="full_name" value="" disabled>
                                            <label for="full_name_floatinginput">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
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
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="eventTitlefloatingInput" placeholder="Event Title" required>
                                            <label for="eventTitlefloatingInput">Event Title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="eventDetailsfloatingInput" placeholder="Event Details" required>
                                            <label for="eventDetailsfloatingInput">Event Details</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="reserveDatefloatingInput" placeholder="Reservation Date / Event Date" required>
                                            <label for="reserveDatefloatingInput">Reserve Date</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
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
                                    <div class="col-lg-3">
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
                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-control">
                                            <label for="attachfloatingInput">Relevant Attachments</label>
                                            <button type="button" class="btn rounded-pill btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-question-mark"></i></button>
                                            <div class="input-group mt-2">
                                                <input type="file" class="form-control" id="inputGroupFile01">
                                                <label class="input-group-text" for="inputGroupFile01">Event Request</label>
                                            </div>
                                            <div class="input-group mt-2">
                                                <input type="file" class="form-control" id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02">Concept Paper</label>
                                            </div>
                                            <div class="input-group mt-2">
                                                <input type="file" class="form-control" id="inputGroupFile03">
                                                <label class="input-group-text" for="inputGroupFile03">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="button" class="btn btn-light btn-label previestab" data-previous="reservation-details">
                                    <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                    Back to Venue Selection
                                </button>
                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab">
                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit
                                </button>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </form>
            </div>
            <!-- end card body -->
        </div>
    </div>
    <!--end col-->
</div>