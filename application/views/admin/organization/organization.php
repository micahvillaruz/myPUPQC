<div>
    <div class="row mb-2">
        <div class="col-lg-12 w-100 mx-auto">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Student Organizations</h5>
                    <div>
                        <button class="btn btn-primary waves-effect waves-light btn-lg float-start mb-1 fs-5" data-bs-toggle="modal" data-bs-target="#addOrganizationModal" id="add-organization"><i class="bx bx-plus"></i> Add New Organization</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="organizations-datatable" class="table table-bordered table-responsive dt-responsive nowrap table-striped align-middle text-center" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Organization #</th>
                                <th>Organization Name</th>
                                <th>Abbreviation</th>
                                <th>Organization Description</th>
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
</div>

<!-- New Organization Modal -->
<div class="modal fade" id="addOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="new-org-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="new-org-label">
                    Add New Organization
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addNewOrganization" class="needs-validation form" method="POST">
                    <div class="mb-3">
                        <div>
                            <label for="organization_name">Organization Name</label>
                            <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Organization Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form">
                            <label for="organization_abbreviation">Org Name Abbreviation</label>
                            <input type="text" class="form-control" id="organization_abbreviation" name="organization_abbrevation" placeholder="Org Name Abbreviation" required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form">
                            <label for="organization_description">Organization Description</label>
                            <textarea type="text" class="form-control" id="organization_description" name="organization_description" placeholder="Organization Description" rows="4" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light" value="Submit" id="addOrganizationBtn">Add Organization</button>
                <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>