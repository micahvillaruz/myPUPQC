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
                    "Form here..."    
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
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    <!--end col-->
</div>