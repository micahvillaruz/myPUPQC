<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1">All Appointments</h5>
        <div>
          <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">Add Faculty/Staff</button> -->
        </div>
      </div>
      <div class="card-body">
        <table id="medical-request-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
              <tr>
                <th>Appointment Code</th>
                <th>Student Name</th>
                <th>Status</th>
                <th>Appointment Date</th>
                <th>Action</th>
              </tr>
          </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewAppointmentModal"><i class="ri-eye-fill fs-5"></i></button>
                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelMedical('6674d10f-b831-4651-889c-5a2117494e9b')"><i class="bx bxs-user-x fs-4"></i></button>
                </td>
                
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>   
  <!--end col-->
</div>