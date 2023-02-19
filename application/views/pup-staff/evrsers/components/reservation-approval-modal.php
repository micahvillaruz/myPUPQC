<!-- Approve Request Modal -->
<div class="modal fade" id="approveReservationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/ncouatyu.json" trigger="loop" colors="primary:#000000,secondary:#fad3d1" style="width:130px;height:130px">
                </lord-icon>

                <div class="mt-2">
                    <h4 class="mb-3 fw-semibold">Approve this Event?</h4>
                    <p class="text-muted mb-4">If yes, enter your remarks regarding this event. Please be advised that the remarks is required so organizers are guided accordingly. Lastly, make sure to click the Approve button. Otherwise, click the Dismiss button.</p>

                    <form id="approveRequestForm" class="needs-validation" novalidate>
                        
                        <div class="text-start card mt-3 card-height-100 border shadow">
                            <div class="card-body p-0">
                                <div class="alert alert-danger border-0 rounded-top alert-solid alert-label-icon rounded-0 m-0 d-flex align-items-center" style="background-color: #4b38b3!important" role="alert">
                                    <i class="mdi mdi-file-sign label-icon"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        Signatories in this approval workflow
                                    </div>
                                </div>
                                <div class="pt-2" id="signatories-container">
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        
                        <div class="my-4">
                            <label for="remarks" class="h5 form-label">Approve Reservation</label>
                            <textarea class="form-control" id="remarks" name="remarks" rows="5" placeholder="If you have additional remarks for the organizer of this event, feel free to indicate it here. If none, just click the approve button. You can also set this document for revision by indicating what needs to be revised in the event reservation."></textarea>
                        </div>

                        <div class="justify-content-center">
                            <button type="submit" class="w-100 btn btn-success bg-gradient fw-medium waves-effect waves-light">Yes, Approve It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cancel Request Modal -->
<div class="modal fade" id="cancelReservationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/wwneckwc.json" trigger="loop" colors="primary:#000000,secondary:#fad3d1" style="width:130px;height:130px">
                </lord-icon>

                <div class="mt-2">
                    <h4 class="mb-3 fw-semibold">Disapprove this Event?</h4>
                    <p class="text-muted mb-4">If yes, enter your remarks regarding this event. Please be advised that the remarks is required so organizers are guided accordingly. Lastly, make sure to click the Disapprove button. Otherwise, click the Dismiss button.</p>

                    <form id="cancelRequestForm" class="needs-validation" novalidate>
                        <div class="text-start card mt-3 card-height-100 border shadow">
                            <div class="card-body p-0">
                                <div class="alert alert-danger border-0 rounded-top alert-solid alert-label-icon rounded-0 m-0 d-flex align-items-center" style="background-color: #4b38b3!important" role="alert">
                                    <i class="mdi mdi-file-sign label-icon"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        Signatories in this approval workflow
                                    </div>
                                </div>
                                <div class="pt-2" id="signatories-container1">
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        
                        <div class="my-4">
                            <label for="remarks" class="h5 form-label">Revise Event Request</label>
                            <textarea class="form-control" id="cancel-remarks" name="cancel-remarks" rows="5" placeholder="Kindly state your reason for cancelling the event reservation in order for the organizers to properly address the revisions. If none, just click the cancel button."></textarea>
                        </div>

                        <div class="justify-content-center">
                            <button type="submit" class="w-100 btn btn-danger bg-gradient fw-medium waves-effect waves-light">Yes, Disapprove It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Reservation modal -->
<div class="modal fade" id="viewReservationModal" tabindex="-1" role="dialog" aria-labelledby="reservation-details-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content px-3">
            <div class="modal-header position-relative mb-4">
                <div class="d-flex position-absolute top-50 start-50 translate-middle-x">
                    <h5 id="reserve_number" class="fs-4 badge badge-outline-primary fw-bold"></h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg">
                        <div class="fs-3 mb-1" id="organization"></div><br>
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
                                        <span class="me-3 fs-6 mx-auto" id="pillar"></span>
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
                        <h6 class="text-medium">RESERVATION ATTACHMENTS</h6>
                        <div class="ms-2 mb-3">
                            <span class="fs-5" id="event_request"></span><br>
                            <span class="fs-5" id="concept_paper"></span><br>
                            <span class="fs-5" id="others"></span><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
                            <div id="reservation-status">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>