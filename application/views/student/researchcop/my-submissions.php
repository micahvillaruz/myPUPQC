<section class="mysubmissions">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between" role="alert">
                    <h2 class="card-title mb-0 flex-grow-1 fw-bold text-primary">My Research Submissions</h2>
                    <div class="p-1">
                        <a role="button" href="<?= base_url() ?>student/researchcop/add-research" class="btn btn-primary btn-label waves-effect waves-light">
                            <i class=" ri-add-line label-icon align-middle fs-16 me-2" style="color: #fff;"></i>
                            Add Research
                        </a>
                        <a role="button" class="btn btn-info btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#statusInfo">
                            <i class="ri-question-line label-icon align-middle fs-16 me-2"></i>
                            About Remarks
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="my-submissions-research-datatable" class="table table-bordered dt-responsive nowrap table-striped align-middle text-center w-100">
                        <thead>
                            <tr>
                                <th class="t-align">Title</th>
                                <th class="t-align">Information</th>
                                <th class="t-align">Status</th>
                                <th class="t-align">Document</th>
                                <th class="t-align">Category</th>
                                <th class="t-align">Remarks</th>
                                <th class="t-align">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!--end col-->
            </div>
        </div>
</section>