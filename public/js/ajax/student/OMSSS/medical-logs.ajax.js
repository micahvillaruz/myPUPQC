$(function () {
	loadDoneLogsTable()
	loadCancelledStaffLogsTable()
	loadCancelledStudentLogsTable()
})

// Load datatables
loadDoneLogsTable = () => {
	const dt = $('#done_logs_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/student/appointment_logs',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						return item.consultation_status == 'Done'
					})
					return filterData
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

				// Consultation Type
				{
					data: null,
					render: (data) => {
						const consType = data.consultation_type
						return `${consType}`
					},
				},

				// Attending Consultant
				{
					data: null,
					render: (data) => {
						let healthPhysician
						if (data.attending_physician == null) {
							healthPhysician = 'N/A'
						} else {
							healthPhysician =
								data.health_appointment_assigned_to_physician.user_profiles[0].full_name
						}

						return `${healthPhysician}`
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

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-success">${consultation_status}</span>`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const appointment_type = data.appointment_type
						return `buttons d2 wait ka lang...`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadCancelledStaffLogsTable = () => {
	const dt = $('#cancelled_staff_logs_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/student/appointment_logs',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						return item.consultation_status == 'Cancelled by Staff'
					})
					return filterData
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

				// Consultation Type
				{
					data: null,
					render: (data) => {
						const consType = data.consultation_type
						return `${consType}`
					},
				},

				// Attending Consultant
				{
					data: null,
					render: (data) => {
						let healthPhysician
						if (data.attending_physician == null) {
							healthPhysician = 'N/A'
						} else {
							healthPhysician =
								data.health_appointment_assigned_to_physician.user_profiles[0].full_name
						}

						return `${healthPhysician}`
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

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-info">${consultation_status}</span>`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const appointment_type = data.appointment_type
						return `buttons d2 wait ka lang...`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadCancelledStudentLogsTable = () => {
	const dt = $('#cancelled_student_logs_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/student/appointment_logs',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						return item.consultation_status == 'Cancelled by Student'
					})
					return filterData
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

				// Consultation Type
				{
					data: null,
					render: (data) => {
						const consType = data.consultation_type
						return `${consType}`
					},
				},

				// Attending Consultant
				{
					data: null,
					render: (data) => {
						let healthPhysician
						if (data.attending_physician == null) {
							healthPhysician = 'N/A'
						} else {
							healthPhysician =
								data.health_appointment_assigned_to_physician.user_profiles[0].full_name
						}

						return `${healthPhysician}`
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

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-danger">${consultation_status}</span>`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const appointment_type = data.appointment_type
						return `buttons d2 wait ka lang...`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
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
		url: apiURL + `omsss/student/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = data.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			$('#view_medical_case_details').html(userData.case_control_number)
			$('#view_medical_consultation_type').html(userData.consultation_type)
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
		url: apiURL + `omsss/student/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = data.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null
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
		url: apiURL + `omsss/student/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = data.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			$('#view_guidance_case_details').html(userData.case_control_number)
			$('#view_guidance_consultation_type').html(userData.consultation_type)
			$('#view_guidance_consultation_reason').html(userData.consultation_reason)
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
