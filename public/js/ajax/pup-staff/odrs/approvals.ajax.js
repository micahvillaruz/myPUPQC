$(function () {
	loadForApprovalRequests()
	loadApprovedRequests()
	loadOnHoldRequests()

	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#for-approval-requests-sign').DataTable().columns.adjust().responsive.recalc()
		$('#approved-requests-sign').DataTable().columns.adjust().responsive.recalc()
		$('#onhold-requests-sign').DataTable().columns.adjust().responsive.recalc()
	})
})

// Load Requests for Approval Table
loadForApprovalRequests = () => {
	const dt = $('#for-approval-requests-sign')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_all_signatories`,
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
									<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#onHoldRequestModal" onclick="viewOnHoldRequestModal('${data.request_id}','${document.signatory_for_document.document_id}')">
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
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/pup_staff/view_all_onhold_signatories`,
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
								<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#revertModal" onclick="viewRevertRequestModal('${data.request_id}','${document.signatory_for_document.document_id}')">
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

// View Approved Request Modal
function viewApproveRequestModal(request_id, document_id) {
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
function viewOnHoldRequestModal(request_id, document_id) {
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
function viewRevertRequestModal(request_id, document_id) {
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
