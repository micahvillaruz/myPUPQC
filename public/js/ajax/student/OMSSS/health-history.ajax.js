const compareArrays = (array1, array2) => {
	const difference = []
	for (const element of array1) {
		if (!array2.includes(element)) {
			difference.push(element)
		}
	}
	return difference
}
$(function () {
	$.ajax({
		type: 'GET',
		url: apiURL + 'student/view/dpa_agreement',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result.data.length == 0) {
				$('#dataPrivacy').modal('show')
				$('#updateMedicalHistoryForm').attr('disabled', true)
			} else {
				const signedDate = moment(result.data.is_signed).format('MMMM D, YYYY h:mm A')
				$('#dataPrivacy').modal('hide')
				$('#checkDataPrivacy').html(`
                <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><i class="mdi mdi-checkbox-marked-circle-outline"></i> You are DPA Compliant!</h4>
                <p class="mb-0">You can able to access all systems for myPUPQC. You have signed the Data Collection Policy and Warranty for Reporting Agreement on:
                    <span class="text-primary" id="dpaSignedDate">${signedDate}</span>
                </p>
                </div>`)
			}
		},
	})

	$('#dpaDisagreeButton').click(function () {
		$('#checkDataPrivacy').html(`
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><i class="mdi mdi-information"></i> Data Privacy Agreement</h4>
            <p>To use all of the systems in myPUPQC, you must agree to the Data Collection Policy and Warranty for Reporting Agreement. If you are seeing this message, that means you haven't agreed to the form.</p>
            <hr>
            <p class="mb-0">To access the form again,
                <span class="text-primary" data-bs-toggle="modal" data-bs-target="#dataPrivacy" role="button">click here.</span>
            </p>
        </div>`)
	})

	$('#dpaAgreeButton').click(function () {
		$.ajax({
			type: 'POST',
			url: apiURL + 'student/submit/dpa_agreement',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result.data.is_signed) {
					location.reload()
				}
			},
		})
	})

	editMedicalHistory()

	$('#medicalHistoryForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info

		grecaptcha.ready(function () {
			grecaptcha
				.execute('6LfBbEgnAAAAAFJ-ELYeg_wF-l5VX5G52W55Dnx2', {
					action: 'submit',
				})
				.then(function (token) {
					const data = {
						recaptchaToken: token,
					}
					$.ajax({
						url: apiURL + `verify-recaptcha`,
						type: 'POST',
						data: data,
						success: (result) => {
							if (result.success) {
								editMedicalHistoryAJAX()
							} else {
								Toast.fire({
									icon: 'info',
									title: 'Please verify that you are not a robot!',
								})
							}
						},
					})
				})
		})
	})
})

// Edit Medical History
editMedicalHistory = () => {
	$.ajax({
		url: apiURL + `omsss/student/medical_history`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				const medical_history = data.medical_history ?? []
				const social_history = data.social_history ?? []
				const allergy = data.allergy ? data.allergy.join(';') : ''
				const family_history = data.family_history ? data.family_history.join(';') : ''
				const medications = data.medications ? data.medications.join(';') : ''
				const formCheckboxes = document.querySelectorAll('.form-check-input')

				let checkbox_value = []

				formCheckboxes.forEach((checkbox) => {
					if (medical_history.includes(checkbox.value)) {
						checkbox.checked = true
						checkbox_value.push(checkbox.value)
					} else {
						$('#medical_history_others').html(medical_history)
						checkbox.checked = false
					}
				})
				const difference = compareArrays(medical_history, checkbox_value)
				const smokerCheckbox = document.querySelector('#smoker_history')
				const alcoholCheckbox = document.querySelector('#alcohol_history')
				const formTextfield = document.querySelector('[name="medical_history_others"]')
				formTextfield.value = difference.join(',').replace(/,/g, ';')
				console.log(difference.join(',').replace(/,/g, ';'))
				$('#medical_history_others').val(difference)
				smokerCheckbox.checked = social_history.smoker
				alcoholCheckbox.checked = social_history.alcoholic
				$('#medical_history_others').val(checkbox_value)
				$('#allergy').val(allergy)
				$('#family_history').val(family_history)
				$('#medications').val(medications)
				$('#medical_history').val(medical_history)
			}
		},
	}).fail(() => console.error('There was an error in retrieving health history data'))
}

// Edit Admin AJAX
editMedicalHistoryAJAX = () => {
	// Get data from form
	if ($('#medicalHistoryForm')[0]) {
		// no validation error
		const form = new FormData($('#medicalHistoryForm')[0])

		let medical_history = []
		const formCheckboxes = document.querySelectorAll('.form-check-input')
		const formTextfield = document.querySelector('[name="medical_history_others"]')

		console.log(formTextfield.value)

		formCheckboxes.forEach((checkbox) => {
			if (checkbox.checked) {
				console.log(checkbox.value)
				medical_history.push(checkbox.value)
			}
		})

		medical_history.push(formTextfield.value)
		medical_history = medical_history.filter((str) => str !== '').join(';')
		const smokerCheckbox = document.querySelector('#smoker_history')
		const alcoholCheckbox = document.querySelector('#alcohol_history')
		const social_history = [smokerCheckbox.checked, alcoholCheckbox.checked].join(';')

		data = {
			medical_history: medical_history,
			social_history: social_history,
			allergy: form.get('allergy'),
			family_history: form.get('family_history'),
			medications: form.get('medications'),
		}
		console.log($('#medical_history_others').val())
		console.log('data to be sent: ', data)

		$.ajax({
			url: apiURL + `omsss/student/medical_history`,
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
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						location.reload()
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
