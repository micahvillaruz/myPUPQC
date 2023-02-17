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
                                <h4 class="mx-auto text-center">
                                    <span class="badge bg-primary">
                                        <i class="mdi mdi-pillar me-3"></i>
                                        <span class="me-3" id="pillar"></span>
                                    </span>
                                </h4>
                            </div>
                            <div class="row">
                                <h6 class="text-medium">OBJECTIVES</h6>
                                <p id="objectives" class="fw-medium"></p>
                            </div>
                            <hr>
                            <div class="row">
                                <h6 class="text-medium">REMARKS</h6>
                                <p id="remarks" class="fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-medium">RESERVATION ATTACHMENTS</h6>
                            <div class="ms-3 mb-3">
                                <span class="fs-5" id="attachment1"></span><br>
                                <span class="fs-5" id="attachment2"></span><br>
                                <span class="fs-5" id="attachment3"></span><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 vstack">
                        <div class="mb-2">
                            <button id="cancelBtn" type="button" class="btn btn-soft-danger float-end text-start fw-medium mt-2 mt-sm-0 w-100 fs-5 mb-3"><i class="mdi mdi-archive-remove-outline me-3 fs-4 align-middle"></i> Cancel Reservation</button>
                        </div>
                        <div class="mb-2">
                            <div id="pubmat">
                                <!-- //* Section Interchangeable depending on whether reservation has pubmat or nah -->
                                <div class="alert alert-info alert-top-border" style="height:305px">
                                    <div class="d-flex hstack gap-2">
                                        <h6 class="text-medium my-2">ADD PUBMAT</h6>
                                        <button class="btn btn-icon btn-success float-end ms-auto waves-effect waves-light"><i class="ri-check-fill fs-5"></i></button>
                                    </div>
                                    <div class="mt-5 m-2 filepond--image-preview-wrapper">
                                        <input id="pubmat-file" type="file" class="filepond mt-3" name="filepond" data-allow-reorder="true" data-max-file-size="5MB" data-max-files="1" />
                                    </div>
                                </div>
                                <!-- //* Until here -->
                            </div>
                            <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
                            <span id="reservation-status"></span>
                        </div>
                        <div class="alert alert-info alert-top-border">
                            <!-- <i class="ri-airplay-line me-3 align-middle fs-16 text-info"></i><strong>Info</strong> - Top border alert -->
                            <h6 class="text-medium mb-4 mt-2">EVENT SIGNATORIES</h6>
                            <div class="profile-timeline mb-3">
                                <div class="accordion accordion-flush" id="todayExample">
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingOne">
                                            <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <img src="<?= base_url() ?>public/images/officials/img-6.png" alt="" class="avatar-xs rounded-circle shadow" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-14 mb-1">
                                                            Cleotilde B. Servigon
                                                        </h6>
                                                        <small class="text-muted">Registrar</small> <br>
                                                        <span class="mt-1 badge badge-soft-success text-uppercase">Approved</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0">
                                        <div class="accordion-header" id="headingTwo">
                                            <a class="accordion-button ps-3 pt-4 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <img src="<?= base_url() ?>public/images/officials/img-1.png" alt="" class="avatar-xs rounded-circle shadow" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="fs-14 mb-1">
                                                            Assoc. Prof. Jaime P. Gutierrez Jr.
                                                        </h6>
                                                        <small class="text-muted">Director</small> <br>
                                                        <span class="mt-1 badge badge-soft-info text-uppercase">Evaluating</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-->
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