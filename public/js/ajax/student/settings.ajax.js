$(function () {
	editPersonalInfo()

	$('#personalInfoForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's personal information
		editPersonalInfoAJAX()
	})

	$('#changePasswordForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		validatePassword()
		changePasswordAJAX()
	})
})

const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 2000,
	timerProgressBar: true,
	didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	},
})

// Get Personal Information
editPersonalInfo = () => {
	$.ajax({
		url: apiURL + `student/info`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				$('#student_no').val(data.user_profile.user_no)

				$('#first_name').val(data.first_name)
				$('#middle_name').val(data.middle_name)
				$('#last_name').val(data.last_name)
				$('#extension_name').val(data.extension_name)
				$('#gender').val(data.gender)
				const birth_date = data.birth_date
				let birthDateFormatted = `${moment(birth_date).format('LL')}`
				$('#birth_date').val(birthDateFormatted)
				$('#civil_status').val(data.civil_status)
				$('#citizenship').val(data.citizenship)
				$('#religion').val(data.religion)
				$('#contact_number').val(data.contact_number)
				$('#email_address').val(data.email_address)
				$('#house_street').val(data.house_street)
				$('#region_detail').html(`<b>Region</b>: ${data.region}`)
				$('#province_detail').html(`<b>Province</b>: ${data.province}`)
				$('#municipality_detail').html(`<b>Municipality</b>: ${data.municipality}`)
				$('#barangay_detail').html(`<b>Barangay</b>: ${data.barangay}`)
			}
		},
	}).fail(() => console.error('There was an error in retrieving student data'))
}

// Edit Personal Information AJAX
editPersonalInfoAJAX = () => {
	// Get data from form
	if ($('#personalInfoForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#personalInfoForm')[0])

		data = {
			first_name: document.getElementById('first_name').value,
			middle_name: document.getElementById('middle_name').value,
			last_name: document.getElementById('last_name').value,
			extension_name: document.getElementById('extension_name').value,
			gender: form.get('gender'),
			birth_date: document.getElementById('birth_date').value,
			civil_status: form.get('civil_status'),
			citizenship: form.get('citizenship'),
			religion: form.get('religion'),
			contact_number: form.get('contact_number'),
			email_address: form.get('email_address'),
			house_street: form.get('house_street'),
		}

		if (
			$('#region option:selected').text() !== 'Select Region' &&
			$('#province option:selected').text() !== 'Select Province' &&
			$('#municipality option:selected').text() !== 'Select City/Municipality' &&
			$('#barangay option:selected').text() !== 'Select Barangay'
		) {
			data['region'] = $('#region option:selected').text()
			data['province'] = $('#province option:selected').text()
			data['municipality'] = $('#municipality option:selected').text()
			data['barangay'] = $('#barangay option:selected').text()
		}

		$.ajax({
			url: apiURL + `student/info`,
			type: 'PATCH',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Update Profile Successfully!',
					}).then(function () {
						window.location.href = `${baseURL}student/profile`
					})
				}
			},
		}).fail((xhr) => {
			Swal.fire({
				html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${
					JSON.parse(xhr.responseText).message
				}</p></div></div>`,
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

// Change Password AJAX
changePasswordAJAX = () => {
	if (!$('#changePasswordForm')[0].checkValidity()) return false

	const form = new FormData($('#changePasswordForm')[0])

	console.log(form)

	let data = {
		current_password: form.get('current_password'),
		new_password: form.get('new_password'),
	}

	$.ajax({
		url: apiURL + `student/info/change_password`,
		type: 'PUT',
		data: data,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			console.log(result)
			if (result) {
				Toast.fire({
					icon: 'success',
					title: 'Change Password Successfully!',
				}).then(function () {
					handlePasswordInputChange()

					toggleValidationClass('pass-lower', true)
					toggleValidationClass('pass-upper', true)
					toggleValidationClass('pass-number', true)
					toggleValidationClass('pass-special', true)
					toggleValidationClass('pass-length-min', true)
					toggleValidationClass('pass-length-max', true)

					changePassLogout()
				})
			}
		},
	}).fail(() => {
		let password = document.getElementById('old-password-input')
		password.setCustomValidity('Incorrect Password')
	})
}
