$(() => {
	loadDoneLogsTable()
	loadCancelledStaffLogsTable()
	loadCancelledStudentLogsTable()

	$('#addEvaluationForm').submit((e) => {
		e.preventDefault() // prevent the form from submitting

		if ($('#addEvaluationForm')[0].checkValidity()) {
			const form = new FormData($('#addEvaluationForm')[0])

			addNewEvaluation(form, $('#add_health_appointment_id').val())
		}

		// you can now use these values for further processing
	})
})

// Load datatables
loadDoneLogsTable = () => {
	const dt = $('#done_logs_table')

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
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
			],
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

				// Appointment Type
				{
					data: null,
					render: (data) => {
						const appointmentType = data.appointment_type
						return `${appointmentType}`
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
						const health_appointment_id = data.health_appointment_id
						let buttonEvaluation
						if (data.is_evaluated == false) {
							buttonEvaluation = `<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="addEvaluationDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewEvaluationModal"><i class="ri-chat-check-fill fs-5"></i></button>`
						} else {
							buttonEvaluation = `<button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewEvaluationDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#aboutEvaluationModal"><i class="ri-clipboard-fill fs-5"></i></button>`
						}
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            ${buttonEvaluation}
                        </div>
                        `
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
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
			],
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

				// Appointment Type
				{
					data: null,
					render: (data) => {
						const appointmentType = data.appointment_type
						return `${appointmentType}`
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
						return `
                        <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                        </div>
                        `
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
						columns: [0, 1, 2, 3, 4, 5],
					},
				},
			],
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

				// Appointment Type
				{
					data: null,
					render: (data) => {
						const appointmentType = data.appointment_type
						return `${appointmentType}`
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
						return `
                        <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                        </div>
                        `
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
		url: apiURL + `omsss/student/view_appointment/${health_appointment_id}`,
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
				url: apiURL + `omsss/student/medical_history/`,
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
				url: apiURL + `omsss/student/patient_information/`,
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
				url: apiURL + `omsss/student/view_immunization/`,
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

addEvaluationDetails = (health_appointment_id) => {
	$('#add_health_appointment_id').val(health_appointment_id)
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/student/view_appointment/${health_appointment_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		// * Case Detail
		const userData = result.data
		$('#control_no_evaluation').html(userData.case_control_number)
		$('#view_consultation_type_evaluation').html(userData.consultation_type)
		$('#view_consultation_reason_evaluation').html(userData.consultation_reason)
		let consultationDate = new Date(userData.consultation_date)
		consultationDate = consultationDate.toLocaleDateString('en-US', {
			year: 'numeric',
			month: 'long',
			day: 'numeric',
		})

		$('#view_consultation_date_evaluation').html(consultationDate)
		$('#view_physician_evaluation').html(
			userData.health_appointment_assigned_to_physician.user_profiles[0].full_name,
		)
	})
}

viewEvaluationDetails = (health_appointment_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/student/view_evaluation/${health_appointment_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data
		console.log(data)

		// * Case Detail
		$('#control_no_details').html(data.health_appointment_evaluation.case_control_number)
		$('#view_physician_details').html(
			data.health_appointment_evaluation_physician.user_profiles[0].full_name,
		)

		let tableID = ['#quality_rating_stars', '#timeliness_rating_stars', '#courtesy_rating_stars']
		let rating = [data.quality_rating, data.timeliness_rating, data.courtesy_rating]

		for (let i = 0; i < tableID.length; i++) {
			let starsHTML = ''
			for (let j = 1; j <= 5; j++) {
				if (j <= rating[i]) {
					starsHTML += '⭐'
				}
			}
			$(tableID[i]).html(starsHTML)
		}

		$('#evaluation_comments_details').html(data.evaluation_comment)
	})
}

addNewEvaluation = (form, health_appointment_id) => {
	// * Create the data to be sent
	const data = {
		quality_rating: form.get('quality_rating'),
		timeliness_rating: form.get('timeliness_rating'),
		courtesy_rating: form.get('courtesy_rating'),
		evaluation_comment: form.get('evaluation_comment'),
	}

	// * Send the data to the server
	$.ajax({
		type: 'POST',
		url: apiURL + `omsss/student/add_evaluation/${health_appointment_id}`,
		data: data,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added the evaluation!</p></div></div>',
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
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding your evaluation. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}
