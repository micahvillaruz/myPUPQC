$(function () {
	getRequestsAnalytics()

	loadRequestsTable()
})

// Get Requests Analytics
getRequestsAnalytics = () => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/super_admin/analytics/requests`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.request_status_count

			document.getElementById('pending_analytics').dataset.target = data.pending_for_clearance
			document.getElementById('for_clearance_analytics').dataset.target = data.for_clearance
			document.getElementById('for_evaluation_analytics').dataset.target = data.for_evaluation
			document.getElementById('ready_for_pickup_analytics').dataset.target = data.ready_for_pickup

			counter()
		},
	})
}

// Load Requests Table
loadRequestsTable = () => {
	const dt = $('#requests-datatables')

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
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/super_admin/view_requests`,
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
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle me-2">
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
						`
					},
				},

				// Request Status
				{
					data: null,
					render: (data) => {
						const requestStatus = data.status_of_request

						if (requestStatus === 'Pending for Clearance') {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-warning position-relative">
									<i class="m-2 mdi mdi-clock fs-13"></i>
									<span class="pb-2 text-uppercase">${data.status_of_request}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
							`
						} else if (requestStatus === 'For Clearance') {
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
					width: '10%',
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
					<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-md" />
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

			$('#purpose').html(data.purpose_of_request)
			$('#payment_details').addClass('d-none')

			if (data.payment_status === 'Pending' && data.status_of_request !== 'Pending for Clearance') {
				$('#payment_details').removeClass('d-none')
				$('#payment_details').html(`
					<div class="d-flex align-items-center justify-content-center gap-4">
						<lord-icon src="https://cdn.lordicon.com/lqqcslws.json" trigger="loop" style="width:80px;height:80px"></lord-icon>
						<div>
							<h5 class="fs-14 text-info fw-semibold text-center"> Payment Details</h5>
							<div class="d-flex gap-3 align-items-center">
								<span class="text-black fw-semibold">Payment Status: </span>
								<span class="w-md fs-11 badge badge-gradient-warning text-uppercase">${data.payment_status}</span>
							</div>
						</div>
					</div>
				`)
			} else if (data.payment_status === 'Paid') {
				$('#payment_details').removeClass('d-none')
				$('#payment_details').html(`
					<div class="d-flex align-items-center justify-content-center gap-4">
						<lord-icon src="https://cdn.lordicon.com/zkidfvrs.json" trigger="loop" style="width:80px;height:80px"></lord-icon>
						<div>
							<h5 class="fs-14 text-info fw-semibold text-center"> Payment Details</h5>
							<table>
								<tbody>
									<tr>
										<td>
											<span class="text-black fw-semibold">Payment Status: </span>
										</td>
										<td class="text-center">
											<span class="w-md fs-11 badge badge-gradient-success text-uppercase">${data.payment_status}</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="text-black mb-1 fw-semibold me-3">Official Receipt No.: </span>
										</td>
										<td class="text-center">
											<span class="text-dark">${data.or_no}</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				`)
			}

			pendingforClearanceDate = `
				${moment(data.pending_for_clearance).format('ddd')},
				${moment(data.pending_for_clearance).format('DD, MMM. YYYY')}
			`
			$('#pending_date').html(pendingforClearanceDate)

			pendingforClearanceDateTime = `
				${moment(data.pending_for_clearance).format('ddd')},
				${moment(data.pending_for_clearance).format('DD, MMM. YYYY')} -
				${moment(data.pending_for_clearance).format('hh:mm A')}
			`

			$('#pending_datetime').html(pendingforClearanceDateTime)

			let forClearance = ''
			if (data.for_clearance !== null) {
				forClearance += `
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
			} else if (data.for_clearance === null) {
				forClearance += `
					<div class="accordion-header" id="headingTwo">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-danger rounded-circle">
										<i class="mdi mdi-nfc-search-variant"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-0 fw-semibold">
										For Clearance
									</h6>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#for_clearance').html(forClearance)

			let forEvaluation = ''
			if (data.for_evaluation !== null) {
				forEvaluation += `
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
			} else if (data.for_evaluation === null) {
				forEvaluation += `
					<div class="accordion-header" id="headingThree">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-info rounded-circle">
										<i class="mdi mdi-file-sign"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">For Evaluation / Processing</h6>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#for_evaluation').html(forEvaluation)

			let readyforPickup = ''
			if (data.ready_for_pickup !== null) {
				readyforPickup += `
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
			} else if (data.ready_for_pickup === null) {
				readyforPickup += `
					<div class="accordion-header" id="headingFour">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-dark rounded-circle">
										<i class="ri-user-received-2-line"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">Ready for Pickup</h6>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#ready_for_pickup').html(readyforPickup)

			let documentRequirements = ''
			let remarks = ''

			$('#attachments').addClass('d-none')

			if (data.status_of_request === 'For Clearance') {
				documentRequirements += `
					<div class="h6 fs-15 text-primary">Requirements</div>
						<div class="list-group col nested-list nested-sortable">
				`

				$('#ched-letter').addClass('d-none')
				data.documents_assigned_to_request.forEach((document) => {
					if (document.document_information[0].document_requirements.length != 0) {
						documentRequirements += `
							<div class="list-group-item nested-1" style="background-color: rgba(64,81,137,.05); border-color: rgba(64,81,137,.05);">
								<i class="mdi mdi-folder fs-16 align-middle text-warning me-2"></i>
								<span>${document.document_information[0].document_name}</span>
								<div class="list-group nested-list nested-sortable">`
						document.document_information[0].document_requirements.forEach((requirement) => {
							if (requirement.doc_req_name === 'Letter format for CHED') {
								$('#ched-letter').removeClass('d-none')

								documentRequirements += `
								<div class="list-group-item nested-2" style="background-color: rgba(64,81,137,.07); border-color: rgba(64,81,137,.07);">
									<i class="ri-file-word-2-fill fs-16 align-middle text-info me-2"></i>
									<span>${requirement.doc_req_name}</span>
								</div>
						`
							} else {
								documentRequirements += `
								<div class="list-group-item nested-2" style="background-color: rgba(64,81,137,.07); border-color: rgba(64,81,137,.07);">
									<i class="ri-file-text-fill fs-16 align-middle text-success me-2"></i>
									<span>${requirement.doc_req_name}</span>
								</div>
						`
							}
						})
						documentRequirements += `
								</div>
							</div>
						`
					}
				})
				documentRequirements += `
						<div class="list-group-item nested-1" style="background-color: rgba(64,81,137,.05); border-color: rgba(64,81,137,.05);">
							<i class="mdi mdi-folder fs-16 align-middle text-warning me-2"></i>
							<span>For Overall Request</span>
							<div class="list-group nested-list nested-sortable">
								<div class="list-group-item nested-2" style="background-color: rgba(64,81,137,.07); border-color: rgba(64,81,137,.07);">
									<i class="ri-file-pdf-fill fs-16 align-middle text-danger me-2"></i>
									Request Form
								</div>
							</div>
						</div>
					</div>
				`

				$('#attachments').removeClass('d-none')

				remarks += `
					<div class="h6 fs-15 text-primary">Remarks</div>
					<div class="list-group">
						<div class="list-group-item list-group-item-action">
							<div class="d-flex mb-2 align-items-center">
								<div class="flex-shrink-0">
									<img src="${baseURL}public/images/officials/img-25.png" class="avatar-sm rounded-circle" />
								</div>
								<div class="flex-grow-1 ms-3">
									<h5 class="list-title fs-15 mb-1">Hernando Liberato</h5>
									<p class="list-text mb-0 fs-12">Officer-in-Charge, Student Records</p>
								</div>
							</div>
							<p>
								The Document Request is now approved. You must view the requirements needed for each of the document/s requested and download the attachments by clicking the <i class="ri-download-2-line label-icon align-middle mx-1 text-muted fs-20"></i> icon next to the attached files in this request. Go to PUP QC and bring the downloaded attachments and requirements as listed below. 
							</p>
							<ul class="list-unstyled ms-3 mb-0">
				`

				getRequirements(data).forEach((requirement) => {
					remarks += `
								<li class="mb-2">
									<i class="mdi mdi-check-decagram text-info me-1"></i>
									${requirement}
								</li>
							`
				})

				remarks += `
								<li class="mb-2">
									<i class="mdi mdi-check-decagram text-info me-1"></i>
									Request Form
								</li>
							</ul>
							<p class="fw-medium">${data.remarks}</p>
							<p class="d-flex fw-medium align-items-center">
								<i class="ri-error-warning-fill me-2 fs-4 text-warning"></i>
								<span class="text-danger">Reminder: If the requirements for this request are not submitted at PUP QC after 90 days, the request will be automatically cancelled.</span>
							</p>
						</div>
					</div>
				`
			} else if (data.status_of_request === 'Ready for Pickup') {
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
							<p>Good Day! Please be informed that your requested credential/s is/are scheduled for pick-up and can now be claimed at the Records Section, Rothlener Building in PUP Quezon City.</p>
							<p class="fw-medium">${data.remarks}</p>
							<p class="d-flex fw-medium align-items-center">
								<i class="ri-error-warning-fill me-2 fs-4 text-warning"></i>
								<span class="text-danger">Reminder: If the requested documents are not claimed at PUP QC after 90 days, the request will be automatically cancelled.</span>
							</p>
						</div>
					</div>
				`
			}

			$('#remarks').html(remarks)
			$('#requirements').html(documentRequirements)
		},
	})
}

// Get Request Requirements
getRequirements = (data) => {
	const requirements = []

	data.documents_assigned_to_request.forEach((document) => {
		document.document_information[0].document_requirements.forEach((requirement) => {
			requirements.push(requirement.doc_req_name)
		})
	})

	const uniqueReqs = new Set(requirements)
	uniqueReqsArray = [...uniqueReqs]

	return uniqueReqsArray
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
