    <!-- Cancel Reservation modal -->
    <div class="modal fade zoomIn" id="cancelReservationModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
          </div>
          <div class="modal-body p-5 text-center">
            <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
            <div class="mt-4 text-center">
              <h4 class="fs-semibold">Sure to cancel this pending reservation ?</h4>
              <p class=" fs-14 mb-4 pt-1">Cancelling this will remove the event information from our the reservation calendar.</p>
              <div class="hstack gap-2 justify-content-center remove">
                <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                <button class="btn btn-warning" id="cancel-reservation">Yes, Cancel It!!</button>
              </div>
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

              <div class="row" id="show-signatories">
                <div class="col-lg">
                  <h6 class="text-medium mb-3">SIGNATORIES</h6>
                    <div class="alert alert-info alert-top-border" id="signatories-container">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg">
                  <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
                  <div id="reservation-status">
                  </div>
                </div>
              </div>
              <div class="row" id="change-status">
                <div class="col-lg">
                  <h6 class="text-medium mb-3">CANCEL RESERVATION</h6>
                  <div class="vstack gap-2">
                    <button type="button" class="btn waves-effect waves-light btn-danger btn-label fw-medium" id="cancelBtn"><i class=" ri-close-line label-icon align-middle fs-16 me-2"></i>Cancel</button>
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

    <!-- Add Signatory Modal -->
    <div class="modal fade" id="addSignModal" tabindex="-1" role="dialog" aria-labelledby="signatory-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header position-relative my-1">
            <div class="d-flex">
              <h5 class="fs-4 text-primary fw-bold">Add Signatory</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mx-auto d-flex justify-content-center w-50 mb-3">
              <div class="mb-3 vstack gap-3 mx-auto my-auto">
                <select class="js-example-basic-single" name="signatory-names" id="signatory-names">
                  <option class="text-center" value="" selected disabled>- Select Signatory -</option>
                </select>
                <button id="add-as-signatory" name="add-as-signatory" type="button" class="btn btn-primary waves-effect waves-light mx-5">Add as Signatory</button>
              </div>
            </div>
            <hr>
            <div id="reservation-signatories" class="row w-50 d-none mx-auto d-flex justify-content-center">
              <h5 class="text-dark text-center my-3">Signatories</h5>
            </div>
            <div id="ConfirmButton" class="mx-auto d-flex justify-content-center d-none">
              <button type="button" class="w-25 btn btn-success waves-effect waves-light" id="confirmSignatory">Confirm</button>
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

      <!-- Approve Reservation modal -->
      <div class="modal fade zoomIn" id="approveReservationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body p-5 text-center">
              <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#161f2e,secondary:#3080e8" style="width:100px;height:100px"></lord-icon>
              <div class="mt-4 text-center">
                <h4 class="fs-semibold">Approve This Event?</h4>
                <p class=" fs-14 mb-4 pt-1">Doing so would add the event in the University Activity Calendar.</p>
                <div class="hstack gap-2 justify-content-center remove">
                  <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-2 align-middle"></i>Cancel</button>
                  <button class="btn btn-success" id="approve-reservation">Yes, Approve Reservation.</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>