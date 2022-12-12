<!-- Default Modals -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="myModalLabel">Event Request Attachments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="myModal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">1</span></b>
                        <div class="badge badge-soft-secondary">
                            <i class="me-2 mdi mdi-file-document fs-13"></i>
                            <span class="text-uppercase">Event Request</span>
                        </div>
                        <br><br>
                        <span class="mt-3">
                            This should contain the information regarding the event and completed signatories from the following: <strong>Org President, SSC President, Adviser, Property Custodian, OSAS Head, Acad Head, & the Director.</strong>
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
                        <div class="badge badge-soft-info">
                            <i class="me-2 mdi mdi-file-document fs-13"></i>
                            <span class="text-uppercase">Concept Paper</span>
                        </div>
                        <br><br>
                        <span class="mt-3">
                            The specific details regarding the event should be found here. This includes the venue, platform, number of participants included in the said event.
                        </span>
                    </li>
                    <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">3</span></b>
                        <div class="badge badge-soft-primary">
                            <i class="me-2 mdi mdi-file-document-multiple fs-13"></i>
                            <span class="text-uppercase">Others</span>
                        </div>
                        <br><br>
                        <span class="mt-3">
                            Anything relevant to the creation of the event request should then be included here. <br><br>
                        </span>
                        <span class="mt-4 fs-6">
                            <i class="text-muted">*** Note that this could help your event request application to be processed faster.</i>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new-reservation">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="new-reservation" class="modal fade" tabindex="-1" aria-labelledby="new-reservation-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="new-reservation-label">Add New Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="card-body form-steps">
                    <form action="#">
                        <div class="step-arrow-nav mb-4">
                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">
                                        Reservation Details
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">
                                        Venue Selection
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">
                                        Finish
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
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
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab">
                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next
                                    </button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
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
                                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input" />
                                                <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout02">
                                                    <img src="../../public/images/facilities/img-11.jpg" class="card-img-top" alt="...">
                                                </label>
                                            </div>
                                            <h5 class="fs-13 text-center mt-2">Computer Laboratory</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input" />
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
                                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input" />
                                                <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout01">
                                                    <img src="../../public/images/facilities/img-5.jpg" class="card-img-top" alt="...">
                                                </label>
                                            </div>
                                            <h5 class="fs-13 text-center mt-2">PUPQC Gymnasium</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input" />
                                                <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout02">
                                                    <img src="../../public/images/facilities/img-11.jpg" class="card-img-top" alt="...">
                                                </label>
                                            </div>
                                            <h5 class="fs-13 text-center mt-2">Computer Laboratory</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input" />
                                                <label class="form-check-label p-0 avatar-lg w-100" for="customizer-layout03">
                                                <img src="../../public/images/facilities/img-6.jpg" class="card-img-top" alt="...">
                                                </label>
                                            </div>
                                            <h5 class="fs-13 text-center mt-2">Audio Visual Room</h5>
                                        </div>
                                </div>
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab">
                                        <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                        Back to Reservation Details
                                    </button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab">
                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit
                                    </button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                <div class="text-center">
                                    <div class="avatar-md mt-5 mb-4 mx-auto">
                                        <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                            <i class="ri-checkbox-circle-fill"></i>
                                        </div>
                                    </div>
                                    <h5>Succesfully Added Reservation!</h5>
                                    <p class="text-muted">Please wait for your reservation to be approved.</p>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->