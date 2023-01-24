$(function () {
	loadAppointmentHistoryTable()
	getPendingAppointmentHistory()
	getDoneAppointmentHistory()
	getConsultationStatusCount()
	getConsultationTypeCount()

	// var isdoughnutchart = document.getElementById('doughnut1')
	// ;(doughnutChartColors = getChartColorsArray('doughnut1')),
	// 	doughnutChartColors &&
	// 		(lineChart = new Chart(isdoughnutchart, {
	// 			type: 'doughnut',
	// 			data: {
	// 				labels: ['Desktops', 'Tablets'],
	// 				datasets: [
	// 					{
	// 						data: [300, 210],
	// 						backgroundColor: doughnutChartColors,
	// 						hoverBackgroundColor: doughnutChartColors,
	// 						hoverBorderColor: '#fff',
	// 					},
	// 				],
	// 			},
	// 			options: {
	// 				plugins: { legend: { labels: { font: { family: 'Poppins' } } } },
	// 			},
	// 		}))
})

// Load datatables
loadAppointmentHistoryTable = () => {
	const dt = $('#appointment-history-datatable')
	console.log(dt.length)

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
				url: apiURL + 'omsss/super_admin/view_done_appointments',
				type: 'GET',
				// ContentType: 'application/x-www-form-urlencoded',
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
						console.log(consultation_status)
						if (consultation_status == 'Pending') {
							return `<span class="badge rounded-pill bg-warning">Pending</span>`
						} else if (consultation_status == 'Approved') {
							return `<span class="badge rounded-pill bg-success">Approved</span>`
						} else if (consultation_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
						} else if (consultation_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
						} else if (consultation_status == 'Done') {
							return `<span class="badge rounded-pill bg-success">Done</span>`
						}
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
						console.log(data)
						const appointment_type = data.appointment_type
						let modal_to_use, AJAX_to_use
						if (appointment_type == 'Medical') {
							modal_to_use = '#viewMedicalModal'
							AJAX_to_use = `viewMedicalDetails('${data.health_appointment_id}')`
						} else if (appointment_type == 'Dental') {
							modal_to_use = '#viewDentalModal'
							AJAX_to_use = `viewDentalDetails('${data.health_appointment_id}')`
						} else if (appointment_type == 'Guidance') {
							modal_to_use = '#viewGuidanceModal'
							AJAX_to_use = `viewGuidanceDetails('${data.health_appointment_id}')`
						}
						console.log(appointment_type, modal_to_use, AJAX_to_use)
						return `
        <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="${AJAX_to_use}" data-bs-toggle="modal" data-bs-target="${modal_to_use}"><i class="ri-eye-fill fs-5"></i></button>
				<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="${AJAX_to_use}" data-bs-toggle="modal" data-bs-target="${modal_to_use}"><i class="bx bxs-user-x fs-4"></i></button>
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
		success: function (data) {
			// process the data and update the chart
			var chartData = {
				labels: Object.keys(data.consultation_status_count), // extract the keys (i.e. "Done", "Cancelled by Staff", etc.)
				datasets: [
					{
						data: Object.values(data.consultation_status_count), // extract the values (i.e. 1, 1, 1, etc.)
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
		success: function (data) {
			// process the data and update the chart
			var chartData = {
				labels: Object.keys(data.consultation_type_count), // extract the keys (i.e. "Done", "Cancelled by Staff", etc.)
				datasets: [
					{
						data: Object.values(data.consultation_type_count), // extract the values (i.e. 1, 1, 1, etc.)
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
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.appointment_pending_count
				console.log(data)
				$('#appointment_history_pending_medical').attr('data-target', data.Medical)
				$('#appointment_history_pending_dental').attr('data-target', data.Dental)
				$('#appointment_history_pending_guidance').attr('data-target', data.Guidance)
			}
		},
	}).fail(() => console.error('There was an error in retrieving appointment history request data'))
}

getDoneAppointmentHistory = () => {
	$.ajax({
		url: apiURL + `omsss/super_admin/analytics/view_done_appointment`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.appointment_done_count
				console.log(data)
				$('#appointment_history_done_medical').attr('data-target', data.Medical)
				$('#appointment_history_done_dental').attr('data-target', data.Dental)
				$('#appointment_history_done_guidance').attr('data-target', data.Guidance)
			}
		},
	}).fail(() => console.error('There was an error in retrieving appointment history request data'))
}

// View Medical Consultation details
viewMedicalDetails = (health_appointment_id) => {
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
		url: apiURL + `omsss/super_admin/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = userData.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			$('#view_medical_case_details').html(userData.case_control_number)
			$('#view_medical_consultation_type').html(userData.consultation_type)
			console.log(userData.consultation_type)
			$('#view_medical_consultation_reason').html(userData.consultation_reason)
			$('#view_medical_health_physcian').html(
				userProfileData != null ? userProfileData.full_name : 'N/A',
			)
			$('#view_medical_date_of_symptom').html(moment(userData.symptoms_date).format('LL'))
			$('#view_medical_consultation_date').html(moment(userData.consultation_date).format('LL'))
			const consultation_status_data = userData.consultation_status
			let consultation_value
			if (consultation_status_data == 'Pending') {
				consultation_value = `<span class="badge rounded-pill bg-warning">Pending</span>`
			} else if (consultation_status_data == 'Approved') {
				consultation_value = `<span class="badge rounded-pill bg-success">Approved</span>`
			} else if (consultation_status_data == 'Cancelled by Staff') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
			} else if (consultation_status_data == 'Cancelled by Student') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
			}
			$('#view_medical_status').html(consultation_value)
		},
	})
}

// View Dental Consultation details
viewDentalDetails = (health_appointment_id) => {
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
		url: apiURL + `omsss/super_admin/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = userData.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null
			console.log(userData.consultation_type)
			$('#view_dental_case_details').html(userData.case_control_number)
			$('#view_dental_consultation_type').html(userData.consultation_type)
			$('#view_dental_consultation_reason').html(userData.consultation_reason)
			$('#view_dental_health_physcian').html(
				userProfileData != null ? userProfileData.full_name : 'N/A',
			)
			$('#view_dental_symptoms_date').html(moment(userData.symptoms_date).utc().format('LL'))
			$('#view_dental_consultation_date').html(moment(userData.consultation_date).format('LL'))
			const consultation_status_data = userData.consultation_status
			let consultation_value
			if (consultation_status_data == 'Pending') {
				consultation_value = `<span class="badge rounded-pill bg-warning">Pending</span>`
			} else if (consultation_status_data == 'Approved') {
				consultation_value = `<span class="badge rounded-pill bg-success">Approved</span>`
			} else if (consultation_status_data == 'Cancelled by Staff') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
			} else if (consultation_status_data == 'Cancelled by Student') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
			}
			$('#view_dental_status').html(consultation_value)
		},
	})
}

// View Guidance Consultation details
viewGuidanceDetails = (health_appointment_id) => {
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
		url: apiURL + `omsss/super_admin/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = userData.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			$('#view_guidance_case_details').html(userData.case_control_number)
			$('#view_guidance_consultation_type').html(userData.consultation_type)
			$('#view_guidance_consultation_reason').html(userData.consultation_reason)
			$('#view_guidance_consultation_date').html(moment(userData.consultation_date).format('LL'))
			$('#view_guidance_health_physcian').html(
				userProfileData != null ? userProfileData.full_name : 'N/A',
			)
			// $('#view_date_of_symptoms').html(moment(userData.symptoms_date).format('LL'))
			const consultation_status_data = userData.consultation_status
			let consultation_value
			if (consultation_status_data == 'Pending') {
				consultation_value = `<span class="badge rounded-pill bg-warning">Pending</span>`
			} else if (consultation_status_data == 'Approved') {
				consultation_value = `<span class="badge rounded-pill bg-success">Approved</span>`
			} else if (consultation_status_data == 'Cancelled by Staff') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
			} else if (consultation_status_data == 'Cancelled by Student') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
			}
			$('#view_guidance_status').html(consultation_value)
		},
	})
}

// Cancel Dental Consultation
cancelDental = (health_appointment_id) => {
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
			'<p class="text-muted mx-4 mb-0">Are you Sure You want to Cancel it?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Cancel It!',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'omsss/student/cancel_appointment/' + health_appointment_id,
				type: 'PUT',
				dataType: 'json',
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done !</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully Cancel Appointment!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-danger w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// Reload Staff Datatable
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
						'<p class="text-muted mx-4 mb-0">There was an error while canceling. Please try again.</p>' +
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

// Cancel Medical Consultation
cancelMedical = (health_appointment_id) => {
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
			'<p class="text-muted mx-4 mb-0">Are you Sure You want to Cancel?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Cancel It!',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'omsss/student/cancel_appointment/' + health_appointment_id,
				type: 'PUT',
				dataType: 'json',
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done !</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully Cancel Appointment!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-danger w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// Reload Staff Datatable
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
						'<p class="text-muted mx-4 mb-0">There was an error while canceling. Please try again.</p>' +
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
