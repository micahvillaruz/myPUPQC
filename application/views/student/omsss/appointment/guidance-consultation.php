<div id="no_guidance_consultation" class="row d-none">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <div class="d-flex flex-row w-100 justify-content-between flex-wrap">
                    <h5 class="card-title mb-0 fw-bold text-primary d-flex align-items-center">GUIDANCE CONSULTATION: APPOINTMENT FORM</h5>
                    <div class="d-flex align-items-center">
                        <div class="alert mb-0 alert-info alert-label-icon rounded-label" role="alert">
                            <i class="ri-error-warning-line fw-bold label-icon"></i>
                            <i>This form is available only at <u>6:00 AM to 9:00 PM</u>.</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="NewGuidanceCaseForm" class="needs-validation" novalidate>
                    <ul>
                        <li>As of now, you can only able to request a <u><span class="fw-bold">face to face consultation</span></u>.</li>
                        <li>Only the dates shown are the available dates that you can set an appointment for guidance consultation.</li>
                        <li>Be <u><span class="fw-bold">specific</span></u> with your consultation request and state it in the reason input field so that the Attending Consultant assigned to you will get to know your case.</li>
                        <li>There will be no consultations during weekends and holidays.</li>
                        <li>Make sure that you are sure with the date of your consultation. The Appointment System will only move your cancelled consultation in the <a href="<?= base_url() ?>student/omsss/medical-logs"><b>Medical Logs</b></a> page when the cancelled appointment date lapses.</li>
                    </ul>
                    <hr class="p-1" />
                    <div class="row" id="appointment_form">
                        <div class="col-6">
                            <label for="consultationType" class="form-label"> Consultation Type</label><span class="text-danger"> *</span></label>
                            <div class="d-flex gap-5 mb-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="consultation_type" id="consultation_type" name="consultation_type" value="New Consultation">
                                    <label class="form-check-label" for="new_consultation">
                                        New Consultation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="consultation_type" id="consultation_type" name="consultation_type" value="Follow Up">
                                    <label class="form-check-label" for="followup_consultation">
                                        Follow-up
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="reasonInput" class="form-label"> Reason for Consultation <span class="text-danger">*</span></label>
                                <textarea autocomplete="off" type="text" class="form-control" oninput="setupInputRestriction(this)" id="consultation_reason" name="consultation_reason" style="resize:none" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputdate" class="form-label"> Appointment Date </label><span class="text-danger"> *</span></label>
                            <div class="d-flex justify-content-center">
                                <div id="guidance-calendar">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="checkDataPrivacy"></div>

                    <div class="d-grid text-center">
                        <button type="submit" class="btn btn-primary" id="addGuidanceAppointment">Submit Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>

<div id="existing_guidance_consultation" class="row d-none">
    <div id="cardForExistingAppointment" class="cold-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-center">
                    <h5 id="control_no" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-nowrap align-middle table-borderless mb-0">
                        <thead class="table-light">
                            <tr>
                                <th colspan="3" class="bg-soft-primary text-dark">Consultation Details:</th>
                            </tr>
                            <tr>
                                <th scope="col">Appointment Date</th>
                                <th scope="col">Personnel Assigned</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="medicalDetails">

                        </tbody>
                    </table>
                    <div class="mt-4 mx-3">
                        <span class="badge rounded-pill bg-primary fs-12">Consultation Reason</span>
                        <div class="bg-soft-secondary ms-1 text-wrap">
                            <p id="consultation_reason_value" class="p-2 fw-medium"></p>
                        </div>
                    </div>
                    <div class="mt-4 mx-3">
                        <span class="badge rounded-pill bg-primary fs-12">Remarks</span>
                        <div class="bg-soft-secondary ms-1 text-wrap">
                            <p id="view_remarks" class="p-2 fw-medium"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="consultation_status" class="card">
            <div id="request_status" class="card mb-0">
                <div class="card-body mx-3 mb-3">
                    <div class="col-12 d-flex justify-content-center align-items-center text-center flex-column">
                        <lord-icon src="https://cdn.lordicon.com/yrgzpquj.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
                        <h4 class="fw-bold">Existing Consultation is Found!</h4>

                        <div id="existingConsultationMessage">

                        </div>

                        <div id="cancelButton">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="scheduled_guidance_message" class="row d-none">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop" delay="1000" colors="primary:#911710,secondary:#e8e230" stroke="70" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">Appointment Scheduling is Not Available!</h4>
        <p class="fs-15">You can only schedule appointments at 6AM to 9PM. You can go back to these indicated time.<br />In the mean time, we encourage you to update your Patient Information, Health History, or Vaccination Cards on their respective pages.</p>
        <a href="<?= base_url() ?>student/omsss/medical-services/patient-info" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Patient Information</a>
        <a href="<?= base_url() ?>student/omsss/medical-services/health-history" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Health History</a>
    </div>
</div>