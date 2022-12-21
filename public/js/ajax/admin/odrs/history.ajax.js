$(function () {
	loadReleasedRequests()
	loadCancelledRequests()
	loadDeletedRequests()

	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#released-requests').DataTable().columns.adjust().responsive.recalc()
		$('#cancelled-requests').DataTable().columns.adjust().responsive.recalc()
		$('#deleted-requests').DataTable().columns.adjust().responsive.recalc()
	})
})

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
								<span class="text-uppercase">${data.payment_status}</span>
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
								<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="ri-eye-fill"></i></button>
								<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteRequest()"><i class="bx bx-trash fs-4"></i></button>
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
								<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails"><i class="ri-eye-fill"></i></button>
								<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteRequest()"><i class="bx bx-trash fs-4"></i></button>
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

// Delete Request
deleteRequest = () => {
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
