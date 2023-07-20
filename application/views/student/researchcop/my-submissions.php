<section class="mysubmissions">
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
            <h4 class="card-title mb-0 flex-grow-1">Your Submitted Researches</h4>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <a href="<?= base_url() ?>student/researchcop/add-research">
                    <button type="button" class="btn btn-primary btn-label waves-effect waves-light">
                    <i class=" ri-add-line label-icon align-middle fs-16 me-2" style="color: #fff;"></i>
                    Add Research
                    </button>
                    </a>
                    <button type="button" class="btn btn-light btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#statusInfo">
                        <i class="ri-question-line label-icon align-middle fs-16 me-2" style="color: #000;"></i>
                        Status
                    </button>
                </div>
                <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#c_research" role="tab">
                            Research
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#c_capstone" role="tab">
                            Capstone
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="c_research" role="tabpanel">
                        <table id="my-submissions-research-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                            <thead>
                                <tr>
                                    <th class="t-align">Title</th>
                                    <th class="t-align">Information</th>
                                    <th class="t-align">Status</th>
                                    <th class="t-align">Document</th>
                                    <th class="t-align">Remarks</th>
                                    <th class="t-align">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="c_capstone" role="tabpanel">
                        <table id="my-submissions-capstone-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                            <thead>
                                <tr>
                                    <th class="t-align">Title</th>
                                    <th class="t-align">Information</th>
                                    <th class="t-align">Status</th>
                                    <th class="t-align">Document</th>
                                    <th class="t-align">Remarks</th>
                                    <th class="t-align">Actions</th>
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
    </div>
</section>