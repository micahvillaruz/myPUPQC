<!-- View Reservation modal -->
<div class="modal fade" id="viewOwnReservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content px-3">
      <div class="modal-header position-relative">
        <div class="d-flex position-absolute top-50 start-50 translate-middle-x">
          <h5 id="reserve_number" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
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
                <h1 class="text-dark fw-bold mb-3 ms-2" id="event_title"></h1><hr>
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
            <div class="row h-75 mb-3">
              <div class="col">
                <!-- <a href="" class="btn btn-soft-dark w-100 h-100" disabled>Dark</a> -->
                <div class="w-100 h-100 rounded" id="pubmat" style="background-color: #D3D3D3;">
                  <div class="position-absolute top-50 start-50 translate-middle text-center">
                    <a href="#" class="fs-5 w-100 h-100 rounded my-auto text-white pe-none"><i class="ri-4x ri-add-circle-fill"></i><br>Add Pubmat</a>
                  </div>
                </div>
                <!-- <img class="rounded" alt="200x200" width="200" src=""> -->
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