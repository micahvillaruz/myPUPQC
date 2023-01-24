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
					width: '30%',
					class: 'text-wrap',
					render: (data) => {
						const roleName = data.role_name
						return `${roleName}`
					},
				},

				// Description
				{
					data: null,
					width: '30%',
					class: 'text-wrap',
					render: (data) => {
						const roleDescription = data.role_description
						return `${roleDescription}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.role_status == 'Active'
							? `<span class="badge rounded-pill bg-success">Active</span>`
							: `<span class="badge rounded-pill bg-danger">Inactive</span>`
					},
				},

				// Role For
				{
					data: null,
					render: (data) => {
						if (data.role_for == 'Student') {
							return `<span class="badge rounded-pill bg-primary">Student</span>`
						} else if (data.role_for == 'PUP Staff') {
							return `<span class="badge rounded-pill bg-primary">PUP Staff</span>`
						} else {
							return `<span class="badge rounded-pill bg-primary">Both</span>`
						}
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const buttonColor = data.role_status == 'Active' ? 'btn-danger' : 'btn-success'
						const buttonLogo = data.role_status == 'Active' ? 'ri-close-fill' : 'ri-check-fill'
						return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn ${buttonColor} btn-icon waves-effect waves-light" onclick="changeRoleStatus('${data.role_id}', '${data.role_status}')"><i class="${buttonLogo} fs-5"></i></button>
                              <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteRole('${data.role_id}')"><i class="bx bxs-trash fs-5"></i></button> 
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
			role_for: form.get('role_for'),
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

changeRoleStatus = (role_id, role_status) => {
	let icon, title, text
	if (role_status == 'Active') {
		icon = `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to deactivate this role?`
		text = `By deactivating this role, you can't able to assign this role to the users in the system in the User Role Management Section.`
		confirmButtonColor = '#f06548'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Deactivate'
	} else {
		icon = `<lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to activate this role?`
		text = `By activating this role, you can able to assign again this role to the users in the system in the User Role Management Section.`
		confirmButtonColor = '#0ab39c'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Activate'
	}
	Swal.fire({
		title: title,
		text: text,
		iconHtml: icon,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: confirmButtonColor,
		cancelButtonColor: cancelButtonColor,
		confirmButtonText: confirmButtonText,
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'super_admin/role/status/' + role_id,
				type: 'PUT',
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully changed the role status!</p></div></div>',
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
			})
		}
	})
}

deleteRole = (role_id) => {
	Swal.fire({
		title: 'Are you sure you want to delete this role?',
		text: 'By deleting this role, you can not able to assign this role to the users in the system in the User Role Management Section.',
		iconHtml: `<lord-icon
        src="https://cdn.lordicon.com/gsqxdxog.json"
        trigger="loop"
        colors="primary:#121331,secondary:#c71f16"
        style="width:100px;height:100px">
    </lord-icon>`,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: '#f06548',
		cancelButtonColor: '#6c757d',
		confirmButtonText: 'Delete',
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'super_admin/role/delete/' + role_id,
				type: 'DELETE',
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">${result.message}</p></div></div>`,
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
			})
		}
	})
}
