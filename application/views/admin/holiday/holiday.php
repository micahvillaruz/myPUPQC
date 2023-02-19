<div class="row">
    <div class="card">
        <div class="card-header d-flex">
            <h5 class="card-title mb-0 flex-grow-1">Add New Holiday for Calendar Control</h5>
        </div>
        <div class="alert alert-info alert-label-icon justify-content-start label-arrow fade show" role="alert">
            <i class="ri-error-warning-line label-icon"></i>
            <strong>Holiday Management Reminders: </strong>
            <br />
            <strong>1. </strong>Adding New Holidays here will be used for Calendar Control in the system.
            <br />
            <strong>2. </strong>When a Holiday is Recurring, it will be automatically added to the Calendar Control for the next year. This is recommended for holidays that are always on the same date every year.
            <br />
            <strong>3. </strong>If a Holiday is not Recurring, the status of the holiday will be set to Deleted once the dates have passed. This is recommended for one-time holidays or holidays that changes their date every year.
        </div>
        <div class="card-body justify-content-center text-center">

            <form id="addHolidayForm" class="needs-validation" novalidate>
                <div class="row my-2 py-2">
                    <div class="col-sm">
                        <label for="holiday_name" class='form-label'>Holiday Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="holiday_name" name="holiday_name" placeholder="Role Name" required>
                    </div>
                    <div class="col-sm">
                        <label for="holiday_date" class="form-label">Holiday Date <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="holiday_date" name="holiday_date" data-provider="flatpickr" data-date-format="F j, Y" placeholder="Pick a Birth Date" required>
                    </div>
                </div>
                <div class="row my-2 py-2">
                    <div class="col-sm">
                        <label for="holiday_type" class='form-label'>Holiday Type <span class="text-danger">*</span></label>
                        <select class="form-select" id="holiday_type" name="holiday_type">
                            <option selected="">Choose Holiday Type...</option>
                            <option value="Regular Holiday">Regular Holiday</option>
                            <option value="Special Non-Working Day">Special Non-Working Holiday</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="holiday_recurrence" class='form-label'>Is this Holiday Recurring? <span class="text-danger">*</span></label>
                        <select class="form-select" id="holiday_recurrence" name="holiday_recurrence">
                            <option selected="">Recurring?</option>
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2 py-2">
                    <div class="col-sm">
                        <label for="holiday_description" class='form-label'>Holiday Description <span class="text-danger">*</span></label>
                        <textarea rows="3" type="text" class="form-control" id="holiday_description" name="holiday_description" required>
                                </textarea>
                    </div>
                </div>
                <button id="add_holiday" class="btn btn-primary waves-effect waves-light mt-2 mb-3">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">Holiday Management</h5>
        </div>
        <div class="card-body">
            <table id="holiday-table" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                <thead>
                    <tr>
                        <th>Holiday Name</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Dates</th>
                        <th>Recurrence</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--end col-->
</div>