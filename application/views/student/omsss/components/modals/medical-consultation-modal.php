<!-- Add Student modal -->
<div id="addStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Chief Complaint Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form id="chiefComplainttForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ReasonInput" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Enter name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nameInput" name="first_name last_name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
          <div>
            <label for="exampleInputdate" class="form-label">Start date of Symptoms</label>
            <input type="date" class="form-control" id="exampleInputdate">
          </div>
          <div class="mb-3">
          <div>
            <label for="exampleInputdate" class="form-label"> Schedule date for Consultation </label>
            <input type="date" class="form-control" id="exampleInputdate">
          </div>
          <br></br>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>