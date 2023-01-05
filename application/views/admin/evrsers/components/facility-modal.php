<!-- Add Facility Modal -->
<div class="modal fade" id="add-facility-modal" tabindex="-1" aria-labelledby="add-facility-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-facility-modal-label">Add Facility</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addNewFacility" class="needs-validation" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="facility-name" class="form-label">Facility Name</label>
                        <input type="text" class="form-control" id="facility-name" name="facility-name" placeholder="Facility Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="facility-description" class="form-label">Facility Description</label>
                        <input class="form-control" id="facility-description" name="facility-description" rows="3" placeholder="Facility Description" required>
                    </div>
                    <div class="mb-3">
                        <label for="facility-pic" class="form-label">Facility Image</label>
                        <input class="form-control" type="file" id="facility-pic" name="facility-pic" accept="image/*" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" value="Submit" id="addFacilityBtn">Add Facility</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Facility Modal -->
<div class="modal fade" id="editFacilityModal" tabindex="-1" aria-labelledby="edit-facility-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header mb-0">
                <h5 class="modal-title" id="edit-facility-modal-label">Edit Facility</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body vstack">
                <div class="mb-0 float-end" id="deact">
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light float-end" id="deactFacilityBtn"><i class="ri-close-circle-line me-2"></i>Deactivate Facility</button>
                </div>
                <form id="addNewFacility" class="needs-validation" method="PUT" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="facility-name-edit" class="form-label">Facility Name</label>
                        <input type="text" class="form-control" id="facility-name-edit" name="facility-name-edit" placeholder="Facility Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="facility-description-edit" class="form-label">Facility Description</label>
                        <input class="form-control" id="facility-description-edit" name="facility-description-edit" rows="3" placeholder="Facility Description" required>
                    </div>
                    <div class="mb-3">
                        <label for="facility-status-edit" class="form-label">Facility Status</label>
                        <select class="form-control" type="file" id="facility-status-edit" name="facility-status-edit" accept="image/*" required>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" value="Submit" id="editFacilityBtn">Edit Facility</button>
            </div>
        </div>
    </div>
</div>