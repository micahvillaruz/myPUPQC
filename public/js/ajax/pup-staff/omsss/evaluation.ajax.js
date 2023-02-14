$(() => {
	evaluationTable()
})

evaluationTable = () => {
	console.log('test')

	const dt = $('#evaluation_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/pup_staff/view_evaluation',
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.health_appointment_evaluation.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_evaluation_user) {
							const studentName = data.health_appointment_evaluation_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Average Rating
				{
					data: null,
					render: (data) => {
						const averageRating = data.average_rating
						return `${averageRating}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewEvaluationDetails('${data.evaluation_id}')" data-bs-toggle="modal" data-bs-target="#aboutEvaluationModal"><i class="ri-eye-fill fs-5"></i></button>
				        </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

viewEvaluationDetails = (evaluation_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/pup_staff/view_evaluation/${evaluation_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data
		console.log(data)

		// * Case Detail
		$('#control_no_details').html(data.health_appointment_evaluation.case_control_number)
		$('#view_physician_details').html(
			data.health_appointment_evaluation_physician.user_profiles[0].full_name,
		)

		let tableID = ['#quality_rating_stars', '#timeliness_rating_stars', '#courtesy_rating_stars']
		let rating = [data.quality_rating, data.timeliness_rating, data.courtesy_rating]

		for (let i = 0; i < tableID.length; i++) {
			let starsHTML = ''
			for (let j = 1; j <= 5; j++) {
				if (j <= rating[i]) {
					starsHTML += '⭐'
				}
			}
			$(tableID[i]).html(starsHTML)
		}

		$('#evaluation_comments_details').html(data.evaluation_comment)
	})
}
