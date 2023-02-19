$(() => {
	evaluationTable()

	chartOne()
	chartTwo()
	chartThree()
	chartFour()
	chartFive()
})

evaluationTable = () => {
	console.log('test')

	const dt = $('#evaluation_table')

	if (dt.length) {
		dt.DataTable({
			dom:
				"<'row'<'col-xl-12 mb-2'B>>" +
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				{
					extend: 'print',
					text: '<i class="ri-printer-fill"></i> Print',
					exportOptions: {
						columns: [0, 1, 2],
					},
				},
			],
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

chartOne = () => {
	var chartNumberOne = document.getElementById('chartNumberOne')

	$.ajax({
		type: 'GET',
		cache: false,
		url:
			apiURL +
			'omsss/pup_staff/evaluation_analytics/number_of_evaluations_for_this_user_for_the_current_year',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data
		console.log(data)

		const numberOfEvaluations = parseInt(data[0].count)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfEvaluations}</h1></div><p class="fs-5 text-center font-italic">Number of Evaluations Done in 2023</p>`

		chartNumberOne.innerHTML = htmlContent
	})
}

chartTwo = () => {
	var chartNumberTwo = document.getElementById('chartNumberTwo')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'omsss/pup_staff/evaluation_analytics/total_average_rating',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data
		console.log(data)

		const averageRatingFormat = parseFloat(data[0].average_rating_overall).toFixed(3)
		const avgRatingOverall = isNaN(averageRatingFormat) ? 0 : averageRatingFormat
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${avgRatingOverall}</h1></div><p class="fs-5 text-center font-italic">Average Overall Rating for 2023</p>`

		chartNumberTwo.innerHTML = htmlContent
	})
}

chartThree = () => {
	var chartNumberThree = echarts.init(document.getElementById('chartNumberThree'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'omsss/pup_staff/evaluation_analytics/number_of_evaluated_appointments',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data

		// Map the month numbers to month names
		var monthNames = [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December',
		]

		var option = {
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC-OMSSS) chartThree_${new Date()
							.toISOString()
							.slice(0, 10)}_number_of_evaluated_appointments`,
					},
				},
			},
			xAxis: {
				type: 'category',
				data: data.map(function (item) {
					return monthNames[item.month - 1]
				}),
			},
			yAxis: {
				type: 'value',
			},
			series: [
				{
					type: 'bar',
					data: data.map(function (item) {
						return parseInt(item.number_of_evaluated_appointments)
					}),
				},
			],
		}

		chartNumberThree.setOption(option)
	})
}

chartFour = () => {
	var chartNumberFour = echarts.init(document.getElementById('chartNumberFour'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'omsss/pup_staff/evaluation_analytics/average_rating_of_evaluated_appointments',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data

		// Map the month numbers to month names
		var monthNames = [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December',
		]

		var chartData = data.map(function (item) {
			return {
				value: parseFloat(item.average_rating),
				name: monthNames[item.month - 1],
			}
		})

		// Create the options object for the chart
		var option = {
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC-OMSSS) chartFour_${new Date()
							.toISOString()
							.slice(0, 10)}_average_rating_of_evaluated_appointments`,
					},
				},
			},
			xAxis: {
				type: 'category',
				data: chartData.map(function (item) {
					return item.name
				}),
			},
			yAxis: {
				type: 'value',
			},
			tooltip: {
				trigger: 'axis',
			},
			series: [
				{
					type: 'line', // Use line chart instead of bar chart
					data: chartData.map(function (item) {
						return item.value
					}),
				},
			],
		}

		chartNumberFour.setOption(option)
	})
}

chartFive = () => {
	var chartNumberFive = echarts.init(document.getElementById('chartNumberFive'))
	var colorPalette = ['#00A5E3', '#4DD091']

	$.ajax({
		type: 'GET',
		cache: false,
		url:
			apiURL + 'omsss/pup_staff/evaluation_analytics/number_of_is_evaluated_by_consultation_type',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data

		var chartData = data.map(function (item) {
			return {
				value: parseInt(item.number_of_evaluated_appointments),
				name: item.consultation_type,
			}
		})

		var option = {
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC-OMSSS) chartFive_${new Date()
							.toISOString()
							.slice(0, 10)}_number_of_is_evaluated_by_consultation_type`,
					},
				},
			},
			tooltip: {
				trigger: 'item',
			},
			legend: {
				top: '5%',
				left: 'center',
			},
			series: [
				{
					color: colorPalette,
					type: 'pie',
					radius: ['50%', '70%'],
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					label: {
						show: false,
						position: 'center',
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData,
				},
			],
		}
		chartNumberFive.setOption(option)
	})
}
