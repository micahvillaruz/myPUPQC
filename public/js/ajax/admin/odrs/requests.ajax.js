$(function () {
	loadRequestsTable()
})

// Load Requests Table
loadRequestsTable = () => {
	const dt = $('#requests-datatables')

	if (dt.length) {
		dt.DataTable({
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
                            <button type="button" class="btn btn-info btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="mdi mdi-eye-outline label-icon align-middle fs-16 me-2"></i> View</button>
                        `
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}
