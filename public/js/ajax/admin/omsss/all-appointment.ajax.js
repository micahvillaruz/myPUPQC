$(function () {
	loadAllPendingAppointmentTable()
	loadAllApprovedAppointmentTable()
	loadAllCancelledStudentAppointmentTable()
	loadAllCancelledStaffAppointmentTable()
	loadAllDeletedAppointmentTable()
})

loadAllPendingAppointmentTable = () => {
	const dt = $('#all_pending_appointment_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
				type: 'GET',
				headers: AJAX_HEADERS,
				// * Filter Pending Appointments
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.consultation_status == 'Pending'
					})
					return filteredData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-warning">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const health_appointment_id = data.health_appointment_id
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAppointment('${data.health_appointment_id}')"><i class="bx bxs-trash fs-5"></i></button>
                        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadAllApprovedAppointmentTable = () => {
	const dt = $('#all_approved_appointment_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
				type: 'GET',
				headers: AJAX_HEADERS,
				// * Filter Pending Appointments
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.consultation_status == 'Approved'
					})
					return filteredData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-success">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const health_appointment_id = data.health_appointment_id
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAppointment('${data.health_appointment_id}')"><i class="bx bxs-trash fs-5"></i></button>
                        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadAllCancelledStudentAppointmentTable = () => {
	const dt = $('#all_cancelled_student_appointment_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
				type: 'GET',
				headers: AJAX_HEADERS,
				// * Filter Pending Appointments
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.consultation_status == 'Cancelled by Student'
					})
					return filteredData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-info">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const health_appointment_id = data.health_appointment_id
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAppointment('${data.health_appointment_id}')"><i class="bx bxs-trash fs-5"></i></button>
                        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadAllCancelledStaffAppointmentTable = () => {
	const dt = $('#all_cancelled_staff_appointment_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
				type: 'GET',
				headers: AJAX_HEADERS,
				// * Filter Pending Appointments
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.consultation_status == 'Cancelled by Staff'
					})
					return filteredData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-info">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const health_appointment_id = data.health_appointment_id
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAppointment('${data.health_appointment_id}')"><i class="bx bxs-trash fs-5"></i></button>
                        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadAllDeletedAppointmentTable = () => {
	const dt = $('#all_deleted_appointment_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
				type: 'GET',
				headers: AJAX_HEADERS,
				// * Filter Pending Appointments
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.consultation_status == 'Deleted'
					})
					return filteredData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-dark bg-gradient">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

viewOverallDetails = (health_appointment_id) => {
	// * Personal and Case Details
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/super_admin/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			console.log(result)
			const userData = result.data
			const user_id = userData.user_id
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = userData.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			// * User Personal Information
			$('#view_full_name').html(
				userData.health_appointment_assigned_to_user.user_profiles[0].full_name,
			)
			$('#view_student_number').html(userData.health_appointment_assigned_to_user.user_no)
			$('#view_address').html(
				userData.health_appointment_assigned_to_user.user_profiles[0].full_address,
			)
			let birthdate = new Date(
				userData.health_appointment_assigned_to_user.user_profiles[0].birth_date,
			).getTime()
			let currentTimestamp = new Date().getTime()
			let ageInMilliseconds = currentTimestamp - birthdate
			let ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365.25)
			$('#view_age').html(Math.floor(ageInYears))
			$('#view_gender').html(userData.health_appointment_assigned_to_user.user_profiles[0].gender)
			$('#view_civil_status').html(
				userData.health_appointment_assigned_to_user.user_profiles[0].civil_status,
			)
			$('#view_contact_number').html(
				userData.health_appointment_assigned_to_user.user_profiles[0].contact_number,
			)
			$('#view_email_address').html(
				userData.health_appointment_assigned_to_user.user_profiles[0].email_address,
			)

			// * Case Detail
			$('#control_no').html(userData.case_control_number)
			$('#view_consultation_type').html(userData.consultation_type)
			$('#view_consultation_reason').html(userData.consultation_reason)
			let consultationDate = new Date(userData.consultation_date)
			consultationDate = consultationDate.toLocaleDateString('en-US', {
				year: 'numeric',
				month: 'long',
				day: 'numeric',
			})

			$('#view_consultation_date').html(consultationDate)
		},
	})
}

// Delete  Consultation
deleteAppointment = (health_appointment_id) => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you Sure ?</h4>' +
			'<p class="text-muted mx-4 mb-0">Are you Sure You want to Delete?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Delete It!',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'omsss/super_admin/delete_appointment/' + health_appointment_id,
				type: 'DELETE',
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done !</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully Delete Appointment!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-danger w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							window.location.reload()
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
						'<p class="text-muted mx-4 mb-0">There was an error while deleting. Please try again.</p>' +
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
