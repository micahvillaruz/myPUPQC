$(function () {
	loadPersonalInfo()
	editPatientInfoInput()

	pond = FilePond.create(document.querySelector('#philhealth_id_image'), {
		instantUpload: false,
		allowProcess: false,
	})

	$('#patientInformationForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		editPatientInformationAJAX()
	})
	const checkbox = document.getElementById('formCheck1')
	const input = document.getElementById('emergency_contact_address')
	input.disabled = !input.disabled
	checkbox.addEventListener('change', function () {
		input.disabled = this.checked
	})
})

loadPersonalInfo = () => {
	$.ajax({
		type: 'GET',
		url: apiURL + `omsss/student/patient_information`,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data
			console.log(data)

			//Load Topbar
			$('#view_student_name').html(data.patient_info_assigned_to_user.user_profiles[0].full_name)
			$('#view_student_number').html(data.patient_info_assigned_to_user.user_no)
		},
	})
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
