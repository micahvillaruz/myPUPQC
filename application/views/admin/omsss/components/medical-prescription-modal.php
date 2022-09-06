<!-- Delete Student modal -->
<div class="modal fade zoomIn" id="deleteMedicalPrescriptionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">You are about to delete a prescription ?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your prescription will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Medical Prescription modal -->
<div id="editMedicalPrescriptionModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Prescription Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="studentNo" class="form-label">None</label>
            <input type="text" class="form-control" id="studentNo" placeholder="Enter student no" />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">None</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">None</label>
            <div class="input-group">
              <input type="email" class="form-control" id="emailInput" placeholder="Enter email" />
              <span class="input-group-text" id="basic-addon2"></span>
            </div>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">None</label>
            <!-- <select class="form-select mb-3" name="state">
              <option value="BBTLEDHE">BBTLEDHE</option>
              <option value="BSBAHRM">BSBAHRM</option>
              <option value="BSBA-MM">BSBA-MM</option>
              <option value="BSENTREP">BSENTREP</option>
              <option value="BSIT">BSIT</option>
              <option value="BPAPFM">BPAPFM</option>
              <option value="DOMTMOM">DOMTMOM</option>
            </select> -->
          </div>
          <div class="mb-3">
            <label for="yearSection" class="form-label">None</label>
            <input type="text" class="form-control" id="yearSection" placeholder="Enter year and section" />
          </div>
          <div class="mb-3">
            <label for="enrolledDate" class="form-label">None</label>
            <input id="enrolledDate" type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Pick date">
          </div>
          <div class="mb-3">
            <label for="enrollStatus" class="form-label">None</label>
            <!-- <select class="form-select mb-3" id="enrollStatus">
              <option selected>Select enrollment status</option>
              <option value="1">Enrolled</option>
              <option value="0">Not Enrolled</option>
            </select> -->
          </div>
          <div class="mb-3">
            <label for="studentStatus" class="form-label">None</label>
            <!-- <select class="form-select mb-3" id="studentStatus">
              <option selected>Select status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select> -->
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
<!-- View Medical Prescription modal -->
<div class="modal fade" id="viewMedicalPrescriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Medical Prescription
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
                  <h5 class="fs-13 mb-1 fw-medium">Prescription ID</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_no" value=""></div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_no" value=""></div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium">Follow-up check-up date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_guidance_name" value=""></div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_scheduled_date" value=""></div>
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
                  <div class="d-flex fs-13 fw-medium" id="view_time" value=""></div>
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


<!-- Add Medical Prescription modal -->
<div id="addMedicalPrescriptionModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Medical Prescription</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form id="chiefMedicalPrescriptionForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ReasonInput" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Enter Doctor <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nameInput" name="first_name last_name" placeholder="Enter name of doctor" required>
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

                  



