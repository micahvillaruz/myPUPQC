<!-- Edit Organization Modal -->
<div class="modal fade" id="editOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="edit-org-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="edit-org-label">
                    Edit Organization
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editOrganization" class="needs-validation form" method="PUT">
                    <div class="mb-3">
                        <div>
                            <label for="organization_name_edit">Organization Name</label>
                            <input type="text" class="form-control" id="organization_name_edit" name="organization_name_edit" placeholder="Organization Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form">
                            <label for="organization_abbreviation_edit">Org Name Abbreviation</label>
                            <input type="text" class="form-control" id="organization_abbreviation_edit" name="organization_abbrevation_edit" placeholder="Org Name Abbreviation" required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form">
                            <label for="organization_description_edit">Organization Description</label>
                            <textarea type="text" class="form-control" id="organization_description_edit" name="organization_description_edit" placeholder="Organization Description" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form">
                            <label for="organization_status_edit">Organization Status</label>
                            <select class="form-select" id="organization_status_edit" name="organization_status_edit" required></select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light" value="Submit" id="editOrganizationBtn">Edit Organization</button>
                <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- View Reservation modal -->
<div class="modal fade" id="viewOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="org-details-label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="org-details-label">
          Organization Info
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div data-simplebar class="mx-n3 px-2">
            <ul class="list list-group list-group-flush mb-0">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="col-4">
                    <h5 class="fs-13 mb-1 text-dark">Name</h5>
                  </div>
                  <div class="col-8">
                    <div class="d-flex fs-13 fw-medium" id="organization_name"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="col-4">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Abbreviation</a></h5>
                  </div>
                  <div class="col-8">
                    <div class="d-flex fs-13 fw-medium" id="organization_abbreviation"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="col-4">
                    <h5 class="fs-13 mb-1 text-dark">Details</h5>
                  </div>
                  <div class="col-8">
                    <div class="d-flex fs-13 fw-medium" id="organization_description"></div>
                  </div>
                </div>
              </li>
              <!-- end list item -->
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="col-4">
                    <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Status</a></h5>
                  </div>
                  <div class="col-8" id="organization_status"></div>
                </div>
              </li>
              <!-- end list item -->
            </ul>
            <!-- end ul list -->
          </div>
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

<!-- New Organization Modal -->
<div class="modal fade" id="addOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="new-org-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="new-org-label">
                    Add New Organization
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addNewOrganization" class="needs-validation form" method="POST">
                    <div class="mb-3">
                        <div>
                            <label for="organization_name">Organization Name</label>
                            <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Organization Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form">
                            <label for="organization_abbreviation">Org Name Abbreviation</label>
                            <input type="text" class="form-control" id="organization_abbreviation" name="organization_abbrevation" placeholder="Org Name Abbreviation" required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form">
                            <label for="organization_description">Organization Description</label>
                            <textarea type="text" class="form-control" id="organization_description" name="organization_description" placeholder="Organization Description" rows="4" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light" value="Submit" id="addOrganizationBtn">Add Organization</button>
                <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete Organization modal -->
<div class="modal fade zoomIn" id="deleteOrganizationModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">Sure to delete this organization ?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Doing this will remove the organization information from the organization information board.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-warning" id="delete-org">Yes, Delete It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>