$(function () {
	viewRoleManagementTable()

	populateSelect2()

	$('#selectRoleToUsersForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		addRolesToUser()
	})

	$('#editRolesForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		editRolesToUser()
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
			dom:
				"<'row'<'col-xl-12 mb-2'B>>" +
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				{
					extend: 'print',
					text: '<i class="ri-printer-fill"></i> Print',
					exportOptions: {
						columns: [0, 1, 2],
					},
				},
			],
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
                              <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editUserRoleModal" onclick="populateEditForm('${data.user_id}')"><i class="ri-pencil-fill fs-5"></i></button> 
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
	const select2Users = $('#select_student')
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

// Populate Edit Form Modal with data
populateEditForm = (user_id) => {
	$('#user_id').val(user_id)

	// * First Phase: Edit all the Information in the Modal
	$.ajax({
		url: apiURL + 'super_admin/user_role/' + user_id,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			const result = data.data[0]
			const userFullName = result.user_profiles[0].full_name
			const userRoles = result.user_roles
			$('#user_role_title').text(`Edit Roles of ${userFullName}`)
			$('#view_user_roles').html(
				`<span class="text-primary font-italic">${userFullName}</span> currently has the following roles:`,
			)
			const rolePills = userRoles.map((role) => {
				return `<span class="badge bg-primary">${role}</span>  `
			})
			$('#user_current_roles').html(`<div>${rolePills.join(' ')}</div>`)
		},
	})

	// * Second Phase: Populate select2 option: select_assign_roles which is a js-example-basic-multiple using the endpoint: super_admin/all_roles/
	$.ajax({
		url: apiURL + 'super_admin/all_roles/' + user_id,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			const roles = data.data
			if (roles.length == 0) {
				$('#assign_role_input')
					.html(`<div class="alert alert-info alert-label-icon fs-4 label-arrow fade show" role="alert">
			    <i class="ri-alert-fill label-icon"></i><strong>This user can't be assigned to any roles at the moment.
			</div>`)
			} else {
				$('#assign_role_input').html(`<span>You can still assign the following roles:</span>
                <br/>
                <select class="js-example-basic-multiple w-100" multiple="multiple" name="select_assign_roles" id="select_assign_roles">
                </select>`)
				$('#select_assign_roles').select2({
					placeholder: 'Select Roles',
					allowClear: true,
					width: '100%',
					data: roles,
					// ! Lesson Learned: Hindi lahat ng sagot nasa ChatGPT
					// ! https://stackoverflow.com/a/33884094/14043411
					dropdownParent: $('#editUserRoleModal'),
				})
			}
		},
	})

	// * Third Phase: Populate select2 option: select_remove_roles which is a js-example-basic-multiple using the endpoint: super_admin/user_role/
	$.ajax({
		url: apiURL + 'super_admin/user_role/' + user_id,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			const roles = data.data[0].user_roles
			if (roles.length == 0) {
				$('#remove_role_input')
					.html(`<div class="alert alert-info alert-label-icon fs-4 label-arrow fade show" role="alert">
                                <i class="ri-alert-fill label-icon"></i>This user can't be assigned to any roles at the moment.
                            </div>`)
			} else {
				$('#remove_role_input').html(`<span>You can remove the following roles:</span>
                <br/>
                <select class="js-example-basic-multiple w-100" multiple="multiple" name="select_remove_roles" id="select_remove_roles">
                </select>`)
				$('#select_remove_roles').select2({
					placeholder: 'Select Roles',
					allowClear: true,
					width: '100%',
					data: roles,
					// ! Lesson Learned: Hindi lahat ng sagot nasa ChatGPT
					// ! https://stackoverflow.com/a/33884094/14043411
					dropdownParent: $('#editUserRoleModal'),
				})
			}
		},
	})
}

// * Add roles to users
addRolesToUser = () => {
	// ! Major Loophole: Kailangan ma-detect niya if yung user_id ay Student or PUP Staff
	if ($('#selectRoleToUsersForm')[0].checkValidity()) {
		const form = new FormData($('#selectRoleToUsersForm')[0])

		let users_selected = form.get('select_student')
		let roles_selected = []

		for (var pair of form.entries()) {
			if (pair[0] == 'select_student_roles') {
				roles_selected.push(pair[1])
			}
			console.log(pair[0] + ': ' + pair[1])
		}
		console.log(roles_selected)
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

editRolesToUser = () => {
	// ! Major Loophole: Kailangan ma-detect niya if yung user_id ay Student or PUP Staff
	if ($('#editRolesForm')[0].checkValidity()) {
		const form = new FormData($('#editRolesForm')[0])

		const user_id = form.get('user_id')
		let assigned_roles = ''
		let removed_roles = ''

		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])

			if (pair[0] == 'select_remove_roles') {
				removed_roles += `;${pair[1]}`
			}
			if (pair[0] == 'select_assign_roles') {
				assigned_roles += `;${pair[1]}`
			}
		}

		assigned_roles = assigned_roles.substring(1)
		removed_roles = removed_roles.substring(1)

		console.log(assigned_roles, removed_roles)

		assign_data = {
			roles: assigned_roles,
		}

		remove_data = {
			roles: removed_roles,
		}

		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			},
		})

		if (assigned_roles != '' && removed_roles == '') {
			console.log('assign')
			$.ajax({
				type: 'POST',
				url: apiURL + 'super_admin/user_role/' + user_id,
				data: assign_data,
				success: (result) => {
					if (result) {
						console.log(result)
						Toast.fire({
							icon: 'success',
							title: 'Successfully added roles to this user!',
						}).then(() => {
							setTimeout(() => {
								location.reload()
							}, 500)
						})
					}
				},
				error: (error) => {
					// Handle error here
					console.log(error)
					Toast.fire({
						icon: 'error',
						title: 'Failed to add role...',
					}).then(() => {
						setTimeout(() => {
							location.reload()
						}, 500)
					})
				},
			})
		} else if (removed_roles != '' && assigned_roles == '') {
			console.log('remove')
			$.ajax({
				type: 'DELETE',
				url: apiURL + 'super_admin/user_role/' + user_id,
				data: remove_data,
				success: (result) => {
					if (result) {
						console.log(result)
						Toast.fire({
							icon: 'success',
							title: 'Successfully removed roles to this user!',
						}).then(() => {
							setTimeout(() => {
								location.reload()
							}, 500)
						})
					}
				},
				error: (error) => {
					// Handle error here
					console.log(error)
					Toast.fire({
						icon: 'error',
						title: 'Failed to add role...',
					}).then(() => {
						setTimeout(() => {
							location.reload()
						}, 500)
					})
				},
			})
		} else {
			console.log('assign and remove')
			$.ajax({
				type: 'POST',
				url: apiURL + 'super_admin/user_role/' + user_id,
				data: assign_data,
				success: (result) => {
					console.log(result)
					Toast.fire({
						icon: 'success',
						title: 'Successfully added roles to this user!',
					}).then(() => {
						setTimeout(() => {
							$.ajax({
								type: 'DELETE',
								url: apiURL + 'super_admin/user_role/' + user_id,
								data: remove_data,
								success: (result) => {
									console.log(result)
									Toast.fire({
										icon: 'success',
										title: 'Successfully removed roles to this user!',
									}).then(() => {
										setTimeout(() => {
											location.reload()
										}, 500)
									})
								},
								error: (error) => {
									// Handle error here
									console.log(error)
									Toast.fire({
										icon: 'error',
										title: 'Failed to add role...',
									}).then(() => {
										setTimeout(() => {
											location.reload()
										}, 500)
									})
								},
							})
						}, 500)
					})
				},
				error: (error) => {
					// Handle error here
					console.log(error)
					Toast.fire({
						icon: 'error',
						title: 'Failed to add role...',
					}).then(() => {
						setTimeout(() => {
							location.reload()
						}, 500)
					})
				},
			})
		}
	}
}
