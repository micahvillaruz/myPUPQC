$(function () {
	loadStaffsTable()

	$('#addPUPStaffForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addPUPStaff()
	})

	$('#updateStaffForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh

		// pass data to API for updating of student's info
		updateStaffAJAX($('#edit_user_id').val())
	})
})

addPUPStaff = () => {
	// Add PUP Staff
	if ($('#addPUPStaffForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#addPUPStaffForm')[0])

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
		}

		$.ajax({
			url: apiURL + 'super_admin/pup_staff/add',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a PUP Staff!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						$('#addStaffModal').modal('hide')
						$('form#addPUPStaffForm')[0].reset()
						loadStaffsTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a PUP Staff. Please try again.</p></div></div>',
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

// Load datatables
loadStaffsTable = () => {
	const dt = $('#staffs-datatable')

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
				url: apiURL + 'super_admin/pup_staff/',
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
						const fullName = data.user_profiles.full_name

						return `${fullName}`
					},
				},

				// Address
				{
					data: null,
					render: (data) => {
						const address = data.user_profiles.full_address
						return `${address}`
					},
				},

				// Gender
				{
					data: null,
					render: (data) => {
						const igender = data.user_profiles.gender
						return `${igender}`
					},
				},

				// Birthday
				{
					data: null,
					render: (data) => {
						const birth_date = moment(data.user_profiles.birth_date).format('LL')

						return `${birth_date}`
					},
				},

				// Contact Number
				{
					data: null,
					render: (data) => {
						const contact_number = data.user_profiles.contact_number

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
    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewStaffDetails('${data.user_id}')" data-bs-toggle="modal" data-bs-target="#viewStaffModal"><i class="ri-eye-fill fs-5"></i></button>
    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateStaffModal" onclick = "editStaffDetails('${data.user_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
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

// View Staff details
viewStaffDetails = (user_id) => {
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
		url: apiURL + `super_admin/pup_staff/${user_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			const userProfileData = result.data.user_profiles

			$('#view_staff_no').html(userData.user_no)
			$('#view_staff_name').html(userProfileData.full_name)
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

getStaff = (user_id) => {
	$.ajax({
		url: apiURL + `super_admin/pup_staff/${user_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				// $('#edit_image').val(data.user_profiles.image)
				$('#edit_user_id').val(data.user_id)
				$('#stud_num').val(data.user_no)
				$('#stud_num').prop('disabled', true)

				$('#edit_first_name').val(data.user_profiles.first_name)
				$('#edit_middle_name').val(data.user_profiles.middle_name)
				$('#edit_last_name').val(data.user_profiles.last_name)
				$('#edit_extension_name').val(data.user_profiles.extension_name)
				$('#edit_contact_number').val(data.user_profiles.contact_number)
				const birth_date = data.user_profiles.birth_date
				let birthDateFormatted = `${moment(birth_date).format('LL')}`
				$('#edit_birth_date').val(birthDateFormatted)
				$('#edit_gender').val(data.user_profiles.gender)
				$('#edit_house_street').val(data.user_profiles.house_street)
				$('#edit_barangay').val(data.user_profiles.barangay)
				$('#edit_municipality').val(data.user_profiles.municipality)
				$('#edit_province').val(data.user_profiles.province)
				$('#edit_region').val(data.user_profiles.region)
			}
		},
	}).fail(() => console.error('There was an error in retrieving staff data'))
}

// Edit Staff Details
editStaffDetails = (user_id) => getStaff(user_id)

// Edit Staff AJAX
updateStaffAJAX = (user_id) => {
	// Enroll Staff
	if ($('#updateStaffForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#updateStaffForm')[0])

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
			url: apiURL + `super_admin/pup_staff/edit/${user_id}`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				console.log(result)
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated a staff!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// Hide the update Staff details modal
						$('#updateStaffModal').modal('hide')

						// Reload Staff Datatable
						loadStaffsTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating a staff. Please try again.</p></div></div>',
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