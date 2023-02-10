$(() => {
	verifyMedicalAppointment()

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

	let completeHolidayDetails
	let holidayDates = []
	$.ajax({
		url: apiURL + 'student/holidays',
		type: 'GET',
		headers: AJAX_HEADERS,
		async: false,
		success: (data) => {
			completeHolidayDetails = data.data
		},
	})

	completeHolidayDetails.forEach((holiday) => {
		holidayDates.push(holiday.holiday_date)
	})

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

	$('#')
})

// Remove form and load card
verifyMedicalAppointment = () => {
	$.ajax({
		url: apiURL + 'omsss/student/view_medical_appointment',
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			if (data.data.length > 0) {
				// * kapag merong consultation data...
				$('#existing_medical_consultation').removeClass('d-none')
				$('#no_medical_consultation').addClass('d-none')

				// Load card details
				const appointmentDetails = data.data[0]
				console.log(appointmentDetails)
				const caseControlNumber = appointmentDetails.case_control_number
				const consultationReason = appointmentDetails.consultation_reason
				const attendingPhysician =
					appointmentDetails.attending_physician == null
						? 'Not Assigned Yet'
						: appointmentDetails.health_appointment_assigned_to_physician.user_profiles[0].full_name
				let consultationStatus = appointmentDetails.consultation_status
				if (consultationStatus == 'Pending') {
					consultationStatus = `<span class="badge rounded-pill bg-warning">${consultationStatus}</span>`
				} else if (
					consultationStatus == 'Cancelled by Student' ||
					consultationStatus == 'Cancelled by Staff'
				) {
					consultationStatus = `<span class="badge rounded-pill bg-info">${consultationStatus}</span>`
				} else if (consultationStatus == 'Done' || consultationStatus == 'Approved') {
					consultationStatus = `<span class="badge badge rounded-pill bg-success">${consultationStatus}</span>`
				}
				let consultationDate = new Date(appointmentDetails.consultation_date)
				consultationDate = consultationDate.toLocaleDateString('en-US', {
					year: 'numeric',
					month: 'long',
					day: 'numeric',
				})

				let consultationList = `
                <tr>
                    <td>${consultationDate}</td>
                    <td>${attendingPhysician}</td>
                    <td>${consultationStatus}</td>
                </tr>
                `
				$('#medicalDetails').html(consultationList)
				$('#control_no').html(caseControlNumber)
				console.log(consultationReason)
				$('#consultation_reason_value').html(consultationReason)
				$('#view_consultation_status').html(consultationStatus)
				$('#view_appointment_type').html(appointmentDetails.appointment_type)
				$('#view_remarks').html(appointmentDetails.remarks)
				$('#cancelButton').html(`
                <button role="button" onclick="cancelAppointment('${appointmentDetails.health_appointment_id}')" class="btn btn-danger bg-gradient waves-effect waves-light"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Appointment</button>
                `)
			} else {
				// * kapag walang consultation data...
				$('#no_medical_consultation').removeClass('d-none')
			}
		},
	})
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
		}).fail((xhr) => {
			Swal.fire({
				html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a Medical Case. ${xhr.responseJSON.message}</p></div></div>`,
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

// Cancel Medical Consultation
cancelMedical = (health_appointment_id) => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})
}

cancelAppointment = (health_appointment_id) => {
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
				headers: AJAX_HEADERS,
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
			}).fail((xhr) => {
				console.log(xhr)
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
