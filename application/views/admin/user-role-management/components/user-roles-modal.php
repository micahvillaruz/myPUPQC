<!-- User Role Modal -->
<div class="modal fade zoomIn" id="editUserRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="user_role_title"></h5>
            </div>
            <div class="modal-body">
                <div data-simplebar class="mx-n3">
                <!-- Start: Current Roles -->
                    <ul class="list list-group list-group-flush mb-0">
                        <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="col-4">
                                <h5 class="fs-13 mb-1 fw-medium" id="view_user_roles"></h5>
                            </div>
                            <br/>
                            <div class="col-8">
                            <div class="d-flex fs-13 fw-medium" id="user_current_roles"></div>
                            </div>
                        </div>
                        </li>
                    </ul>
                <!-- End: Current Roles -->
                </div>
                <form id="editRolesForm" class="needs-validation" novalidate>
                    <input type="hidden" id="user_id" name="user_id"></input>
                    <div class="row py-3">
                        <div class="col-lg h-100">
                            <div class="my-2" id="assign_role_input">
                            </div>
                            <div class="my-2" id="remove_role_input">
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning alert-label-icon label-arrow fade show" role="alert">
                        <i class="ri-information-fill label-icon"></i>
                        By Pressing "Reassign Roles" button, you will be assigning the selected roles and removing all the roles indicated on the field."
                    </div>
                    <button class="btn btn-primary waves-effect waves-light" style="width: 100%">
                        Reassign Roles
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect waves-light" style="width: 100%" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>