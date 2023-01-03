<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Select Student for Organizer Role</h5>
            </div>
            <div class="card-body justify-content-center text-center">
                <div class="mt-4 mb-3 py-3">
                    <select class="js-example-basic-single" name="student-no-organizer" id="student-no-organizer" style="width: 65%; height:100%;">
                        <option class="text-center" value="" selected disabled>- Select Student -</option>
                    </select>
                </div>
                <button id="add-student-organizer" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Add Organizer</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
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
                            <th>Email</th>
                            <th>Contact No.</th>
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