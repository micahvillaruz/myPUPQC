<!-- Dental Request Status modal -->
<div id="updateRoleStatusModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-content">
      <form id="updateRoleStatusForm" class="needs-validation" novalidate>
      <input type="hidden" id="edit_role_management" name="edit_role_management">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Role Status</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <label class='form-label'>Role Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Namee" required><br>
          <label class='form-label'>Description<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="description" name="description" placeholder="description" required><br>
          <label class='form-label'>Status<span class="text-danger">*</span></label>
          <span class="text-danger">*</span>
        <select class="form-select mb-3" id="role_status" name="role_status" aria-label="Change Status" required>
          <option selected></option>
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
        <div class="text-center d-grid">
            <button type="submit" class="btn btn-primary" aria-label="Confirm">Confirm</button>
        </div>    
      </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>