<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-dark">New Reservation</h5>
            </div>
            <div class="card-body">
                <form id="addNewReservation" class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Student Full Name" disabled value="Josha G. Galga">
                                <label for="fullnamefloatingInput">Full Name</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="orgNamefloatingInput" placeholder="Student Organization" required>
                                <label for="orgNamefloatingInput">Organization Name</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" id="timeFromfloatingInput" placeholder="" required>
                                    <option selected disabled>- Select Venue -</option>
                                    <option>PUPQC Gymnasium</option>
                                    <option>PUPQC Chapel</option>
                                    <option>Audio-Visual Room</option>
                                    <option>Computer Lab</option>
                                </select>
                                <label for="timeFromfloatingInput">Venue</label>
                            </div>
                        </div>
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
                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="numberfloatingInput" placeholder="Number of Attendees" required>
                                <label for="numberfloatingInput">Number of Attendees</label>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="reserveDatefloatingInput" placeholder="Reservation Date / Event Date" required>
                                <label for="reserveDatefloatingInput">Reserve Date</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
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
                        <div class="col-lg-2">
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
                        <div class="col-lg-6">
                            <div class="form-control">
                                <label for="attachfloatingInput">Relevant Attachments</label>
                                <!-- Default Modals -->
                                <button type="button" class="btn rounded-pill btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bx bx-question-mark"></i></button>
                                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Event Request Attachments</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="fs-15">
                                                    1. Event Request
                                                </h5>
                                                <p class="text-muted">This should contain the information regarding the event and completed signatories from the following: <strong>Org President, SSC President, Adviser, Property Custodian, OSAS Head, Acad Head, & the Director.</strong></p>
                                                <h5 class="fs-15">
                                                    2. Concept Paper
                                                </h5>
                                                <p class="text-muted">The specific details regarding the event should be found here. This includes the venue, platform, number of participants included in the said event.</p>
                                                <h5 class="fs-15">
                                                    3. Other Files
                                                </h5>
                                                <p class="text-muted">Anything relevant to the creation of the event request should then be included here. <i>(Note that this could help your application to be approved faster.)</i></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            </div>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <div class="input-group mt-2">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Event Request</label>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Concept Paper</label>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Others</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control d-flex align-items-stretch" id="remarksfloatingInput" placeholder="Please enter reservation details" disabled value="Please wait for your reservation to be approved.">
                                <label for="remarksfloatingInput">Admin Remarks</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary btn-md waves-effect waves-light btn-md float-end fs-6" onclick="addNewReservation()">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>