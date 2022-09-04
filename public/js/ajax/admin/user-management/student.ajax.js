$(function () {
	$('#enrollStudentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		enrollStudent()
	})
	loadStudentTable()
})

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
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						$('#addStudentModal').modal('hide')
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while enrolling a student. Please try again.</p></div></div>',
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
						const fullName = data.user_profiles.full_name

						return `${fullName}`
					},
				},

				// Address
				{
					data: null,
					render: (data) => {
						const address = data.user_profiles.house_street
						return `${address}`
					},
				},

				// Birthday
				{
					data: null,
					render: (data) => {
						const birth_date = data.user_profiles.birth_date

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
						return `
						<div class="dropdown d-inline-block">
						<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewStudentModal"><i class="ri-eye-fill"></i></button>
						<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editStudentModal"><i class="ri-edit-2-fill"></i></button>
						<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteStudentModal"><i class="ri-delete-bin-5-fill"></i></button>
					</div>
						`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}
