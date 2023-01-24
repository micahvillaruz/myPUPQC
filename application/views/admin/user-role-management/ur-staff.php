<div class="row">
    <div class="card">
        <div class="card-header d-flex">
            <h5 class="card-title mb-0 flex-grow-1">Select Roles for PUP Staff</h5>
        </div>
        <div class="card-body justify-content-center text-center">
            <form id="selectRoleToUsersForm" class="needs-validation" novalidate>
            <div class="row my-3 py-3">
                <div class="col-lg h-100">
                <select class="js-example-basic-single" name="select_users" id="select_users" placeholder="Select Roles">
                    <option class="text-center" value="" selected disabled>- Select PUP Staff without Roles -</option>
                </select>
                <br></br>
                <span>Select Multiple Roles:</span>
                <select class="js-example-basic-multiple " multiple="multiple" name="select_roles" id="select_roles">
                </select>
                </div>
            </div>
            <button id="add_roles" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Add Roles</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">Role Management for PUP Staff</h5>
        </div>
        <div class="card-body">
            <table id="users-with-roles" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                <thead>
                    <tr>
                        <th>User Number</th>
                        <th>Full Name</th>
                        <th>User Role</th>
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