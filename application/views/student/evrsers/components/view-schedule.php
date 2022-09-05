<!-- First modal dialog -->
<div id="viewSchedule" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-5">
        <div class="text-end">
          <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="mt-2">
          <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
          <h4 class="mb-3 mt-4">Requested Credentials are Scheduled for Pick-Up!</h4>
          <p class="text-muted fs-16 mb-4">
            <i class="mdi mdi-calendar-month"></i> March 12, 2020 <br> <i class="mdi mdi-clock-time-nine-outline"></i> 9:00 AM to 3:00 PM.
          </p>
          <div class="mb-4 alert alert-info alert-border-left alert-dismissible fade show text-start" role="alert">
            Good Day! Please be informed that your requested credential/s is/are SCHEDULED for pick-up on <strong>March 12, 2020</strong>. PLEASE CLAIM this/these credential/s at the releasing section on your scheduled date only, from <strong>9:00 AM to 3:00 PM</strong>. If you are unable to come on your scheduled date, you will be re-scheduled at a later date. Please bring your own ballpen. Thank you.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="hstack mt-2 gap-2 justify-content-center">
            <button class="btn btn-primary waves-effect waves-light" data-bs-target="#reSchedule" data-bs-toggle="modal" data-bs-dismiss="modal">
              Re-schedule
            </button>
            <button type="button" class="btn btn-ghost-primary waves-effect waves-light" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- Second modal dialog -->
<div class="modal fade" id="reSchedule" aria-hidden="true" aria-labelledby="..." tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-5">
        <div class="avatar-lg mx-auto">
          <div class="avatar-title bg-light text-primary display-4 rounded-circle">
            <i class="bx bxs-school"></i>
          </div>
        </div>
        <div class="mt-4 pt-3">
          <h4 class="mb-3">Re-schedule Claiming of Credentials</h4>
          <p class="text-muted mb-4">Enter your preferred date and time for claiming of your requested credentials. An email will be sent to verify your schedule. If not approved, the nearest available date and time for pick-up will be provided.</p>
          <div class="mt-3 mb-5 text-start">
            <label for="input-email" class="form-label fs-13">Date and Time</label>
            <input type="text" class="form-control" data-provider="flatpickr" data-date-format="F j, Y" data-enable-time />
          </div>
          <div class="hstack gap-2 justify-content-center">
            <button type="button" class="btn btn-success waves-effect waves-light">Submit</button>
            <button class="btn btn-info waves-effect waves-light" data-bs-target="#viewSchedule" data-bs-toggle="modal" data-bs-dismiss="modal">Back
            </button>
            <button type="button" class="btn btn-danger waves-effect waves-light" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>