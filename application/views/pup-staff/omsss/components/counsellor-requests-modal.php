<!-- View Guidance modal -->
<div class="modal fade" id="viewGuidanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Guidance Case
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
                  <h5 class="fs-13 mb-1 fw-medium">Consultation Type</h5>
                </div>
                <div class="col-8">
                <div class="d-flex fs-13 fw-medium" id="view_consultation_type">New Consultation</div>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_type">Follow-Up</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Reason for consultation</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_reason">Anxiety</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Psychologist</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_health_physcian">Melanie Bactasa</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Appoinment Date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_date">12-13-2022</div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_time">9:00AM - 10:00AM</div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Status</h5>
                </div>
                <div class="col-8" id="view_status"><span class="badge rounded-pill bg-warning"> Pending </span>
                </div>
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

<!-- Counseling Request Status modal -->
<div id="updateGuidanceAppointmentStatusModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-content">
      <form id="updateGuidanceAppointmentStatusForm" class="needs-validation" novalidate>
      <input type="hidden" id="edit_health_appointment_id" name="edit_health_appointment_id">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Appoinment Status</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <label class='form-label'>Status</label>
          <span class="text-danger">*</span>
        <select class="form-select mb-3" id="consultation_status" name="consultation_status" aria-label="Change Status" required>
          <option selected></option>
          <option value="Approved">Approved</option>
          <option value="Cancelled by Staff">Cancelled by Staff</option>
        </select>
          <label class='form-label'>Remarks</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks" required><br>
          <div class="text-center d-grid">
            <button type="submit" class="btn btn-primary" aria-label="Confirm">Confirm</button>
        </div>
      </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>