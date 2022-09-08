<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1">All Prescriptions</h5>
          <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicalPrescriptionModal">Add Medical Prescrition</button>
          </div>
        <div>
          <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">Add Faculty/Staff</button> -->
        </div>
      </div>
      <div class="card-body">
        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Case Control No.</th>
              <th>Attending Doctor</th>
              <th>Expiry Date</th>
              <th>Prescription</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>2022-MED-0001</th>
              <th>Melissa P. Sarapuddin, MD</th>
              <th>15-02-2022</th>
              <th>
                <span class="badge bg-danger">EXPIRED</span>
              </th>
              <td>
                <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewMedicalPrescriptionModal"><i class="ri-eye-fill"></i></button>
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editMedicalPrescriptionModal"><i class="ri-edit-2-fill"></i></button>
                  <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteMedicalPrescriptionModal"><i class="ri-delete-bin-5-fill"></i></button>
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