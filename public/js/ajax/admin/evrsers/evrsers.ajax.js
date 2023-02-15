$(function () {
	allReservationsTable()
})

// View Own Reservation details
viewDetailsReservationAdmin = (reservation_id) => {
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
		url: apiURL + `evrsers/super_admin/view_reservation/${reservation_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			const venue = userData.facilities_assigned_to_reservation.facility_name
			const venueimage = userData.facilities_assigned_to_reservation.facility_picture
			console.log(userData)
			console.log(venue)

			$('#reserve_number').html(userData.reservation_number)
			$('#organization').html(userData.organization_name)
			$('#event_title').html(userData.event_title)
			$('#facility_name').html(venue)
			$('#facility_image').html(`<embed src="${venueimage}" class="w-75"></embed>`)
			$('#event_details').html(userData.event_details)
			$('#reserve_date').html(moment(userData.reserve_date).format('LL'))
			const time = `${userData.time_from} - ${userData.time_to}`
			$('#time').html(time)
			$('#remarks').html(userData.remarks)
			$('#attachment1').html(
				`<i class="ri-file-fill text-primary me-2"></i><a href="${userData.reserve_attachments_1}" target="_blank" class="link fw-bold">Event Request</a>`,
			)
			$('#attachment2').html(
				`<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Concept Paper</a>`,
			)
			$('#attachment3').html(
				`<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Others</a>`,
			)
		},
	})
}

allReservationsTable = () => {
	const dt = $('#reservations-datatable')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'evrsers/super_admin/view_list_reservation/',
				type: 'GET',
				headers: AJAX_HEADERS,
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
						console.log(data)
						const reserve_status = data.reserve_status
						if (reserve_status == 'Pending') {
							return `<span class="badge rounded-pill bg-secondary">${reserve_status}</span>`
						} else if (reserve_status == 'Deleted') {
							return `<span class="badge rounded-pill bg-danger">${reserve_status}</span>`
						} else if (reserve_status == 'Cancelled by Staff') {
							return `<span class="badge rounded-pill badge-soft-danger">${reserve_status}</span>`
						} else if (reserve_status == 'Cancelled by Student') {
							return `<span class="badge rounded-pill badge-soft-danger">${reserve_status}</span>`
						} else if (reserve_status == 'Approved') {
							return `<span class="badge rounded-pill bg-success">${reserve_status}</span>`
						} else {
							return `<span class="badge rounded-pill bg-warning">${reserve_status}</span>`
						}
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						if (data.reserve_status == 'Pending') {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editReservationModal" onclick = "editReservation('${data.reservation_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#cancelReservationModal" onclick="deleteReservation('${data.reservation_id}')"><i class="ri-delete-bin-fill fs-5"></i></button> 
                            </div>
                                `
						} else if (data.reserve_status == 'Deleted') {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editReservationModal" onclick = "editReservation('${data.reservation_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                            </div>
                                `
						} else if (data.reserve_status == 'Cancelled by Student') {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
						} else if (data.reserve_status == 'Cancelled by Staff') {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
						} else if (data.reserve_status == 'Approved') {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
						} else {
							return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                            </div>
                                `
						}
					},
				},
			],
			order: [[5, 'desc']],
		})
	}
}
