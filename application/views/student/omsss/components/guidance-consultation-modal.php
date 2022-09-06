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
                  <h5 class="fs-13 mb-1 fw-medium">Reason for consultation</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_no">Anxiety</div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_no">Melanie Bactasa, RPsy</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Date of start of symptoms</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_name">09-11-2022</div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_scheduled_date">09-22-22</div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_time">7:00 AM - 9: 00 AM</div>
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

<!-- Add Guidance modal -->
<div id="addGuidanceModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Chief Complaint Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form id="chiefComplainttForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ReasonInput" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Enter Psychologist <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nameInput" name="first_name last_name" placeholder="Enter name of Psychologist" required>
          </div>
          <div class="mb-3">
            <div>
              <label for="exampleInputdate" class="form-label">Start date of Symptoms</label>
              <input type="date" class="form-control" id="exampleInputdate">
            </div>
            <div class="mb-3">
              <div>
                <label for="exampleInputdate" class="form-label"> Schedule date for Consultation </label>
                <input type="date" class="form-control" id="exampleInputdate">
              </div>
              <label for="exampleInputdate" class="form-label"> Time </label>
              <div class="mx-5">
                <div class="row align-item-start">
                  <!-- 1st Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">7:00 AM - 9:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">11:00 - 1:00 PM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">3:00 PM - 5:00 PM</label>
                    </div>
                  </div>
                  <!-- 2nd Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">9:00 AM - 11:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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