$(function () {
	loadDentalDoneTable()
	loadDentalCancelledStaffTable()
	loadMedicalCancelledStudentTable()
	getDentalAnalytics()
})

// Load datatables
loadDentalDoneTable = () => {
	const dt = $('#done_appointments_table')

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
				url: apiURL + 'omsss/pup_staff/view_appointment_analytics/Dental',
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
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewDentalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewDentalModal"><i class="ri-eye-fill fs-5"></i></button>
				        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadDentalCancelledStaffTable = () => {
	const dt = $('#cancelled_staff_appointments_table')

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
				url: apiURL + 'omsss/pup_staff/view_appointment_analytics/Dental',
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
						return `<span class="badge rounded-pill bg-danger">${consultation_status}</span>`
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
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewDentalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewDentalModal"><i class="ri-eye-fill fs-5"></i></button>
				        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadMedicalCancelledStudentTable = () => {
	const dt = $('#cancelled_student_appointments_table')

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
				url: apiURL + 'omsss/pup_staff/view_appointment_analytics/Dental',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						console.log(item)
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
						return `<span class="badge rounded-pill bg-danger">${consultation_status}</span>`
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
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewDentalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewDentalModal"><i class="ri-eye-fill fs-5"></i></button>
				        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

getDentalAnalytics = () => {
	$.ajax({
		url: apiURL + `omsss/pup_staff/view_analytics_for_consultation_status/Dental`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.consultation_status_count
				console.log(data)
				$('#dental_analytics_pending').attr('data-target', data.pending)
				$('#dental_analytics_done').attr('data-target', data.done)
				$('#dental_analytics_cancelled_by_student').attr('data-target', data.cancelled_by_student)
				$('#dental_analytics_cancelled_by_staff').attr('data-target', data.cancelled_by_staff)
			}
		},
	}).fail(() => console.error('There was an error in retrieving dental request data'))
}

// View Dental Consultation details
viewDentalDetails = (health_appointment_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/pup_staff/view_specific_appointment/${health_appointment_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			console.log(result)
			const userData = result.data
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
			// % =================================
			// * Health Information (Medical History)
			$.ajax({
				type: 'GET',
				cache: false,
				url: apiURL + `omsss/pup_staff/medical_history/${userData.user_id}`,
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					const data = result.data
					console.log(data)
					const medical_history = data.medical_history ?? []
					// * loop through each medical history and in bullet
					let bullet = ''
					medical_history.forEach((history) => {
						bullet += `<li>${history}</li>`
					})
					$('#view_medical_history').html(`<ul>${bullet}</ul>`)

					bullet = ''
					const family_history = data.family_history ?? []
					family_history.forEach((history) => {
						bullet += `<li>${history}</li>`
					})
					$('#view_family_history').html(`<ul>${bullet}</ul>`)

					bullet = ''
					const allergies = data.allergy ?? []
					allergies.forEach((history) => {
						bullet += `<li>${history}</li>`
					})
					$('#view_allergies').html(`<ul>${bullet}</ul>`)

					bullet = ''
					const medication = data.medications ?? []
					medication.forEach((history) => {
						bullet += `<li>${history}</li>`
					})
					$('#view_medications').html(`<ul>${bullet}</ul>`)

					const social_history = data.social_history
					// * value {smoker: false, alcoholic: true}
					// * Create a badge if smoker or non smoker and alcholic or non alcoholic
					if (social_history != null) {
						let smoker = social_history.smoker
							? `<span class="badge bg-info">Smoker</span>`
							: `<span class="badge bg-danger">Non Smoker</span>`
						let alcoholic = social_history.alcoholic
							? `<span class="badge bg-info">Alcoholic</span>`
							: `<span class="badge bg-danger">Non Alcoholic</span>`
						$('#view_social_history').html(`${smoker} ${alcoholic}`)
					} else {
						$('#view_social_history').html(`<span class="badge bg-danger">No Data</span>`)
					}
				},
			})
			// % =================================
			// * Patient Information (kadugtong ng Personal Information sa baba)
			$.ajax({
				type: 'GET',
				cache: false,
				url: apiURL + `omsss/pup_staff/patient_information/${userData.user_id}`,
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					const data = result.data
					const guardian_name =
						data.emergency_contact_name ?? `<span class="badge bg-danger">No Data</span>`
					const guardian_contact_number =
						data.emergency_contact_number ?? `<span class="badge bg-danger">No Data</span>`
					const guardian_address =
						data.emergency_contact_address ?? `<span class="badge bg-danger">No Data</span>`
					const guardian_email =
						data.emergency_contact_email ?? `<span class="badge bg-danger">No Data</span>`
					const philhealth_id_image =
						data.philhealth_id_image != null
							? `<a href="${data.philhealth_id_image}" target="_blank" class="btn btn-primary btn-sm">View PhilHealth ID</a>`
							: `<span class="badge bg-danger">No Data</span>`

					$('#view_guardian_name').html(guardian_name)
					$('#view_guardian_number').html(guardian_contact_number)
					$('#view_guardian_address').html(guardian_address)
					$('#view_guardian_email').html(guardian_email)
					$('#view_philhealth_id').html(philhealth_id_image)
				},
			})
			// % =================================
			// * Immunization
			$.ajax({
				type: 'GET',
				cache: false,
				url: apiURL + `omsss/pup_staff/view_immunization/${userData.user_id}`,
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					const data = result.data
					const vaccination_card = data.vaccination_card

					let button_vaccination =
						vaccination_card != null
							? `<a href="${vaccination_card}" target="_blank" class="btn btn-primary btn-sm">View Vaccination Card</a>`
							: `<span class="badge bg-danger">No Data</span>`

					$('#view_vaccination_card').html(button_vaccination)
				},
			})
		},
	})
}
