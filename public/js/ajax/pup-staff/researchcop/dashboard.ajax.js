$(function () {
	charts()
})

charts = () => {
	chartOne()
	chartTwo()
	chartThree()
	chartFour()
	chartFive()
	chartSix()

	donutOne()
	donutTwo()
	donutThree()
	donutFour()

}

chartOne = () => {
	var chartNumberOne = document.getElementById('chartOne')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchUpload

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberOne.innerHTML = htmlContent
	})
}

chartTwo = () => {
	var chartNumberTwo = document.getElementById('chartTwo')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchApproved

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberTwo.innerHTML = htmlContent
	})
}

chartThree = () => {
	var chartNumberThree = document.getElementById('chartThree')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchRejected

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberThree.innerHTML = htmlContent
	})
}

chartFour = () => {
	var chartNumberFour = document.getElementById('chartFour')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchPending

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberFour.innerHTML = htmlContent
	})
}

chartFive = () => {
	var chartNumberFive = document.getElementById('chartFive')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/copyrightcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.copyright_count.copyrightReview

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberFive.innerHTML = htmlContent
	})
}

chartSix = () => {
	var chartNumberSix = document.getElementById('chartSix')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/copyrightcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.copyright_count.copyrightApproved

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberSix.innerHTML = htmlContent
	})
}

donutOne = () => {
	var donutOne = echarts.init(document.getElementById('donutChartOne'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/programcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.program_count

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
				text: 'Research Programs',
				subtext: 'All Programs',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) donutOne_${new Date().toISOString().slice(0, 10)}research_program_count`,
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
		donutOne.setOption(option)
	})
}

donutTwo = () => {
	var donutTwo = echarts.init(document.getElementById('donutChartTwo'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcapstonecharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.category_count

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
				text: 'Research Category',
				subtext: 'Research and Capstone',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) donutTwo_${new Date().toISOString().slice(0, 10)}research_category_count`,
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
		donutTwo.setOption(option)
	})
}

donutThree = () => {
	var donutThree = echarts.init(document.getElementById('donutChartThree'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchstatuscharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.researchstatus_count

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
				text: 'Research Statuses',
				subtext: 'All Researches',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) donutThree_${new Date().toISOString().slice(0, 10)}research_status_count`,
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
		donutThree.setOption(option)
	})
}

donutFour = () => {
	var donutFour = echarts.init(document.getElementById('donutChartFour'))

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/copyrightstatuscharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.copyrightstatus_count

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
				text: 'Copyright Statuses',
				subtext: 'All Researches',
				left: 'center',
			},
			toolbox: {
				show: true,
				feature: {
					saveAsImage: {
						show: true,
						title: 'Save as Image',
						name: `(myPUPQC) donutFour_${new Date().toISOString().slice(0, 10)}copyright_status_count`,
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
		donutFour.setOption(option)
	})
}
