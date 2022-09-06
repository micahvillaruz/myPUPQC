<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1">Medical Prescription</h5>
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
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewGuidanceModal"><i class="ri-eye-fill"></i></button>
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editGuidanceModal"><i class="ri-edit-2-fill"></i></button>
                  <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteGuidanceModal"><i class="ri-delete-bin-5-fill"></i></button>
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