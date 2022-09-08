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
          <h4 class="fs-semibold">You are about to delete an prescription?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your prescription will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
            <button class="btn btn-light fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
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
      <h4 class="card-title mb-0">Medical Prescription</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="caseNo" class="form-label">Case Control No.</label>
            <input type="text" class="form-control" id="caseNo" placeholder="" value="2022-MED-0001" required/>
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Atending Doctor</label>
            <input type="text" class="form-control" id="fullName" placeholder="" value="Melissa P. Sarapuddin, MD" required/>
          </div>
          <div class="mb-3">
            <label for="expiryDate" class="form-label">Expiry Date</label>
            <div class="input-group">
              <input type="email" class="form-control" id="expiryDate" placeholder=""value="15-02-2022" required/>
            </div>
          </div>
          <div class="mb-3">
            <label for="prescriptionInput" class="form-label">Prescription</label>
            <div class="input-group">
              <h4><span class="badge bg-danger">EXPIRED</span></h4>
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
                  <h5 class="fs-13 mb-1 fw-medium">Case Control No.</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_case_control_no" value="">15-02-2022</div>
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
                  <h5 class="fs-13 mb-1 fw-medium">Expiry Date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_expiry_date" value="">15-02-2022</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Prescription</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium" id="view_prescription" value=""><span class="badge bg-danger">EXPIRED</span></div>
                </div>
              </div>
            </li>
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
            <label for="reasonInput" class="form-label"> Case Control No. <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ReasonInput" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Attending Doctor <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nameInput" name="first_name last_name" placeholder="Enter name of doctor" required>
          </div>
          <div class="mb-3">
            <div>
              <label for="exampleInputdate" class="form-label">Expiry Date</label>
              <input type="date" class="form-control" id="exampleInputdate">
            </div>
          </div>
            <div class="mb-3">
              <div>
                <label for="exampleInputdate" class="form-label"> Prescription</label>
                <input class="form-control" type="file" id="formFile">
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

                  



