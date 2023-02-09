$(function () {
	loadMedicalTable()

	const currentDate = new Date()
	const currentYear = currentDate.getFullYear()
	const currentMonth = currentDate.getMonth()
	const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0)
	const offset = currentDate.getTimezoneOffset()
	const dates = []

	let current = new Date(currentDate.getTime() - offset * 60 * 1000)
	while (current.getMonth() === currentMonth) {
		if (current.getDay() !== 0 && current.getDay() !== 6) {
			dates.push(current.toISOString().split('T')[0])
		}
		current = new Date(current.getTime() + 24 * 60 * 60 * 1000)
	}
	console.log(dates)

	let completeHolidayDetails
	let holidayDates = []
	$.ajax({
		url: apiURL + 'student/holidays',
		type: 'GET',
		async: false,
		success: (data) => {
			completeHolidayDetails = data.data
		},
	})

	completeHolidayDetails.forEach((holiday) => {
		holidayDates.push(holiday.holiday_date)
	})

	console.log(holidayDates)

	const updatedDates = dates.filter((date) => !holidayDates.includes(date))

	const calendarEl = document.querySelector('#medical-calendar')
	const calendar = new VanillaCalendar(calendarEl, {
		// Options
		settings: {
			iso8601: false,
			range: {
				min: new Date(currentYear, currentMonth, 1),
				max: new Date(currentYear, currentMonth + 1, 0),
				enabled: updatedDates,
			},
			selection: {
				month: false,
				year: false,
			},
			visibility: {
				today: false,
			},
			popups: {},
		},
		CSSClasses: {
			weekDay: 'text-primary',
			weekDayWeekend: 'text-success',
		},
	})
	calendar.init()

	$('#addMedicalAppointment').on('click', function (e) {
		e.preventDefault() // prevent page refresh
		addNewMedicalCase(calendar)
	})
})
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
				// ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Appointment Code/Case Control No.
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

				// Appointment Date
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
        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewMedicalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill fs-5"></i></button>
				<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelMedical('${data.health_appointment_id}')"><i class="bx bxs-user-x fs-4"></i></button>
				</div`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

addNewMedicalCase = (calendar) => {
	// ganito magpull ng value sa calendar, ipapasok mo siya sa may function kapag nagsubmit ka na
	const selectedDate = calendar.selectedDates[0]
	console.log(`Selected date: ${selectedDate}`)

	// New Medical Case
	if ($('#NewMedicalCaseForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#NewMedicalCaseForm')[0])
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}
		data = {
			appointment_type: 'Medical',
			consultation_type: form.get('consultation_type'),
			consultation_reason: form.get('consultation_reason'),
			consultation_date: selectedDate,
		}
		console.log(data)
		$.ajax({
			url: apiURL + 'omsss/student/add_appointment',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a Medical Case!</p></div></div>',
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
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a Medical Case. Please try again.</p></div></div>',
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

			$('#view_case_details').html(userData.case_control_number)
			$('#view_consultation_type').html(userData.consultation_type)
			$('#view_consultation_reason').html(userData.consultation_reason)
			$('#view_health_physcian').html(userProfileData != null ? userProfileData.full_name : 'N/A')
			$('#view_date_of_symptom').html(moment(userData.symptoms_date).format('LL'))
			$('#view_consultation_date').html(moment(userData.consultation_date).format('LL'))
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
			$('#view_status').html(consultation_value)
		},
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
