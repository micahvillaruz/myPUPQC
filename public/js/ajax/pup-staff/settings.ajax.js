$(function () {
	editProfile()

	$('#profileSettingsForm').on('submit', function (e) {
		e.preventDefault() // Prevent page refresh
		// Pass data to API for updating of PUP Staff's info
		editProfileAJAX()
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

// Edit PUP Staff Details
editProfile = () => {
	$.ajax({
		url: apiURL + `pup_staff/info`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				// $('#edit_image').val(data.image)

				$('#first_name').val(data.first_name)
				$('#middle_name').val(data.middle_name)
				$('#last_name').val(data.last_name)
				$('#extension_name').val(data.extension_name)
				const birth_date = data.birth_date
				let birthDateFormatted = `${moment(birth_date).format('LL')}`
				$('#birth_date').val(birthDateFormatted)
				$('#gender').val(data.gender)
				$('#civil_status').val(data.civil_status)
				$('#citizenship').val(data.citizenship)
				$('#religion').val(data.religion)
				$('#email_address').val(data.email_address)
				$('#contact_number').val(data.contact_number)
				$('#house_street').val(data.house_street)
				$('#region_detail').html(`<b>Region</b>: ${data.region}`)
				$('#province_detail').html(`<b>Province</b>: ${data.province}`)
				$('#municipality_detail').html(`<b>Municipality</b>: ${data.municipality}`)
				$('#barangay_detail').html(`<b>Barangay</b>: ${data.barangay}`)
			}
		},
	}).fail(() => console.error('There was an error in retrieving PUP Staff data'))
}

// Edit PUP Staff AJAX
editProfileAJAX = () => {
	// Get data from form
	if ($('#profileSettingsForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#profileSettingsForm')[0])

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

		console.log(data)

		$.ajax({
			url: apiURL + `pup_staff/info`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Update Profile Successfully!',
					}).then(function () {
						window.location.href = `${baseURL}pupstaff/profile`
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

// Change Password AJAX
changePasswordAJAX = () => {
	if (!$('#changePasswordForm')[0].checkValidity()) return false

	const form = new FormData($('#changePasswordForm')[0])

	let data = {
		current_password: form.get('current_password'),
		new_password: form.get('new_password'),
	}

	$.ajax({
		url: apiURL + `pup_staff/info/change_password`,
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
