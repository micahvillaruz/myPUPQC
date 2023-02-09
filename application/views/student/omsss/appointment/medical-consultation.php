<div class="row">
    <div class="col-lg-12">
        <div class="card" id="fullMedicalFormDetails">
            <div class="card-header d-flex align-items-center">
                <div class="d-flex flex-row w-100 justify-content-between flex-wrap">
                    <h5 class="card-title mb-0 fw-bold text-primary d-flex align-items-center">MEDICAL CONSULTATION: APPOINTMENT FORM</h5>
                    <div class="d-flex align-items-center">
                        <div class="alert mb-0 alert-info alert-label-icon rounded-label" role="alert">
                            <i class="ri-error-warning-line fw-bold label-icon"></i>
                            <i>This form is available only at <u>8:00 AM to 5:00 PM</u>.</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body m-3">
                <form id="NewMedicalCaseForm" class="needs-validation" novalidate>
                    <ul>
                        <li>As of now, you can only able to request a <u><span class="fw-bold">face to face consultation</span></u>.</li>
                        <li>Only the dates shown are the available dates that you can set an appointment for medical consultation.</li>
                        <li>Be <u><span class="fw-bold">specific</span></u> with your consultation request and state it in the reason input field so that the Attending Consultant assigned to you will get to know your case.</li>
                        <li>There will be no consultations during weekends and holidays.</li>
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
                                <textarea type="text" class="form-control" id="consultation_reason" name="consultation_reason" style="resize:none" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputdate" class="form-label"> Appointment Date </label><span class="text-danger"> *</span></label>
                            <div class="d-flex justify-content-center">
                                <div id="medical-calendar">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info alert-dismissible alert-label-icon rounded-label" role="alert">
                        <i class="ri-error-warning-line fw-bold label-icon"></i>
                        <strong>
                            <h4>Data Privacy Act of 2012</h4>
                        </strong>
                        I hereby authorize PUPQC to collect and process the data indicate herein for purpose of effecting control of the covid-19 infection.
                        I understand that any personal information is protected under Data Privacy Act of 2012, if needed, this may be used to facilitate contact tracing of PUPQC Medical Service and/or LGU and that I am required at RA 11469 Bayanihan to Heal as One Act, to provide truthful information.
                    </div>

                    <div class="d-grid text-center">
                        <button type="submit" class="btn btn-primary" id="addMedicalAppointment">Submit Appointment</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card" id="medicalAppointmentCard">
            magpapakita dito kapag may existing appointment
        </div>
    </div>
    <!--end col-->
</div>

<div id="decline_create_request" class="row my-5 py-5 d-none">
    <div class="py-5 col-12 d-flex justify-content-center align-items-center text-center flex-column gap-2">
        <lord-icon src="https://cdn.lordicon.com/yrgzpquj.json" trigger="loop" style="width:180px;height:180px"></lord-icon>
        <h4 class="fw-bold">Existing Request is Found!</h4>

        <p class="fs-15">If you want to create a New Request and the status of your request is currently <b>Pending For Medical Appointment</b> and <b>For Medical Appointment</b>, you must cancel your Existing Request first. <br> You can cancel the request by going to the <span class="fw-medium">Mendical Consultation</span> page and clicking the <button type="button" class="mx-2 mt-1 btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Medical Appoinment</button> button. Otherwise, wait for your appointment to be Done or Cancelled before creating a New Request.</p>
        <span class="fs-12 mb-3 badge text-dark bg-warning">You can only cancel your existing request if the status of your request is <b>Pending For Medical Appoinment</b> and <b>For Medical Appoinment</b> only.</span>

        <a href="http://localhost/myPUPQC/student/omsss/medical-services/medical-consultation" role="button" class="btn btn-primary bg-gradient waves-effect waves-light">Go to the Medical Consultation Page</a>
    </div>
</div>