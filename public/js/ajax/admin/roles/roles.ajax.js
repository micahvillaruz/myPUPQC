$(function () {
	viewAllRoles()

	// get the values in the form
	$('#addRoleForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		addRoleAJAX()
	})
})

// Load datatables
viewAllRoles = () => {
	const dt = $('#users-with-roles')

	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			'Content-Type': 'application/x-www-form-urlencoded',
		},
	})

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'super_admin/role/',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Role
				{
					data: null,
					render: (data) => {
						const roleName = data.role_name
						return `${roleName}`
					},
				},

				// Description
				{
					data: null,
					render: (data) => {
						const roleDescription = data.role_description
						return `${roleDescription}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.role_status == 0
							? `<span class="badge rounded-pill bg-danger">Inactive</span>`
							: `<span class="badge rounded-pill bg-success">Active</span>`
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewStudentInfoModal" onclick="viewStudentDetails('${data.user_id}')"><i class="ri-eye-fill fs-5"></i></button>
                              <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="removeStudentOrganizer('${data.user_id}')"><i class="ri-close-fill fs-5"></i></button> 
                          </div>
                              `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

addRoleAJAX = () => {
	if ($('#addRoleForm')[0].checkValidity()) {
		const form = new FormData($('#addRoleForm')[0])
		// Display the key/value pairs
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		data = {
			role_name: form.get('role_name'),
			role_description: form.get('role_description'),
			role_for: 'PUP Staff',
		}

		$.ajax({
			url: apiURL + 'super_admin/role/add',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a new role!</p></div></div>',
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
		}).fail((xhr) => {
			console.log(xhr.responseJSON.message)
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a new role. Please try again.</p></div></div>',
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
