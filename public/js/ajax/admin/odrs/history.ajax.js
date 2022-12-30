$(function () {
	getHistoryAnalytics()

	loadReleasedRequests()
	loadCancelledRequests()
	loadDeletedRequests()

	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#released-requests').DataTable().columns.adjust().responsive.recalc()
		$('#cancelled-requests').DataTable().columns.adjust().responsive.recalc()
		$('#deleted-requests').DataTable().columns.adjust().responsive.recalc()
	})
})

// Get History Analytics
getHistoryAnalytics = () => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/super_admin/analytics/history`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.request_status_count

			document.getElementById('released_analytics').dataset.target = data.released
			document.getElementById('cancelled_student_analytics').dataset.target =
				data.cancelled_by_student
			document.getElementById('cancelled_staff_analytics').dataset.target = data.cancelled_by_staff
			document.getElementById('deleted_analytics').dataset.target = data.deleted

			counter()
		},
	})
}

// Load Released Requests Table
loadReleasedRequests = () => {
	const dt = $('#released-requests')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/super_admin/requests_history/Released`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Control Number
				{
					data: null,
					width: '12%',
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
						return `
							<div class="d-flex badge badge-soft-success align-items-center justify-content-center">
								<i class="me-2 mdi mdi-cash-check fs-15"></i>
								<span class="text-uppercase fw-bold">${data.payment_status}</span>
							</div>
							<span class="mt-1 d-block badge badge-soft-dark badge-border">OR No. ${data.or_no} </span>
						`
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
						`
					},
				},

				// Date Released
				{
					data: null,
					render: (data) => {
						const date = moment(data.released).format('DD, MMM. YYYY')
						const time = moment(data.released).format('hh:mm A')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
							</div>
						`
					},
				},

				// Action
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						return `
							<div class="d-flex gap-2 justify-content-center">
								<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick="viewRequestDetails('${data.request_id}')"><i class="ri-eye-fill fs-4"></i></button>
								<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteRequest('${data.request_id}')"><i class="bx bx-trash fs-4"></i></button>
							</div>
						`
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Load Cancelled Requests Table
loadCancelledRequests = () => {
	const dt = $('#cancelled-requests')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/super_admin/requests_history/Cancelled`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Control Number
				{
					data: null,
					width: '12%',
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
						`
					},
				},

				// Request Status
				{
					data: null,
					width: '10%',
					render: (data) => {
						return `
							<div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
								<i class="m-2 mdi mdi-cancel fs-13"></i>
								<span class="pb-2 text-uppercase">${data.status_of_request}</span>
								<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
							</div>
						`
					},
				},

				// Date Cancelled
				{
					data: null,
					render: (data) => {
						const date = moment(data.cancelled).format('DD, MMM. YYYY')
						const time = moment(data.cancelled).format('hh:mm A')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
							</div>
						`
					},
				},

				// Action
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						return `
							<div class="d-flex gap-2 justify-content-center">
								<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick="viewRequestDetails('${data.request_id}')"><i class="ri-eye-fill fs-4"></i></button>
								<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteRequest('${data.request_id}')"><i class="bx bx-trash fs-4"></i></button>
							</div>
						`
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Load Deleted Requests Table
loadDeletedRequests = () => {
	const dt = $('#deleted-requests')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: `${apiURL}odrs/super_admin/requests_history/Deleted`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Control Number
				{
					data: null,
					width: '12%',
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
						if (data.payment_status === 'Cancelled') {
							return `
								<div class="d-flex badge badge-soft-danger align-items-center justify-content-center">
									<i class="me-2 mdi mdi-cash-remove fs-15"></i>
									<span class="text-uppercase fw-bold">${data.payment_status}</span>
								</div>
							`
						} else if (data.payment_status === 'Paid') {
							return `
								<div class="d-flex badge badge-soft-success align-items-center justify-content-center">
									<i class="me-2 mdi mdi-cash-check fs-15"></i>
									<span class="text-uppercase fw-bold">${data.payment_status}</span>
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
						`
					},
				},

				// Date Deleted
				{
					data: null,
					render: (data) => {
						const date = moment(data.deleted).format('DD, MMM. YYYY')
						const time = moment(data.deleted).format('hh:mm A')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
							</div>
						`
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// View Request Details
viewRequestDetails = (request_id) => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/super_admin/view_request/${request_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#control_no').html(data.control_no)

			const gender = data.user_assigned_to_request.user_profiles[0].gender

			let image = ''
			if (gender === 'Male') {
				image += `
					<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" class="avatar-md" />
				`
			} else {
				image += `
					<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-1.png" class="avatar-md" />
				`
			}

			$('#picture').html(image)

			$('#student_name').html(data.user_assigned_to_request.user_profiles[0].full_name)

			$('#user_no').html(data.user_assigned_to_request.user_no)

			$('#course').html(data.user_assigned_to_request.education_profile.course_when_admitted)

			$('#email_address').html(data.user_assigned_to_request.user_profiles[0].email_address)

			$('#contact_number').html(data.user_assigned_to_request.user_profiles[0].contact_number)

			let documentsList = ''
			data.documents_assigned_to_request.forEach((document) => {
				documentsList += `
					<tr>
						<td>
							<span>${document.document_information[0].document_name}</span>
						</td>
						<td class="text-center">${document.quantity}</td>
					</tr>
				`
			})
			$('#documents').html(documentsList)
			$('#purpose_of_request').html(data.purpose_of_request)

			$('#payment_status_col').removeClass()
			$('#or_number_col').removeClass()
			$('#release_classification_col').removeClass()
			$('#completed_date_col').removeClass()

			let date = ''
			let time = ''
			if (data.status_of_request === 'Released') {
				date = moment(data.released).format('DD, MMM. YYYY')
				time = moment(data.released).format('hh:mm A')
				$('#payment_status_col').addClass('col-lg-3 col-sm-6')
				$('#or_number_col').addClass('col-lg-3 col-sm-6')
				$('#release_classification_col').addClass('col-lg-3 col-sm-6')
				$('#completed_date_col').addClass('col-lg-3 col-sm-6')
				$('#completed_date').html('Date Released')

				$('#payment_status').html(
					`<span class="badge bg-success fs-11">${data.payment_status}</span>`,
				)
				$('#or_no').html(data.or_no)
				$('#release_classification').html(data.release_classification)
			} else {
				date = moment(data.cancelled).format('DD, MMM. YYYY')
				time = moment(data.cancelled).format('hh:mm A')
				$('#payment_status_col').addClass('col-lg-6 col-sm-12')
				$('#or_number_col').addClass('d-none')
				$('#release_classification_col').addClass('d-none')
				$('#completed_date_col').addClass('col-lg-6 col-sm-12')
				$('#completed_date').html('Date Cancelled')

				$('#payment_status').html(
					`<span class="badge bg-danger fs-11">${data.payment_status}</span>`,
				)
			}

			$('#date_completed').html(
				`<span>${date}<small class="text-muted ms-1">${time}</small></span>`,
			)

			pendingforClearanceDate = `
				${moment(data.pending_for_clearance).format('ddd')},
				${moment(data.pending_for_clearance).format('DD, MMM. YYYY')}
			`
			$('#pending_for_clearance_date').html(pendingforClearanceDate)

			pendingforClearanceDateTime = `
				${moment(data.pending_for_clearance).format('ddd')},
				${moment(data.pending_for_clearance).format('DD, MMM. YYYY')} -
				${moment(data.pending_for_clearance).format('hh:mm A')}
			`

			$('#pending_for_clearance_datetime').html(pendingforClearanceDateTime)

			if (data.status_of_request === 'Released') {
				$('#for_clearance').removeClass('d-none')
				$('#for_evaluation').removeClass('d-none')
				$('#ready_for_pickup').removeClass('d-none')

				let forClearance = `
					<div class="accordion-header" id="headingTwo">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-danger bg-gradient rounded-circle">
										<i class="mdi mdi-nfc-search-variant"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-0 fw-semibold">
										For Clearance -
										<span class="fw-normal">
											${moment(data.for_clearance).format('ddd')},
											${moment(data.for_clearance).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</h6>
							<p class="text-muted mb-0">
								${moment(data.for_clearance).format('ddd')},
								${moment(data.for_clearance).format('DD, MMM. YYYY')} -
								${moment(data.for_clearance).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
				$('#for_clearance').html(forClearance)

				let forEvaluation = `
					<div class="accordion-header" id="headingThree">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-info bg-gradient rounded-circle">
										<i class="mdi mdi-file-sign"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">
										For Evaluation / Processing -
										<span class="fw-normal">
											${moment(data.for_evaluation).format('ddd')},
											${moment(data.for_evaluation).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The Document/s are Paid and the Request is now being Processed for signature, documentary stamp and school dry seal.</h6>
							<p class="text-muted mb-0">
								${moment(data.for_evaluation).format('ddd')},
								${moment(data.for_evaluation).format('DD, MMM. YYYY')} -
								${moment(data.for_evaluation).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
				$('#for_evaluation').html(forEvaluation)

				let readyforPickup = `
					<div class="accordion-header" id="headingFour">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-dark bg-gradient rounded-circle">
										<i class="ri-user-received-2-line"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">
										Ready for Pickup -
										<span class="fw-normal">
											${moment(data.ready_for_pickup).format('ddd')},
											${moment(data.ready_for_pickup).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The Requested Document/s can now be claimed at PUP QC. The student must bring the claim stub and other requirements, if necessary.</h6>
							<p class="text-muted mb-0">
								${moment(data.ready_for_pickup).format('ddd')},
								${moment(data.ready_for_pickup).format('DD, MMM. YYYY')} -
								${moment(data.ready_for_pickup).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
				$('#ready_for_pickup').html(readyforPickup)

				let released = `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-success bg-gradient rounded-circle">
										<i class="ri-checkbox-circle-fill"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">
										Released -
										<span class="fw-normal">
										${moment(data.released).format('ddd')},
										${moment(data.released).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The requested documents has been successfully claimed by the student.</h6>
							<p class="text-muted mb-0">
								${moment(data.released).format('ddd')},
								${moment(data.released).format('DD, MMM. YYYY')} -
								${moment(data.released).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
				$('#last').html(released)
			} else {
				processCancelled(data)
			}

			if (data.status_of_request === 'Cancelled by Staff') {
				remarks = `
					<div class="h6 fs-15 text-primary">Remarks</div>
					<div class="list-group">
						<div class="list-group-item list-group-item-action">
							<div class="d-flex mb-2 align-items-center">
								<div class="flex-shrink-0">
									<img src="${baseURL}public/images/officials/img-25.png" alt="" class="avatar-sm rounded-circle" />
								</div>
								<div class="flex-grow-1 ms-3">
									<h5 class="list-title fs-15 mb-1">Hernando Liberato</h5>
									<p class="list-text mb-0 fs-12">Officer-in-Charge, Student Records</p>
								</div>
							</div>
							<p>Good Day! Please be informed that the document/s you requested has been cancelled due to the following reason/s:</p>
							<p class="fw-medium">${data.remarks}</p>
							<p class="d-flex fw-medium align-items-center">
								<i class="ri-error-warning-fill me-2 fs-4 text-warning"></i>
								<span class="text-danger">Reminder: If you have further questions regarding the cancellation of the request, please call us at <b>8-287-82-04</b>.</span>
							</p>
						</div>
					</div>
				`
				$('#remarks').html(remarks)
			} else {
				remarks = ''
				$('#remarks').html(remarks)
			}
		},
	})
}

processCancelled = (data) => {
	if (data.status_of_request === 'Cancelled by Student') {
		cancelledStudent(data)
	} else if (data.status_of_request === 'Cancelled by Staff') {
		cancelledStaff(data)
	}
}

cancelledStudent = (data) => {
	$('#for_evaluation').addClass('d-none')
	$('#ready_for_pickup').addClass('d-none')

	if (data.for_clearance !== null) {
		$('#for_clearance').removeClass('d-none')

		let forClearance = `
            <div class="accordion-header" id="headingTwo">
                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                <i class="mdi mdi-nfc-search-variant"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-15 mb-0 fw-semibold">
                                For Clearance -
                                <span class="fw-normal">
                                    ${moment(data.for_clearance).format('ddd')},
                                    ${moment(data.for_clearance).format('DD, MMM. YYYY')}
                                </span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</h6>
                    <p class="text-muted mb-0">
                        ${moment(data.for_clearance).format('ddd')},
                        ${moment(data.for_clearance).format('DD, MMM. YYYY')} -
                        ${moment(data.for_clearance).format('hh:mm A')}
                    </p>
                </div>
            </div>
        `
		$('#for_clearance').html(forClearance)
	} else {
		$('#for_clearance').addClass('d-none')
	}

	let cancelled = `
        <div class="accordion-header" id="headingFive">
            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-primary bg-gradient rounded-circle">
                            <i class="mdi mdi-cancel"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                            ${data.status_of_request} -
                            <span class="fw-normal">
                            ${moment(data.cancelled).format('ddd')},
                            ${moment(data.cancelled).format('DD, MMM. YYYY')}
                            </span>
                        </h6>
                    </div>
                </div>
            </a>
        </div>
        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFives" data-bs-parent="#accordionExample">
            <div class="accordion-body ms-2 ps-5 pt-0">
                <h6 class="mb-1">The Document Request has been cancelled by the Student.</h6>

                <p class="text-muted mb-0">
                    ${moment(data.cancelled).format('ddd')},
                    ${moment(data.cancelled).format('DD, MMM. YYYY')} -
                    ${moment(data.cancelled).format('hh:mm A')}
                </p>
            </div>
        </div>
    `

	$('#last').html(cancelled)
}

cancelledStaff = (data) => {
	if (data.ready_for_pickup !== null) {
		let forClearance = `
            <div class="accordion-header" id="headingTwo">
                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                <i class="mdi mdi-nfc-search-variant"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-15 mb-0 fw-semibold">
                                For Clearance -
                                <span class="fw-normal">
                                    ${moment(data.for_clearance).format('ddd')},
                                    ${moment(data.for_clearance).format('DD, MMM. YYYY')}
                                </span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</h6>
                    <p class="text-muted mb-0">
                        ${moment(data.for_clearance).format('ddd')},
                        ${moment(data.for_clearance).format('DD, MMM. YYYY')} -
                        ${moment(data.for_clearance).format('hh:mm A')}
                    </p>
                </div>
            </div>
        `
		$('#for_clearance').html(forClearance)

		let forEvaluation = `
            <div class="accordion-header" id="headingThree">
                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-info bg-gradient rounded-circle">
                                <i class="mdi mdi-file-sign"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-15 mb-1 fw-semibold">
                                For Evaluation / Processing -
                                <span class="fw-normal">
                                    ${moment(data.for_evaluation).format('ddd')},
                                    ${moment(data.for_evaluation).format('DD, MMM. YYYY')}
                                </span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document/s are Paid and the Request is now being Processed for signature, documentary stamp and school dry seal.</h6>
                    <p class="text-muted mb-0">
                        ${moment(data.for_evaluation).format('ddd')},
                        ${moment(data.for_evaluation).format('DD, MMM. YYYY')} -
                        ${moment(data.for_evaluation).format('hh:mm A')}
                    </p>
                </div>
            </div>
        `
		$('#for_evaluation').html(forEvaluation)

		let readyforPickup = `
            <div class="accordion-header" id="headingFour">
                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-dark bg-gradient rounded-circle">
                                <i class="ri-user-received-2-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-15 mb-1 fw-semibold">
                                Ready for Pickup -
                                <span class="fw-normal">
                                    ${moment(data.ready_for_pickup).format('ddd')},
                                    ${moment(data.ready_for_pickup).format('DD, MMM. YYYY')}
                                </span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Requested Document/s can now be claimed at PUP QC. The student must bring the claim stub and other requirements, if necessary.</h6>
                    <p class="text-muted mb-0">
                        ${moment(data.ready_for_pickup).format('ddd')},
                        ${moment(data.ready_for_pickup).format('DD, MMM. YYYY')} -
                        ${moment(data.ready_for_pickup).format('hh:mm A')}
                    </p>
                </div>
            </div>
        `
		$('#ready_for_pickup').html(readyforPickup)
	} else if (data.for_clearance !== null) {
		$('#for_clearance').removeClass('d-none')
		$('#for_evaluation').addClass('d-none')
		$('#ready_for_pickup').addClass('d-none')

		let forClearance = `
            <div class="accordion-header" id="headingTwo">
                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar-xs">
                            <div class="avatar-title bg-danger bg-gradient rounded-circle">
                                <i class="mdi mdi-nfc-search-variant"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-15 mb-0 fw-semibold">
                                For Clearance -
                                <span class="fw-normal">
                                    ${moment(data.for_clearance).format('ddd')},
                                    ${moment(data.for_clearance).format('DD, MMM. YYYY')}
                                </span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body ms-2 ps-5 pt-0">
                    <h6 class="mb-1">The Document Request is now Approved. The student must go to PUP QC to submit the requirements and pay the processing fees.</h6>
                    <p class="text-muted mb-0">
                        ${moment(data.for_clearance).format('ddd')},
                        ${moment(data.for_clearance).format('DD, MMM. YYYY')} -
                        ${moment(data.for_clearance).format('hh:mm A')}
                    </p>
                </div>
            </div>
        `
		$('#for_clearance').html(forClearance)
	} else {
		$('#for_clearance').addClass('d-none')
		$('#for_evaluation').addClass('d-none')
		$('#ready_for_pickup').addClass('d-none')
	}

	let cancelled = `
        <div class="accordion-header" id="headingFive">
            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-xs">
                        <div class="avatar-title bg-primary bg-gradient rounded-circle">
                            <i class="mdi mdi-cancel"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="fs-15 mb-1 fw-semibold">
                            ${data.status_of_request} -
                            <span class="fw-normal">
                            ${moment(data.cancelled).format('ddd')},
                            ${moment(data.cancelled).format('DD, MMM. YYYY')}
                            </span>
                        </h6>
                    </div>
                </div>
            </a>
        </div>
        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFives" data-bs-parent="#accordionExample">
            <div class="accordion-body ms-2 ps-5 pt-0">
				<h6 class="mb-1">The Document Request has been cancelled by the PUP Staff. The student can find the reason of cancelling on the Remarks of this request.</h6>
				<p class="text-muted mb-0">
					${moment(data.cancelled).format('ddd')},
					${moment(data.cancelled).format('DD, MMM. YYYY')} -
					${moment(data.cancelled).format('hh:mm A')}
				</p>
			</div>
		</div>
`
	$('#last').html(cancelled)
}

// Delete Request
deleteRequest = (request_id) => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	Swal.fire({
		html: `
                <div class="mt-3">
                    <lord-icon src="https://cdn.lordicon.com/exkbusmy.json" trigger="loop" colors="outline:#121331,primary:#646e78,secondary:#f06548,tertiary:#ebe6ef" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 fs-13">
                        <h4 class="mb-3 fw-semibold">Delete this Request?</h4>
                        <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
                            <div class="mb-2 d-flex align-items-center justify-content-center">
                                <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
                            </div>
                            <span>
                                Deleting this request means that the request will not be visible to the Student and the PUP staff. <br><span class="fw-medium">You also cannot restore a deleted request</span>.
                            </span>
                        </div>
                    </div>
                </div>
            `,
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger fw-medium waves-effect waves-light me-2',
		confirmButtonText: 'Yes, Delete It!',
		cancelButtonClass: 'btn btn-light fw-medium waves-effect waves-light',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: `${apiURL}odrs/super_admin/delete_request/${request_id}`,
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
								'<h4>Well done!</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully deleted a request!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success fw-medium waves-effect waves-light',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
						loadReleasedRequests()
						loadCancelledRequests()
						loadDeletedRequests()
					}
				},
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong!</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while deleting a request. Please try again.</p>' +
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

counter = () => {
	var e = document.querySelectorAll('.counter-value')
	function s(e) {
		return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
	}
	e &&
		Array.from(e).forEach(function (o) {
			!(function e() {
				var t = +o.getAttribute('data-target'),
					a = +o.innerText,
					n = t / 250
				n < 1 && (n = 1),
					a < t ? ((o.innerText = (a + n).toFixed(0)), setTimeout(e, 1)) : (o.innerText = s(t)),
					s(o.innerText)
			})()
		})
}
