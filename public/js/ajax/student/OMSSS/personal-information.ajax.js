$(function () {
	loadPersonalInfo()
	editPatientInfoInput()

	$('#patientInformationForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		editPatientInformationAJAX()
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
			$('#full_name').html(data.full_name)

			// Load personal-info
			$('#view_sex').html(data.patient_info_assigned_to_user.user_profiles[0].gender)
			const birth_date = data.patient_info_assigned_to_user.user_profiles[0].birth_date
			let birthDateFormatted = `${moment(birth_date).format('LL')}`
			$('#view_birth_date').html(birthDateFormatted)
			$('#view_full_address').html(data.patient_info_assigned_to_user.user_profiles[0].full_address)
			$('#view_civil_status').html(data.patient_info_assigned_to_user.user_profiles[0].civil_status)
			$('#view_citizenship').html(data.patient_info_assigned_to_user.user_profiles[0].citizenship)
			$('#view_religion').html(data.patient_info_assigned_to_user.user_profiles[0].religion)
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
				$('#primary_contact_no').val(
					data.patient_info_assigned_to_user.user_profiles[0].contact_number,
				)
				$('#primary_email').val(data.patient_info_assigned_to_user.user_profiles[0].email_address)
				$('#facebook_username').val(data.facebook_username)
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

		data = {
			facebook_username: form.get('facebook_username'),
			emergency_contact_name: form.get('emergency_contact_name'),
			emergency_contact_number: form.get('emergency_contact_number'),
			emergency_contact_email: form.get('emergency_contact_email'),
			emergency_contact_address: form.get('emergency_contact_address'),
			philhealth_number: form.get('philhealth_number'),
			philhealth_id_image: form.get('philhealth_id_image'),
		}
		console.log(data)
		$.ajax({
			url: apiURL + `omsss/student/patient_information`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated your information!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						loadProfile()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating your details. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-primary w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	}
}
