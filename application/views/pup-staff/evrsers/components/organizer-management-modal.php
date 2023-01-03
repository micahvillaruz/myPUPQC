<!-- View Student Information Modal -->
<div class="modal fade zoomIn" id="viewStudentInfoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="viewStudentInfoModalTitle">View Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center mb-3">
                            <img src="../../public/images/users/user-dummy-img.jpg" alt="" class="rounded-circle avatar-xl img-thumbnail" id="student-profile-pic">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="alert alert-border-left alert-primary mb-4 me-3 ms-2">
                            <h5 id="student-num" class="fs-4 float-left badge bg-primary fw-bold mb-3"></h5>
                            <h1 class="text-dark fw-bold mb-2" id="student-name"></h1>
                            <div class="row">
                                <hr>
                                <h6 class="text-medium">STUDENT INFORMATION</h6>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">ADDRESS</h6>
                                    <p id="address" class="fw-medium"></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">AGE</h6>
                                    <p id="age" class="fw-medium"></p>
                                    <h6 class="text-medium">BIRTHDAY</h6>
                                    <p id="birthday" class="fw-medium"></p>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <h6 class="text-medium">CONTACT DETAILS</h6>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">CONTACT NO.</h6>
                                    <p id="contact-num" class="fw-medium"></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">EMAIL</h6>
                                    <p id="email" class="fw-medium"></p>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <h6 class="text-medium">ADDITIONAL INFORMATION</h6>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">GENDER</h6>
                                    <p id="gender" class="fw-medium"></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">CIVIL STATUS</h6>
                                    <p id="civil-status" class="fw-medium"></p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-medium">RELIGION</h6>
                                    <p id="religion" class="fw-medium"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Student Organizer modal -->
<div class="modal fade zoomIn" id="addStudentOrganizerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body p-5 text-center">
                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#161f2e,secondary:#3080e8" style="width:100px;height:100px"></lord-icon>
                <div class="mt-4 text-center">
                    <h4 class="fs-semibold">Add this Student as an Organizer?</h4>
                    <p class="text-muted fs-14 mb-4 pt-1">Adding them as organizer would enable them to see and access myPUPQC's Venue Management System Features.</p>
                    <div class="hstack gap-2 justify-content-center remove">
                        <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-2 align-middle"></i>Cancel</button>
                        <button class="btn btn-success" id="add-organizer">Yes, Add Student as Organizer.</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Remove Student as Organizer modal -->
<div class="modal fade zoomIn" id="removeStudentOrganizerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body p-5 text-center">
                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#161f2e,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                <div class="mt-4 text-center">
                    <h4 class="fs-semibold">Remove student as Organizer?</h4>
                    <p class="text-muted fs-14 mb-4 pt-1">Doing this will remove the student information from the organizer management page.</p>
                    <div class="hstack gap-2 justify-content-center remove">
                        <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                        <button class="btn btn-danger" id="remove-organizer">Remove Organizer Role</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>