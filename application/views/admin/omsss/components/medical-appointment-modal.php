<!-- Delete Medical modal -->
<div class="modal fade zoomIn" id="deleteMedicalModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">You are about to delete an appointment?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your appointment will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
            <button class="btn btn-light fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- View Medical Prescription modal -->
<div class="modal fade" id="viewMedicalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Medical Appointment
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
                  <h5 class="fs-13 mb-1 fw-medium">Reason for consultation</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_reason" value="">Fever</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Attending Doctor</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_doctor_name" value="">Melissa P. Sarapuddin, MD</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Start Date of Symptoms</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_date_symptoms" value="">09-09-2022</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Scheduled Date for Consultation</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_scheduled_date" value="">11-09-2022</div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_time" value="">1:00 PM - 3:00 PM</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Status</h5>
                </div>
                <div class="col-8">
                <div class="d-flex fs-13 fw-medium" id="view_status" value=""><span class="badge bg-warning">PENDING</span></div>
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
<div id="editMedicalModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Medical Appointment</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonCon" class="form-label">Reason for Consultation</label>
            <input type="text" class="form-control" id="reasonCon" placeholder="" value="Fever" required>
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Atending Doctor</label>
            <input type="text" class="form-control" id="fullName" placeholder="" value="Melissa P. Sarapuddin, MD" required>
          </div>
          <div class="mb-3">
            <label for="dateInput" class="form-label">Start date of symptoms</label>
            <div class="input-group">
              <input type="text" class="form-control" id="dateInput" placeholder="" value="09-09-2022" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="dateInput" class="form-label">Scheduled Date for Consultation</label>
            <div class="input-group">
              <input type="text" class="form-control" id="dateInput" placeholder="" value="11-09-2022" required>
            </div>
          </div>
          <div>
            <label for="timeInput" class="form-label"> Time </label>
            <input type="text" class="form-control" id="timeInput" value="1:00 PM - 3:00 PM" required>
          </div>
          <div class="mb-5">
          <label for="studentStatus" class="form-label">Status</label>
            <select class="form-select mb-3" id="studentStatus">
              <option selected>Select status</option>
              <option value="1">Accepted</option>
              <option value="0">Pending</option>
              <option value="0">Denied</option>
            </select>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Update Appointment</button>
            <button type="submit" class="btn btn-light">Close</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>




