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
