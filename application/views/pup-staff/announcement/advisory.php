<div class="row mb-2">
    <div class="col-lg-12">
        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
            <div class="flex-grow-1">
                <button type="button" class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample"><i class="ri-add-line align-bottom me-1"></i> Add Advisory</button>
            </div>
            <div class="flex-shrink-0">
                <div class="hstack text-nowrap gap-2">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addmembers"><i class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                    <button class="btn btn-soft-info shadow-none">Import</button>
                </div>
            </div>
        </div>
        <div class="collapse mb-3" id="collapseExample">
            <div class="card mb-0">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Add New Advisory</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form action="javascript:void(0);" class="row g-3">
                        <div class="col-md-12">
                            <label for="announcement_title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="announcement_title" placeholder="Enter the title of the advisory">
                        </div>
                        <div class="col-md-12">
                            <label for="announcement_description" class="form-label">Description <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="announcement_description" placeholder="Enter the short description/headline for this advisory">
                        </div>
                        <div class="col-md-12">
                            <label for="announcement_image" class="form-label">Attachment</label>
                            <input type="file" class="filepond filepond-input-multiple" id="announcement_image" multiple name="filepond" data-allow-reorder="true" data-max-files="1">
                        </div>
                        <div class="col-md-12">
                            <label for="announcement_content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea></textarea>
                        </div>
                        <div class="col-12">
                            <div class="mt-2 d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-success w-lg waves-effect waves-light">Submit</button>
                                <button type="button" class="btn btn-danger w-lg waves-effect waves-light" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">List of Advisories</h5>
                </div>
            </div>
            <div class="card-body pt-0">
                <div>
                    <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all_advisories" role="tab">
                                All Advisories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#my_advisory" role="tab">
                                My Advisory
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="all_advisories" role="tabpanel">
                            <table id="all_advisories_table" class="table nowrap align-middle" style="width:100%">
                                <thead class="text-muted table-light">
                                    <tr class="text-uppercase">
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>
                                        <th>Create Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="my_advisory" role="tabpanel">
                            <table id="my_advisories_table" class="table nowrap align-middle" style="width:100%">
                                <thead class="text-muted table-light">
                                    <tr class="text-uppercase">
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="30%" class="text-wrap text-center"><a href="#" class="fw-medium link-primary">Admission Services Advisory for Transferees (PUP QC)</a></td>
                                        <td width='50%' class="text-wrap">The Polytechnic University of the Philippines Main Campus will start accepting application to transfer from August 8 to 12, 2022.</td>
                                        <td>20 Dec, 2021, <small class="text-muted">02:21 AM</small></td>
                                        <td class="text-center">
                                            <div class="d-flex gap-1 justify-content-center">
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light">
                                                    <i class="ri-eye-fill"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light">
                                                    <i class="ri-edit-2-fill"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light">
                                                    <i class="ri-delete-bin-fill"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
</div>