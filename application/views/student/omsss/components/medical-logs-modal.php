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

<div id="viewEvaluationModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewEvaluationModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog  modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="evaluation_title">Evaluation</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body w-100">
                <h3 class="text-primary text-center">CLIENT SATISFACTION SURVEY</h3>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Case Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <h5 id="control_no_evaluation" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Type</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_type_evaluation" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Date</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_date_evaluation" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Consultation Reason</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_consultation_reason_evaluation" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Personnel Assigned</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_physician_evaluation" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="addEvaluationForm" class="needs-validation" novalidate>
                    <input type="hidden" id="add_health_appointment_id" />
                    <p class="fs-5 mt-4">How would you rate the service provided to you by the personnel or staff?</p>
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="align-middle fw-medium">Quality of Service</td>
                                <td>
                                    <select class="form-select mb-3" id="quality_rating" name="quality_rating" required>
                                        <option selected>Quality of Service Rating</option>
                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                        <option value="4">⭐⭐⭐⭐</option>
                                        <option value="3">⭐⭐⭐</option>
                                        <option value="2">⭐⭐</option>
                                        <option value="1">⭐</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle fw-medium">Timeliness of Service</td>
                                <td>
                                    <select class="form-select mb-3" id="timeliness_rating" name="timeliness_rating" required>
                                        <option selected>Timeliness of Service Rating</option>
                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                        <option value="4">⭐⭐⭐⭐</option>
                                        <option value="3">⭐⭐⭐</option>
                                        <option value="2">⭐⭐</option>
                                        <option value="1">⭐</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle fw-medium">Courtesy of Staff</td>
                                <td>
                                    <select class="form-select mb-3" id="courtesy_rating" name="courtesy_rating" required>
                                        <option selected>Courtesy of Staff Rating</option>
                                        <option value="5">⭐⭐⭐⭐⭐</option>
                                        <option value="4">⭐⭐⭐⭐</option>
                                        <option value="3">⭐⭐⭐</option>
                                        <option value="2">⭐⭐</option>
                                        <option value="1">⭐</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle fw-medium">Comments/Suggestions/Recommendations</td>
                                <td>
                                    <textarea type="text" class="form-control" id="evaluation_comment" name="evaluation_comment" style="resize:none" rows="5" required></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4 justify-content-center">
                        <button type="submit" class="w-100 btn btn-primary bg-gradient fw-medium waves-effect waves-light">Submit</button>
                        <button class="mt-2 btn btn-light fw-medium w-100 waves-effect waves-light" data-bs-dismiss="modal">Dismiss</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="aboutEvaluationModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="aboutEvaluationModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog  modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="evaluation_title">Evaluation Details</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body w-100">
                <h3 class="text-primary text-center">CLIENT EVALUATION DETAILS</h3>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Case Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <h5 id="control_no_details" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Personnel Assigned</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_physician_details" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Evaluation</h4>
                    </div>
                    <div class="card-body">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="align-middle fw-medium">Quality of Service</td>
                                    <td>
                                        <div id="quality_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Timeliness of Service</td>
                                    <td>
                                        <div id="timeliness_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Courtesy of Staff</td>
                                    <td>
                                        <div id="courtesy_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Comments/Suggestions/Recommendations</td>
                                    <td>
                                        <div id="evaluation_comments_details">

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