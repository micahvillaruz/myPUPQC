<!-- Edit Facility Modal -->

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
                <button type="submit" class="btn btn-primary" value="Submit" id="addFacilityBtn">Add Facility</button>
            </div>
        </div>
    </div>
</div>