<div class="row">
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Appointment Status: (Done/Cancelled/Pending/Approved/Deleted)</h4>
      </div>
      <div class="card-body">
        <canvas id="doughnut1" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
      </div>
    </div>
  </div> <!-- end col -->

  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Appointment Type: (Number of New Consultations and Follow Ups)</h4>
      </div>
      <div class="card-body">
        <canvas id="doughnut2" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
              <i class="mdi mdi-clock"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
          <p class="text-uppercase fw-medium text-muted mb-3"><i class="las la-clipboard-list"></i>Medical</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_pending_medical" data-target="7522">0</span></h4>
            <p class="text-muted mb-0">Pending Number of Appointments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
            <i class="mdi mdi-clock"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="text-uppercase fw-medium text-muted mb-3"><i class="las la-tooth"></i>Dental</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_pending_dental" data-target="2045">0</span></h4>
            <p class="text-muted mb-0">Pending Number of Appointments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
          <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
            <i class="mdi mdi-clock"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="text-uppercase fw-medium text-muted mb-3"><i class="mdi mdi-brain me-1"></i>Guidance</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_pending_guidance" data-target="2045">0</span></h4>
            <p class="text-muted mb-0">Pending Number of Appointments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
          <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
            <i class="ri-checkbox-circle-line"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="text-uppercase fw-medium text-muted mb-3"><i class="las la-clipboard-list"></i>Medical</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_done_medical" data-target="2045">0</span></h4>
            <p class="text-muted mb-0">2024 Done Appoinments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
            <span class="badge badge-soft-success fs-12"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
          <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
            <i class="ri-checkbox-circle-line"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="text-uppercase fw-medium text-muted mb-3"><i class="las la-tooth"></i>Dental</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_done_dental" data-target="2045">0</span></h4>
            <p class="text-muted mb-0">2024 Done Appoinments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
            <span class="badge badge-soft-success fs-12"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-2 col-md-6">
    <div class="card card-height-100 card-animate overflow-hidden">
      <div class="position-absolute start-0" style="z-index: 0;">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="100" height="100">
          <style>
            .s0 {
              opacity: .05;
              fill: var(--vz-success)
            }
          </style>
          <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
        </svg>
      </div>
      <div class="card-body" style="z-index: 1;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm flex-shrink-0">
          <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
            <i class="ri-checkbox-circle-line"></i>
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="text-uppercase fw-medium text-muted mb-3"><i class="mdi mdi-brain me-1"></i>Guidance</p>
            <h4 class="fs-4 mb-3"><span class="counter-value" id="appointment_history_done_guidance" data-target="405">0</span></h4>
            <p class="text-muted mb-0">2024 Done Appoinments</p>
          </div>
          <div class="flex-shrink-0 align-self-center">
            <span class="badge badge-soft-success fs-12"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end row-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h2 class="card-title mb-0 flex-grow-1 fw-bold text-primary">APPOINTMENTS HISTORY</h2>
        <div>
          <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaffModal">Add Faculty/Staff</button> -->
        </div>
      </div>
      <div class="card-body">
        <table id="appointment-history-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Appointment Code</th>
              <th>Student Name</th>
              <th>Status</th>
              <th>Appointment Date</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!--end col-->
</div>