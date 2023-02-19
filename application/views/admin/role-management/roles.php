<div class="row">
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Add New Roles for User & Access Control</h5>
            </div>
            <div class="card-body justify-content-center text-center">
                <div class="alert alert-danger alert-label-icon fs-4 label-arrow fade show" role="alert">
                    <i class="ri-error-warning-line label-icon"></i><strong>REMINDER: </strong>When adding a New Role in the System, please make sure that the Role Name is Unique and the Role Description is clear and concise.
                </div>
                <form id="addRoleForm" class="needs-validation" novalidate>
                    <div class="row my-3 py-3">
                        <div class="col-sm">
                            <label for="role_name" class='form-label'>Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Name" required>
                        </div>
                        <div class="col-sm">
                            <label for="role_description" class='form-label'>Description <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="role_description" name="role_description" placeholder="Role Description" required>
                        </div>
                        <div class="col-sm">
                            <label for="role_for" class='form-label'>Role For <span class="text-danger">*</span></label>
                            <select class="form-select" id="role_for" name="role_for">
                                <option selected="">Choose...</option>
                                <option value="Student">Student</option>
                                <option value="PUP Staff">PUP Staff</option>
                                <option value="Both">Both</option>
                            </select>
                        </div>
                    </div>
                <button id="add_role" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Submit</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">All Roles</h5>
            </div>
            <div class="card-body">
                <table id="users-with-roles" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Role Assigned For</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    <!--end col-->
</div>