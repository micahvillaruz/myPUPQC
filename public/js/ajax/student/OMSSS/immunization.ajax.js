$(function () {
	loadImmuniationTable()
})
// Load datatables
loadImmuniationTable = () => {
	const dt = $('#immunization-datatable')

	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/student/view_medical_appointment',
				type: 'GET',
				// ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Appointment Code/Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
        <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewMedicalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill fs-5"></i></button>
				<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal('${data.health_appointment_id}')"><i class="ri-edit-2-fill"></i></button>
				</div`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// Edit Patient Information
editPatientInfoInput = () => {
	$.ajax({
		url: apiURL + `omsss/student/patient_information`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				console.log(data)
				$('#emergency_contact_name').val(data.emergency_contact_name)
				$('#emergency_contact_number').val(data.emergency_contact_number)
				$('#email').val(data.emergency_contact_email)
				$('#emergency_contact_address').val(
					data.patient_info_assigned_to_user.user_profiles[0].full_address,
				)
				$('#philhealth_number').val(data.philhealth_number)
				$('#philhealth_id_image').val(data.philhealth_id_image)
			}
		},
	}).fail(() => console.error('There was an error in retrieving patient information data'))
}

// Edit  AJAX
editPatientInformationAJAX = () => {
	// Get data from form
	if ($('#patientInformationForm')[0]) {
		// no validation error
		const form = new FormData($('#patientInformationForm')[0])

		$.ajax({
			url: apiURL + `omsss/student/patient_information`,
			type: 'PUT',
			data: form,
			processData: false,
			contentType: false,
			cache: false,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated your information!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						setTimeout(() => {
							location.reload()
						}, 1000)
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating your details. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	}
}
