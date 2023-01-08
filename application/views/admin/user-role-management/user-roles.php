<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Select Roles for Users</h5>
            </div>
            <div class="card-body justify-content-center text-center">
                <div class="row my-3 py-3">
                    <div class="col-lg h-100">
                        <select class="js-example-basic-single" name="select-users" id="select-users">
                            <option class="text-center" value="" selected disabled>- Select Users without Roles -</option>
                        </select>
                    <br></br>
                    <select class="js-example-basic-multiple" name="select-role" id="select-role">
                            <option class="text-center" value="" selected disabled>- Select Role -</option>
                        </select>
                    </div>
                </div>
                <button id="add-student-organizer" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Add Roles</button>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Role Management</h5>
            </div>
            <div class="card-body">
                <table id="users-with-roles" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>User Type</th>
                            <th>User Role</th>
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