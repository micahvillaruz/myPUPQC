<!-- Default Modals -->
<div id="attachment-info" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="attachment-info-label">Event Request Attachments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">1</span></b>
            <div class="badge badge-soft-secondary">
              <i class="me-2 mdi mdi-file-document fs-13"></i>
              <span class="text-uppercase">Event Request</span>
            </div>
            <br><br>
            <span class="mt-3">
              This should contain the information regarding the event and completed signatories from the following: <strong>Org President, SSC President, Adviser, Property Custodian, OSAS Head, Acad Head, & the Director.</strong>
            </span>
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">2</span></b>
            <div class="badge badge-soft-info">
              <i class="me-2 mdi mdi-file-document fs-13"></i>
              <span class="text-uppercase">Concept Paper</span>
            </div>
            <br><br>
            <span class="mt-3">
              The specific details regarding the event should be found here. This includes the venue, platform, number of participants included in the said event.
            </span>
          </li>
          <li class="list-group-item"><b style="width: 15px; height: 15px;" class="bg-dark text-white rounded-pill me-2 align-middle"><span class="mx-2 fs-10">3</span></b>
            <div class="badge badge-soft-primary">
              <i class="me-2 mdi mdi-file-document-multiple fs-13"></i>
              <span class="text-uppercase">Others</span>
            </div>
            <br><br>
            <span class="mt-3">
              Anything relevant to the creation of the event request should then be included here. <br><br>
            </span>
            <span class="mt-4 fs-6">
              <i class="">*** Note that this could help your event request application to be processed faster.</i>
            </span>
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editReservationModal">Go Back</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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

<!-- 
// * Still need to add the following:
// * - Edit Reservation endpoints
// * - Edit Reservation success modal
-->
<!-- Edit Reservation modal -->
<div id="editReservationModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-md-down">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Reservation</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="row mb-3">
            <h5 class="fs-13 fw-medium col-5"><a href="#" class="link text-dark">Reservation Control #:</a></h5>
            <div class="d-flex fs-13 fw-medium col-5" id="reserve-number"></div>
          </div>
          <div class="row">
            <div class="col-md mb-3">
              <label for="edit-organization">Organization</label>
              <select class="form-select" id="edit-organization" placeholder="" required>
                <option selected disabled>- Select Organization -</option>
                <option>SSC</option>
                <option>CHRS</option>
                <option>COL</option>
                <option>COMMITS</option>
                <option>DOMT.CS</option>
                <option>FBTO</option>
                <option>JMS</option>
                <option>KATAGA</option>
                <option>MUSA</option>
                <option>PSC</option>
                <option>SPAS</option>
                <option>Vox Nova</option>
                <option>YES</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md mb-3">
              <label for="facility_name">Venue</label>
              <select class="form-select" id="facilty_name" placeholder="" required>
                <option selected disabled>- Select Venue -</option>
                <option>PUPQC Gymnasium</option>
                <option>PUPQC Chapel</option>
                <option>Audio-Visual Room</option>
                <option>Computer Lab</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="edit-title" class="form-label">Event Title</label>
            <input type="text" class="form-control" id="edit-title" placeholder="Enter event title" />
          </div>
          <div class="mb-3">
            <label for="edit-details" class="form-label">Event Details</label>
            <textarea class="form-control" id="edit-details" placeholder="Enter event details"></textarea>
          </div>
          <div class="row">
            <div class="col-md mb-3">
              <label for="edit-date">Reserve Date</label>
              <input type="date" class="form-control" id="eedit-date" placeholder="Reservation Date / Event Date" required>
            </div>
            <div class="col-md mb-3">
              <label for="edit-timefrom" class="form-label">Time From</label>
              <select class="form-select mb-3" id="edit-timefrom">
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
            </div>
            <div class="col-md mb-3">
              <label for="edit-timeto" class="form-label">Time To</label>
              <select class="form-select mb-3" id="edit-timeto">
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
            </div>
            <div class="col-md col-lg-8">
              <div class="mb-2">
                <label for="edit-attachments">Edit Attachments</label>
                <button type="button" class="btn rounded-pill btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#attachment-info"><i class="bx bx-question-mark"></i></button>
              </div>
              <div class="input-group mb-2" id="edit-attachments">
                <input type="file" class="form-control" id="edit-inputGroupFile01">
                <label class="input-group-text" for="edit-inputGroupFile01">Event Request</label>
              </div>
              <div class="input-group mb-2">
                <input type="file" class="form-control" id="edit-inputGroupFile02">
                <label class="input-group-text" for="edit-inputGroupFile02">Concept Paper</label>
              </div>
              <div class="input-group mb-2">
                <input type="file" class="form-control" id="edit-inputGroupFile03">
                <label class="input-group-text" for="edit-inputGroupFile03">Others</label>
              </div>
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
</div>