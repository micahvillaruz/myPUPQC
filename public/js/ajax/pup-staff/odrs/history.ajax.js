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

						console.log(data)

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
						if (data.status_of_request === 'Released') {
							return `
								<div class="mt-2 d-grid fw-bolder badge badge-soft-success position-relative">
									<i class="m-2 ri-checkbox-circle-line fs-13"></i>
									<span class="pb-2 text-uppercase">${data.status_of_request}</span>
									<button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light rounded-circle position-absolute top-0 start-100 translate-middle" data-bs-toggle="modal" data-bs-target="#viewProcessStatusFlow">?</button>
								</div>
              `
						} else if (data.status_of_request === 'Cancelled') {
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
              <button type="button" class="btn btn-info btn-sm bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails">View</button>
            `
					},
				},
			],
			order: [[0, 'desc']],
		})
	}
}
