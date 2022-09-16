$(function () {
	loadGuidanceTable()
})

// Load datatables
loadGuidanceTable = () => {
	const dt = $('#guidance-datatable')

	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/student/view_guidance_appointment',
				type: 'GET',
				// ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.consultation_status == 'Pending'
							? `<span class="badge rounded-pill bg-warning">Pending</span>`
							: `<span class="badge rounded-pill bg-success">Approved</span>`
					},
				},

				// Attending Consultant
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_physician) {
							const healthPhysician =
								data.health_appointment_assigned_to_physician.user_profiles[0].full_name
						}
						const healthPhysician = 'N/A'

						return `${healthPhysician}`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						const consultation_time = data.consultation_time
						return `${consultation_date} (${consultation_time})`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
        <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewGuidanceDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewGuidanceModal"><i class="ri-eye-fill fs-5"></i></button>
				<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelGuidance('${data.health_appointment_id}')"><i class="bx bxs-user-x fs-4"></i></button>
				</div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}
