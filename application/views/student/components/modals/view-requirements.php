<!-- Upload Requirements Modal -->
<div id="addRequirements" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header pb-3 border-bottom">
        <h5 class="modal-title text-primary" id="myModalLabel">Upload Requirements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info alert-dismissible alert-additional fade show" role="alert">
          <div class="alert-body">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i class="ri-user-smile-line fs-16 align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <h5 class="alert-heading">Notice!</h5>
                <p class="mb-0">Submit the requirements needed for the request of this doocument. </p>
              </div>
            </div>
          </div>
          <div class="alert-content">
            <p class="mb-0">Upload scanned copy of the requirement/s OR submit hard copy to the Student Records Section - Receiving Window after payment.</p>
          </div>
        </div>
        <table id="requirements-datatables" class="display table pt-3" style="width: 100%">
          <thead class="table-light">
            <tr>
              <th>Requirement</th>
              <th>Uploaded File</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <i class="ri-gallery-fill me-1 text-success"></i>
                2 x 2 ID Picture
              </td>
              <td>
                <div>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <i class="ri-file-paper-2-fill me-1 text-info"></i>
                Request Leter
              </td>
              <td>
                <div>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <i class="mdi mdi-card-account-details me-1 text-danger"></i>
                Student ID
              </td>
              <td>
                <div>
                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-target="#viewRequirements" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- View Requirements Modal -->
<div id="viewRequirements" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header pb-3 border-bottom">
        <h5 class="modal-title text-primary" id="myModalLabel">View Requirements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body pt-0">
        <table class="display table" style="width: 100%">
          <thead class="table-light">
            <tr>
              <th>Requirement</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2 x 2 ID Picture</td>
              <td>
                <div class="d-block badge badge-soft-secondary align-items-center">
                  <i class="me-2 mdi mdi-file-document-edit-outline fs-13"></i>
                  <span class="text-uppercase">For Evaluation</span>
                </div>
              </td>
              <td class="d-grid">
                <button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light">View</button>
              </td>
            </tr>
            <tr>
              <td>Request Leter</td>
              <td>
                <div class="d-block badge badge-soft-danger align-items-center">
                  <i class="me-2 ri-close-circle-line fs-13"></i>
                  <span class="text-uppercase">For Revision</span>
                </div>
              </td>
              <td class="d-grid">
                <button type="button" class="btn btn-sm btn-dark bg-gradient waves-effect waves-light">Edit</button>
              </td>
            </tr>
            <tr>
              <td>Student ID</td>
              <td>
                <div class="d-block badge badge-soft-success align-items-center">
                  <i class="me-2 ri-checkbox-circle-line fs-13"></i>
                  <span class="text-uppercase">Validated</span>
                </div>
              </td>
              <td class="d-grid">
                <button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light">View</button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Danger Alert -->
        <div class="alert alert-danger alert-dismissible alert-additional fade show" role="alert">
          <div class="alert-body">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <i class="ri-error-warning-line fs-16 align-middle"></i>
              </div>
              <div class="flex-grow-1">
                <h5 class="alert-heading">Warning!</h5>
                <p class="mb-0">Only requests with complete and validated requirements shall be processed. </p>
              </div>
            </div>
          </div>
          <div class="alert-content">
            <p class="mb-0">Please contact the Student Records Section if your request wasn't received after 3 days from submission of requirements.</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"> Close </button>
      </div>
    </div>
  </div>
</div>