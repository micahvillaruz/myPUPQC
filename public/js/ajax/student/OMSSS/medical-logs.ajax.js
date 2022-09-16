$(function () {
	loadMedicalLogsTable()
})

// Load datatables
loadMedicalLogsTable = () => {
	const dt = $('#medical-logs-datatable')

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
				url: apiURL + 'omsss/student/appointment_logs',
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

				// Symptoms Date
				{
					data: null,
					render: (data) => {
						const sympDate = moment(data.symptoms_date).utc().format('LL')

						return `${sympDate}`
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

				// Status
				{
					data: null,
					render: (data) => {
						return data.consultation_status == 'Cancelled'
							? `<span class="badge rounded-pill text-dark bg-soft-dark ">Cancelled</span>`
							: `<span class="badge rounded-pill bg-success">Done</span>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}
