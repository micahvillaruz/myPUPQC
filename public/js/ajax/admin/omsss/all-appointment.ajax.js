$(function () {
	loadAllAppointmentsTable()
})

// Load datatables
loadAllAppointmentsTable = () => {
	const dt = $('#all_appointments')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/super_admin/view_appointments_except_done',
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
						if (consultation_status == 'Pending') {
							return `<span class="badge rounded-pill bg-warning">Pending</span>`
						} else if (consultation_status == 'Approved') {
							return `<span class="badge rounded-pill bg-success">Approved</span>`
						} else if (consultation_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
						} else if (consultation_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
						} else if (consultation_status == 'Deleted') {
							return `<span class="badge rounded-pill bg-dark">Deleted</span>`
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
						const health_appointment_id = data.health_appointment_id
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOverallDetails('${health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewOverallModal"><i class="ri-eye-fill fs-5"></i></button>
                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteAppointment('${data.health_appointment_id}')"><i class="bx bxs-user-x fs-4"></i></button>
                        </div>`
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
			// % =================================
			// * Health Information (Medical History)
			$.ajax({
				type: 'GET',
				cache: false,
				url: apiURL + `omsss/super_admin/medical_history/${user_id}`,
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
				url: apiURL + `omsss/super_admin/patient_information/${user_id}`,
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
				url: apiURL + `omsss/super_admin/view_immunization/${user_id}`,
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
							reloadPage()
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
