<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h5 class="card-title mb-0 flex-grow-1 fw-bold text-primary">Dental Case: Monday to Friday @ 08:00 AM - 05:00 PM</h5>
        <div>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDentalModal">New Dental Case</button>
        </div>
      </div>
      <div class="card-body">
      <p>You can only make a <u><span class="fw-bold">face to face consultation</span></u> during the schedule shown above.</p>
        <table id="dental-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
          <thead>
            <tr>
              <th>Appointment Code</th>
              <th>Consultation Type</th>
              <th>Status</th>
              <th>Attending Consultant</th>
              <th>Appointment Date</th>
              <th>Action</th>
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

<div id="decline_create_request" class="row my-5 py-5 d-none">
  <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
    <lord-icon src="https://cdn.lordicon.com/yrgzpquj.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
    <h4 class="fw-bold">Existing Request is Found!</h4>

    <p class="fs-15">If you want to create a New Request and the status of your request is currently <b>Pending For Dental Appointment</b> and <b>For Dental Appointment</b>, you must cancel your Existing Request first. <br> You can cancel the request by going to the <span class="fw-medium">Dental Consultation</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Dental Appoinment</button> button. Otherwise, wait for your appointment to be Done or Cancelled before creating a New Request.</p>
    <span class="fs-12 mb-3 badge text-dark bg-warning">You can only cancel your existing request if the status of your request is <b>Pending For Dental Appoinment</b> and <b>For Dental Appoinment</b> only.</span>

    <a href="http://localhost/myPUPQC/student/omsss/dentist-services" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Dental Consultation Page</a>
  </div>
</div>