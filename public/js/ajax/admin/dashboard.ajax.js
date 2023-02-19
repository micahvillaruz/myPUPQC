$(function () {
	setInterval(updateClock, 1000)
	quoteAPI()
	charts()
})

// Analog Clock
function updateClock() {
	var now = moment(),
		second = moment().seconds() * 6,
		minute = moment().minutes() * 6 + second / 60,
		hour = ((moment().hours() % 12) / 12) * 360 + 90 + minute / 12

	$('#hour').css('transform', 'rotate(' + hour + 'deg)')
	$('#minute').css('transform', 'rotate(' + minute + 'deg)')
	$('#second').css('transform', 'rotate(' + second + 'deg)')
}

// Digital Clock
setInterval(() => {
	// Get clock containers
	var clockDate = $('#clockDate')
	var clockTime = $('#clockTime')
	var clockSession = $('#clockSession')

	// Get formatted date, time, and session values
	const clockDateVal = moment().format('dddd, MMMM D, YYYY')
	const clockTimeVal = moment().format('h:mm:ss')
	const clockSessionVal = moment().format('A')

	// Set or display formatted clock to the containers
	// Change only the content if not equal to the current content for better performance
	if (clockDate.html() != clockDateVal) clockDate.html(clockDateVal)
	if (clockTime.html() != clockTimeVal) clockTime.html(clockTimeVal)
	if (clockSession.html() != clockSessionVal) clockSession.html(clockSessionVal)
}, 1) // Digital Clock

quoteAPI = () => {
	$.ajax({
		type: 'GET',
		url: `https://quotes.rest/qod?category=inspire&language=en`,
		success: (result) => {
			let quote = result.contents.quotes[0].quote
			let author = result.contents.quotes[0].author

			$('#quote').html(quote)
			$('#author').html(author)
		},
	})
}

charts = () => {
	chartOne()
	chartTwo()
	chartThree()
	chartFour()
	chartFive()
	chartSix()
	chartSeven()
	chartEight()
	chartNine()
	chartTen()
	chartAppointment()
	chartRequest()
	chartReservation()
	finalChart()
}

chartOne = () => {
	var chartNumberOne = document.getElementById('chartNumberOne')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.user_count.all

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">All Users</p>`

		chartNumberOne.innerHTML = htmlContent
	})
}

chartTwo = () => {
	var chartNumberTwo = document.getElementById('chartNumberTwo')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.user_count.student

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">All Students</p>`

		chartNumberTwo.innerHTML = htmlContent
	})
}

chartThree = () => {
	var chartNumberThree = document.getElementById('chartNumberThree')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.user_count.pup_staff

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">All PUP Staff</p>`

		chartNumberThree.innerHTML = htmlContent
	})
}

chartFour = () => {
	var chartNumberFour = echarts.init(document.getElementById('chartNumberFour'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_region_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.region_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'User Region Count',
				subtext: 'All Users',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartFour_${new Date().toISOString().slice(0, 10)}user_region_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c} ({d}%)',
			},
			series: [
				{
					type: 'pie',
					radius: ['50%', '70%'],
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.sort((a, b) => b.value - a.value),
				},
			],
		}

		// Set options to chart
		chartNumberFour.setOption(option)
	})
}

chartFive = () => {
	var chartNumberFive = echarts.init(document.getElementById('chartNumberFive'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_blacklist_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.blacklist_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'User Blacklist Count',
				subtext: 'All Users',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartFive_${new Date().toISOString().slice(0, 10)}user_region_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c} ({d}%)',
			},
			series: [
				{
					type: 'pie',
					radius: ['50%', '70%'],
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.sort((a, b) => b.value - a.value),
				},
			],
		}

		// Set options to chart
		chartNumberFive.setOption(option)
	})
}

chartSix = () => {
	var chartNumberSix = echarts.init(document.getElementById('chartNumberSix'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/user_role_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.role_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'User Roles Count',
				subtext: 'All Users',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartSix_${new Date().toISOString().slice(0, 10)}user_region_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c} ({d}%)',
			},
			series: [
				{
					type: 'pie',
					radius: ['50%', '70%'],
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.sort((a, b) => b.value - a.value),
				},
			],
		}

		// Set options to chart
		chartNumberSix.setOption(option)
	})
}

chartSeven = () => {
	var chartNumberSeven = echarts.init(document.getElementById('chartNumberSeven'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/announcement_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.announcement_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'Announcement Count',
				subtext: 'All Users',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartSix_${new Date().toISOString().slice(0, 10)}user_region_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c} ({d}%)',
			},
			series: [
				{
					type: 'pie',
					radius: ['50%', '70%'],
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.sort((a, b) => b.value - a.value),
				},
			],
		}

		// Set options to chart
		chartNumberSeven.setOption(option)
	})
}

chartEight = () => {
	var chartNumberEight = document.getElementById('chartNumberEight')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/all_system_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.health_appointment_count

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">Appointments</p>`

		chartNumberEight.innerHTML = htmlContent
	})
}

chartNine = () => {
	var chartNumberNine = document.getElementById('chartNumberNine')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/all_system_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.request_count

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">Requests</p>`

		chartNumberNine.innerHTML = htmlContent
	})
}

chartTen = () => {
	var chartNumberTen = document.getElementById('chartNumberTen')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/all_system_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.reservation_count

		const numberOfUsers = parseInt(data)
		const htmlContent = `<div class="number"><h1 class="display-1 text-primary">${numberOfUsers}</h1></div><p class="fs-5 text-center font-italic">Reservations</p>`

		chartNumberTen.innerHTML = htmlContent
	})
}

chartAppointment = () => {
	var chartAppointment = echarts.init(document.getElementById('chartAppointment'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/three_year_appointment_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.three_year_appointment_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'Appointment Count',
				subtext: 'All Appoinments for the past 3 years',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartAppointment_${new Date()
							.toISOString()
							.slice(0, 10)}_appointment_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c}',
			},
			xAxis: {
				type: 'category',
				data: chartData.map((data) => data.name),
			},
			yAxis: {
				type: 'value',
			},
			series: [
				{
					type: 'bar',
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.map((data) => data.value),
				},
			],
		}

		// Set options to chart
		chartAppointment.setOption(option)
	})
}

chartRequest = () => {
	var chartRequest = echarts.init(document.getElementById('chartRequest'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/three_year_request_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.three_year_request_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'Request Count',
				subtext: 'All Requests for the past 3 years',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartRequest_${new Date().toISOString().slice(0, 10)}_request_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c}',
			},
			xAxis: {
				type: 'category',
				data: chartData.map((data) => data.name),
			},
			yAxis: {
				type: 'value',
			},
			series: [
				{
					type: 'bar',
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.map((data) => data.value),
				},
			],
		}

		// Set options to chart
		chartRequest.setOption(option)
	})
}

chartReservation = () => {
	var chartReservation = echarts.init(document.getElementById('chartReservation'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/three_year_reservation_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.three_year_reservation_count

		// Convert data object to array of objects
		const chartData = Object.entries(data).map(([name, value], index) => {
			return {
				value: value,
				name: name,
			}
		})

		// Create options object for chart
		const option = {
			title: {
				text: 'Reservation Count',
				subtext: 'All Reservation for the past 3 years',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chartReservation_${new Date()
							.toISOString()
							.slice(0, 10)}_reservation_count`,
					},
				},
			},
			legend: {
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			tooltip: {
				trigger: 'item',
				formatter: '<b>{b}</b>: {c}',
			},
			xAxis: {
				type: 'category',
				data: chartData.map((data) => data.name),
			},
			yAxis: {
				type: 'value',
			},
			series: [
				{
					type: 'bar',
					itemStyle: {
						borderRadius: 10,
						borderColor: '#fff',
						borderWidth: 2,
					},
					emphasis: {
						label: {
							show: true,
							fontSize: 16,
							fontWeight: 'bold',
						},
					},
					data: chartData.map((data) => data.value),
				},
			],
		}

		// Set options to chart
		chartReservation.setOption(option)
	})
}

finalChart = () => {
	var finalChart = echarts.init(document.getElementById('finalChart'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'super_admin/analytics/three_year_all_system_count',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data

		// Get the unique years from the data
		const years = Array.from(
			new Set(
				Object.keys(data.health_appointment_count)
					.concat(Object.keys(data.request_count))
					.concat(Object.keys(data.reservation_count)),
			),
		)

		// Sort the years in ascending order
		years.sort()

		// Get the counts for each year for each type
		const healthAppointmentCounts = years.map((year) => data.health_appointment_count[year] || 0)
		const requestCounts = years.map((year) => data.request_count[year] || 0)
		const reservationCounts = years.map((year) => data.reservation_count[year] || 0)

		// Create options object for chart
		const option = {
			title: {
				text: 'System Count Comparison by Year',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) chart`,
					},
				},
			},
			tooltip: {
				trigger: 'axis',
				axisPointer: {
					type: 'shadow',
				},
				formatter: '{b}<br/>{a0}: {c0}<br/>{a1}: {c1}<br/>{a2}: {c2}',
			},
			legend: {
				data: ['Health Appointment', 'Request', 'Reservation'],
				orient: 'vertical',
				left: 'left',
				scroll: true,
			},
			xAxis: {
				type: 'category',
				data: years,
				axisLabel: {
					interval: 0,
					rotate: 45,
				},
			},
			yAxis: {
				type: 'value',
			},
			series: [
				{
					name: 'Health Appointment',
					type: 'bar',
					data: healthAppointmentCounts,
				},
				{
					name: 'Request',
					type: 'bar',
					data: requestCounts,
				},
				{
					name: 'Reservation',
					type: 'bar',
					data: reservationCounts,
				},
			],
		}

		// Set options to chart
		finalChart.setOption(option)
	})
}
