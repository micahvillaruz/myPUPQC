<!-- View Dental modal -->
<div class="modal fade" id="viewDentalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Dental Case
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
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_reason"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Dentist</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_health_physcian"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Start date of Symptoms</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_symptoms_date"></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Scheduled Date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_date"></div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_consultation_time"></div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Status</h5>
                </div>
                <div class="col-8" id="view_status">
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

<!-- Add Dental modal -->
<div id="addDentalModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Chief Complaint Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form id="NewDentalCaseForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="consultation_reason" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Enter Dentist <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="health_appointment_assigned_to_physician" name="first_name last_name" placeholder="Enter name of Dentist" required>
          </div>
          <div class="mb-3">
            <div>
              <label for="exampleInputdate" class="form-label">Start date of Symptoms</label>
              <input type="date" class="form-control" id=symptoms_date">
            </div>
            <div class="mb-3">
              <div>
                <label for="exampleInputdate" class="form-label"> Schedule date for Consultation </label>
                <input type="date" class="form-control" id="'consultation_date">
              </div>
              <label for="exampleInputdate" class="form-label"> Time </label>
              <div class="mx-5">
                <div class="row align-item-start">
                  <!-- 1st Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="consultation_time">
                      <label class="form-check-label" for="flexCheckDefault">7:00 AM - 9:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="consultation_time">
                      <label class="form-check-label" for="flexCheckChecked">11:00 - 1:00 PM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="consultation_time">
                      <label class="form-check-label" for="flexCheckDefault">3:00 PM - 5:00 PM</label>
                    </div>
                  </div>
                  <!-- 2nd Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="consultation_time">
                      <label class="form-check-label" for="flexCheckChecked">9:00 AM - 11:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="consultation_time">
                      <label class="form-check-label" for="flexCheckDefault">1:00 PM - 3:00 PM</label>
                    </div>
                  </div>
                  <br></br>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>