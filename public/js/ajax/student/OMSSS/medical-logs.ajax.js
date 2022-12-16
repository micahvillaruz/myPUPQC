$(function () {
	loadMedicalLogsTable()
})

// Load datatables
loadMedicalLogsTable = () => {
	const dt = $('#medical-logs-datatable')

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
				url: apiURL + 'omsss/student/appointment_logs',
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
						if (data.health_appointment_assigned_to_physician) {
							const healthPhysician =
								data.health_appointment_assigned_to_physician.user_profiles[0].full_name
						}
						const healthPhysician = 'N/A'

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
						console.log(consultation_status)
						if (consultation_status == 'Pending') {
							return `<span class="badge rounded-pill bg-warning">Pending</span>`
						} else if (consultation_status == 'Approved') {
							return `<span class="badge rounded-pill bg-success">Approved</span>`
						} else if (consultation_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
						} else if (consultation_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
						}
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
				</div>`
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
			console.log(result)
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = data.health_appointment_assigned_to_physician.user_profiles[0]
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
