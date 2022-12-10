$(function () {
	loadPendingRequests()
	loadApprovedRequests()

	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#pending-datatables').DataTable().columns.adjust().responsive.recalc()
		$('#approved-datatables').DataTable().columns.adjust().responsive.recalc()
	})

	$('#approveRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		approveRequest()
	})

	$('#cancelRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		cancelRequest()
	})

	$('#forProcessingRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		forProcessingRequest()
	})

	$('#readyForPickupRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		readyforPickupRequest()
	})

	$('#releasedRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		releasedRequest()
	})
})

// Load Pending Requests Table
loadPendingRequests = () => {
	const dt = $('#pending-datatables')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_requests/Pending`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Control Number
				{
					data: null,
					render: (data) => {
						return `<span class="text-primary fw-medium">${data.control_no}</span>`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						const gender = data.user_assigned_to_request.user_profiles[0].gender
						const fullName = data.user_assigned_to_request.user_profiles[0].full_name

						if (gender == 'Male') {
							return `
							<div class="d-flex align-items-center fw-medium">
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
								<div>
									<span class="d-block fw-medium">${fullName}</span>
									<i class="mdi mdi-gender-male text-info"></i>
									<small>${gender}</small>
								</div>
							</div>
						`
						} else {
							return `
							<div class="d-flex align-items-center fw-medium">
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-1.png" class="avatar-xs rounded-circle me-2">
								<div>
									<span class="d-block fw-medium">${fullName}</span>
									<i class="mdi mdi-gender-female text-danger"></i>
									<small>${gender}</small>
								</div>
							</div>
						`
						}
					},
				},

				// Date Filed
				{
					data: null,
					render: (data) => {
						const date = moment(data.pending_for_clearance).format('DD, MMM. YYYY')
						const time = moment(data.pending_for_clearance).format('hh:mm A')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
							</div>
						`
					},
				},

				// Details
				{
					data: null,
					render: (data) => {
						const course = data.user_assigned_to_request.education_profile.course_when_admitted
						const purpose = data.purpose_of_request
						return `
							<table>
								<tbody>
									<tr>
										<td>
											<span class="fw-medium badge bg-primary">Course: </span>
										</td>
										<td><span class="text-uppercase">${course}</span></td>
									</tr>
									<tr>
										<td>
											<span class="fw-medium badge bg-primary me-3">Purpose: </span>
										</td>
										<td>${purpose}</td>
									</tr>
								</tbody>
							</table>
							<div class="mt-3 d-flex flex-column justify-content-end">
								<button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequest">View Details</button>
								<small class="d-block fst-italic text-center">Always "View Details" for more information</small>
							</div>
						`
					},
				},

				// Request Status
				{
					data: null,
					render: (data) => {
						return `
							<div class="mt-2 d-grid fw-bolder badge badge-soft-warning position-relative">
								<i class="m-2 mdi mdi-clock fs-13"></i>
								<span class="pb-2 text-uppercase">${data.status_of_request}</span>
								<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
							</div>
							`
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
							<div class="dropdown d-inline-block">
								<button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#approveRequestModal">
									<i class="ri-check-fill fs-5 fw-bold"></i>
								</button>
								<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#cancelRequestModal">
									<i class="ri-close-fill fs-5 fw-bold"></i>
								</button>
							</div>
						`
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Load Approved Requests Table
loadApprovedRequests = () => {
	const dt = $('#approved-datatables')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_requests/Approved`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Control Number
				{
					data: null,
					render: (data) => {
						return `<span class="text-primary fw-medium">${data.control_no}</span>`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						const gender = data.user_assigned_to_request.user_profiles[0].gender
						const fullName = data.user_assigned_to_request.user_profiles[0].full_name

						if (gender == 'Male') {
							return `
							<div class="d-flex align-items-center fw-medium">
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-xs rounded-circle me-2">
								<div>
									<span class="d-block fw-medium">${fullName}</span>
									<i class="mdi mdi-gender-male text-info"></i>
									<small>${gender}</small>
								</div>
							</div>
						`
						} else {
							return `
							<div class="d-flex align-items-center fw-medium">
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-1.png" class="avatar-xs rounded-circle me-2">
								<div>
									<span class="d-block fw-medium">${fullName}</span>
									<i class="mdi mdi-gender-female text-danger"></i>
									<small>${gender}</small>
								</div>
							</div>
						`
						}
					},
				},

				// Date Filed
				{
					data: null,
					render: (data) => {
						const date = moment(data.pending_for_clearance).format('DD, MMM. YYYY')
						const time = moment(data.pending_for_clearance).format('hh:mm A')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
							</div>
						`
					},
				},

				// Payment Status
				{
					data: null,
					render: (data) => {
						if (data.payment_status === 'Pending') {
							return `
								<div class="d-block badge badge-soft-warning align-items-center">
									<i class="me-2 mdi mdi-cash-fast fs-13"></i>
									<span class="text-uppercase">${data.payment_status}</span>
								</div>
							`
						} else if (data.payment_status === 'Paid') {
							return `
								<div class="d-block badge badge-soft-success align-items-center">
									<i class="me-2 mdi mdi-cash-check fs-13"></i>
									<span class="text-uppercase">${data.payment_status}</span>
								</div>
								<span class="mt-1 d-block badge badge-soft-dark badge-border">OR No. ${data.or_no} </span>
							`
						}
					},
				},

				// Details
				{
					data: null,
					width: '30%',
					render: (data) => {
						const course = data.user_assigned_to_request.education_profile.course_when_admitted
						const purpose = data.purpose_of_request
						return `
							<table>
								<tbody>
									<tr>
										<td>
											<span class="fw-medium badge bg-primary">Course: </span>
										</td>
										<td><span class="text-uppercase">${course}</span></td>
									</tr>
									<tr>
										<td>
											<span class="fw-medium badge bg-primary me-3">Purpose: </span>
										</td>
										<td>${purpose}</td>
									</tr>
								</tbody>
							</table>
							<div class="mt-3 d-flex flex-column justify-content-end">
								<button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails">View Details</button>
								<small class="d-block fst-italic text-center">Always "View Details" for more information</small>
							</div>
						`
					},
				},

				// Request Status
				{
					data: null,
					render: (data) => {
						const requestStatus = data.status_of_request

						if (requestStatus === 'For Clearance') {
							return `
								<div class="mt-2 d-grid badge badge-soft-danger position-relative">
									<i class="m-2 mdi mdi-nfc-search-variant fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
							`
						} else if (requestStatus === 'For Evaluation/Processing') {
							return `
								<div class="mt-2 d-grid badge badge-soft-info position-relative">
									<i class="m-2 mdi mdi-file-sign fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
							`
						} else if (requestStatus === 'Ready for Pickup') {
							return `
								<div class="mt-2 d-grid badge badge-soft-dark position-relative">
									<i class="m-2 ri-user-received-2-line fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
							`
						}
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const requestStatus = data.status_of_request

						if (requestStatus === 'For Clearance') {
							return `
								<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#forProcessingModal">
									<i class="mdi mdi-file-sign fs-5"></i>
								</button>
							`
						} else if (requestStatus === 'For Evaluation/Processing') {
							return `
								<button type="button" class="btn btn-dark btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#readyforPickupModal">
									<i class="ri-user-received-2-line fs-5"></i>
								</button>
							`
						} else if (requestStatus === 'Ready for Pickup') {
							return `
								<button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#releasedModal">
									<i class="ri-checkbox-circle-line fs-5"></i>
								</button>
							`
						}
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Approve Request
approveRequest = () => {
	if (!$('#approveRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully approved this request!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#approveRequestModal').modal('hide')
			$('form#approveRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Cancel Request
cancelRequest = () => {
	if (!$('#cancelRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully cancelled this request!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#cancelRequestModal').modal('hide')
			$('form#cancelRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// for Evaluation / Processing
forProcessingRequest = () => {
	if (!$('#forProcessingRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to For Evaluation/Processing!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#forProcessingModal').modal('hide')
			$('form#forProcessingRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Ready for Pickup
readyforPickupRequest = () => {
	if (!$('#readyForPickupRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to Ready for Pickup!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#readyforPickupModal').modal('hide')
			$('form#readyForPickupRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Released
releasedRequest = () => {
	if (!$('#releasedRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to Released!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#releasedModal').modal('hide')
			$('form#releasedRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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
