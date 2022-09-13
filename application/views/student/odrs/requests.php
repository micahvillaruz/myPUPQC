<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header align-items-xl-center d-xl-flex">
        <h5 class="card-title mb-0">Requests</h5>
      </div>
      <div class="card-body">
        <table id="model-datatables" class="display dt-responsive table align-middle" style="width: 100%">
          <thead class="bg-light">
            <tr>
              <th>Control Number</th>
              <th>Date Filed</th>
              <th>Payment Status</th>
              <th>Details</th>
              <th>Request Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="text-primary fw-medium">20220903-0088</span>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <i class="ri-calendar-todo-fill text-primary"></i>
                  <span class="ms-2">28 Aug, 2022<small class="text-muted ms-1">08:00 AM</small></span>
                </div>
              </td>
              <td>
                <div class="d-block badge badge-soft-warning align-items-center">
                  <i class="me-2 mdi mdi-cash-fast fs-13"></i>
                  <span class="text-uppercase">Pending</span>
                </div>
              </td>
              <td>
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Clearance: </span>
                      </td>
                      <td>Undergraduate Student</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Course: </span>
                      </td>
                      <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Purpose: </span>
                      </td>
                      <td>Transfer to another school</td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <div class="mt-2 d-grid badge badge-soft-danger position-relative">
                  <i class="m-2  mdi mdi-nfc-search-variant fs-13"></i>
                  <span class="pb-2 text-uppercase">For Clearance</span>
                  <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
                </div>
              </td>
              <td>
                <div class="vstack gap-2">
                  <button type="button" class="btn btn-sm btn-info text-start waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
                  <a type="button" class="btn btn-sm btn-success text-start waves-effect waves-light" href="<?= base_url() ?>Public/file/Request-Form.pdf" download="Request-Form"><i class="mdi mdi-download label-icon align-middle me-2"></i> Download Request Form</a>
                </div>
                <div class="mt-4 d-grid">
                  <button type="button" class="btn btn-sm btn-light waves-effect waves-light" onclick="cancelRequest()"><i class="ri-close-fill label-icon align-middle me-2"></i> Cancel</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--end row-->