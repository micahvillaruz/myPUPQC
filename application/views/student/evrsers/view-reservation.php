<div id="existing_reservation" class="row d-none">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <div class="card-title mx-auto">
                    <h5 id="reserve_number" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <div id="organization">
                        </div>
                        <br>
                        <div class="alert alert-border-left alert-primary mb-4 me-3 ms-2">
                            <div class="row">
                                <h6 class="text-medium">EVENT TITLE</h6>
                                <h1 class="text-dark fw-bold mb-3 ms-2" id="event_title"></h1>
                                <hr>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">DESCRIPTION</h6>
                                    <p id="event_details" class="fw-medium"></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">DATE</h6>
                                    <p id="reserve_date" class="fw-medium"></p>
                                    <h6 class="text-medium">TIME</h6>
                                    <p id="time" class="fw-medium"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h6 class="text-medium">REMARKS</h6>
                                <p id="remarks" class="fw-medium"></p>
                            </div>
                        </div>
                        <h6 class="text-medium">RESERVATION ATTACHMENTS</h6>
                        <div class="ms-2">
                            <span class="fs-5" id="attachment1"></span><br>
                            <span class="fs-5" id="attachment2"></span><br>
                            <span class="fs-5" id="attachment3"></span><br>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button id="cancelBtn" type="button" class="btn btn-soft-danger float-end mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Reservation</button>
                        <div class="row h-25 mt-5 mb-3">
                            <div class="col-lg mb-3">
                                <!-- <a href="" class="btn btn-soft-dark w-100 h-100" disabled>Dark</a> -->
                                <div class="w-100 h-100 rounded" id="pubmat" style="background-color: #D3D3D3;">
                                    <div class="text-center align-items-center mx-auto">
                                        <a href="#" class="fs-5 w-100 h-100 my-auto justify-items-center rounded text-white pe-none"><i class="ri-4x ri-add-circle-fill"></i><br>Add Pubmat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg mb-3">
                                <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
                                <span id="reservation-status"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>

<div id="no_reservation" class="row my-5 py-5">
  <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
    <lord-icon src="https://cdn.lordicon.com/kdookkse.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
    <h4 class="fw-bold">No Existing Reservation Found!</h4>
    <p class="fs-15">You have no Ongoing Venue Reservation as of the moment. <br> Please create a New Reservation first by clicking the <spam class="fw-medium">"New Reservation"</spam> button below.</p>
    <a href="<?= base_url() ?>student/evrsers/new-reservation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">New Reservation</a>
  </div>
</div>