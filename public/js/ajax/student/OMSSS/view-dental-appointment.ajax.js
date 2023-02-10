$(function () {
	verifyDentalAppointment()

	const currentDate = new Date()
	const currentYear = currentDate.getFullYear()
	const currentMonth = currentDate.getMonth()
	const dates = []

	let current = new Date(currentDate)
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

	const calendarEl = document.querySelector('#dental-calendar')
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

	$('#addDentalAppointment').on('click', function (e) {
		e.preventDefault() // prevent page refresh
		addNewDentalCase(calendar)
	})
})

verifyDentalConsultationTime = () => {
	const currentTime = new Date().getHours()

	// runs only if the current time is between 6am to 9pm
	if (currentTime >= 6 && currentTime <= 21) {
		// * kapag 6AM to 9PM
		$('#no_dental_consultation').removeClass('d-none')
		$('#scheduled_dental_message').addClass('d-none')
	} else {
		// * kapag 9PM to 6AM
		$('#scheduled_dental_message').removeClass('d-none')
		$('#no_dental_consultation').addClass('d-none')
	}
}

verifyDentalAppointment = () => {
	$.ajax({
		url: apiURL + 'omsss/student/view_dental_appointment',
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (data) => {
			if (data.data.length > 0) {
				// * kapag merong consultation data...
				$('#existing_dental_consultation').removeClass('d-none')
				$('#no_dental_consultation').addClass('d-none')

				// Load card details
				const appointmentDetails = data.data[0]
				const caseControlNumber = appointmentDetails.case_control_number
				const consultationReason = appointmentDetails.consultation_reason
				const attendingPhysician =
					appointmentDetails.attending_physician == null
						? 'Not Assigned Yet'
						: appointmentDetails.health_appointment_assigned_to_physician.user_profiles[0].full_name
				let consultationStatus = appointmentDetails.consultation_status
				if (consultationStatus == 'Approved' || consultationStatus == 'Pending') {
					$('#cancelButton').html(`
                    <button role="button" onclick="cancelAppointment('${appointmentDetails.health_appointment_id}')" class="btn btn-danger bg-gradient waves-effect waves-light"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Appointment</button>
                    `)
					$('#existingConsultationMessage').html(`
                    <p class="fs-15">If you want to create a New Appointment and the status of your consultation is currently <b id="view_consultation_status"></b> and for <b id="view_appointment_type"></b> Appointment, you must cancel your Existing Appointment first. You'll be receiving updates by refreshing the page or through your email. <br /><br /> You can cancel the appointment by clicking the <b>Cancel Appointment</b> button below. Otherwise, wait for your appointment to be Done or Cancelled before creating a New Consultation.</p>
                    `)
				}
				if (consultationStatus == 'Pending') {
					consultationStatus = `<span class="badge rounded-pill bg-warning">${consultationStatus}</span>`
				} else if (
					consultationStatus == 'Cancelled by Student' ||
					consultationStatus == 'Cancelled by Staff'
				) {
					consultationStatus = `<span class="badge rounded-pill bg-info">${consultationStatus}</span>`
					$('#existingConsultationMessage').html(`
                    <p class="fs-15">The status of your consultation is currently <b id="view_consultation_status"></b> and for <b id="view_appointment_type"></b> Appointment. You'll be able to set a new consultation again once your consultation date passes.</p>
                    `)
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
				$('#dentalDetails').html(consultationList)
				$('#control_no').html(caseControlNumber)
				$('#consultation_reason_value').html(consultationReason)
				$('#view_consultation_status').html(consultationStatus)
				$('#view_appointment_type').html(appointmentDetails.appointment_type)
				$('#view_remarks').html(appointmentDetails.remarks)
			} else {
				// * kapag walang consultation data...
				// * verify time naman kung 6AM to 9PM naman siya
				verifyDentalConsultationTime()
			}
		},
	})
}

addNewDentalCase = (calendar) => {
	// ganito magpull ng value sa calendar, ipapasok mo siya sa may function kapag nagsubmit ka na
	const selectedDate = calendar.selectedDates[0]

	// New Dental Case
	if ($('#NewDentalCaseForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#NewDentalCaseForm')[0])
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}
		data = {
			appointment_type: 'Dental',
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
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a Dental Case!</p></div></div>',
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
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a Dental Case. Please try again.</p></div></div>',
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
