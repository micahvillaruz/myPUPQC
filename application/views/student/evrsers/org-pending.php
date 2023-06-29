<div id="allow_create_reservation" class="row d-none">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status</h4>
            </div>
            <!-- end card header -->
            <div class="row">
   
    <!--end col-->
    <div class="card-body">
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#done" role="tab">
                            Pending
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_staff" role="tab">
                            Rejected
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#cancelled_student" role="tab">
                            Approved
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="done" role="tabpanel">
                        <table id="done_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Organization Registration #</th>
                                    <th>Organization Name</th>
                                    <th>Date Registered</th>
                                    <th>Student Head</th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_staff" role="tabpanel">
                        <table id="cancelled_by_staff_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Organization Registration #</th>
                                    <th>Organization Name</th>
                                    <th>Date Registered</th>
                                    <th>Student Head</th>
                                    <th>Edit Responce</th>
                                    
                                </tr>
                                
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="cancelled_student" role="tabpanel">
                        <table id="cancelled_by_student_history" class="table table-responsive table-bordered dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                            <thead>
                            <tr>
                                    <th>Organization Registration #</th>
                                    <th>Organization Name</th>
                                    <th>Date Registered</th>
                                    <th>Student Head</th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
</div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div id="decline_create_reservation" class="row d-none px-5">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/ckatldkn.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">Existing Reservation is Found!</h4>
        <p class="fs-15">If you want to create a New Reservation and the status of your request is currently <b class="text-secondary">Pending</b> you must cancel your Existing Reservation first. <br> You can cancel the request by going to the <span class="fw-bold">Reservations</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Reservation</button> button.<br> Otherwise, wait for your reservation to be Done or Cancelled before creating a New Request.</p>
        <span class="fs-13 mb-3 badge text-dark bg-warning">You can only cancel your existing reservation if the status of your reservation is <b>Pending For Approval</b> only.</span>
        <a href="<?= base_url() ?>student/evrsers/view-reservation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Reservation Page</a>
    </div>
</div>