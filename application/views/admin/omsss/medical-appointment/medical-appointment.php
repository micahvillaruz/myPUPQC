<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1">Medical Appoinments</h5>
        <div>
          <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">Add Faculty/Staff</button> -->
        </div>
      </div>
      <div class="card-body">
        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Reason of Consultation</th>
              <th>Attending Doctor</th>
              <th>Start date of Symptoms</th>
              <th>Schedule date for Consultation</th>
              <th>Time</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Fever</td>
              <td>Melissa P. Sarapuddin, MD</td>
              <td>09-09-2022</td>
              <td>11-09-2022</td>
              <td>1:00 PM - 3:00 PM</td>
              <td><span class="badge bg-warning">PENDING</span></td>
              <td>
                <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill"></i></button>
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editMedicalModal"><i class="ri-edit-2-fill"></i></button>
                  <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteMedicalModal"><i class="ri-delete-bin-5-fill"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>   
  <!--end col-->
</div>