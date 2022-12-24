<!-- View Reservation modal -->
<div class="modal fade" id="viewReservationDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Reservation Information
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div data-simplebar class="mx-n3">
          <ul class="list list-group list-group-flush mb-0">
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Reservation Control #:</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="reserve_number"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Organizaton</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="organization"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Event Title</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="event_title"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Venue</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="facility_name"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Event Details</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="event_details"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="reserve_date"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Time</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium">
                    <span id="time"></span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Attachments</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium fs-6">
                    <span id="attachment1"></span>
                    <span id="attachment2"></span>
                    <span id="attachment3"></span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Remarks</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium">
                    <span id="remarks"></span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Status</a></h5>
                </div>
                <div class="col-8" id="reservation_status"></div>
              </div>
            </li>
            <!-- end list item -->
          </ul>
          <!-- end ul list -->
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