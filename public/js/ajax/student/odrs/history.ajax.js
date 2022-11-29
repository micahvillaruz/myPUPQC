$(function () {
	loadHistoryTable()
})

// Load History Table
loadHistoryTable = () => {
	const dt = $('#history-datatable')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			scrollX: true,
			ajax: {
				url: `${apiURL}odrs/student/requests_history`,
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
											<span class="fw-medium badge bg-primary me-1">Course: </span>
										</td>
										<td><span class="text-uppercase">${course}</span></td>
									</tr>
									<tr>
										<td>
											<span class="fw-medium badge bg-primary me-1">Purpose: </span>
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
						} else if (
							data.status_of_request === 'Cancelled by Student' ||
							data.status_of_request === 'Cancelled by Staff'
						) {
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
              <button type="button" class="btn btn-info btn-sm bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewRequestDetails" onclick="viewRequestDetails('${data.request_id}')">View</button>
            `
					},
				},
			],
			order: [[3, 'desc']],
		})
	}
}

// View Request Details
viewRequestDetails = (request_id) => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/student/view_request/${request_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#control_no').html(data.control_no)

			if (data.status_of_request === 'Released') {
				$('#completion_date').html('Date Released')
			} else if (
				data.status_of_request === 'Cancelled by Student' ||
				data.status_of_request === 'Cancelled by Staff'
			) {
				$('#completion_date').html('Date Cancelled')
			}

			let documentsList = ''
			data.documents_assigned_to_request.forEach((document) => {
				documentsList += `
					<tr>
						<td>
							<span>${document.document_information[0].document_name}</span>
						</td>
						<td class="text-center">${document.quantity}</td>
				`
				if (data.payment_status === 'Cancelled') {
					documentsList += `
						<td class="text-center">
							<span class="badge bg-danger">${data.payment_status}</span>
						</td>
					`
				} else if (data.payment_status === 'Paid') {
					documentsList += `
						<td class="text-center">
							<span class="badge bg-success">${data.payment_status}</span> <span class="badge badge-outline-dark">OR No. ${data.or_no} </span>
						</td>
					`
				}

				if (data.status_of_request === 'Released') {
					const date = moment(data.date_of_release).format('DD, MMM. YYYY')

					documentsList += `
            <td class="text-center">
              <span class="ms-2">${date}</span>
            </td>
          </tr>
        `
				} else {
					const date = moment(data.date_of_cancelled).format('DD, MMM. YYYY')

					documentsList += `
            <td>
              <span class="ms-2">${date}</span>
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
            <h6 class="mb-1">The Document Request is pending for approval and is being reviewed by the Officer in Charge of Student Records.</h6>
            <p class="text-muted mb-0">
              ${moment(data.date_of_filing).format('ddd')},
              ${moment(data.date_of_filing).format('DD, MMM. YYYY')} -
              ${moment(data.date_of_filing).format('hh:mm A')}
            </p>
          </div>
        </div>
        `
			$('#pending_for_clearance').html(pendingforClearance)

			if (data.status_of_request === 'Released') {
				$('#for_clearance').removeClass('d-none')
				$('#for_evaluation').removeClass('d-none')
				$('#ready_for_pickup').removeClass('d-none')

				let forClearance = `
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
				$('#for_clearance').html(forClearance)

				let forEvaluation = `
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
              <h6 class="mb-1">The document request is now being processed by the OIC and signed by the signatories.</h6>
              <p class="text-muted mb-0">
                ${moment(data.date_of_processing).format('ddd')},
                ${moment(data.date_of_processing).format('DD, MMM. YYYY')} -
                ${moment(data.date_of_processing).format('hh:mm A')}
              </p>
            </div>
          </div>
        `
				$('#for_evaluation').html(forEvaluation)

				let readyforPickup = `
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
				$('#ready_for_pickup').html(readyforPickup)

				let released = `
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
				$('#last').html(released)
			} else {
				$('#for_clearance').addClass('d-none')
				$('#for_evaluation').addClass('d-none')
				$('#ready_for_pickup').addClass('d-none')

				let cancelled = `
          <div class="accordion-header" id="headingFive">
						<a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 avatar-xs">
									<div class="avatar-title bg-danger rounded-circle">
										<i class="mdi mdi-cancel"></i>
									</div>
								</div>
								<div class="flex-grow-1 ms-3">
									<h6 class="fs-15 mb-1 fw-semibold">
										${data.status_of_request} -
										<span class="fw-normal">
										${moment(data.date_of_cancelled).format('ddd')},
										${moment(data.date_of_cancelled).format('DD, MMM. YYYY')}
										</span>
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body ms-2 ps-5 pt-0">
							<h6 class="mb-1">The requested documents has been cancelled.</h6>
							<p class="text-muted mb-0">
								${moment(data.date_of_cancelled).format('ddd')},
								${moment(data.date_of_cancelled).format('DD, MMM. YYYY')} -
								${moment(data.date_of_cancelled).format('hh:mm A')}
							</p>
						</div>
					</div>
        `
				$('#last').html(cancelled)
			}

			if (data.remarks !== null) {
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
										<p class="list-text mb-0 fs-12">OIC, Student Records</p>
									</div>
								</div>
								<p>${data.remarks}</p>
							</div>
							</div>
						</div>
					</div>
					`
				$('#remarks').html(remarks)
			} else {
				remarks = ''
				$('#remarks').html(remarks)
			}
		},
	})
}
