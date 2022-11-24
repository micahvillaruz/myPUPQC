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
                  <h5 class="fs-13 mb-1 fw-medium">Consultation Type</h5>
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
                  <h5 class="fs-13 mb-1">Appointment Date</h5>
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
          <!-- Base Radios -->
        <label for="consultationType" class="form-label"> Consultation Type </label><span class="text-danger">*</span></label>
          <div class="mb-4">
              <!-- 1st Column -->
              <div class="">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="New Consultation" id="new_consultation" name="new_consultation">
                      <label class="form-check-label" for="flexCheckDefault">New Consultation</label>
                    </div>
                 <!-- 2nd Column -->
                 <div class="">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="Follow-up Consultation" id="followup_consultation" name="followup_consultation">
                      <label class="form-check-label" for="flexCheckChecked">Follow-up Consultation</label>
                    </div>
                 </div>
              <div class="mb-3">
                <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
                  <select class="form-select mb-3" aria-label="Default select example">
                    <option selected></option>
                    <option value="Dental Check-up">Dental Check-up</option>
                    <option value="Follow-up Check-up">Follow-up Check-up</option>
                    <option value="Dental Cleaning">Dental Cleaning</option>
                  </select>
              </div>
          <div class="mb-3">
            <div class="mb-3">
              <div>
                <label for="exampleInputdate" class="form-label"> Appointment Date </label>
                <input type="date" class="form-control" id="consultation_date" name="consultation_date" required>
              </div>
            </div>
             <!-- Info Alert -->
             <div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
              <h4><i class="las la-info me-3 align-middle fw-bold"></i>Data Privacy Act of 2012</h4>
              <p>I hereby authorize PUPQC to collect and process the data indicate herein for purpose of effecting control of the covid-19 infection. I understand that any personal information is protected under Data Privacy Act of 2012, if needed, this may be used to facilitate contact tracing of PUPQC Dental Service and/or LGU and that I am required bt RA 11469 Bayanihan to Heal as One Act, to provide truthful information.</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
              <br></br>
                <div class="text-center">
                 <button type="submit" class="btn btn-primary" id="addDentalCase">Submit</button>
            </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>