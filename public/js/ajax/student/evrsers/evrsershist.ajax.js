$(function () {
	fetchDoneHistory()
	fetchCancelledStudentHistory()
	fetchCancelledStaffHistory()
})

// View Own Reservation details
viewReservationDetails = (reservation_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `evrsers/student/view_reservation/${reservation_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			const userData = result.data
			// const venue = userData.facilities_assigned_to_reservation.facility_name
			// console.log(venue)

			$('#reserve_number').html(userData.reservation_number)

			let organization_name =
				userData.organization_assigned_to_reservations.organization_abbreviation
			console.log(organization_name)
			let acadorg = ['CHRS', 'COMMITS', 'DOMT.CS', 'FBTO', 'JMS', 'SPAS', 'YES']
			let nonacadorg = ['KATAGA', 'MUSA', 'PSC', 'Vox Nova', 'Other']
			let studgov = ['SSC', 'COL']

			if (acadorg.includes(organization_name)) {
				console.log('True')
				$('#organization').html(
					`<span class="fs-4 badge badge-outline-info fw-bold mb-0">${organization_name}</span>`,
				)
			} else if (nonacadorg.includes(organization_name)) {
				console.log('True')
				$('#organization').html(
					`<h5 class="fs-4 badge badge-outline-danger fw-bold mb-0">${organization_name}</h5>`,
				)
			} else if (studgov.includes(organization_name)) {
				console.log('True')
				$('#organization').html(
					`<h5 class="fs-4 badge badge-outline-dark fw-bold mb-0">${organization_name}</h5>`,
				)
			}

			event_title = userData.event_title
			// convert to all caps
			event_title = event_title.toUpperCase()
			$('#event_title').html(event_title)
			// $('#facility_name').html(venue)
			$('#event_details').html(userData.event_details)
			$('#reserve_date').html(moment(userData.reserve_date).format('LL'))
			const time = `${userData.time_from} - ${userData.time_to}`
			$('#time').html(time)

			var objectives = userData.pup_objectives
			// check if there is a hyphen in the middle of the string
			if (objectives.includes('-')) {
				// split the string into an array
				objectives = objectives.split('-')
				// loop through the array
				objectives.forEach((objective, index) => {
					// display the array elements as list items
					objectives[index] = `<li>${objective}</li>`
				})
				objectives.splice(0, 1)
				objectives = objectives.join('')
			}

			$('#objectives').html(objectives)
			$('#pillar').html(userData.pup_pillars)
			$('#remarks').html(userData.remarks)
			$('#attachment1').html(
				`<i class="ri-file-fill text-primary me-2"></i><a href="${userData.event_request}" target="_blank" class="link fw-bold">Event Request</a>`,
			)
			$('#attachment2').html(
				`<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.concept_paper}" target="_blank" class="link fw-bold">Concept Paper</a>`,
			)
			$('#attachment3').html(
				`<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.others}" target="_blank" class="link fw-bold">Others</a>`,
			)
			let reservation_status = userData.reserve_status
			if (reservation_status == 'Done') {
				$('#reservation-status').html(
					`<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="ri-2x ri-check-line fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
				)
			} else if (reservation_status == 'Cancelled by Student') {
				$('#reservation-status').html(
					`<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="ri-2x ri-close-line fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
				)
			} else if (reservation_status == 'Cancelled by Staff') {
				$('#reservation-status').html(
					`<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="ri-2x ri-close-line fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
				)
			}
		},
	})
}

//View All Own Reservation History
fetchDoneHistory = () => {
	const dt = $('#done_history')

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
				url: apiURL + `evrsers/student/view_history`,
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.reserve_status == 'Done'
					})
					return filteredData
				},
			},
			columns: [
				// Reservation Control Number
				{
					data: null,
					render: (data) => {
						const reservation_number = data.reservation_number
						return `${reservation_number}`
					},
				},
				// Event Title
				{
					data: null,
					render: (data) => {
						const event_title = data.event_title
						return `${event_title}`
					},
				},

				// Venue
				{
					data: null,
					render: (data) => {
						const facility_name = data.facilities_assigned_to_reservation.facility_name
						return `${facility_name}`
					},
				},

				// Date
				{
					data: null,
					render: (data) => {
						const reserve_date = moment(data.reserve_date).format('LL')
						return `${reserve_date}`
					},
				},

				// Time
				{
					data: null,
					render: (data) => {
						const time_from = data.time_from
						const time_to = data.time_to
						return `${time_from + ' - ' + time_to}`
					},
				},

				// Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const reserve_status = data.reserve_status
						if (reserve_status == 'Done') {
							return `<span class="badge rounded-pill bg-success">Done</span>`
						} else if (reserve_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
						} else if (reserve_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
						}
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						// console.log(data.reservation_id)
						return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOwnReservation" onclick="viewReservationDetails('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
					},
				},
			],
			order: [[4, 'desc']],
		})
	}
}

fetchCancelledStudentHistory = () => {
	const dt = $('#cancelled_by_student_history')

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
				url: apiURL + `evrsers/student/view_history`,
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.reserve_status == 'Cancelled by Student'
					})
					return filteredData
				},
			},
			columns: [
				// Reservation Control Number
				{
					data: null,
					render: (data) => {
						const reservation_number = data.reservation_number
						return `${reservation_number}`
					},
				},
				// Event Title
				{
					data: null,
					render: (data) => {
						const event_title = data.event_title
						return `${event_title}`
					},
				},

				// Venue
				{
					data: null,
					render: (data) => {
						const facility_name = data.facilities_assigned_to_reservation.facility_name
						return `${facility_name}`
					},
				},

				// Date
				{
					data: null,
					render: (data) => {
						const reserve_date = moment(data.reserve_date).format('LL')
						return `${reserve_date}`
					},
				},

				// Time
				{
					data: null,
					render: (data) => {
						const time_from = data.time_from
						const time_to = data.time_to
						return `${time_from + ' - ' + time_to}`
					},
				},

				// Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const reserve_status = data.reserve_status
						if (reserve_status == 'Done') {
							return `<span class="badge rounded-pill bg-success">Done</span>`
						} else if (reserve_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
						} else if (reserve_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
						}
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						// console.log(data.reservation_id)
						return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOwnReservation" onclick="viewReservationDetails('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
					},
				},
			],
			order: [[4, 'desc']],
		})
	}
}

fetchCancelledStaffHistory = () => {
	const dt = $('#cancelled_by_staff_history')

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
				url: apiURL + `evrsers/student/view_history`,
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (result) => {
					const data = result.data
					const filteredData = data.filter((item) => {
						return item.reserve_status == 'Cancelled by Staff'
					})
					return filteredData
				},
			},
			columns: [
				// Reservation Control Number
				{
					data: null,
					render: (data) => {
						const reservation_number = data.reservation_number
						return `${reservation_number}`
					},
				},
				// Event Title
				{
					data: null,
					render: (data) => {
						const event_title = data.event_title
						return `${event_title}`
					},
				},

				// Venue
				{
					data: null,
					render: (data) => {
						const facility_name = data.facilities_assigned_to_reservation.facility_name
						return `${facility_name}`
					},
				},

				// Date
				{
					data: null,
					render: (data) => {
						const reserve_date = moment(data.reserve_date).format('LL')
						return `${reserve_date}`
					},
				},

				// Time
				{
					data: null,
					render: (data) => {
						const time_from = data.time_from
						const time_to = data.time_to
						return `${time_from + ' - ' + time_to}`
					},
				},

				// Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const reserve_status = data.reserve_status
						if (reserve_status == 'Done') {
							return `<span class="badge rounded-pill bg-success">Done</span>`
						} else if (reserve_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
						} else if (reserve_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
						}
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						// console.log(data.reservation_id)
						return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOwnReservation" onclick="viewReservationDetails('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
					},
				},
			],
			order: [[4, 'desc']],
		})
	}
}
