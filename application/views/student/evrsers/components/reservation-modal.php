<!-- View Medical modal -->
<div class="modal fade" id="viewOwnReservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
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
                  <div class="d-flex fs-13 fw-medium" id="reservation_number"></div>
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

<!-- Edit Medical modal -->
<div id="editReservationModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Student Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="studentNo" class="form-label">Student No.</label>
            <input type="text" class="form-control" id="studentNo" placeholder="Enter student no" />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email Address</label>
            <div class="input-group">
              <input type="email" class="form-control" id="emailInput" placeholder="Enter email" />
              <span class="input-group-text" id="basic-addon2">@iskolarngbayan.pup.edu.ph</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Program</label>
            <select class="form-select mb-3" name="state">
              <option value="BBTLEDHE">BBTLEDHE</option>
              <option value="BSBAHRM">BSBAHRM</option>
              <option value="BSBA-MM">BSBA-MM</option>
              <option value="BSENTREP">BSENTREP</option>
              <option value="BSIT">BSIT</option>
              <option value="BPAPFM">BPAPFM</option>
              <option value="DOMTMOM">DOMTMOM</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="yearSection" class="form-label">Year and Section</label>
            <input type="text" class="form-control" id="yearSection" placeholder="Enter year and section" />
          </div>
          <div class="mb-3">
            <label for="enrolledDate" class="form-label">Date Enrolled</label>
            <input id="enrolledDate" type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Pick date">
          </div>
          <div class="mb-3">
            <label for="enrollStatus" class="form-label">Enrollment Status</label>
            <select class="form-select mb-3" id="enrollStatus">
              <option selected>Select enrollment status</option>
              <option value="1">Enrolled</option>
              <option value="0">Not Enrolled</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="studentStatus" class="form-label">Status</label>
            <select class="form-select mb-3" id="studentStatus">
              <option selected>Select status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Edit Student</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Delete Reservation modal -->
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
          <p class="text-muted fs-14 mb-4 pt-1">Cancelling this will remove event information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-danger" id="delete-record">Yes, Cancel It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>