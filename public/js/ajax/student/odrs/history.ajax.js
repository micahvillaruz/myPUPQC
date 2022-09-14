$(function () {
	loadHistoryTable()
})

// Load History Table
loadHistoryTable = () => {
	const dt = $('#history-datatable')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: `${apiURL}/odrs/student/requests_history`,
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

				// Date Released/Cancelled
				{
					data: null,
					render: (data) => {
						if (data.status_of_request === 'Released') {
							const date = moment(data.date_of_release).format('DD, MMM. YYYY')
							const time = moment(data.date_of_release).format('hh:mm A')

							return `
                <div class="d-flex align-items-center">
                  <i class="ri-calendar-todo-fill text-primary"></i>
                  <span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
                </div>
              `
						} else {
							const date = moment(data.date_of_cancelled).format('DD, MMM. YYYY')
							const time = moment(data.date_of_cancelled).format('hh:mm A')

							return `
                <div class="d-flex align-items-center">
                  <i class="ri-calendar-todo-fill text-primary"></i>
                  <span class="ms-2">${date}<small class="text-muted ms-1">${time}</small></span>
                </div>
              `
						}
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
			order: [[0, 'asc']],
		})
	}
}
