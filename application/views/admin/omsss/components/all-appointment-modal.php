<div id="viewOverallModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewOverallModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="overall_information_title"> Patient Profile</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body w-100">
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Case Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <h5 id="control_no" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Type</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_type" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Date</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_date" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Reason</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_reason" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0">Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <h5>About the Student</h5>
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Name</td>
                                    <td id="view_full_name"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Student Number</td>
                                    <td id="view_student_number"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Address</td>
                                    <td id="view_address"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Age</td>
                                    <td id="view_age"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Gender</td>
                                    <td id="view_gender"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Civil Status</td>
                                    <td id="view_civil_status"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Email Address</td>
                                    <td id="view_email_address"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Contact Number</td>
                                    <td id="view_contact_number"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>