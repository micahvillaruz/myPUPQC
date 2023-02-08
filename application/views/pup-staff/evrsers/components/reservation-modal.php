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
        <div class="row">
          <div class="col-6">
            <div class="mb-3 vstack position-absolute translate-middle top-50 start-50 w-75">
              <select class="form-select mb-3" id="signatory" name="signatory">
                <option value="" selected disabled>Select Signatory</option>
              </select>
              <button type="button" class="btn btn-primary waves-effect waves-light mx-5">Add as Signatory</button>
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="signatory" class="form-label">Signatory 1</label>
              <div class="hstack gap-1">
                <input type="text" class="form-control" id="signatory1" name="signatory1" placeholder="Signatory 1" disabled>
                <button type="button" class="btn btn-info btn-danger waves-effect waves-light"><i class="ri-subtract-line fs-5"></i></button>
              </div>
            </div>
            <div class="mb-3">
              <label for="signatory" class="form-label">Signatory 2</label>
              <div class="hstack gap-1">
              <input type="text" class="form-control" id="signatory2" name="signatory1" placeholder="Signatory 2" disabled>
              <button type="button" class="btn btn-info btn-danger waves-effect waves-light"><i class="ri-subtract-line fs-5"></i></button>
              </div>
            </div>
            <div class="mb-3">
              <label for="signatory" class="form-label">Signatory 3</label>
              <div class="hstack gap-1">
              <input type="text" class="form-control" id="signatory3" name="signatory1" placeholder="Signatory 3" disabled>
              <button type="button" class="btn btn-info btn-danger waves-effect waves-light"><i class="ri-subtract-line fs-5"></i></button>
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
              <div class="col-lg-8">
                <h5 class="fs-5 badge badge-outline-info fw-bold mb-3" id="organization"></h5><br>
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
                    <hr>
                  </div>
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
                <div class="row">
                  <div class="col-lg">
                    <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
                    <div id="reservation-status">
                    </div>
                  </div>
                </div>
                <div class="row" id="change-status">
                  <div class="col-lg">
                    <h6 class="text-medium mb-3">CHANGE STATUS</h6>
                    <div class="vstack gap-2">
                      <button type="button" class="btn waves-effect waves-light btn-success btn-label fw-medium" id="approveBtn"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i>Approve</button>
                      <button type="button" class="btn waves-effect waves-light btn-danger btn-label fw-medium" id="cancelBtn"><i class=" ri-close-line label-icon align-middle fs-16 me-2"></i>Cancel</button>
                    </div>
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