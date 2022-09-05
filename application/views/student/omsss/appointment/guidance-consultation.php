<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1 fw-bold text-primary">Guidance Case</h5>
        <div>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">New Guidance Case</button>
        </div>
      </div>
      <div class="card-body">
        <table id="students-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Case Details</th>
              <th>Date Creared</th>
              <th>Status</th>
              <th>Attending Doctor</th>
              <th>Schedule</th>
              <th>Action</th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>
                <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill"></i></button>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--end col-->
</div>