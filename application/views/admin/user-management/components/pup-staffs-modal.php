<!-- Add Faculty/Staff modal -->
<div id="addStaffModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Add Faculty/Staff Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="staffNo" class="form-label">Faculty/Staff No.</label>
            <input type="text" class="form-control" id="staffNo" placeholder="Enter Faculty/Staff No." />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email Address</label>
            <div class="input-group">
              <input class="form-control" id="emailInput" placeholder="Enter email" />
              <span class="input-group-text" id="basic-addon2">@iskolarngbayan.pup.edu.ph</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Faculty Type</label>
            <select id="program" class="form-select mb-3">
              <option value="Full-Time">Full-Time</option>
              <option value="Part-Time">Part-Time</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Designation</label>
            <select id="program" class="form-select mb-3">
              <option value="ResearchProfessor">Research Professor</option>
              <option value="FacultyExtensionist">Faculty Extensionist</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Role</label>
            <select id="program" class="form-select mb-3">
              <option value="Admin">Admin</option>
              <option value="Faculty">Faculty</option>
              <option value="AcademicHead">Academic Head</option>
              <option value="Checker">Checker</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Academic Rank</label>
            <select id="program" class="form-select mb-3">
              <option value="Professor">Professor</option>
              <option value="AssistantProf">Assistant Professor</option>
              <option value="AssocProf">Associate Professor</option>
              <option value="Instructor">Instructor</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="enrollStatus" class="form-label">Employment Status</label>
            <select class="form-select mb-3" id="enrollStatus">
              <option selected>Select employment status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkTerms" />
            <label class="form-check-label" for="checkTerms">I agree to the
              <span class="fw-semibold">Terms of Service</span>
              and Privacy Policy</label>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add Professor</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- View Faculty/Staff modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Faculty/Staff Information
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
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Faculty/Staff No.</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">2020-18543-CM-0</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Name</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">Rodolfo Y. Aquino, MBA</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Email Address</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">@iskolarngbayan.pup.edu.ph</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Faculty Type</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">Full-Time</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Designation</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">Emeng Faculty ganda lang</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Role</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium">
                    <span>Faculty</span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Academic Rank</a></h5>
                </div>
                <div class="col-8">
                  <span class="fs-12 badge rounded-pill bg-success">Professor</span>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark"> Employment Status</a></h5>
                </div>
                <div class="col-8">
                  <span class="fs-12 badge rounded-pill bg-success">Active</span>
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

<!-- Edit Staff modal -->
<div id="editStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Faculty/Staff Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form>
          <div class="mb-3">
            <label for="staffNo" class="form-label">Faculty/Staff No.</label>
            <input type="text" class="form-control" id="staffNo" placeholder="Enter Faculty/Staff No." />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email Address</label>
            <div class="input-group">
              <input class="form-control" id="emailInput" placeholder="Enter email" />
              <span class="input-group-text" id="basic-addon2">@iskolarngbayan.pup.edu.ph</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Faculty Type</label>
            <select id="program" class="form-select mb-3">
              <option value="Full-Time">Full-Time</option>
              <option value="Part-Time">Part-Time</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Designation</label>
            <select id="program" class="form-select mb-3">
              <option value="ResearchProfessor">Research Professor</option>
              <option value="FacultyExtensionist">Faculty Extensionist</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Role</label>
            <select id="program" class="form-select mb-3">
              <option value="Admin">Admin</option>
              <option value="Faculty">Faculty</option>
              <option value="AcademicHead">Academic Head</option>
              <option value="Checker">Checker</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Academic Rank</label>
            <select id="program" class="form-select mb-3">
              <option value="Professor">Professor</option>
              <option value="AssistantProf">Assistant Professor</option>
              <option value="AssocProf">Associate Professor</option>
              <option value="Instructor">Instructor</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="enrollStatus" class="form-label">Employment Status</label>
            <select class="form-select mb-3" id="enrollStatus">
              <option selected>Select employment status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkTerms" />
            <label class="form-check-label" for="checkTerms">I agree to the
              <span class="fw-semibold">Terms of Service</span>
              and Privacy Policy</label>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add Professor</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Delete Student modal -->
<div class="modal fade zoomIn" id="deleteStudentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">You are about to delete a student ?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your student will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>