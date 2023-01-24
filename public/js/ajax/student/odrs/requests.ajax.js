$(function () {
	viewRequestDetails()
})

// View Request Details
viewRequestDetails = () => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/student/view_request`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			if (data.length !== 0) {
				$('#existing_request').removeClass('d-none')
				$('#no_request').addClass('d-none')

				if (data.status_of_request !== 'Pending for Clearance') {
					$('#request_status').removeClass('mb-0')
					$('#first_col').removeClass('col-xl-12')
					$('#first_col').addClass('col-xl-9')
					$('#second_col').removeClass('d-none')
				}

				$('#control_no').html(data.control_no)

				let documentsList = ''
				data.documents_assigned_to_request.forEach((document) => {
					documentsList += `
						<tr>
							<td>
								<div class="d-flex">
									<div class="flex-grow-1 ms-3">
										<h5 class="fs-15"><a href="#" class="link-primary">${
											document.document_information[0].document_name
										}</a></h5>
										<p class="text-muted mb-0">Type: <span class="fw-medium">${
											document.document_information[0].document_type === 'CAV'
												? 'CAV (CHED/DFA/WES/CES)'
												: document.document_information[0].document_type
										}</span></p>
									</div>
								</div>
							</td>
							<td>${document.quantity}</td>
						</tr>
					`
				})
				$('#documents').html(documentsList)

				$('#purpose_of_request').html(data.purpose_of_request)

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

				if (data.status_of_request === 'For Clearance') {
					remarks = `
						<div class="card-header">
							<div class="d-sm-flex align-items-center">
								<h5 class="card-title flex-grow-1 mb-0">Remarks</h5>
							</div>
						</div>
						<div class="card-body">
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
						<div class="card-header">
							<div class="d-sm-flex align-items-center">
							<h5 class="card-title flex-grow-1 mb-0">Remarks</h5>
							</div>
						</div>
						<div class="card-body">
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
									<p>Good Day! Please be informed that your requested credential/s is/are scheduled for pick-up and can now be claimed at the Records Section, Rothlener Building in PUP Quezon City.</p>
									<p class="fw-medium">${data.remarks}</p>
									<p class="d-flex fw-medium align-items-center">
										<i class="ri-error-warning-fill me-2 fs-4 text-warning"></i>
										<span class="text-danger">Reminder: If the requested documents are not claimed at PUP QC after 90 days, the request will be automatically cancelled.</span>
									</p>
								</div>
							</div>
						</div>
					`
				} else {
					remarks = ''
				}
				$('#remarks').html(remarks)

				if (
					data.status_of_request === 'Pending for Clearance' ||
					data.status_of_request === 'For Clearance'
				) {
					statusRequirements = `
					<div class="d-flex align-items-center badge badge-soft-danger fs-11"> <i class="ri-error-warning-line fs-13 me-2"></i> <span>To Be Submitted</span></div>
					`
					$('#statusReq').html(statusRequirements)
				} else {
					$('.alert_reqs').addClass('d-none')
					$('#cancel_button').addClass('d-none')
					statusRequirements = `
					<div class="d-flex align-items-center badge badge-soft-success fs-11"> <i class="ri-check-fill fs-13 me-2"></i> <span>Submitted</span></div>
					`
					$('#statusReq').html(statusRequirements)
				}

				let documentRequirements = ''
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
				`
				$('#requirements').html(documentRequirements)

				payment = ''
				if (data.payment_status === 'Pending') {
					payment = `
					<lord-icon src="https://cdn.lordicon.com/lqqcslws.json" trigger="loop" style="width:80px;height:80px"></lord-icon>
					<div class="mt-2 d-flex gap-3 align-items-center">
						<span class="text-black fw-semibold">Payment Status: </span>
						<span class="w-md fs-11 badge badge-gradient-warning text-uppercase">${data.payment_status}</span>
					</div>
	
					<div class="mt-4 mb-0 alert alert-info alert-border-left alert-dismissible fade show" role="alert" style="padding-right: 16px;">Pay the Request Fee to the <b>Cashier's Office -  Collecting Officer</b>. You will be given an Official Receipt which you will present to the Records Section for manual tagging of receipt and processing of request/s.
					</div>
	
					`
				} else if (data.payment_status === 'Paid') {
					payment = `
					<lord-icon src="https://cdn.lordicon.com/zkidfvrs.json" trigger="loop" style="width:80px;height:80px"></lord-icon>
					<table class="mt-2">
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
					`
				}
				$('#payment').html(payment)
			} else {
				$('#no_request').removeClass('d-none')
			}
		},
	})
}

// Cancel Request
cancelRequest = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4 class="mb-3 fw-semibold">Cancel this Request?</h4>' +
			'<p class="text-muted mx-4 mb-0">Are you sure you want to cancel this request?</p>' +
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
			$.ajax({
				type: 'PUT',
				url: `${apiURL}odrs/student/update_request_status/Cancelled by Student`,
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
								'<p class="text-muted mx-4 mb-0">You have successfully cancelled a request!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// Reload Requests Datatable
							// Cancelled Requests will go to History Page
							window.location.href = `${baseURL}student/history`
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
						'<p class="text-muted mx-4 mb-0">There was an error while cancelling a request. Please try again.</p>' +
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

function getRequirements(data) {
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
