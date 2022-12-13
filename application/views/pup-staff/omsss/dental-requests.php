<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h2 class="card-title mb-0 flex-grow-1 fw-bold text-primary">Dental Request</h2>
        <div class="flex-shrink-0">
          <ul class="nav nav-pills card-header-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab">
                Pending
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#approved" role="tab">
                Approved
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <!-- Tab panes -->
        <div class="tab-content text-muted">
        <div class="tab-pane active" id="pending" role="tabpanel">
          <table id="guidance-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
            <thead class="bg-light">
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
                  <td>DENT-914BDD</td>
                  <td>Josha G. Galga</td>
                  <td><span class="badge rounded-pill bg-warning">Pending</span></td>
                  <td>9-12-2022</td>
                  <td><button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDentalReqModal"><i class="ri-eye-fill fs-5"></i></button>
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateDentalRequestModal"><i class="ri-pencil-fill fs-5"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>DENT-916BDD</td>
                  <td>Nakshie Q. Santos</td>
                  <td><span class="badge rounded-pill bg-warning">Pending</span></td>
                  <td>9-12-2022</td>
                  <td><button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDentalReqModal"><i class="ri-eye-fill fs-5"></i></button>
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateDentalRequestModal"><i class="ri-pencil-fill fs-5"></i></button>
                  </td>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="approved" role="tabpanel">
            <table id="approved-datatables" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
              <thead class="bg-light">
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
                  <td>DENT-914BDD</td>
                  <td>Josha G. Galga</td>
                  <td><span class="badge rounded-pill bg-success">Approved</span></td>
                  <td>09-12-2022</td>
                  <td><button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDentalReqModal"><i class="ri-eye-fill fs-5"></i></button>
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateDentalRequestModal"><i class="ri-pencil-fill fs-5"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>DENT-916BDD</td>
                  <td>Nakshie Q. Santos</td>
                  <td><span class="badge rounded-pill bg-success">Approved</span></td>
                  <td>09-12-2022</td>
                  <td><button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDentalReqModal"><i class="ri-eye-fill fs-5"></i></button>
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateDentalRequestModal"><i class="ri-pencil-fill fs-5"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end row-->