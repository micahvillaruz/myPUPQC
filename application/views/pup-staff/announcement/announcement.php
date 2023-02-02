<div class="row mb-2">
    <div class="col-lg-12">
        <div class="d-flex align-items-center flex-wrap gap-2 mb-3">
            <div class="flex-grow-1">
                <button type="button" class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample"><i class="ri-add-line align-bottom me-1"></i> Add Announcement</button>
            </div>
        </div>
        <div class="collapse mb-3" id="collapseExample">
            <div class="card mb-0">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Add New Announcement</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form id="NewAnnouncement" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <label for="announcement_title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="announcement_title" name="announcement_title" placeholder="Enter the title of the announcement" required>
                        </div>
                        <div class="col-md-12">
                            <label for="announcement_description" class="form-label">Description <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="announcement_description" name="announcement_description" placeholder="Enter the short description/headline for this announcement" required>
                        </div>
                        <div class="col-md-12">
                            <label for="announcement_content" class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea id="announcement_content" name="announcement_content" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="mt-2 d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-success w-lg waves-effect waves-light">Submit</button>
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
                    <h5 class="card-title mb-0 flex-grow-1">List of Announcements</h5>
                </div>
            </div>
            <div class="card-body pt-0">
                <div>
                    <ul class="nav nav-pills nav-primary nav-custom-warning arrow-navtabs nav-justified mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all_announcements" role="tab">
                                All Announcement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#my_announcements" role="tab">
                                My Announcement
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="all_announcements" role="tabpanel">
                            <table id="all_announcements_table" class="table nowrap align-middle" style="width:100%">
                                <thead class="text-muted table-light">
                                    <tr class="text-uppercase">
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created By</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="my_announcements" role="tabpanel">
                            <table id="my_announcements_table" class="table nowrap align-middle" style="width:100%">
                                <thead class="text-muted table-light">
                                    <tr class="text-uppercase">
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
</div>