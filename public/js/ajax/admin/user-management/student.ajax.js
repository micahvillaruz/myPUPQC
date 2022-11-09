$(function () {
	loadStudentTable()

	$('#enrollStudentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		enrollStudent()
	})

	$('#updateStudentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh

		// pass data to API for updating of student's info
		updateStudentAJAX($('#edit_user_id').val())
	})
})

// Load datatables
loadStudentTable = () => {
	const dt = $('#students-datatable')

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
				url: apiURL + 'super_admin/student/',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Customer No.
				{
					data: null,
					render: (data) => {
						const userNo = data.user_no
						return `${userNo}`
					},
				},

				// Full Name
				{
					data: null,
					render: (data) => {
						const fullName = data.user_profiles[0].full_name

						return `${fullName}`
					},
				},

				// Address
				{
					data: null,
					render: (data) => {
						const address = data.user_profiles[0].full_address
						return `${address}`
					},
				},

				// Gender
				{
					data: null,
					render: (data) => {
						const igender = data.user_profiles[0].gender
						return `${igender}`
					},
				},

				// Birthday
				{
					data: null,
					render: (data) => {
						const birth_date = moment(data.user_profiles[0].birth_date).format('LL')

						return `${birth_date}`
					},
				},

				// Contact Number
				{
					data: null,
					render: (data) => {
						const contact_number = data.user_profiles[0].contact_number

						return `${contact_number}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.is_blacklist
							? `<span class="badge rounded-pill bg-danger">Inactive</span>`
							: `<span class="badge rounded-pill bg-success">Active</span>`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let activationBtn = data.is_blacklist
							? `<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="activateStudent('${data.user_id}')"><i class="bx bxs-user-check fs-4"></i></button>`
							: `<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deactivateStudent('${data.user_id}')"><i class="bx bxs-user-x fs-4"></i></button>`
						return `
    <div class="dropdown d-inline-block">
    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewStudentDetails('${data.user_id}')" data-bs-toggle="modal" data-bs-target="#viewStudentModal"><i class="ri-eye-fill fs-5"></i></button>
    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateStudentModal" onclick = "editStudentDetails('${data.user_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
    ${activationBtn}
  </div>
    `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// View Student details
viewStudentDetails = (user_id) => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `super_admin/student/${user_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			const userProfileData = result.data.user_profiles[0]

			$('#view_student_no').html(userData.user_no)
			$('#view_student_name').html(userProfileData.full_name)
			$('#view_full_address').html(userProfileData.full_address)
			$('#view_gender').html(userProfileData.gender)
			$('#view_bday').html(userProfileData.birth_date)
			$('#view_contact_no').html(userProfileData.contact_number)
			$('#view_status').html(
				userData.is_blacklist
					? '<span class="fs-12 badge rounded-pill bg-danger" >Inactive</span>'
					: '<span class="fs-12 badge rounded-pill bg-success" >Active</span>',
			)
		},
	})
}

enrollStudent = () => {
	// Enroll Student
	if ($('#enrollStudentForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#enrollStudentForm')[0])

		data = {
			image: form.get('profile-img-file-input'),
			user_no: form.get('user_no'),
			password: form.get('password'),
			first_name: form.get('first_name'),
			middle_name: form.get('middle_name'),
			last_name: form.get('last_name'),
			extension_name: form.get('extension_name'),
			contact_number: form.get('contact_number'),
			birth_date: form.get('birth_date'),
			gender: form.get('gender'),
			house_street: form.get('house_street'),
			barangay: form.get('barangay'),
			municipality: form.get('municipality'),
			province: form.get('province'),
			region: form.get('region'),
			email_address: form.get('email_address'),
			civil_status: form.get('civil_status'),
			citizenship: form.get('citizenship'),
			religion: form.get('religion'),
		}

		$.ajax({
			url: apiURL + 'super_admin/student/add',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully enrolled a student!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						$('#addStudentModal').modal('hide')
						$('form#enrollStudentForm')[0].reset()

						// Reload Student Datatable
						loadStudentTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while enrolling a student. Please try again.</p></div></div>',
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

getStudent = (user_id) => {
	$.ajax({
		url: apiURL + `super_admin/student/${user_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				// $('#edit_image').val(data.user_profiles[0].image)
				$('#edit_user_id').val(data.user_id)
				$('#stud_num').val(data.user_no)
				$('#stud_num').prop('disabled', true)

				$('#edit_first_name').val(data.user_profiles[0].first_name)
				$('#edit_middle_name').val(data.user_profiles[0].middle_name)
				$('#edit_last_name').val(data.user_profiles[0].last_name)
				$('#edit_extension_name').val(data.user_profiles[0].extension_name)
				$('#edit_contact_number').val(data.user_profiles[0].contact_number)
				const birth_date = data.user_profiles[0].birth_date
				let birthDateFormatted = `${moment(birth_date).format('LL')}`
				$('#edit_birth_date').val(birthDateFormatted)
				$('#edit_gender').val(data.user_profiles[0].gender)
				$('#edit_house_street').val(data.user_profiles[0].house_street)
				$('#edit_barangay').val(data.user_profiles[0].barangay)
				$('#edit_municipality').val(data.user_profiles[0].municipality)
				$('#edit_province').val(data.user_profiles[0].province)
				$('#edit_region').val(data.user_profiles[0].region)
			}
		},
	}).fail(() => console.error('There was an error in retrieving student data'))
}

// Edit Student Details
editStudentDetails = (user_id) => getStudent(user_id)

// Edit Student AJAX
updateStudentAJAX = (user_id) => {
	// Enroll Student
	if ($('#updateStudentForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#updateStudentForm')[0])

		data = {
			image: null,
			first_name: form.get('edit_first_name'),
			middle_name: form.get('edit_middle_name'),
			last_name: form.get('edit_last_name'),
			extension_name: form.get('edit_extension_name'),
			contact_number: form.get('edit_contact_number'),
			birth_date: form.get('edit_birth_date'),
			gender: form.get('edit_gender'),
			house_street: form.get('edit_house_street'),
			barangay: form.get('edit_barangay'),
			municipality: form.get('edit_municipality'),
			province: form.get('edit_province'),
			region: form.get('edit_region'),
		}

		$.ajax({
			url: apiURL + `super_admin/student/edit/${user_id}`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated a student!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// Hide the update student details modal
						$('#updateStudentModal').modal('hide')

						// Reload Student Datatable
						loadStudentTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating a student. Please try again.</p></div></div>',
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

// Deactive Student
deactivateStudent = (user_id) => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you Sure ?</h4>' +
			'<p class="text-muted mx-4 mb-0">Are you Sure You want to Deactivate this Student ?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Deactivate It!',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'super_admin/student/deactivate/' + user_id,
				type: 'DELETE',
				dataType: 'json',
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done !</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully deactivated a student!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// Reload Student Datatable
							loadStudentTable()
						})
					}
				},
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong !</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while deactivating a student. Please try again.</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			})
		}
	})
}

// Activate Student
activateStudent = (user_id) => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you Sure ?</h4>' +
			'<p class="text-muted mx-4 mb-0">Are you Sure You want to Reactivate this Student ?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Reactivate It!',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'super_admin/student/deactivate/' + user_id,
				type: 'DELETE',
				dataType: 'json',
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done !</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully reactivated a student!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// Reload Student Datatable
							loadStudentTable()
						})
					}
				},
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong !</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while reactivating a student. Please try again.</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			})
		}
	})
}
