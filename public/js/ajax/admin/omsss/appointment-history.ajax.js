$(function () {
	loadAppointmentHistoryTable()
	getPendingAppointmentHistory()
	getDoneAppointmentHistory()
	getConsultationStatusCount()
	getConsultationTypeCount()
})

// Load datatables
loadAppointmentHistoryTable = () => {
	const dt = $('#appointment_history_table')

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
						columns: [0, 1, 2, 3],
					},
				},
			],
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_done_appointments',
				type: 'GET',
				headers: AJAX_HEADERS,
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

getConsultationStatusCount = () => {
	$.ajax({
		url: apiURL + `omsss/super_admin/analytics/pie_chart_consultation_status`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: function (data) {
			let dataForChart = data.data
			// process the data and update the chart
			var chartData = {
				labels: Object.keys(dataForChart), // extract the keys (i.e. "Done", "Cancelled by Staff", etc.)
				datasets: [
					{
						data: Object.values(dataForChart), // extract the values (i.e. 1, 1, 1, etc.)
						backgroundColor: ['#9ACD32', '#6495ED', '#87ceeb', '#ffd700', '#FFB347', '#FF6961'], // use the colors specified in the canvas element's data-colors attribute
					},
				],
			}

			var ctx = document.getElementById('doughnut1').getContext('2d')
			var chart = new Chart(ctx, {
				type: 'doughnut',
				data: chartData,
			})
		},
		error: function (xhr, status, error) {
			console.log(error)
		},
	})
}

getConsultationTypeCount = () => {
	$.ajax({
		url: apiURL + `omsss/super_admin/analytics/consultation_type_count`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: function (data) {
			// process the data and update the chart
			var chartData = {
				labels: Object.keys(data.data), // extract the keys (i.e. "Done", "Cancelled by Staff", etc.)
				datasets: [
					{
						data: Object.values(data.data), // extract the values (i.e. 1, 1, 1, etc.)
						backgroundColor: ['#87CEEB', '#FFB6C1'], // use the colors specified in the canvas element's data-colors attribute
					},
				],
			}
			var ctx = document.getElementById('doughnut2').getContext('2d')
			var chart = new Chart(ctx, {
				type: 'doughnut',
				data: chartData,
			})
		},
		error: function (xhr, status, error) {
			console.log(error)
		},
	})
}

getPendingAppointmentHistory = () => {
	$.ajax({
		url: apiURL + `omsss/super_admin/analytics/view_pending_appointment`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: function (result) {
			if (result) {
				// Get data from result
				const data = result.data.appointment_pending_count
				$('#appointment_history_pending_medical').html(data.Medical)
				$('#appointment_history_pending_dental').html(data.Dental)
				$('#appointment_history_pending_guidance').html(data.Guidance)
			}
		},
		error: function (xhr, status, error) {
			console.log(xhr)
		},
	})
}

getDoneAppointmentHistory = () => {
	$.ajax({
		url: apiURL + `omsss/super_admin/analytics/view_done_appointment`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				const data = result.data.appointment_done_count
				$('#appointment_history_done_medical').html(data.Medical)
				$('#appointment_history_done_dental').html(data.Dental)
				$('#appointment_history_done_guidance').html(data.Guidance)
			}
		},
	}).fail(() => console.error('There was an error in retrieving appointment history request data'))
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
