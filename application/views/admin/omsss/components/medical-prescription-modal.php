<!-- Add Medical Prescription modal -->
<div id="addMedicalPrescriptionModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Medical Prescription/h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form id="chiefMedicalPrescriptionForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="reasonInput" class="form-label"> Reason for consultation <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ReasonInput" placeholder="Enter your reason" required>
          </div>
          <div class="mb-3">
            <label for="nameInput" class="form-label"> Enter Doctor <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nameInput" name="first_name last_name" placeholder="Enter name of doctor" required>
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
              <label for="exampleInputdate" class="form-label"> Time </label>
              <div class="mx-5">
                <div class="row align-item-start">
                  <!-- 1st Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">7:00 AM - 9:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">11:00 - 1:00 PM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">3:00 PM - 5:00 PM</label>
                    </div>
                  </div>
                  <!-- 2nd Column -->
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">9:00 AM - 11:00 AM</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">1:00 PM - 3:00 PM</label>
                    </div>
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