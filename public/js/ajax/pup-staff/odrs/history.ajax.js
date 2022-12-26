$(function () {
	loadHistoryTable()
})

// Load History Table
loadHistoryTable = () => {
	const dt = $('#staff-history-datatable')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/requests_history`,
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

				// Request Status
				{
					data: null,
					render: (data) => {
						if (data.status_of_request === 'Released') {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
									<i class="m-2 ri-checkbox-circle-line fs-13"></i>
									<span class="pb-2 text-uppercase">${data.status_of_request}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
              `
						} else {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
									<i class="m-2 mdi mdi-cancel fs-13"></i>
									<span class="pb-2 text-uppercase">${data.status_of_request}</span>
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
						return `
						<button type="button" class="btn btn-info btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick = "viewRequestDetails('${data.request_id}')"><i class="mdi mdi-eye-outline label-icon align-middle fs-16 me-2"></i> View</button>
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
		url: `${apiURL}odrs/pup_staff/view_request/${request_id}`,
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

			$('#image').html(image)

			$('#student_full_name').html(data.user_assigned_to_request.user_profiles[0].full_name)

			$('#user_no').html(data.user_assigned_to_request.user_no)

			$('#course').html(data.user_assigned_to_request.education_profile.course_when_admitted)

			$('#email_address').html(data.user_assigned_to_request.user_profiles[0].email_address)

			$('#contact_number').html(data.user_assigned_to_request.user_profiles[0].contact_number)

			if (data.status_of_request === 'Released') {
				$('#completion_date').html('Date Released')
			} else {
				$('#completion_date').html('Date Cancelled')
			}

			let documentsList = ''
			data.documents_assigned_to_request.forEach((document) => {
				documentsList += `
					<tr>
						<td>
							<span>${document.document_information[0].document_name}</span>
						</td>
						<td class="text-center">${document.quantity}</td>
					`
				if (data.payment_status === 'Paid') {
					documentsList += `
						<td class="text-center">
							<span class="badge bg-success">${data.payment_status}</span> <span class="badge badge-outline-dark">OR No. ${data.or_no} </span>
						</td>
					`
				} else {
					documentsList += `
						<td class="text-center">
							<span class="badge bg-danger">${data.payment_status}</span>
						</td>
					`
				}

				if (data.status_of_request === 'Released') {
					const date = moment(data.released).format('DD, MMM. YYYY')
					const time = moment(data.released).format('hh:mm A')

					documentsList += `
						<td>
							<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
						</td>
					</tr>
				`
				} else {
					const date = moment(data.cancelled).format('DD, MMM. YYYY')
					const time = moment(data.cancelled).format('hh:mm A')

					documentsList += `
						<td>
							<span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
						</td>
					</tr>
				`
				}
			})
			$('#documents').html(documentsList)

			$('#purpose_of_request').html(data.purpose_of_request)

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
									<div class="avatar-title bg-danger rounded-circle">
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
									<div class="avatar-title bg-info rounded-circle">
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
									<div class="avatar-title bg-dark rounded-circle">
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
									<div class="avatar-title bg-success rounded-circle">
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
				$('#for_clearance').addClass('d-none')
				$('#for_evaluation').addClass('d-none')
				$('#ready_for_pickup').addClass('d-none')

				let cancelled = `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-danger rounded-circle">
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
					`
				if (data.status_of_request === 'Cancelled by Student') {
					cancelled += `
							<h6 class="mb-1">The Document Request has been cancelled by the Student.</h6>
						`
				} else if (data.status_of_request === 'Cancelled by Staff') {
					cancelled += `
							<h6 class="mb-1">The Document Request has been cancelled by the PUP Staff. The student can find the reason of cancelling on the Remarks of this request.</h6>
						`
				}
				cancelled += `
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
