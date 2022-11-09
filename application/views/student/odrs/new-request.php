<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">New Request</h5>
      </div>
      <div class="card-body">
        <form id="createRequestForm">
          <div class="row g-3">
            <div class="col-lg-12">
              <label for="course_when_admitted" class="form-label">Program / Course</label>
              <div class="input-group">
                <select class="form-select" id="course_when_admitted" name="course_when_admitted" disabled>
                  <option value="2" id="course" selected></option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <label for="education_status" class="form-label">Documents for</label>
              <div class="input-group">
                <select class="form-select" id="education_status" name="education_status" disabled>
                  <option value="1" id="educ_status" selected></option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12 mt-4">
              <label for="document_type" class="form-label">Type of Document: (Choose at least 1)</label>
              <!-- Nav tabs -->
              <ul class="nav nav-pills nav-custom-outline nav-primary mb-1" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link active" data-bs-toggle="tab" href="#tor" role="tab">Transcript of Records</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#certificates" role="tab">Certifications</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#unclaimed" role="tab">Unclaimed</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#cav" role="tab">CAV (CHED/DFA/WES/CES)</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted" id="tabpanes">
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <label for="discription" class="form-label">Purpose of Request</label>
              <textarea class="form-control mt-3" id="purpose" rows="3" placeholder="Readmission, Employment, Transfer to other school, Board / Licensure Examination, Further Studies, Scholarship or Other Purpose" required></textarea>
            </div>
            <!--end col-->
            <div class="col-lg-12 mt-4">
              <div class="text-center d-grid">
                <button class="btn btn-primary bg-gradient">Submit</button>
              </div>
            </div>
          </div>
          <!--end row-->
        </form>
      </div>
    </div>
  </div>
  <!--end col-->
</div>
<!--end row-->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->