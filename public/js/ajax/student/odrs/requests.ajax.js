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
						const date = moment(data.date_of_filing).format('MMM. D, YYYY')
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

						if (requestStatus === 'Pending For Clearance' || 'For Clearance') {
							return `
								<div class="vstack gap-2">
									<button type="button" class="btn btn-sm btn-info text-start waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
									<a type="button" class="btn btn-sm btn-success text-start waves-effect waves-light" href="<?= base_url() ?>Public/file/Request-Form.pdf" download="Request-Form"><i class="mdi mdi-download label-icon align-middle me-2"></i> Download Request Form</a>
								</div>
								<div class="mt-4 d-grid">
									<button type="button" class="btn btn-sm btn-light waves-effect waves-light" onclick="cancelRequest()"><i class="ri-close-fill label-icon align-middle me-2"></i> Cancel</button>
								</div>
							`
						} else {
							return `
								<button type="button" class="btn btn-sm btn-info text-start waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="mdi mdi-eye label-icon align-middle me-2"></i> View Details</button>
							`
						}
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}
