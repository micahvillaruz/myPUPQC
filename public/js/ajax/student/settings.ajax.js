$(function () {
	editPersonalInfo()
	editEducationalInfo()

	let yearDropdown = document.querySelectorAll('.year-dropdown')

	yearDropdown.forEach((year) => {
		let currentYear = new Date().getFullYear()
		let earliestYear = 1970
		while (currentYear >= earliestYear) {
			let dateOption = document.createElement('option')
			dateOption.text = currentYear
			dateOption.value = currentYear
			year.add(dateOption)
			currentYear -= 1
		}
	})

	$('#personalInfoForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's personal information
		editPersonalInfoAJAX()
	})

	$('#educationalInfoForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's educational information
		editEducationalInfoAJAX()
	})

	$('#changePasswordForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		validatePassword()
		changePasswordAJAX()
	})
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
				$('#barangay').val(data.barangay)
				$('#municipality').val(data.municipality)
				$('#province').val(data.province)
				$('#region').val(data.region)
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
			image: null,
			first_name: form.get('first_name'),
			middle_name: form.get('middle_name'),
			last_name: form.get('last_name'),
			extension_name: form.get('extension_name'),
			gender: form.get('gender'),
			birth_date: form.get('birth_date'),
			civil_status: form.get('civil_status'),
			citizenship: form.get('citizenship'),
			religion: form.get('religion'),
			contact_number: form.get('contact_number'),
			email_address: form.get('email_address'),
			house_street: form.get('house_street'),
			barangay: form.get('barangay'),
			municipality: form.get('municipality'),
			province: form.get('province'),
			region: form.get('region'),
		}

		$.ajax({
			url: apiURL + `student/info`,
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
						window.location.href = `${baseURL}student/profile`
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

// Get Educational Information
editEducationalInfo = () => {
	$.ajax({
		url: apiURL + `student/educ_profile`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				$('#education_status').val(data.education_status)
				$('#school_year_admitted').val(data.school_year_admitted)
				$('#course_when_admitted').val(data.course_when_admitted)
				$('#high_school_graduated').val(data.high_school_graduated)
				$('#high_school_graduated_year').val(data.high_school_graduated_year)
				$('#elementary_graduated').val(data.elementary_graduated)
				$('#elementary_graduated_year').val(data.elementary_graduated_year)
			}
		},
	}).fail(() => console.error('There was an error in retrieving student data'))
}

// Edit Educational Information AJAX
editEducationalInfoAJAX = () => {
	// Get data from form
	if ($('#educationalInfoForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#educationalInfoForm')[0])

		data = {
			education_status: form.get('education_status'),
			school_year_admitted: form.get('school_year_admitted'),
			course_when_admitted: form.get('course_when_admitted'),
			high_school_graduated: form.get('high_school_graduated'),
			high_school_graduated_year: form.get('high_school_graduated_year'),
			elementary_graduated: form.get('elementary_graduated'),
			elementary_graduated_year: form.get('elementary_graduated_year'),
		}

		$.ajax({
			url: apiURL + `student/educ_profile`,
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
						window.location.href = `${baseURL}student/profile`
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
		url: apiURL + `student/info/change_password`,
		type: 'PUT',
		data: data,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			console.log(result)
			if (result) {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done!</h4><p class="text-muted mx-4 mb-0">You have successfully updated your password!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					window.location.reload()
				})
			}
		},
	}).fail(() => {
		let password = document.getElementById('old-password-input')
		password.setCustomValidity('Incorrect Password')
	})
}
