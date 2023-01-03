<!-- View Student Information Modal -->
<div class="modal fade zoomIn" id="viewStudentInfoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="viewStudentInfoModalTitle">Student Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="" alt="" class="rounded-circle avatar-lg img-thumbnail" id="student-profile-pic">
                            <h5 class="mt-2" id="student-name"></h5>
                            
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
                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                <div class="mt-4 text-center">
                    <h4 class="fs-semibold">Sure to cancel this pending reservation ?</h4>
                    <p class="text-muted fs-14 mb-4 pt-1">Cancelling this will remove the event information from our the reservation calendar.</p>
                    <div class="hstack gap-2 justify-content-center remove">
                        <button class="btn btn-link link-danger fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                        <button class="btn btn-warning" id="cancel-reservation">Yes, Cancel It!!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>