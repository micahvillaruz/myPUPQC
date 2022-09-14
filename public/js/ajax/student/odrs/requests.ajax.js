$(function () {
	loadRequestsTable()
})

// Cancel Request
cancelRequest = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-0">Do you want to cancel this request?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Cancel It!',
		cancelButtonClass: 'btn btn-ghost-danger w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
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
				cancelButtonClass: 'btn btn-primary w-xs mb-1',
				cancelButtonText: 'Back',
				buttonsStyling: !1,
				showCloseButton: !0,
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong!</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while cancelling this request. Please try again.</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-primary w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			})
		}
	})
}

// Load Requests Table
loadRequestsTable = () => {
	const dt = $('#requests-datatable')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'odrs/student/view_requests',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
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

				// Date Filed
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_of_filing).format('DD, MMM. YYYY')
						const time = moment(data.date_of_filing).format('hh:mm A')

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
              `
						}
					},
				},

				// Details
				{
					data: null,
					render: (data) => {
						const educationStatus = data.user_assigned_to_request.education_profile.education_status
						const course = data.user_assigned_to_request.education_profile.course_when_admitted
						const purpose = data.purpose_of_request
						return `
							<table>
								<tbody>
									<tr>
										<td>
											<span class="fw-medium badge bg-dark me-1">Clearance: </span>
										</td>
										<td>${educationStatus} Student</td>
									</tr>
									<tr>
										<td>
											<span class="fw-medium badge bg-dark me-1">Course: </span>
										</td>
										<td><span class="text-uppercase">${course}</span></td>
									</tr>
									<tr>
										<td>
											<span class="fw-medium badge bg-dark me-1">Purpose: </span>
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
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
								`
						} else if (requestStatus === 'For Clearance') {
							return `
								<div class="mt-2 d-grid badge badge-soft-danger position-relative">
									<i class="m-2  mdi mdi-nfc-search-variant fs-13"></i>
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
						} else if (requestStatus === 'Released') {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
									<i class="m-2 ri-checkbox-circle-line fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
              `
						} else if (requestStatus === 'Cancelled') {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-danger position-relative">
									<i class="m-2 mdi mdi-cancel fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
              `
						} else if (requestStatus === 'Deleted') {
							return `
							<div class="mt-2 d-grid fw-bolder badge badge-soft-dark position-relative">
								<i class="m-2 mdi mdi-trash-can-outline fs-13"></i>
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
					render: (data) => {
						const requestStatus = data.status_of_request

						if (requestStatus === 'Pending for Clearance') {
							return `
							<div class="vstack gap-2">
								<button type="button" class="btn btn-sm btn-info text-center waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick = "viewRequestDetails('${data.request_id}')"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
								<button type="button" class="btn btn-sm btn-light waves-effect waves-light" onclick="cancelRequest()"><i class="ri-close-fill label-icon align-middle me-2"></i> Cancel</button>
							</div>
							`
						} else if (requestStatus === 'For Clearance') {
							return `
								<div class="vstack gap-2">
									<button type="button" class="btn btn-sm btn-info text-center waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick = "viewRequestDetails('${data.request_id}')"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
									<a type="button" class="btn btn-sm btn-success text-center waves-effect waves-light" href="${baseURL}public/file/Request-Form.pdf" download="Request-Form"><i class="mdi mdi-download label-icon align-middle me-2"></i> Download Request Form</a>
								</div>
								<div class="mt-4 d-grid">
									<button type="button" class="btn btn-sm btn-light waves-effect waves-light" onclick="cancelRequest()"><i class="ri-close-fill label-icon align-middle me-2"></i> Cancel</button>
								</div>
							`
						} else {
							return `
							<div class="vstack">
								<button type="button" class="btn btn-sm btn-info text-center waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"  onclick = "viewRequestDetails('${data.request_id}')"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
							</div>
							`
						}
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// View Request Details
viewRequestDetails = (request_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `odrs/student/view_request/${request_id}`,
		dataType: 'json',
		ContentType: 'application/x-www-form-urlencoded',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#control_no').html(data.control_no)

			let documentsList = ''
			data.documents_assigned_to_request.forEach((document) => {
				console.log(document)
				documentsList += `
					<tr>
						<td>
							<span>${document.document_information[0].document_name}</span>
						</td>
						<td class="text-center">${document.quantity}</td>
				`
				if (data.payment_status === 'Pending') {
					documentsList += `
						<td class="text-center">
							<span class="badge bg-warning text-dark">${data.payment_status}</span>
						</td>
					</tr>
					`
				} else if (data.payment_status === 'Paid') {
					documentsList += `
							<td class="text-center">
							<span class="badge bg-success">${data.payment_status}</span>
						</td>
					</tr>
					`
				}
			})
			$('#documents').html(documentsList)

			$('#purpose_of_request').html(data.purpose_of_request)

			let pendingforClearance = `
				<div class="accordion-header" id="headingOne">
					<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<div class="d-flex align-items-center">
							<div class="flex-shrink-0 avatar-xs">
								<div class="avatar-title bg-warning rounded-circle">
									<i class="mdi mdi-progress-clock"></i>
								</div>
							</div>
							<div class="flex-grow-1 ms-3">
								<h6 class="fs-15 mb-0 fw-semibold">
									Pending for Clearance -
									<span class="fw-normal">
										${moment(data.date_of_filing).format('ddd')},
										${moment(data.date_of_filing).format('DD, MMM. YYYY')}
									</span>
								</h6>
							</div>
						</div>
					</a>
				</div>
				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					<div class="accordion-body ms-2 ps-5 pt-0">
						<h6 class="mb-1">The Document Request is pending for approval and is being reviewed by the Administrative Staff.</h6>
						<p class="text-muted mb-0">
							${moment(data.date_of_filing).format('ddd')},
							${moment(data.date_of_filing).format('DD, MMM. YYYY')} -
							${moment(data.date_of_filing).format('hh:mm A')}
						</p>
					</div>
				</div>
			`
			$('#pending_for_clearance').html(pendingforClearance)

			let forClearance = ''
			if (data.date_of_visit !== null) {
				forClearance += `
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
										${moment(data.date_of_visit).format('ddd')},
										${moment(data.date_of_visit).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The Document Request is approved. The student must submit the requirements and pay the request fees at PUP QC.</h6>
							<p class="text-muted mb-0">
							${moment(data.date_of_visit).format('ddd')},
							${moment(data.date_of_visit).format('DD, MMM. YYYY')} -
							${moment(data.date_of_visit).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else if (data.date_of_visit === null) {
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
			if (data.date_of_processing !== null) {
				forEvaluation += `
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
											${moment(data.date_of_processing).format('ddd')},
											${moment(data.date_of_processing).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The document request is now being processed by the Administrative Staff and signed by the signatories.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_of_processing).format('ddd')},
								${moment(data.date_of_processing).format('DD, MMM. YYYY')} -
								${moment(data.date_of_processing).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else if (data.date_of_processing === null) {
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
			if (data.date_of_pickup !== null) {
				readyforPickup += `
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
											${moment(data.date_of_pickup).format('ddd')},
											${moment(data.date_of_pickup).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The requested documents is now ready for pickup. The student must claim the request at PUP QC.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_of_pickup).format('ddd')},
								${moment(data.date_of_pickup).format('DD, MMM. YYYY')} -
								${moment(data.date_of_pickup).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else if (data.date_of_pickup === null) {
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

			let released = ''
			if (data.date_of_release !== null) {
				released += `
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
										${moment(data.date_of_release).format('ddd')},
										${moment(data.date_of_release).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFives" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The requested documents has been successfully claimed by the student.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_of_release).format('ddd')},
								${moment(data.date_of_release).format('DD, MMM. YYYY')} -
								${moment(data.date_of_release).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else if (data.date_of_release === null) {
				released += `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-success rounded-circle">
										<i class="ri-checkbox-circle-fill"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-14 mb-0 fw-semibold">Released</h6>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#released').html(released)

			if (data.remarks !== null) {
				if (data.status_of_request === 'For Clearance') {
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
										<p class="list-text mb-0 fs-12">Administrative Staff</p>
									</div>
								</div>
								<p>The Document Request is now approved. You must download the Request form by clicking the
									<button type="button" class="btn btn-success btn-icon btn-sm waves-effect waves-light my-1">
										<i class="mdi mdi-download fs-5 fw-bold"></i>
									</button>
									button and bring it together with the requirements as listed below. You have to <b>Request an Appointment</b> on the <a href="https://apps.pup.edu.ph/appointment" class="link-primary fw-medium">Visitors Appointment Scheduling System (VASS)</a> for your desired date and time in processing the requirements at PUP QC. After your appointment is approved, you are required to present a <b>Gate Pass</b> before being allowed to enter the PUP QC premises. You must bring the requirements at the Rothlener Building where the documents passed will be validated and the corresponding request fee will be paid.
								</p>
								<p>Please bring the following requirements:</p>
								<ul class="list-unstyled mb-0">
						`

					data.documents_assigned_to_request.forEach((document) => {
						if (document.document_information[0].document_requirements !== null) {
							remarks += `
								<li class="mb-2">
									<i class="mdi mdi-check-decagram text-info me-1"></i>
									${document.document_information[0].document_requirements}
								</li>
							`
						}
					})
					remarks += `
										<li class="mb-2">
											<i class="mdi mdi-check-decagram text-info me-1"></i>
											Request Form
										</li>
									</ul>
									<p class="mt-4 fw-medium">${data.remarks}</p>
								</div>
							</div>
						</div>
					`
					$('#remarks').html(remarks)
				} else {
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
										<p class="list-text mb-0 fs-12">Administrative Staff</p>
									</div>
								</div>
								<p>${data.remarks}</p>
							</div>
							</div>
						</div>
					</div>
					`
					$('#remarks').html(remarks)
				}
			} else {
				if (data.status_of_request === 'For Clearance') {
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
											<p class="list-text mb-0 fs-12">Administrative Staff</p>
										</div>
									</div>
									<p>The Document Request is now approved. You must download the Request form by clicking the
										<button type="button" class="btn btn-success btn-icon btn-sm waves-effect waves-light my-1">
											<i class="mdi mdi-download fs-5 fw-bold"></i>
										</button>
										button and bring it together with the requirements as listed below. You have to <b>Request an Appointment</b> on the <a href="https://apps.pup.edu.ph/appointment" class="link-primary fw-medium">Visitors Appointment Scheduling System (VASS)</a> for your desired date and time in processing the requirements at PUP QC. After your appointment is approved, you are required to present a <b>Gate Pass</b> before being allowed to enter the PUP QC premises. You must bring the requirements at the Rothlener Building where the documents passed will be validated and the corresponding request fee will be paid.
									</p>
									<p>Please bring the following requirements:</p>
									<ul class="list-unstyled mb-0">
							`

					data.documents_assigned_to_request.forEach((document) => {
						if (document.document_information[0].document_requirements !== null) {
							remarks += `
									<li class="mb-2">
										<i class="mdi mdi-check-decagram text-info me-1"></i>
										${document.document_information[0].document_requirements}
									</li>
								`
						}
					})
					remarks += `
											<li class="mb-2">
												<i class="mdi mdi-check-decagram text-info me-1"></i>
												Request Form
											</li>
										</ul>
									</div>
								</div>
							</div>
						`
					$('#remarks').html(remarks)
				} else {
					remarks = ''
					$('#remarks').html(remarks)
				}
			}
		},
	})
}
