<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1 fw-bold text-primary">Medical Case: Monday to Friday @ 08:00 AM - 05:00 PM</h5>
        <div>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicalModal">New Medical Case</button>
        </div>
      </div>
      <div class="card-body">
      <p>You can only make a <u><span class="fw-bold">face to face consultation</span></u> during the schedule shown above.</p>
        <table id="medical-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Case Details</th>
              <th>Start date of Symptoms</th>
              <th>Status</th>
              <th>Attending Consultant</th>
              <th>Schedule</th>
              <th>Action</th>
            </tr>
            <tr>
              <th>2022-MED-0003</th>
              <th>06-09-2022</th>
              <th><span class="badge bg-warning">PENDING</span></th>
              <th>Melissa P. Sarapuddin, MD</th>
              <th>11-09-2022</th>
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