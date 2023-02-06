$(function () {
	editPatientInfoInput()

	pond = FilePond.create(document.querySelector('#philhealth_id_image'), {
		instantUpload: false,
		allowProcess: false,
	})

	$('#patientInformationForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		editPatientInformationAJAX(pond)
	})
	const checkbox = document.getElementById('formCheck1')
	const input = document.getElementById('emergency_contact_address')
	input.disabled = !this.checked
	checkbox.addEventListener('change', function () {
		input.disabled = this.checked
	})

	$('#emergency_contact_number').on('input', function () {
		if ($(this).val().length > 11) {
			$(this).val($(this).val().slice(0, 11))
		}
	})

	$('#philhealth_popover').popover({
		trigger: 'hover',
		placement: 'top',
		html: true,
		title: 'About PhilHealth IDs',
		content:
			"If you don't have a PhilHealth ID, you can leave this field blank.<br/><br/> Uploading a PhilHealth ID is optional and you have full control in deleting your ID completely in our database.",
	})
})
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

				// ? Phase 1 - Populate Sidebar Information
				$('#sb_student_number').html(data.patient_info_assigned_to_user.user_no)
				const birthdate = new Date(data.patient_info_assigned_to_user.user_profiles[0].birth_date)
				$('#sb_birthdate').html(
					birthdate.toLocaleDateString('en-us', { month: 'long', day: 'numeric', year: 'numeric' }),
				)
				$('#sb_gender').html(data.patient_info_assigned_to_user.user_profiles[0].gender)
				$('#sb_religion').html(data.patient_info_assigned_to_user.user_profiles[0].religion)
				$('#sb_civil_status').html(data.patient_info_assigned_to_user.user_profiles[0].civil_status)

				// ? Phase 2 - Populate Input Forms
				$('#emergency_contact_name').val(data.emergency_contact_name)
				$('#emergency_contact_number').val(data.emergency_contact_number)
				$('#emergency_contact_email').val(data.emergency_contact_email)
				if (data.emergency_contact_address != null) {
					$('#emergency_contact_address').val(data.emergency_contact_address)
					$('#formCheck1').prop('checked', false)
				} else {
					$('#emergency_contact_address').val(
						data.patient_info_assigned_to_user.user_profiles[0].full_address,
					)
					$('#formCheck1').prop('checked', true)
				}
				$('#philhealth_number').val(data.philhealth_number)
				if (data.philhealth_id_image != null) {
					$('#show_philhealth_button').html(`
                        <button type="button" class="btn btn-info bg-gradient w-100" data-bs-toggle="modal" data-bs-target="#philhealth_id">View Currently Uploaded PhilHealth ID</button>
                        <button type="button" class="btn btn-danger bg-gradient w-100 mt-2" onclick="deletePhilhealthImage()">Delete PhilHealth ID</button>
                    `)
					$('#philhealth_id_image_preview').attr('src', data.philhealth_id_image)
				} else {
					$('#show_philhealth_button').remove()
				}
			}
		},
	}).fail(() => console.error('There was an error in retrieving patient information data'))
}

// Edit  AJAX
editPatientInformationAJAX = (pond) => {
	// Get data from form
	if ($('#patientInformationForm')[0]) {
		// no validation error
		const form = new FormData($('#patientInformationForm')[0])

		// * add emergency_contact_address to form if checkbox is checked
		if ($('#formCheck1').is(':checked')) {
			form.append('emergency_contact_address', $('#emergency_contact_address').val())
		}

		if (
			form.get('filepond') == '' ||
			Object.prototype.toString.call(form.get('filepond')) === '[object File]'
		) {
			form.delete('filepond')
		}

		pondFiles = pond.getFiles()
		for (var i = 0; i < pondFiles.length; i++) {
			// append the blob file
			if (pondFiles[i].file != null) {
				form.append('philhealth_id_image', pondFiles[i].file)
			}
		}

		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

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

deletePhilhealthImage = () => {
	// next update
	console.log('next update')
}
