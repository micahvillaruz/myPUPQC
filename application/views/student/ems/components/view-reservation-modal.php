<!-- View Reservation modal -->
<div class="modal fade" id="viewOwnReservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
<<<<<<< HEAD
</div>
<!-- /.modal -->


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

<!-- Edit Reservation modal -->
<div id="editReservationModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-md-down">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Reservation</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="edit-reservation-form" class="needs-validation" novalidate>
          <div class="row mb-2">
            <div class="d-flex justify-content-center fs-13 fw-medium">
              <h5 id="reserve_number_edit" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
            </div>
          </div>
          <div class="mb-3 px-2">
            <label for="edit-title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="edit-title" placeholder="Enter event title" />
          </div>
          <div class="mb-3 px-2">
            <label for="edit-details" class="form-label">Event Details</label>
            <textarea class="form-control" id="edit-details" placeholder="Enter event details"></textarea>
          </div>
          <div class="mb-3 px-2">
            <label for="edit-objectives" class="form-label">Objectives</label>
            <textarea class="form-control" id="edit-objectives" placeholder="Enter event Objectives. Begin every objective with a new line & a hyphen. (e.g. '- To help students learn more about IT.')" rows="4"></textarea>
          </div>
          <div class="mb-2 px-2">
            <label for="edit-pillars">PUP Pillar</label>
            <select class="form-select fs-6" id="edit-pillars" placeholder="" required>
              <option selected disabled>- Select a PUP Pillar that is relevant to your event -</option>
              <option value="Pillar1">Pillar 1: Dynamic, Transformational and Responsible Leadership.</option>
              <option value="Pillar2">Pillar 2: Responsive and Innovative Curricula and Instruction.</option>
              <option value="Pillar3">Pillar 3: Enabling and Productive Learning Environment.</option>
              <option value="Pillar4">Pillar 4: Holistic Student Development and Engagement.</option>
              <option value="Pillar5">Pillar 5: Empowered Faculty Members and Employees.</option>
              <option value="Pillar6">Pillar 6: Vigorous Research Production and Utilization.</option>
              <option value="Pillar7">Pillar 7: Global Academic Standards and Excellence.</option>
              <option value="Pillar8">Pillar 8: Synergistic, Productive, Strategic Networks and Partnerships.</option>
              <option value="Pillar9">Pillar 9: Active and Sustained Stakeholders' Engagement</option>
              <option value="Pillar10">Pillar 10: Sustainable Social Development Programs and Projects.</option>
            </select>
          </div>
          <div class="row pt-2 px-3" id="edit-attachments-row">
            <label for="edit-attachments">Edit Attachments</label>
              <input id="edit-attachments" type="file" class="filepond filepond-input-multiple" multiple name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" />
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3">Edit Reservation</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
=======
>>>>>>> 7cf361db4f89674cf7aedfff8cd5c0d79510baa8
</div>