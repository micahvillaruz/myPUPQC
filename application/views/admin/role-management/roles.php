<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Add New Roles for User & Access Control</h5>
            </div>
            <div class="card-body justify-content-center text-center">
                <div class="row my-3 py-3">
                    <div class="col-lg h-100">
                    <label class='form-label'>Role Name</label>
                    <input type="text" class="form-control" id="rolename" name="role name" placeholder="role name">
                    <br></br>
                    <label class='form-label'>Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    </div>
                </div>
                <button id="add-student-organizer" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Submit</button>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end col-->
</div>