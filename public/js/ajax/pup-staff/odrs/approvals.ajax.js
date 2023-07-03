$(function () {
	loadForApprovalRequests()
	loadApprovedRequests()
	loadOnHoldRequests()

	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#for-approval-requests-sign').DataTable().columns.adjust().responsive.recalc()
		$('#approved-requests-sign').DataTable().columns.adjust().responsive.recalc()
		$('#onhold-requests-sign').DataTable().columns.adjust().responsive.recalc()
	})
	$('#approveRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		const request_id = $('#approve_request_id').val()
		const document_id = $('#approve_document_id').val()

		approveRequest(request_id, document_id)
	})

	$('#holdRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		const request_signatory_id = $('#hold_request_signatory_id').val()

		onHoldRequest(request_signatory_id)
	})

	$('#revertRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		const request_signatory_id = $('#revert_request_signatory_id').val()

		revertRequest(request_signatory_id)
	})
})

// Load Requests for Approval Table
loadForApprovalRequests = () => {
	const dt = $('#for-approval-requests-sign')

	if (dt.length) {
		dt.DataTable({
			dom: 'Bfrtip',
			buttons: ['print'],
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_all_signatories`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			//No Sort Function
			"aoColumnDefs": [
				{ 'bSortable': false, 'aTargets': ['no-sort'] }
			],
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

				// Details
				{
					data: null,
					width: '27%',
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
									<button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewforApprovalRequest" onclick="viewforApprovalRequest('${data.request_id}')">View Details</button>
									<small class="d-block fst-italic text-center">Always "View Details" for more information</small>
								</div>
							`
					},
				},

				// Documents for Approval
				{
					data: null,
					width: '25%',
					render: (data) => {
						const documents = data.signatories_assigned_to_request
						let doc = ''
						doc += '<div class="list-group col nested-list">'

						for (const document of documents) {
							doc += `
								<div class="list-group-item nested-1 d-flex align-items-center" style="background-color: rgba(64,81,137,.05); border-color: rgba(64,81,137,.05);">
									<i class="ri-file-text-fill fs-16 align-middle text-success me-3"></i>
									<span class="fw-medium" style="font-size: 12px;">${document.signatory_for_document.document_name}</span>
								</div>
							`
						}

						doc += '</div>'
						return doc
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const documentsAction = data.signatories_assigned_to_request

						let actionButton = ''
						actionButton = '<div class="d-flex flex-column gap-2">'

						documentsAction.forEach((document) => {
							actionButton += `
								<div class="dropdown d-inline-block">
									<button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#approveRequestModal" onclick="viewApproveRequestModal('${data.request_id}','${document.signatory_for_document.document_id}')">
										<i class="mdi mdi-thumb-up fs-5 fw-bold"></i>
									</button>
									<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#onHoldRequestModal" onclick="viewOnHoldRequestModal('${data.request_id}','${document.signatory_for_document.document_id}', '${document.request_signatory_id}')">
										<i class="mdi mdi-hand-back-left fs-5 fw-bold"></i>
									</button>
								</div>
							`
						})

						actionButton += '</div>'

						return actionButton
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Load Approved Requests Table
loadApprovedRequests = () => {
	const dt = $('#approved-requests-sign')

	if (dt.length) {
		dt.DataTable({
			dom: 'Bfrtip',
			buttons: ['print'],
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_all_approved_signatories`,
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

				// Documents Approved
				{
					data: null,
					width: '25%',
					render: (data) => {
						const documents = data.signatories_assigned_to_request
						let doc = ''
						doc += '<div class="list-group col nested-list">'

						for (const document of documents) {
							doc += `
								<div class="list-group-item nested-1 d-flex align-items-center" style="background-color: rgba(64,81,137,.05); border-color: rgba(64,81,137,.05);">
									<i class="ri-file-text-fill fs-16 align-middle text-success me-3"></i>
									<span class="fw-medium" style="font-size: 12px;">${document.signatory_for_document.document_name}</span>
								</div>
							`
						}

						doc += '</div>'
						return doc
					},
				},

				// Details
				{
					data: null,
					width: '27%',
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
									<button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewApprovedRequest" onclick="viewApprovedRequest('${data.request_id}')">View Details</button>
									<small class="d-block fst-italic text-center">Always "View Details" for more information</small>
								</div>
							`
					},
				},

				// Request Status
				{
					data: null,
					width: '10%',
					render: (data) => {
						const requestStatus = data.status_of_request

						if (requestStatus === 'For Evaluation/Processing') {
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
						} else {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
									<i class="m-2 ri-checkbox-circle-line fs-13"></i>
									<span class="pb-2 text-uppercase">${requestStatus}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
							`
						}
					},
				},

				// Date Approved
				{
					data: null,
					render: (data) => {
						const date = moment(data.approved).format('DD, MMM. YYYY')
						const time = moment(data.approved).format('hh:mm A')

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

// Load On Hold Requests Table
loadOnHoldRequests = () => {
	const dt = $('#onhold-requests-sign')

	if (dt.length) {
		dt.DataTable({
			dom: 'Bfrtip',
			buttons: ['print'],
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_all_onhold_signatories`,
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			//No Sort Function
			"aoColumnDefs": [
				{ 'bSortable': false, 'aTargets': ['no-sort'] }
			],
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

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}</span>
							</div>
						`
					},
				},

				// Details
				{
					data: null,
					width: '27%',
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
									<button type="button" class="btn btn-sm btn-info bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOnHoldRequest" onclick="viewOnHoldRequest('${data.request_id}')">View Details</button>
									<small class="d-block fst-italic text-center">Always "View Details" for more information</small>
								</div>
							`
					},
				},

				// Date On Hold
				{
					data: null,
					render: (data) => {
						const date = moment(data.onhold).format('DD, MMM. YYYY')

						return `
							<div class="d-flex align-items-center">
								<i class="ri-calendar-todo-fill text-primary"></i>
								<span class="ms-2">${date}</span>
							</div>
						`
					},
				},

				// Documents On Hold
				{
					data: null,
					width: '25%',
					render: (data) => {
						const documents = data.signatories_assigned_to_request
						let doc = ''
						doc += '<div class="list-group col nested-list">'

						for (const document of documents) {
							doc += `
								<div class="list-group-item nested-1 d-flex align-items-center" style="background-color: rgba(64,81,137,.05); border-color: rgba(64,81,137,.05);">
									<i class="ri-file-text-fill fs-16 align-middle text-success me-3"></i>
									<span class="fw-medium" style="font-size: 12px;">${document.signatory_for_document.document_name}</span>
								</div>
							`
						}

						doc += '</div>'
						return doc
					},
				},

				// Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const documentsAction = data.signatories_assigned_to_request

						let actionButton = ''
						actionButton = '<div class="d-flex flex-column gap-2">'

						documentsAction.forEach((document) => {
							actionButton += `
								<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#revertModal" onclick="viewRevertRequestModal('${data.request_id}','${document.signatory_for_document.document_id}', '${document.request_signatory_id}')">
									<i class="ri-arrow-go-back-fill fs-5"></i>
								</button>
							`
						})

						actionButton += '</div>'

						return actionButton
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}

// Approve Request
approveRequest = (request_id, document_id) => {
	const form = new FormData($('#approveRequestForm')[0])

	$.ajax({
		url: `${apiURL}odrs/pup_staff/approve_signatory/${request_id}/${document_id}`,
		type: 'PUT',
		data: {
			remarks: form.get('remarks') !== '' ? form.get('remarks') : null,
		},
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			if (response) {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Well done!</h4>' +
						'<p class="text-muted mx-4 mb-0">You have successfully approved this document!</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					$('#approveRequestModal').modal('hide')
					$('form#approveRequestForm')[0].reset()

					// Reload Datatable
					loadForApprovalRequests()
					loadApprovedRequests()
					loadOnHoldRequests()
				})
			}
		},
	}).fail((xhr) => {
		Swal.fire({
			html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${JSON.parse(xhr.responseText).message
				}</p></div></div>`,
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

// On Hold Request
onHoldRequest = (request_signatory_id) => {
	const form = new FormData($('#holdRequestForm')[0])

	$.ajax({
		url: `${apiURL}odrs/pup_staff/onhold_signatory/${request_signatory_id}`,
		type: 'PUT',
		data: {
			remarks: form.get('remarks') !== '' ? form.get('remarks') : null,
		},
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			if (response) {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Well done!</h4>' +
						'<p class="text-muted mx-4 mb-0">You have successfully On Hold this document!</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					$('#onHoldRequestModal').modal('hide')
					$('form#holdRequestForm')[0].reset()

					// Reload Datatable
					loadForApprovalRequests()
					loadApprovedRequests()
					loadOnHoldRequests()
				})
			}
		},
	}).fail((xhr) => {
		Swal.fire({
			html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${JSON.parse(xhr.responseText).message
				}</p></div></div>`,
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

// Revert On Hold Request
revertRequest = (request_signatory_id) => {
	$.ajax({
		url: `${apiURL}odrs/pup_staff/revert_onhold/${request_signatory_id}`,
		type: 'PUT',
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			if (response) {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Well done!</h4>' +
						'<p class="text-muted mx-4 mb-0">You have successfully revert this onhold document!</p>' +
						'</div>' +
						'</div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					$('#revertModal').modal('hide')
					$('form#revertRequestForm')[0].reset()

					// Reload Datatable
					loadForApprovalRequests()
					loadApprovedRequests()
					loadOnHoldRequests()
				})
			}
		},
	}).fail((xhr) => {
		Swal.fire({
			html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${JSON.parse(xhr.responseText).message
				}</p></div></div>`,
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

// View Approved Request Modal
function viewApproveRequestModal(request_id, document_id) {
	$('#approve_request_id').val(request_id)
	$('#approve_document_id').val(document_id)

	$.ajax({
		url: `${apiURL}odrs/pup_staff/view_request_signatory/${request_id}/${document_id}`,
		type: 'GET',
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			const data = response.data

			$('#approve_docname_header').html(`Approve ${data[0].signatory_for_document.document_name}?`)
			$('#approve_doc_info').html(`
								<h6 class="mb-1 fw-semibold">${data[0].signatory_for_document.document_name}</h6>
                <p class="text-muted mb-0">Type: ${data[0].signatory_for_document.document_type}</p>
			`)

			$('#approve_approval_workflow').html('')
			data.forEach((signatory, i) => {
				$('#approve_approval_workflow').append(`
				<div class="acitivity-item d-flex">
				<div class="flex-shrink-0">
						<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
				</div>
				<div class="flex-grow-1 ms-3" id="approve_signatory_status_${i}">
						<h6 class="mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
				</div>
				</div>
				`)
				if (!signatory.is_signed && !signatory.is_onhold) {
					$(`#approve_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-warning text-uppercase">Pending</span>
					`)
				} else if (signatory.is_signed) {
					$(`#approve_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-success text-uppercase">Approved</span>
					`)
				} else if (signatory.is_onhold) {
					$(`#approve_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-danger text-uppercase">On Hold</span>
					`)
				}
			})

			$('#approve_docname_remarks').html(
				`Remarks for ${data[0].signatory_for_document.document_name}`,
			)
		},
	})
}

// View On Hold Request Modal
function viewOnHoldRequestModal(request_id, document_id, request_signatory_id) {
	$('#hold_request_signatory_id').val(request_signatory_id)

	$.ajax({
		url: `${apiURL}odrs/pup_staff/view_request_signatory/${request_id}/${document_id}`,
		type: 'GET',
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			const data = response.data

			$('#onhold_docname_header').html(`On Hold ${data[0].signatory_for_document.document_name}?`)
			$('#onhold_doc_info').html(`
								<h6 class="mb-1 fw-semibold">${data[0].signatory_for_document.document_name}</h6>
								<p class="text-muted mb-0">Type: ${data[0].signatory_for_document.document_type}</p>
								`)
			$('#onhold_approval_workflow').html('')
			data.forEach((signatory, i) => {
				$('#onhold_approval_workflow').append(`
				<div class="acitivity-item d-flex">
				<div class="flex-shrink-0">
						<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
				</div>
				<div class="flex-grow-1 ms-3" id="onhold_signatory_status_${i}">
						<h6 class="mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
				</div>
				</div>
				`)
				if (!signatory.is_signed && !signatory.is_onhold) {
					$(`#onhold_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-warning text-uppercase">Pending</span>
					`)
				} else if (signatory.is_signed) {
					$(`#onhold_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-success text-uppercase">Approved</span>
					`)
				} else if (signatory.is_onhold) {
					$(`#onhold_signatory_status_${i}`).append(`
					<span class="mb-4 badge badge-soft-danger text-uppercase">On Hold</span>
					`)
				}
			})
			$('#onhold_docname_remarks').html(
				`Remarks for ${data[0].signatory_for_document.document_name} <span class="text-danger">*</span>`,
			)
		},
	})
}

// View Revert Request Modal
function viewRevertRequestModal(request_id, document_id, request_signatory_id) {
	$('#revert_request_signatory_id').val(request_signatory_id)

	$.ajax({
		url: `${apiURL}odrs/pup_staff/view_request_signatory/${request_id}/${document_id}`,
		type: 'GET',
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (response) => {
			const data = response.data

			$('#revert_doc_info').html(`
								<h6 class="mb-1 fw-semibold">${data[0].signatory_for_document.document_name}</h6>
								<p class="text-muted mb-0">Type: ${data[0].signatory_for_document.document_type}</p>
								`)
			$('#revert_approval_workflow').html('')

			$('#revert_remarks_modal').html('')
			data.forEach((signatory, i) => {
				$('#revert_approval_workflow').append(`
					<div class="acitivity-item d-flex">
					<div class="flex-shrink-0">
							<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
					</div>
					<div class="flex-grow-1 ms-3" id="revert_signatory_status_${i}">
							<h6 class="mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
					</div>
					</div>
					`)
				if (!signatory.is_signed && !signatory.is_onhold) {
					$(`#revert_signatory_status_${i}`).append(`
						<span class="mb-4 badge badge-soft-warning text-uppercase">Pending</span>
						`)
				} else if (signatory.is_signed) {
					$(`#revert_signatory_status_${i}`).append(`
						<span class="mb-4 badge badge-soft-success text-uppercase">Approved</span>
						`)
				} else if (signatory.is_onhold) {
					$(`#revert_signatory_status_${i}`).append(`
						<span class="mb-4 badge badge-soft-danger text-uppercase">On Hold</span>
						`)
				}

				if (signatory.remarks != null) {
					$('#revert_remarks_modal').append(`
												<div class="mb-3 list-group-item list-group-item-action list-group-item-danger">
                            <div class="d-flex mb-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-6.png" alt="" class="avatar-xs rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="list-title mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
                                </div>
                            </div>
                            <p>${signatory.remarks}</p>
                        </div>
					`)
				}
			})
		},
	})
}

// View For Approval Request Details
viewforApprovalRequest = (request_id) => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/pup_staff/view_signatory/${request_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#request_no').html(data.control_no)

			const date = moment(data.pending_for_clearance).format('DD, MMM. YYYY')
			const time = moment(data.pending_for_clearance).format('hh:mm A')
			$('#date_filed').html(`<p class="mb-0">${date} <small class="ms-1">${time}</small></p>`)

			$('#purpose').html(data.purpose_of_request)

			$('#remarks_text').addClass('d-none')

			const documents = data.documents_assigned_to_request
			let signatoryWorkflow = ''
			for (const document of documents) {
				signatoryWorkflow += `
					<div class="row justify-content-center">
						<div class="col-xxl-10">
							<div class="card card-light">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<img src="${baseURL}public/images/documents.png" alt="document" class="avatar-sm rounded-circle">
										</div>
										<div class="flex-grow-1 ms-4">
											<p class="card-text fw-medium">${document.document_information[0].document_name}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h6 class="mt-2 ms-5 mb-4 text-dark">Signatories in this approval workflow</h6>
					<div class="profile-timeline ms-5 mb-4">
						<div class="accordion accordion-flush">`

				for (const signatory of data.signatories_assigned_to_request) {
					arrayPos = data.signatories_assigned_to_request.indexOf(signatory);
                    var prevArray = arrayPos - 1
					
					if (document.document_id == signatory.document_id) {
						if (signatory.hierarchy_number == 1) {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & data.signatories_assigned_to_request[prevArray].is_signed == true & ($('#user_id').val() === signatory.user_id)
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} 
							
							else if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & data.signatories_assigned_to_request[prevArray].is_signed == true) 
								{
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							}

							else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						} else {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-line text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & data.signatories_assigned_to_request[prevArray].is_signed == true & ($('#user_id').val() === signatory.user_id)
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} 
							
							
							else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						}
					}
				}
				signatoryWorkflow += `
						</div>
					</div>
				`
			}

			$('#document_workflow').html(signatoryWorkflow)

			$('#stud_no').html(data.user_assigned_to_request.user_no)
			$('#stud_name').html(data.user_assigned_to_request.user_profiles[0].full_name)
			$('#course').html(data.user_assigned_to_request.education_profile.user_course)
			$('#stud_email').html(data.user_assigned_to_request.user_profiles[0].email_address)
			$('#stud_phone').html(data.user_assigned_to_request.user_profiles[0].contact_number)

			let remarks = ''
			for (const signatory of data.signatories_assigned_to_request) {
				if (signatory.remarks !== null) {
					$('#remarks_text').removeClass('d-none')
					remarks += `
					<div class="d-block mb-3 list-group text-start">
						<div class="list-group-item list-group-item-action list-group-item-info">
							<div class="d-flex mb-2 align-items-center">
								<div class="flex-shrink-0">`
					if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
						remarks += `
											<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
										`
					} else {
						remarks += `
										<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
									`
					}
					remarks += `
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="list-title mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
									<p class="list-text mb-0 fs-12">Document: ${signatory.signatory_for_document.document_name}</p>
								</div>
							</div>
							<p>${signatory.remarks}</p>
						</div>
					</div>
					`
				}
			}
			$('#remarks').html(remarks)
		},
	})
}

// View Approved Request Details
viewApprovedRequest = (request_id) => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/pup_staff/view_signatory/${request_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#requestNo').html(data.control_no)

			const date = moment(data.pending_for_clearance).format('DD, MMM. YYYY')
			const time = moment(data.pending_for_clearance).format('hh:mm A')
			$('#dateFiled').html(`<p class="mb-0">${date} <small class="ms-1">${time}</small></p>`)

			$('#purposeReq').html(data.purpose_of_request)

			const documents = data.documents_assigned_to_request
			let signatoryWorkflow = ''
			for (const document of documents) {
				signatoryWorkflow += `
					<div class="row justify-content-center">
						<div class="col-xxl-10">
							<div class="card card-light">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<img src="${baseURL}public/images/documents.png" alt="document" class="avatar-sm rounded-circle">
										</div>
										<div class="flex-grow-1 ms-4">
											<p class="card-text fw-medium">${document.document_information[0].document_name}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h6 class="mt-2 ms-5 mb-4 text-dark">Signatories in this approval workflow</h6>
					<div class="profile-timeline ms-5 mb-4">
						<div class="accordion accordion-flush">`

				for (const signatory of data.signatories_assigned_to_request) {
					arrayPos = data.signatories_assigned_to_request.indexOf(signatory);
                    var nextArray = arrayPos - 1

					if (document.document_id == signatory.document_id) {
						if (signatory.hierarchy_number == 1) {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & ($('#user_id').val() === signatory.user_id)
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} 
							else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						} else {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-line text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & data.signatories_assigned_to_request[nextArray].is_signed == true 
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} 
							else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} 
							else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						}
					}
				}
				signatoryWorkflow += `
						</div>
					</div>
				`
			}

			$('#documentWorkflow').html(signatoryWorkflow)

			$('#studNo').html(data.user_assigned_to_request.user_no)
			$('#studName').html(data.user_assigned_to_request.user_profiles[0].full_name)
			$('#studCourse').html(data.user_assigned_to_request.education_profile.user_course)
			$('#studEmail').html(data.user_assigned_to_request.user_profiles[0].email_address)
			$('#mobileNum').html(data.user_assigned_to_request.user_profiles[0].contact_number)

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

			forClearanceDate = `
			${moment(data.for_clearance).format('ddd')},
			${moment(data.for_clearance).format('DD, MMM. YYYY')}
		`
			$('#for_clearance_date').html(forClearanceDate)

			forClearanceDateTime = `
			${moment(data.for_clearance).format('ddd')},
			${moment(data.for_clearance).format('DD, MMM. YYYY')} -
			${moment(data.for_clearance).format('hh:mm A')}
		`
			$('#for_clearance_datetime').html(forClearanceDateTime)

			processingDate = `
			${moment(data.for_evaluation).format('ddd')},
			${moment(data.for_evaluation).format('DD, MMM. YYYY')}
		`
			$('#processing_date').html(processingDate)

			processingDateTime = `
			${moment(data.for_evaluation).format('ddd')},
			${moment(data.for_evaluation).format('DD, MMM. YYYY')} -
			${moment(data.for_evaluation).format('hh:mm A')}
		`
			$('#processing_datetime').html(processingDateTime)

			let readyforPickup = ''
			if (data.ready_for_pickup !== null) {
				readyforPickup += `
					<div class="accordion-header" id="headingFour">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-dark bg-gradient rounded-circle">
										<i class="ri-user-received-2-line"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<p class="mb-1 fw-semibold text-dark">
										Ready for Pickup -
										<span class="fw-normal">
											${moment(data.ready_for_pickup).format('ddd')},
											${moment(data.ready_for_pickup).format('DD, MMM. YYYY')}
										</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<p class="mb-1 text-dark">The Requested Document/s can now be claimed at PUP QC. The student must bring the claim stub and other requirements, if necessary.</p>
							<p class="mb-0">
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
									<p class="mb-1 fw-semibold text-dark">Ready for Pickup</p>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#ready_for_pickup').html(readyforPickup)

			let last = ''
			if (data.released !== null) {
				last += `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-success bg-gradient rounded-circle">
										<i class="ri-checkbox-circle-fill"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<p class="mb-1 fw-semibold text-dark">
										Released -
										<span class="fw-normal">
										${moment(data.released).format('ddd')},
										${moment(data.released).format('DD, MMM. YYYY')}
									</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<p class="mb-1 text-dark">The requested documents has been successfully claimed by the student.</p>
							<p class="mb-0">
								${moment(data.released).format('ddd')},
								${moment(data.released).format('DD, MMM. YYYY')} -
								${moment(data.released).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else if (data.cancelled !== null) {
				last += `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-primary bg-gradient rounded-circle">
										<i class="mdi mdi-cancel"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<p class="mb-1 fw-semibold text-dark">
										${data.status_of_request} -
										<span class="fw-normal">
										${moment(data.cancelled).format('ddd')},
										${moment(data.cancelled).format('DD, MMM. YYYY')}
										</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFives" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<p class="mb-1 text-dark">The Document Request has been cancelled by the PUP Staff. The student can find the reason of cancelling on the Remarks of this request.</p>
							<p class="text-muted mb-0">
								${moment(data.cancelled).format('ddd')},
								${moment(data.cancelled).format('DD, MMM. YYYY')} -
								${moment(data.cancelled).format('hh:mm A')}
							</p>
						</div>
					</div>
				`
			} else {
				last += `
					<div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-light text-success rounded-circle">
										<i class="ri-checkbox-circle-fill"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<p class="fs-14 mb-0 fw-semibold text-dark">Released</p>
								</div>
							</div>
						</a>
					</div>
				`
			}
			$('#last').html(last)
		},
	})
}

// View On Hold Request Details
viewOnHoldRequest = (request_id) => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/pup_staff/view_signatory/${request_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#control_no').html(data.control_no)

			const date = moment(data.pending_for_clearance).format('DD, MMM. YYYY')
			const time = moment(data.pending_for_clearance).format('hh:mm A')
			$('#date_requested').html(`<p class="mb-0">${date} <small class="ms-1">${time}</small></p>`)

			$('#purpose_of_request').html(data.purpose_of_request)

			const documents = data.documents_assigned_to_request
			let signatoryWorkflow = ''
			for (const document of documents) {
				signatoryWorkflow += `
					<div class="row justify-content-center">
						<div class="col-xxl-10">
							<div class="card card-light">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<img src="${baseURL}public/images/documents.png" alt="document" class="avatar-sm rounded-circle">
										</div>
										<div class="flex-grow-1 ms-4">
											<p class="card-text fw-medium">${document.document_information[0].document_name}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h6 class="mt-2 ms-5 mb-4 text-dark">Signatories in this approval workflow</h6>
					<div class="profile-timeline ms-5 mb-4">
						<div class="accordion accordion-flush">`

				for (const signatory of data.signatories_assigned_to_request) {
					if (document.document_id == signatory.document_id) {
						if (signatory.hierarchy_number == 1) {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-0 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-fill text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & ($('#user_id').val() === signatory.user_id)
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						} else {
							signatoryWorkflow += `
							<div class="accordion-item border-0">
								<div class="accordion-header">`
							if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>
												`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
												<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
												<div class="d-flex">
													<div class="flex-shrink-0">
													<i class="h5 ri-checkbox-blank-circle-fill text-danger"></i>
												`
							} else {
								signatoryWorkflow += `
									<a class="accordion-button ps-3 pt-4 pb-0 shadow-none">
									<div class="d-flex">
										<div class="flex-shrink-0">
									<i class="h5 ri-checkbox-blank-circle-line text-warning"></i>
							`
							}
							signatoryWorkflow += `				
											</div>
											<div class="flex-grow-1 ms-3">`

							if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
								signatoryWorkflow += `
									<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
								`
							} else {
								signatoryWorkflow += `
								<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
							`
							}

							signatoryWorkflow += `	
											</div>
											<div class="flex-grow-1 ms-3">
												<h6 class="fs-14 mb-1">
													${signatory.signatory_for_user.user_profiles[0].full_name}
												</h6>`
							if (
								signatory.is_signed == false &&
								(signatory.is_onhold == false) & ($('#user_id').val() === signatory.user_id)
							) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-info text-uppercase">Ongoing</span>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-1 badge badge-soft-warning text-uppercase">Pending</span>
								`
							} else if (signatory.is_signed == true && signatory.is_onhold == false) {
								signatoryWorkflow += `
									<span class="mt-2 my-1 badge badge-soft-success text-uppercase">Approved</span><br>
									<div class="d-flex align-items-center text-muted mt-1 gap-2">
										<i class="ri-calendar-todo-fill text-primary"></i>
										<small> ${moment(data.approved).format('ddd')},
										${moment(data.approved).format('DD, MMM. YYYY')} -
										${moment(data.approved).format('hh:mm A')}</small>
									</div>
								`
							} else if (signatory.is_signed == false && signatory.is_onhold == true) {
								signatoryWorkflow += `
								<span class="mt-2 my-1 badge badge-soft-danger text-uppercase">On Hold</span><br>
								<div class="d-flex align-items-center text-muted mt-1 gap-2">
									<i class="ri-calendar-todo-fill text-primary"></i>
									<small> ${moment(data.onhold).format('ddd')},
									${moment(data.onhold).format('DD, MMM. YYYY')} -
									${moment(data.onhold).format('hh:mm A')}</small>
								</div>
							`
							}

							signatoryWorkflow += `
											</div>
										</div>
									</a>
								</div>
							</div>
						`
						}
					}
				}
				signatoryWorkflow += `
						</div>
					</div>
				`
			}

			$('#documents_requested').html(signatoryWorkflow)

			$('#student_num').html(data.user_assigned_to_request.user_no)
			$('#student_name').html(data.user_assigned_to_request.user_profiles[0].full_name)
			$('#student_course').html(data.user_assigned_to_request.education_profile.user_course)
			$('#student_email').html(data.user_assigned_to_request.user_profiles[0].email_address)
			$('#student_mobile_number').html(
				data.user_assigned_to_request.user_profiles[0].contact_number,
			)

			let remarks = ''
			for (const signatory of data.signatories_assigned_to_request) {
				if (signatory.remarks !== null) {
					remarks += `
					<div class="d-block mb-3 list-group text-start">
						<div class="list-group-item list-group-item-action list-group-item-info">
							<div class="d-flex mb-2 align-items-center">
								<div class="flex-shrink-0">`
					if (signatory.signatory_for_user.user_profiles[0].gender == 'Female') {
						remarks += `
											<img src="${baseURL}public/images/profile/flat-faces-icons-circle-woman-8.png" class="avatar-xs rounded-circle shadow" />
										`
					} else {
						remarks += `
										<img src="${baseURL}public/images/profile/flat-faces-icons-circle-man-2.png" class="avatar-xs rounded-circle shadow" />
									`
					}
					remarks += `
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="list-title mb-1">${signatory.signatory_for_user.user_profiles[0].full_name}</h6>
									<p class="list-text mb-0 fs-12">Document: ${signatory.signatory_for_document.document_name}</p>
								</div>
							</div>
							<p>${signatory.remarks}</p>
						</div>
					</div>
					`
				}
			}
			$('#signatory_remarks').html(remarks)
		},
	})
}
