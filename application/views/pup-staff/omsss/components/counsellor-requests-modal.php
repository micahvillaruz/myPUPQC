<div id="viewGuidanceModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewGuidanceModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="dental_information_title"> Patient Profile</h3>
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
                        <hr />
                        <h5>Emergency Contacts</h5>
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium">Guardian Name</td>
                                    <td id="view_guardian_name"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Contact Number</td>
                                    <td id="view_guardian_number"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Address</td>
                                    <td id="view_guardian_address"></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">Email Address</td>
                                    <td id="view_guardian_email"></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr />
                        <h5>Immunization</h5>
                        <table class="table mb-0">
                            <tr>
                                <td class="fw-medium">PhilHealth ID</td>
                                <td id="view_philhealth_id"></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Vaccination Card</td>
                                <td id="view_vaccination_card"></td>
                            </tr>
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
                                    <td class="fw-medium">Family History</td>
                                    <td id="view_family_history"></td>
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="approveAppointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="approveThisRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
                </lord-icon>

                <div class="mt-4">
                    <h4 class="mb-3 fw-semibold">Approve this Appointment?</h4>
                    <p class="text-muted mb-4">If yes, indicate what are the things that the students should do when they visit for the appointment in school.</p>
                    <form id="approveAppointmentForm" class="needs-validation" novalidate>
                        <input type="hidden" id="approve_appointment_id">
                        <input type="hidden" id="approve_consultation_status">
                        <div class="mt-4">
                            <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
                            <textarea class="form-control mt-2" autocomplete="off" oninput="setupInputRestriction(this)" id="approve_remarks" name="approve_remarks" rows="5" placeholder="As the Staff, be specific and concise with the remarks you'll provide to the student in preparation of the appointment." required></textarea>
                            <div class="invalid-feedback">
                                Please indicate your availability at the remarks above.
                            </div>
                        </div>
                        <div class="mt-4 justify-content-center">
                            <button type="submit" class="w-100 btn btn-success bg-gradient fw-medium waves-effect waves-light">Yes, Approve It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelAppointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="cancelThisRequest" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
                </lord-icon>

                <div class="mt-4">
                    <h4 class="mb-3 fw-semibold">Cancel this Appointment?</h4>
                    <p class="text-muted mb-4">If yes, indicate on the Remarks the reason why you are cancelling this appointment. If not, click the Dismiss button.</p>
                    <form id="cancelAppointmentForm" class="needs-validation" novalidate>
                        <input type="hidden" id="cancel_appointment_id">
                        <input type="hidden" id="cancel_consultation_status">
                        <div class="mt-4">
                            <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
                            <textarea class="form-control mt-2" autocomplete="off" oninput="setupInputRestriction(this)" id="cancel_remarks" name="cancel_remarks" rows="5" placeholder="Enter the reason why you are cancelling the appointment and the instructions, if any, that the student must comply before appointing for a consultation again." required></textarea>
                            <div class="invalid-feedback">
                                Please indicate your reason for cancelling.
                            </div>
                        </div>
                        <div class="mt-4 justify-content-center">
                            <button type="submit" class="w-100 btn btn-danger bg-gradient fw-medium waves-effect waves-light">Yes, Cancel It!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="doneAppointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="doneThisAppointment" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center px-4">
                <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" delay="1000" colors="primary:#c71f16,secondary:#ffbe00" style="width:180px;height:180px">
                </lord-icon>

                <div class="mt-4">
                    <h4 class="mb-3 fw-semibold">Done with this Appointment?</h4>
                    <p class="text-muted mb-4">If yes, indicate on the Remarks for closing this consultation. Provide any message to the student such as reminders. If not, click the Dismiss button.</p>
                    <form id="doneAppointmentForm" class="needs-validation" novalidate>
                        <input type="hidden" id="done_appointment_id">
                        <input type="hidden" id="done_consultation_status">
                        <div class="mt-4">
                            <label for="remarks" class="h5 form-label">Remarks <span class="text-danger">*</span></label>
                            <textarea class="form-control mt-2" autocomplete="off" oninput="setupInputRestriction(this)" id="done_remarks" name="done_remarks" rows="5" placeholder="Enter the remarks before finishing this consultation appointment." required></textarea>
                            <div class="invalid-feedback">
                                Please indicate the reason for closing the appointment.
                            </div>
                        </div>
                        <div class="mt-4 justify-content-center">
                            <button type="submit" class="w-100 btn btn-primary bg-gradient fw-medium waves-effect waves-light">Finish Up!</button>
                        </div>
                    </form>
                    <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>