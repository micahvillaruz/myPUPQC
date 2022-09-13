$(function () {
	loadMedicalTable()

	$('#addNewMedicalCaseForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addNewMedicalCase()
	})
})

addNewMedicalCase = () => {
	// New Medical Case
	if ($('#addNewMedicalCaseForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#addNewMedicalCaseForm')[0])

		data = {
			consultation_reason: form.get('consultation_reason'),
			health_appointment_assigned_to_physician: form.get('health_appointment_assigned_to_physician'),
			symptoms_date: form.get('symptoms_date'),
			consultation_date: form.get('consultation_date'),
			consultation_time: form.get('consultation_time'),
		}

		$.ajax({
			url: apiURL + 'omsss/student/add_appointment',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a PUP Staff!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						$('#addMedicalModal').modal('hide')
						$('form#addNewMedicalCaseForm')[0].reset()

						// Reload Medical Consultation Datatable
						loadMedicalTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a PUP Staff. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-primary w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	}
}

// Load datatables
loadMedicalTable = () => {
	const dt = $('#medical-datatable')

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
				url: apiURL + 'omsss/student/view_medical_appointment',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
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

				// Symptoms Date
				{
					data: null,
					render: (data) => {
						const sympDate = data.symptoms_date

						return `${sympDate}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.is_blacklist
							? `<span class="badge rounded-pill bg-warning">Pending</span>`
							: `<span class="badge rounded-pill bg-success">Approved</span>`
					},
				},

				// Attending Consultant
				{
					data: null,
					render: (data) => {
						const healthPhysician = data.user_profiles.full_name
						return `${healthPhysician}`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation = moment(data.consultation_date + data.consultation_date).format('LL')
						return `${consultation}`
					},
				},
       //Action
       {
        data: null,
        class: 'text-center',
        render: (data) => {
            let activationBtn = data.is_blacklist ?
                `<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="activateStudent('${data.health_appointment_id}')"><i class="bx bxs-user-check fs-4"></i></button>` :
                `<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deactivateStudent('${data.health_appointment_id}')"><i class="bx bxs-user-x fs-4"></i></button>`
            return `
        <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewMedicalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill fs-5"></i></button>
        ${activationBtn}
        </div>`
        },
       },
			],
			order: [[0, 'asc']],
		})
	}
}

// View Medical Consultation details
viewMedicalDetails = (user_id) => {
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
		url: apiURL + `omsss/student/view_medical_appointment${user_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			const userProfileData = result.data.user_profiles

			$('#view_case_details').html(userData.case_control_number)
      $('#view_consultation_reason').html(userData.consultation_reason)
			$('#view_health_physcian').html(userProfileData.full_name)
      $('#view_date_of_symptoms').html(userData.symptoms_date)
			$('#view_consultation_date').html(userData.consultation_date)
			$('#view_consultation_time').html(userData.consultation_time)
      $('#view_status').html(
				userData.is_blacklist
					? '<span class="fs-12 badge rounded-pill bg-warning" >Pending</span>'
					: '<span class="fs-12 badge rounded-pill bg-success" >Approved</span>',
			)
		},
	})
}
getMedical = (user_id) => {
	$.ajax({
		url: apiURL + `omsss/student/view_medical_appointment${user_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				$('#edit_case_details').val(data.case_control_number)

				$('#edit_consultation_reason').val(data.consultation_reason)
				$('#edit_health_physcian').val(data.user_profiles.full_name)
				$('#edit_date_of_symptoms').val(data.symptoms_date)
				$('#edit_consultation_date').val(data.consultation_date)
				$('#edit_consultation_time').val(data.consultation_time)
			}
		},
	}).fail(() => console.error('There was an error in retrieving medical consultation data'))
}
