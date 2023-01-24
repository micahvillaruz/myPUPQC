$(function () {
	viewRoleManagementTable()

	populateSelect2()

	$('#selectRoleToUsersForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		addRolesToUser()
	})
})

// Load datatables
viewRoleManagementTable = () => {
	const dt = $('#students-with-roles')

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
				url: apiURL + 'super_admin/user_role/all/Student',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// User ID
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

				// User Roles
				{
					data: null,
					render: (data) => {
						const userRoles = data.user_roles.map((role) => role.role_name)
						const rolePills = userRoles.map((role) => {
							return `<span class="badge bg-primary">${role}</span>  `
						})
						return `
                            <div class="dropdown d-inline-block">
                                ${rolePills.join('<br/>')}
                            </div>
                        `
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" onclick="removeStudentOrganizer('${data.user_id}')"><i class="ri-pencil-fill fs-5"></i></button> 
                          </div>
                              `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

viewStudentDetails = (user_id) => {}

// Populate select2 options
populateSelect2 = () => {
	// * First Phase: Populate select2 option: select_users which is a js-example-basic-single class
	const select2Users = $('#select_staff')
	$.ajax({
		url: apiURL + 'super_admin/users_without_roles/Student',
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			const students = data.data
			students.forEach((student) => {
				const userNo = student.user_no
				const fullName = student.user_profiles[0].full_name
				const option = new Option(`${userNo} - ${fullName}`, student.user_id, false, false)
				select2Users.append(option)
			})
		},
	})
	// * Second Phase: Populate select2 option: select_roles which is a js-example-basic-multiple
	const select2Roles = $('#select_student_roles')
	$.ajax({
		url: apiURL + 'super_admin/role/user_type/Student',
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			const roles = data.data.map((role) => {
				return role.role_name
			})
			roles.forEach((role) => {
				const option = new Option(role)
				select2Roles.append(option)
			})
		},
	})
}

// * Add roles to users
addRolesToUser = () => {
	// ! Major Loophole: Kailangan ma-detect niya if yung user_id ay Student or PUP Staff
	if ($('#selectRoleToUsersForm')[0].checkValidity()) {
		const form = new FormData($('#selectRoleToUsersForm')[0])

		let users_selected = form.get('select_users')
		let roles_selected = []

		for (var pair of form.entries()) {
			if (pair[0] == 'select_roles') {
				roles_selected.push(pair[1])
			}
			console.log(pair[0] + ': ' + pair[1])
		}

		roles_selected = roles_selected.join(';')
		console.log(roles_selected)

		data = {
			roles: roles_selected,
		}

		$.ajax({
			url: apiURL + `super_admin/user_role/${users_selected}`,
			type: 'POST',
			headers: AJAX_HEADERS,
			data: data,
			success: (result) => {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done!</h4><p class="text-muted mx-4 mb-0">You have successfully added a new role to this user!</p></div></div>',
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
			},
		}).fail((xhr) => {
			console.log(xhr.responseJSON.message)
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There was an error while adding a new role to this user. Please try again.</p></div></div>',
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
