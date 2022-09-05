<div id="addDentalModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Chief Complaint Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="staffNo" class="form-label">Reason for consultation</label>
            <input type="text" class="form-control" id="reason" placeholder="Enter reason" />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
          <label for="exampleInputdate" class="form-label">Start date of Symptoms</label>
            <div class="input-group">
              <input type="date" class="form-control" id="exampleInputdate">
            </div>
          </div>
          <div class="mb-3">
          <label for="exampleInputdate" class="form-label">Schedule date for Consultation</label>
            <div class="input-group">
              <input type="date" class="form-control" id="exampleInputdate">
            </div>
          </div>
          <label for="exampleInputdate" class="form-label">Time: </label>
          <div class="mx-5">
                    <div class="row align-item-start">
                      <div class="col-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">7:00 AM - 9:00 AM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">11:00 AM - 1:00 PM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">3:00 PM - 5:00 PM</label>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">9:00 AM - 11:00 PM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">1:00 PM - 3:00 PM</label>
                        </div>
                      </div>
                          <!-- <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                          </div> -->
                 </form>
               </div>
             </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


<!-- View Guidance modal -->
<div class="modal fade" id="viewGuidanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Therapy Information
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div data-simplebar class="mx-n3">
          <ul class="list list-group list-group-flush mb-0">
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Reason for Consultation</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">Anxiety</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Start date of Symptoms</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">09-11-2022</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Scheduled Date</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">09-22-2022</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Time</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">9:00 AM - 11:00 AM</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Time</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">1:00 - 2:00PM</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Date</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium">
                    <span>09-01-2022</span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
          </ul>
          <!-- end ul list -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
