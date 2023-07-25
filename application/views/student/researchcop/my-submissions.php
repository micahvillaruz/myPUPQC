<section class="mysubmissions">
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header alert alert-success border-0 rounded-top rounded-0 d-flex align-items-center" role="alert">
                <i class="ri-upload-line text-success me-2 fs-20"></i>
                <span class="fw-bold fs-15 m-1">My Research Submissions</span>
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