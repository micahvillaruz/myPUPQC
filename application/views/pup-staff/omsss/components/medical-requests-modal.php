<!-- Modal for PhilHealth ID -->
<div id="viewMedicalModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewMedicalModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="medical_information_title"> Patient Profile</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body w-100">
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0">Personal Information</h4>
                    </div>
                    <div class="card-body">
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
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0">Health Information</h4>
                    </div>
                    <div class="card-body">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Medical History</td>
                                    <td id="view_medical_history"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Social History</td>
                                    <td id="view_social_history"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Allergies</td>
                                    <td id="view_allergies"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Medications</td>
                                    <td id="view_medications"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Case Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <h5 id="control_no" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
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
            </div>
        </div>
    </div>
</div>

<!-- Medical Request Status modal -->
<div id="updateAppointmentStatusModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-content">
                <form id="updateAppointmentStatusForm" class="needs-validation" novalidate>
                    <input type="hidden" id="edit_health_appointment_id" name="edit_health_appointment_id">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0">Appoinment Status</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class='form-label'>Status</label>
                        <span class="text-danger">*</span>
                        <select class="form-select mb-3" id="consultation_status" name="consultation_status" aria-label="Change Status" required>
                            <option selected></option>
                            <option value="Approved">Approved</option>
                            <option value="Cancelled by Staff">Cancelled by Staff</option>
                        </select>
                        <label class='form-label'>Remarks</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks" required><br>
                        <div class="text-center d-grid">
                            <button type="submit" class="btn btn-primary" aria-label="Confirm">Confirm</button>
                        </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>