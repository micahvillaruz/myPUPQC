<!-- View Reservation modal -->
<div class="modal fade" id="viewReservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content px-3">
      <div class="modal-header position-relative mb-4">
        <div class="d-flex position-absolute top-50 start-50 translate-middle-x">
          <h5 id="reserve_number" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg">
            <h5 class="fs-5 fw-bold mb-1" id="organization"></h5><br>
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
                    <div class="fs-4 mx-auto mb-3 text-center clearfix">
                      <span class="badge bg-primary">
                        <i class="mdi mdi-pillar me-3"></i>
                        <span class="mx-auto" id="pillar"></span>
                      </span>
                    </div>
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
              <span class="fs-5" id="attachment1"></span><br>
              <span class="fs-5" id="attachment2"></span><br>
              <span class="fs-5" id="attachment3"></span><br>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h6 class="text-medium mb-3">RESERVATION STATUS</h6>
              <div id="reservation-status">
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