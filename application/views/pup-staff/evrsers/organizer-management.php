<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Select Student for Organizer Role</h5>
            </div>
            <div class="card-body justify-content-center text-center">
                <div class="row my-3 py-3">
                    <div class="col-lg h-100">
                        <select class="js-example-basic-single" name="student-no-organizer" id="student-no-organizer">
                            <option class="text-center" value="" selected disabled>- Select Student -</option>
                        </select>
                    </div>
                </div>
                <button id="add-student-organizer" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Add Organizer</button>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Student Organizers</h5>
            </div>
            <div class="card-body">
                <table id="students-no-organizer-table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                    <thead>
                        <tr>
                            <th>Student #</th>
                            <th>Full Name</th>
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